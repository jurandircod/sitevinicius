
    <!-- Navbar -->
    
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="https://www.umuarama.pr.gov.br/img/logoumuaramaBranco.svg" alt="Umuarama Logo" class="brand-image " style="opacity: .8">
        <span class="brand-text font-weight-light"><br></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <!--<img src="" class="img-circle elevation-2" alt="User Image">-->
          </div>
          <div class="info">
            <i class="fa-regular fa-user"></i> <a href="#" class="">Administrador</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <!--<div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>-->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="bi bi-calendar-day "></i>
                <p>
                  Agendar
                  <!--<i class="right fas fa-angle-left"></i>-->
                </p>
              </a>
              <!--<ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./index.html" class="nav-link">
                    <i class="bi bi-folder-plus nav-icon"></i>
                    <p>Adicionar locais</p>
                    <span class="right badge badge-danger">+</span>
                  </a>
                </li>
              </ul>-->
            </li>
            <li class="nav-item">
              <a href="pages/widgets.html" class="nav-link">
                <i class="bi bi-building-gear"></i>
                <p>
                  Agendamentos

                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa-regular fa-user"></i>
                <p>
                  usuarios

                </p>
              </a>

            </li>
            <!--  <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tree"></i>
                <p>
                  UI Elements
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/UI/general.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>General</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/UI/icons.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Icons</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/UI/buttons.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Buttons</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/UI/sliders.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sliders</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/UI/modals.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Modals & Alerts</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/UI/navbar.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Navbar & Tabs</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/UI/timeline.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Timeline</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/UI/ribbons.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ribbons</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-header">EXAMPLES</li></nav> -->


          </ul>

          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>




    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper  " data-widget="iframe" data-auto-dark-mode="true" data-loading-screen="750">

      <div class="tab-content mt-3">
        <div class="tab-empty">
          <?php include('../sitevinicius/app/view/agendar_cards.php');
          ?>
        </div>
      </div>
      
    </div>

    
 


