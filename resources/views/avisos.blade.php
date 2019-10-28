@extends("theme.$theme.layout")

@section('titulo')
    Avisos
@endsection

@section('contenidoHeader')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Avisos</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Avisos</li>
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
                            <div class="form-group"  >
                                <label>Año</label><br>
                                <input type="text" value="" id="anio" name="anio" style="width: 100%;" align="center" >
                            </div>
                        </li>

                        <li class="nav-item nav-link">
                            <div class="form-group" >
                                <label>Semestre</label>
                                <select class="form-control" style="width: 100%;" align="center">
                                <option disabled selected>Seleccione periodo</option>
                                <option>1</option>
                                <option>2</option>
                                </select>
                            </div>
                        </li>

                        <li class="nav-item nav-link">
                            <div class="form-group">
                                <label>Asignatura</label>
                                <select class="form-control " style="width: 100%;">
                                <option disabled selected >Todas las asignaturas</option>
                                <option>Matemática</option>
                                <option>Física</option>
                                <!--selected="selected"-->
                                </select>
                            </div>
                        </li>
                        
                        <li class="nav-item nav-link">
                            <div class="form-group">
                                <label>Curso</label>
                                <select class="form-control " style="width: 100%; align="center" ">
                                <option disabled selected>Todos los cursos</option>
                                <option>1° A</option>
                                <option>2° C</option>
                                </select>
                            </div>
                        </li>
                
                        <div class="form-group" align="center">
                            <button class="btn btn-primary" value="Buscar" >
                                <i class="ace-icon fa fa-search bigger-110"></i> Buscar</button>
                        </div>

                    </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>



            <!-- /.col -->
            <div class="col-md-9">
                <section id="tabs" class="project-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <nav>
                                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-ver-tab" data-toggle="tab" href="#nav-ver" role="tab" aria-controls="nav-home" aria-selected="true">Ver Enviados</a>
                                        <a class="nav-item nav-link" id="nav-enviar-tab" data-toggle="tab" href="#nav-enviar" role="tab" aria-controls="nav-profile" aria-selected="false">Enviar Avisos</a>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-ver" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="card card-primary card-outline">
                                            <div class="card-header">
                                                <h3 class="card-title">Avisos enviados</h3>

                                                <div class="card-tools">
                                                <div class="input-group input-group-sm">
                                                    <input type="text" class="form-control" placeholder="Buscar avisos">
                                                    <div class="input-group-append">
                                                    <div class="btn btn-primary">
                                                        <i class="fas fa-search"></i>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <!-- /.card-tools -->
                                            </div>



                                            <!-- /.card-header -->
                                            <div class="card-body p-0">
                                                <div class="mailbox-controls">
                                                <!-- Check all button -->
                                                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                                                </button>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                                                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
                                                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
                                                </div>
                                                <!-- /.btn-group -->
                                                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                                                <div class="float-right">
                                                    1-50/200
                                                    <div class="btn-group">
                                                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                                                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                                                    </div>
                                                    <!-- /.btn-group -->
                                                </div>
                                                <!-- /.float-right -->
                                                </div>
                                                <div class="table-responsive mailbox-messages">
                                                <table class="table table-hover table-striped">
                                                    <tbody>

                                                    @foreach($aviso as $av)   
                                                    <tr>
                                                    <td>
                                                        <div class="icheck-primary">
                                                        <input type="checkbox" value="" id="check1">
                                                        <label for="check1"></label>
                                                        </div>
                                                    </td>
                                                    <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                                    <td class="mailbox-name"><a href="read-mail.html">{{$av->nombre_apoderado}}
                                                    {{$av->apellido_apoderado}}  </a></td>
                                                    <td class="mailbox-subject"><b>EduAPP</b> {{$av->aviso}}
                                                    </td>
                                                    <td class="mailbox-attachment"></td>
                                                    <td class="mailbox-date"> {{$av->fecha}} </td>
                                                    </tr>
                                                    @endforeach 


                                                   

                                                    <!-- <tr>
                                                    <td>
                                                        <div class="icheck-primary">
                                                        <input type="checkbox" value="" id="check2">
                                                        <label for="check2"></label>
                                                        </div>
                                                    </td>
                                                    <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                                    <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                                    <td class="mailbox-subject"><b>EduAPP</b> - Este es un mensaje de prueba...
                                                    </td>
                                                    <td class="mailbox-attachment"></td>
                                                    <td class="mailbox-date">hace 28 min</td>
                                                    </tr>


                                                    <tr>
                                                    <td>
                                                        <div class="icheck-primary">
                                                        <input type="checkbox" value="" id="check3">
                                                        <label for="check3"></label>
                                                        </div>
                                                    </td>
                                                    <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                                    <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                                    <td class="mailbox-subject"><b>EduAPP</b> - Este es un mensaje de prueba...
                                                    </td>
                                                    <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                                    <td class="mailbox-date">hace 11 horas</td>
                                                    </tr> -->

                                                    </tbody>
                                                </table>
                                                <!-- /.table -->
                                                </div>
                                                <!-- /.mail-box-messages -->
                                            </div>
                                            <!-- /.card-body -->
                                            <div class="card-footer p-0">
                                                <div class="mailbox-controls">
                                                <!-- Check all button -->
                                                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                                                </button>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                                                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i></button>
                                                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i></button>
                                                </div>
                                                <!-- /.btn-group -->
                                                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i></button>
                                                <div class="float-right">
                                                    1-50/200
                                                    <div class="btn-group">
                                                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                                                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                                                    </div>
                                                    <!-- /.btn-group -->
                                                </div>
                                                <!-- /.float-right -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="tab-pane fade" id="nav-enviar" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <div class="card card-primary card-outline ">
                                            <div class="card-header d-flex justify-content-between align-items-center">
                                                <h3 class="card-title">Listado de Participantes</h3>
                                                <div class="card-tools">
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control" placeholder="Buscar participante">
                                                        <div class="input-group-append">
                                                            <div class="btn btn-primary">
                                                                <i class="fas fa-search"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-footer p-0">
                                                <div class="mailbox-controls">
                                                <!-- Check all button -->
                                                    <div class="float-right">
                                                    1-50/200
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                                                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                                                    </div>
                                                    <!-- /.btn-group -->
                                                    </div>
                                                    <center>Enviar aviso a todos los seleccionados:  <i class="ace-icon fa fa-envelope bigger-130 green" data-toggle="modal" data-target="#avisoModal" data-whatever="@getbootstrap"></i></center>
                                                    <!-- /.float-right -->
                                                </div>
                                            </div>

                                            <div class="card-body p-0">
                                                <div class="table-responsive ">

                                                    <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                                        <thead>
                                                        <tr>
                                                            <th>N°</th>
                                                            <th align="center"><input type="checkbox" id="cbox1" class="combo-box-ausencia" value="first_checkbox"></th>
                                                            <th>Apellido ALumno</th>
                                                            <th>Nombre ALumno</th>
                                                            <th>Apoderado</th>
                                                            <th>Acciones</th>
                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                       
                                                        <tr>
                                                            <td>1</td>
                                                            <td align="center"><input type="checkbox" id="cbox1" class="combo-box-ausencia" value="first_checkbox"></td>
                                                            <td>{{$apoderado->apellido_alumno}}</td>
                                                            <td>{{$apoderado->nombre_alumno}}</td>
                                                            <td>{{$apoderado->nombre_apoderado}}</td>
                                                            <td align="center"><i class="ace-icon fa fa-envelope bigger-130 green" data-toggle="modal" data-target="#avisoModal" data-whatever="@getbootstrap"></i></td>


                                                        </tr>
                                                       
                                                      
                                                    
                                                       
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- /.col -->
        </div>
    </div><!-- /.container-fluid -->


    <!--MensajesModal-->
    <div class="modal fade" id="avisoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Enviar aviso</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/guardarAviso" method="post">
                <div class="modal-body">

                   
                     
                    {{ csrf_field() }}
                      
                        <div class="form-group">
                            <label for="apoderado" class="col-form-label">Destinatarios: </label>
                            <!--id="recipient-name"-->
                             
                            <input type="text" value="{{$apoderado->nombre_apoderado}} {{$apoderado->apellido_apoderado}}" class="form-control" id="apoderado" name="apoderado" placeholder="Para:{{$apoderado->nombre_apoderado}} {{$apoderado->apellido_apoderado}}">
                          
                                <!-- <label>Destinatarios</label> -->
                                <!-- <select class="form-control " id="nombre" name="nombre" style="width: 100%;">
                                <option disabled selected >Seleccione un apoderado</option>
                                
                                <option value="{{$av->id_ap}}">{{$apoderado->nombre_apoderado}}  {{$apoderado->apellido_apoderado}}</option> -->
                                
                                <!--selected="selected"-->
                                <!-- </select> -->
                            
                        </div>
                        <div class="form-group">
                            <input id="nombre" name="nombre" type="hidden" value="{{$apoderado->id_ap}}">
                         </div>
                        <div class="form-group">
                            <label for="contenido" class="col-form-label">Mensaje:</label>
                             <!--id="message-text"-->
                            <textarea class="form-control" id="contenido" name="contenido"></textarea>
                        </div>
                   
                  

                    <div class="form-group">
                        <div class="btn btn-default btn-file">
                            <i class="fas fa-paperclip"></i> Adjuntar
                            <input type="file" name="attachment">
                        </div>
                        <p class="help-block">Max. 50MB</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Cerrar</button>
                    <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Enviar</button>
                    <!-- <a href="{{ route('obtenerAviso') }}"><button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Enviar</button></a> -->
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection

