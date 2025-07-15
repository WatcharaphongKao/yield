  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">
          <li class="nav-item ">
              <a class="nav-link {{ Request::is('dashboard_report') ? '' : ' collapsed' }}"
                  href="{{ url('/dashboard_report') }}">
                  <i class="bi bi-clipboard2-data"></i>
                  <span>Dashboard Report</span>
              </a>
          </li>
          <li class="nav-item ">
              <a class="nav-link {{ Request::is('yield') ? '' : ' collapsed' }}" href="{{ url('yield') }}">
                  <i class="bi bi-journal-text"></i>
                  <span>Yield</span>
              </a>
          </li>
      </ul>

  </aside><!-- End Sidebar-->
