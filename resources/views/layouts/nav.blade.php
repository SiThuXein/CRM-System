<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/admin/dashboard" id="dashboard">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sales
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/admin/dashboard/pipeline">Pipeline</a></li>
            <li><a class="dropdown-item" href="/admin/dashboard/activities">Activities</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Reports
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/admin/dashboard/activities/report">Activities Report</a></li>
            <li><a class="dropdown-item" href="/admin/dashboard/product/report">Product Sold Report</a></li>
            <li><a class="dropdown-item" href="/admin/dashboard/summary/activities">Summary Activities Report</a></li>
            <li><a class="dropdown-item" href="/admin/dashboard/summary/product/sold">Summary Product Sold Report</a></li>
            <li><a class="dropdown-item" href="/admin/dashboard/complain">Complain</a></li>
          </ul>
        </li>
    
      </ul>


      <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="profile">
        <!-- <li>
          <h6 class="text-white fw-bold fs-6">
         
          </h6>

        </li> -->
        <li class="nav-item dropdown" id=""list2>
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            @if(session("username"))
              {{ session("username") }}
            @endif
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/admin/dashboard/teamlist">Team List</a></li>
          </ul>
        </li>
    
      </ul>

    </div>
  </div>
</nav>