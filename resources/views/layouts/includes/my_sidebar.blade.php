<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          @auth
          <img src="{{ asset('img/avatar06.png') }}" class="img-circle" alt="User Image">
          @endauth

          @guest
          <img src="{{ asset('img/avatar5.png') }}" class="img-circle" alt="User Image">
          @endguest

        </div>
        <div class="pull-left info">
          @auth
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          @endauth

          @guest
          <p>Invitado</p>
          <a href="#"><i class="fa fa-circle text-danger"></i> Offline</a>
          @endguest
          
        </div>
      </div>
      <!-- search form -->
      @auth
      
    <!--Validamos si es un Usuario Administrador-->
    

      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      @endauth
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        @auth
        <li class="header">MENU PRINCIPAL</li>
        @endauth
        
        @guest
        <li class="header">MENU INVITADO</li>
        @endguest
        
        @auth

        <li class="treeview {{ Request::is('capture*') ? 'active' : ''}}">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Capturas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::is('capture/create') ? 'active' : ''}}"><a href="{{ route('capture.create') }}"><i class="fa fa-plus"></i> Nueva Captura</a></li>
            <li class="{{ Request::is('capture') ? 'active' : ''}}"><a href="{{ route('capture.index') }}"><i class="fa fa-list"></i> Ultimas Capturas</a></li>
          </ul>
        </li>
          @if (Auth::user()->role == 'ADMIN')
        <li class="treeview {{ Request::is('establishments*') ? 'active menu-open' : ''}}">
          <a href="#">
            <i class="fa fa-home"></i> <span>Establecimientos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::is('establishments/sector') ? 'active' : ''}}"><a href="{{ route('sector.index') }}"><i class="fa fa-clone"></i>Sectores</a></li>

            <li class="{{ Request::is('establishments/lot') ? 'active' : ''}}"><a href="{{ route('lot.index') }}"><i class="fa fa-object-ungroup"></i>Lotes</a></li>

            <li class="{{ Request::is('establishments/plank') ? 'active' : ''}}"><a href="{{ route('plank.index') }}"><i class="fa fa-object-group"></i>Tablones</a></li>
          </ul>
        </li>

        <!-- Insumos -->
       
        @endif
        <li class="treeview {{ Request::is('pluviometry*') ? 'active' : ''}}">
          <a href="#">
            <i class="fa fa-umbrella"></i> <span>Pluviometria</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::is('pluviometry/create') ? 'active' : ''}}"><a href="{{ route('pluviometry.create') }}"><i class="fa fa-plus"></i> Insertar Pluviometria</a></li>
            <li class="{{ Request::is('pluviometry') ? 'active' : ''}}"><a href="{{ route('pluviometry.index') }}"><i class="fa fa-list"></i> Ultimos Registros</a></li>
          </ul>
        </li>        


        <li class="header">ACCIONES</li>
        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" ><i class="fa fa-bar-chart text-green"></i> <span>Ver Reportes</span></a></li>
        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" ><i class="fa fa-sign-out text-red"></i> <span>Cerrar Sesión</span></a></li>
        <li><a href="#"><i class="fa fa-user text-yellow"></i> <span>Ver Perfil</span></a></li>
        <form id="logout-form" 
                        action="{{ route('logout') }}" 
                        method="POST" 
                        style="display: none;">
                        {{ csrf_field() }}
                  </form>
       
        @endauth

        @guest

        <li><a href="{{ route('login') }}"><i class="fa fa-sign-in"></i> <span>Login</span></a></li>
        @endguest
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>