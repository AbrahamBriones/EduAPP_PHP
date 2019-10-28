@extends("theme.$theme.layout")

@section('titulo')
    Notas
@endsection

@section('contenidoHeader')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Registro de Notas</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Notas</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
@endsection

@section('contenido')
<div class="container-fluid">

        <!--Formulario de búsqueda-->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Búsqueda</h3>
            </div>
            <div class="card-body">
                <form action="#" class="form-inline justify-content-left">

                    <div class="form-group">
                      <label for="periodo">Periodo &nbsp</label>
                      <select class="form-control-sm item" id="periodo" >
                          <option>Semestre 1</option>
                          <option>Semestre 2</option>
                      </select>
                    </div>

                    <div class="form-group">
                        <label for="periodo"> &nbsp &nbsp &nbsp Año &nbsp</label>
                        <select class="form-control-sm item" id="periodo" >
                            <option>2019</option>
                            <option>2018</option>
                        </select>
                      </div>

                    <div class="form-group">
                      <label for="curso"> &nbsp &nbsp &nbsp Curso &nbsp</label>
                      <select class="form-control-sm item" id="curso">
                          <option>---Seleccione Curso---</option>
                          <option>1° A</option>
                          <option>2° C</option>
                      </select>
                    </div>

                    <div class="form-group col-md-4">
                      <label for="asignatura">&nbsp &nbsp Asignatura &nbsp</label>
                      <select class="form-control-sm item" id="periodo" >
                          <option>---Seleccione Asignatura---</option>
                          <option>Matemática</option>
                          <option>Física</option>
                      </select>
                    </div>

                    <div>
                      <div>
                        <button class="btn btn-primary btn-block" type="submit"  style="width: 100px"><i class="ace-icon fa fa-search bigger-110"></i> Buscar</button>
                      </div>
                    </div>

                  </form>
            </div>
        </div>

        <div class="py-2"></div>
        <!--Tabla-->
        <div class="card mb-3">
          <div class="card-header d-flex justify-content-between align-items-center">

            <h3 class="card-title">Resumen de notas</h3>


            <div class="card-tools">
                <div class="input-group input-group-sm">

                  <div class="input-group-append">
                      <button type="button" class="btn btn-primary " style="width: 190px"><i class="fas fa-plus-square"></i> Agregar Evaluación</button>
                  </div>
                </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>N°</th>
                    <th>Apellidos</th>
                    <th>Nombre</th>
                    <th>Libro 1</th>
                    <th>Prueba 2</th>
                    <th>Prom</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Aguayo González</td>
                    <td>Jaime</td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota1" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota2" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota3" placeholder="6,5"/></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Chávez Heredia</td>
                    <td>Andrea</td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota1" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota2" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota3" placeholder="6,5"/></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Cortés Lagunes</td>
                    <td>Ruth</td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota1" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota2" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota3" placeholder="6,5"/></td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>de jesús Ramos</td>
                    <td>Ariana</td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota1" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota2" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota3" placeholder="6,5"/></td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Delgado Barrón</td>
                    <td>Luis</td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota1" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota2" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota3" placeholder="6,5"/></td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Espejo Ramos</td>
                    <td>Hansel</td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota1" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota2" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota3" placeholder="6,5"/></td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Flores Aguilar</td>
                    <td>Aniyensy</td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota1" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota2" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota3" placeholder="6,5"/></td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Flores Silva</td>
                    <td>Karla</td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota1" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota2" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota3" placeholder="6,5"/></td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>García Arreguín</td>
                    <td>Montserrat</td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota1" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota2" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota3" placeholder="6,5"/></td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>García Orozco</td>
                    <td>Lisset</td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota1" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota2" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota3" placeholder="6,5"/></td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>Gómez Vargas</td>
                    <td>José</td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota1" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota2" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota3" placeholder="6,5"/></td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>González Díaz</td>
                    <td>Rocio</td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota1" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota2" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota3" placeholder="6,5"/></td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>González Trejo</td>
                    <td>Cipriano</td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota1" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota2" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota3" placeholder="6,5"/></td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td>Guerrero Padrés</td>
                    <td>Miguel</td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota1" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota2" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota3" placeholder="6,5"/></td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td>Guillen Marin</td>
                    <td>Karina</td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota1" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota2" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota3" placeholder="6,5"/></td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td>Hernández González</td>
                    <td>Danna</td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota1" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota2" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota3" placeholder="6,5"/></td>
                  </tr>
                  <tr>
                    <td>17</td>
                    <td>Hernández Palacios</td>
                    <td>Jaime</td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota1" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota2" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota3" placeholder="6,5"/></td>
                  </tr>
                  <tr>
                    <td>18</td>
                    <td>Hernández Prado</td>
                    <td>Miguel</td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota1" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota2" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota3" placeholder="6,5"/></td>
                  </tr>
                  <tr>
                    <td>19</td>
                    <td>Herrera Arias</td>
                    <td>Luis</td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota1" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota2" placeholder="6,5"/></td>
                    <td align="center"><input style="width: 45px" type="number" min="1" max="7" step="0.1" name="nota3" placeholder="6,5"/></td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div><!-- /.container-fluid -->
@endsection
