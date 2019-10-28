@extends("theme.$theme.layout")

@section('titulo')
    Actividades
@endsection

@section('styles')
    <!-- fullCalendar -->
    <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fullcalendar/core/main.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fullcalendar/daygrid/main.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fullcalendar/timegrid/main.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fullcalendar/list/main.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fullcalendar/bootstrap/main.min.css")}}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  {{-- <link rel="stylesheet" href="/resources/demos/style.css"> --}}
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{asset("assets/$theme/plugins/daterangepicker/daterangepicker.css")}}">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{asset("assets/$theme/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}">
@endsection

@section('contenidoHeader')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Actividades</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Actividades</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
@endsection

@section('contenido')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <!-- /.card -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Búsqueda</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item nav-link">
                                <div class="form-group">
                                    <label>Asignatura</label>
                                    <select class="form-control select2" style="width: 100%;">


                                        <option selected="selected">Todas las asignaturas</option>
                                        <option>Matemática</option>
                                        <option>Física</option>
                                    </select>
                                </div>
                            </li>
                            <li class="nav-item nav-link">
                                <div class="form-group">
                                    <label>Curso</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Todos los cursos</option>
                                        <option>1° A</option>
                                        <option>2° C</option>
                                    </select>
                                </div>
                            </li>

                            <div class="form-group" align="center">
                                <button class="btn btn-primary" value="Buscar" >
                                    <i class="ace-icon fa fa-search bigger-110"></i>
                                    Buscar
                                </button>
                            </div>

                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card card-primary">
                    <div class="card-body p-0">
                        <!-- THE CALENDAR -->
                        <div id="calendar">

                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->

    <form action="/actividades/store" method="post">
        {{ csrf_field() }}
        <div class="modal fade" id="mdlEvent">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Crear nueva actividad</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12 text-right" >
                            <form>
                                <div class="form-group row">
                                    <label for="titulo" class="col-sm-2 col-form-label">Título</label>
                                    <div class="col-sm-10">
                                        <input autocomplete="off" required="true" placeholder="Título de la actividad" type="text" name="titulo" id="titulo" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fechas" class="col-sm-2 col-form-label">Inicio - Fin</label>
                                    <div class="input-group col-sm-10">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-clock"></i></span>
                                        </div>
                                        <input type="text" class="form-control float-right" name="fechas" id="fechas">
                                    </div>
                                </div>
                                <div class="form-group row">
                                      <label for="detalle" class="col-sm-2 col-form-label">Detalle</label>
                                      <div class="col-sm-10">
                                        <textarea class="form-control" name="descripcion" id="descripcion" rows="3" placeholder="Detalle de la actividad"></textarea>
                                      </div>
                                </div>
                                <div class="form-group row">
                                    <label for="detalle" class="col-sm-2 col-form-label">Color</label>
                                    <div class="btn-group col-sm-10" style="width: 100%; margin-bottom: 10px;">
                                            <ul class="fc-color-picker" id="color-chooser">
                                                <li><a class="text-primary" href="#"><i class="fas fa-square"></i></a></li>
                                                <li><a class="text-warning" href="#"><i class="fas fa-square"></i></a></li>
                                                <li><a class="text-success" href="#"><i class="fas fa-square"></i></a></li>
                                                <li><a class="text-danger" href="#"><i class="fas fa-square"></i></a></li>
                                                <li><a class="text-muted" href="#"><i class="fas fa-square"></i></a></li>
                                            </ul>
                                            <input type="hidden" name="tipo" id="tipo">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" id="cancelar"class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" id="add-new-event" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
                  <!-- /.modal-content -->
            </div>
                <!-- /.modal-dialog -->
        </div>
    </form>

    {{-- Formulario para eliminar actividad --}}
    {!! Form::open(['id' => 'form-delete', 'method' => 'DELETE']) !!}
    {!! Form::close() !!}

    {{-- Modal update --}}
    <form action="/actividades/update" method="post">
        {{ csrf_field() }}
    <div id="modal-event" class="modal fade" tabindex="-1" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Detalles de la actividad</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12 text-right" >
                        {{-- {!! Form::open(['id' => 'form-update', 'method' => 'POST']) !!} --}}
                            <div class="form-group row">
                                <label for="titulo" class="col-sm-2 col-form-label">Título</label>
                                <div class="col-sm-10">
                                    <input autocomplete="off" required="true" placeholder="Título de la actividad" type="text" name="titulo" id="titulo" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fechas_update" class="col-sm-2 col-form-label">Inicio - Fin</label>
                                <div class="input-group col-sm-10">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                                    </div>
                                    <input type="text" class="form-control float-right" name="fechas_update" id="fechas_update">
                                </div>
                            </div>
                            <div class="form-group row">
                                  <label for="detalle" class="col-sm-2 col-form-label">Detalle</label>
                                  <div class="col-sm-10">
                                    <textarea class="form-control" name="descripcion" id="descripcion" rows="3" placeholder="Detalle de la actividad"></textarea>
                                  </div>
                            </div>
                            <div class="form-group row">
                                <label for="detalle" class="col-sm-2 col-form-label">Color</label>
                                <div class="btn-group col-sm-10" style="width: 100%; margin-bottom: 10px;">
                                        <ul class="fc-color-picker" id="color-chooser">
                                            <li><a class="text-primary" href="#"><i class="fas fa-square"></i></a></li>
                                            <li><a class="text-warning" href="#"><i class="fas fa-square"></i></a></li>
                                            <li><a class="text-success" href="#"><i class="fas fa-square"></i></a></li>
                                            <li><a class="text-danger" href="#"><i class="fas fa-square"></i></a></li>
                                            <li><a class="text-muted" href="#"><i class="fas fa-square"></i></a></li>
                                        </ul>
                                        <input type="hidden" name="tipo2" id="tipo2">
                                        <input type="hidden" name="id_actividad" id="id_actividad">
                                </div>
                            </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <div class="col-9">
                        <button type="button" id="cancelar2" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                    </div>
                    <div class="col-4">
                        <a id="boton-delete" data-href="{{url('eventos')}}" data-id=" " class="btn btn-danger delete-record">Eliminar</a>
                        <button type="submit" id="update-event" class="btn btn-primary">Actualizar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form


@endsection

@section('scripts')
    <!-- jQuery UI -->
    <script src="{{asset("assets/$theme/plugins/jquery-ui/jquery-ui.min.js")}}"></script>
    <!-- fullCalendar 2.2.5 -->
    <script src="{{asset("assets/$theme/plugins/fullcalendar/core/locales/es.js")}}"></script>

    {{-- <script src='http://fullcalendar.io/js/fullcalendar-2.1.1/fullcalendar.min.js'></script> --}}


    <script src="{{asset("assets/$theme/plugins/fullcalendar/core/main.min.js")}}"></script>
    <script src="{{asset("assets/$theme/plugins/fullcalendar/daygrid/main.min.js")}}"></script>
    <script src="{{asset("assets/$theme/plugins/fullcalendar/timegrid/main.min.js")}}"></script>
    <script src="{{asset("assets/$theme/plugins/fullcalendar/interaction/main.min.js")}}"></script>
    <script src="{{asset("assets/$theme/plugins/fullcalendar/list/main.min.js")}}"></script>
    <script src="{{asset("assets/$theme/plugins/fullcalendar/bootstrap/main.min.js")}}"></script>
    <!-- date-range-picker -->
    <script src="{{asset("assets/$theme/plugins/daterangepicker/daterangepicker.js")}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset("assets/$theme/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")}}"></script>

    <!-- Calendario -->
    <script>
        $(function () {
            /* ADDING EVENTS */
            var currColor = '#3c8dbc' //Red by default
            document.getElementById('tipo').value = currColor;
            //Color chooser button
            var colorChooser = $('#color-chooser-btn')
            $('#color-chooser > li > a').click(function (e) {

                e.preventDefault()
                //Save color

                currColor = $(this).css('color')
                document.getElementById('tipo2').value = currColor;
                document.getElementById('tipo').value = currColor;
                //Add color effect to button
                $('#add-new-event').css({
                    'background-color': currColor,
                    'border-color'    : currColor
                })
                $('#update-event').css({
                    'background-color': currColor,
                    'border-color'    : currColor
                })
            });

            /* initialize the calendar
            -----------------------------------------------------------------*/
            //Date for the calendar events (dummy data)
            var date = new Date()
            var d    = date.getDate(),
                m    = date.getMonth(),
                y    = date.getFullYear()

            var Calendar = FullCalendar.Calendar;
            var calendarEl = document.getElementById('calendar');

            var calendar = new Calendar(calendarEl, {

                locale: 'es',
                plugins: [ 'bootstrap', 'interaction', 'dayGrid', 'timeGrid', 'list'],

                // Cabecera del calendario
                header    : {
                    left  : 'prev,next today',
                    center: 'title',
                    right : 'dayGridMonth,timeGridWeek,timeGridDay,listDay'
                },

                //Se obtienen los eventos
                events: '/actividades/get',

                dateClick: function(info) {
                    $("#fechas").daterangepicker({
                        timePicker: true,
                        timePicker24Hour: true,
                        timePickerIncrement: 15,
                        "startDate": info.dateStr,
                        "endDate": info.dateStr,
                        locale: {
                            format: 'YYYY-MM-DD hh:mm',
                            //Traducción
                            "separator": " - ",
                            "applyLabel": "Aplicar",
                            "cancelLabel": "Cancelar",
                            "fromLabel": "DE",
                            "toLabel": "HASTA",
                            "customRangeLabel": "Custom",
                            "daysOfWeek": [
                                "Dom",
                                "Lun",
                                "Mar",
                                "Mie",
                                "Jue",
                                "Vie",
                                "Sáb"
                            ],
                            "monthNames": [
                                "Enero",
                                "Febrero",
                                "Marzo",
                                "Abril",
                                "Mayo",
                                "Junio",
                                "Julio",
                                "Agosto",
                                "Septiembre",
                                "Octubre",
                                "Noviembre",
                                "Diciembre"
                            ],
                            "firstDay": 1
                        }
                      //  defaultDate: new Date(info.dateStr+' 00:00 - '+info.dateStr+' 00:00'),
                    }),
                    $("#mdlEvent").modal();


                },

                eventClick: function(info){
                    console.log(info.event);
                    var fechafin;
                    if((info.event.end!=null)){
                        fechafin = info.event.end;
                    }else{
                        fechafin = info.event.start;
                    }
                    $("#fechas_update").daterangepicker({
                        timePicker: true,
                        timePicker24Hour: true,
                        timePickerIncrement: 15,
                        "startDate": info.event.start,
                        "endDate": fechafin,
                        locale: {
                            format: 'YYYY-MM-DD hh:mm',
                            //Traducción
                            "separator": " - ",
                            "applyLabel": "Aplicar",
                            "cancelLabel": "Cancelar",
                            "fromLabel": "DE",
                            "toLabel": "HASTA",
                            "customRangeLabel": "Custom",
                            "daysOfWeek": [
                                "Dom",
                                "Lun",
                                "Mar",
                                "Mie",
                                "Jue",
                                "Vie",
                                "Sáb"
                            ],
                            "monthNames": [
                                "Enero",
                                "Febrero",
                                "Marzo",
                                "Abril",
                                "Mayo",
                                "Junio",
                                "Julio",
                                "Agosto",
                                "Septiembre",
                                "Octubre",
                                "Noviembre",
                                "Diciembre"
                            ],
                            "firstDay": 1
                        }
                      //  defaultDate: new Date(info.dateStr+' 00:00 - '+info.dateStr+' 00:00'),
                    }),
                    console.log(info.event);
                    $('#boton-delete').attr('data-id', info.event.id);
                    $('#modal-event #titulo').val(info.event.title);
                    $('#modal-event #descripcion').val(info.event._def.extendedProps.descripcion);
                    $('#modal-event #tipo2').val(info.event.borderColor);
                    // $('#modal-event #_time_start').val(time_start);
                    // $('#modal-event #_date_end').val(date_end);
                    // $('#modal-event #_color').val(event.color);
                   // $id = info.event.id;
                    $('#update-event').css({
                        'background-color': info.event.borderColor,
                        'border-color'    : info.event.borderColor
                    })
                    $('#modal-event #id_actividad').val(info.event.id);
                    $('#modal-event').modal('show');
                }

            });
            calendar.render();
        })

        // Eliminar actividad
        $(document).on('click','a.delete-record', function(){
            event.preventDefault();
            var actividad = $('#modal-event #titulo').val();
            // alert(actividad);
            var x = $(this);
            var delete_url = x.attr('data-href')+'/'+x.attr('data-id');

            Swal.fire({
                title: '¿Estás seguro de eliminar la actividad '+actividad+'?',
                text: "Los datos no podrán ser recuperados!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: 'DELETE',
                        url: delete_url,
                        data: $('#form-delete').serialize(),
                        success: function (data) {
                                $("#modal-event").modal('hide');
                                // if ($(this).data('id') == data.id) {
                                //     $(this).fadeOut();
                                // }
                                Swal.fire(
                                    'Eliminado!',
                                    'La actividad se ha eliminado satisfactoriamente.',
                                    'success'
                                );
                                setTimeout(location.reload.bind(location), 1500);

                        },
                        error: function () {
                            toastr.error('Error, intente más tarde');
                        }
                    });
                }
            });
        });
    </script>
@endsection
