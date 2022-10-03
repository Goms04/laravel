<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{% url 'parkingApp:home' %}" class="brand-link">
      <span class="brand-text font-weight-light">AdminLTE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('accueil') }}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Accueil
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{{ route('personne') }}}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Personnes
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('voiture') }}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Voitures
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('stationnement') }}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Stationnement
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
