  <!-- Main Sidebar Container Menu lateral-->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset("assets/$theme/dist/img/eduappLogo.png")}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">EduAPP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 ">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link ">
              <i>
                <img src="{{asset("assets/$theme/dist/img/profesor.png")}}" class="img-circle elevation-2" alt="User Image">
                <i> &nbsp; Oscar Andrade</i>
              </i>
              <p><i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="nav-icon fa fa-unlock-alt"></i>
                    <p>Cambio de clave</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="nav-icon fa fa-question"></i>
                    <p>Consultas</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link" data-toggle="modal" data-target="#logoutModal">
                  <i class="nav-icon fa fa-sign-out-alt"></i>
                    <p>Salir</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">MENÚ</li>

          <li class="nav-item">
              <a href="{{ route('inicio') }}" class="nav-link">
                <i class="nav-icon fa fa-home"></i>
                <p>
                  Inicio
                </p>
              </a>
          </li>

          <li class="nav-item">
              <a href="{{ route('notas') }}" class="nav-link">
                <i class="nav-icon fa fa-book"></i>
                <p>
                  Notas
                </p>
              </a>
          </li>

          <li class="nav-item">
              <a href="{{ route('anotaciones') }}" class="nav-link">
                <i class="nav-icon fa fa-clipboard"></i>
                <p>
                  Anotaciones
                </p>
              </a>
          </li>

          <li class="nav-item">
              <a href="{{ route('listarAviso') }}" class="nav-link">
                <i class="nav-icon fa fa-bullhorn"></i>
                <p>
                  Avisos
                </p>
              </a>
          </li>

          <li class="nav-item">
              <a href="{{ route('actividades') }}" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  Actividades
                </p>
              </a>
          </li>
        </ul>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿Está seguro que desea salir?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">No, deseo permanecer</button>
          <a class="btn btn-primary" href="login.html">Sí, estoy seguro</a>
        </div>
      </div>
    </div>
  </div><div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿Está seguro que desea salir?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">No, deseo permanecer</button>
          <a class="btn btn-primary" href="login.html">Sí, estoy seguro</a>
        </div>
      </div>
    </div>
  </div>
</div>
