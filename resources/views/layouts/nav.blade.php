<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    @if(auth()->user()->role == "manager")
    <a class="navbar-brand" href="/admin/dashboard" id="dashboard">Dashboard</a>
    @endif
    @if(auth()->user()->role == "teller")
    <a class="navbar-brand" href="/admin/user/pipeline" id="dashboard">Dashboard</a>
    @endif
    @if(auth()->user()->role != "manager" && auth()->user()->role != "teller")
    <a class="navbar-brand" href="/admin/panel" id="dashboard">Dashboard</a>
    @endif
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      @auth
      @if(auth()->user()->role == "manager" || auth()->user()->role == "teller")
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Customers
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/admin/dashboard/customers">New Customers</a></li>
            <li><a class="dropdown-item" href="/admin/dashboard/pipeline">Pipeline</a></li>
            <li><a class="dropdown-item" href="/admin/dashboard/activities">Activities</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Reports
          </a>
          <ul class="dropdown-menu">
            @auth
            @if(auth()->user()->role == "manager")
            <li><a class="dropdown-item" href="/admin/dashboard/activities/report">Activities Report</a></li>
            <li><a class="dropdown-item" href="/admin/dashboard/product/report">Product Sold Report</a></li>
            <li><a class="dropdown-item" href="/admin/dashboard/summary/activities">Summary Activities Report</a></li>
            <li><a class="dropdown-item" href="/admin/dashboard/summary/product/sold">Summary Product Sold Report</a></li>
            @endif
            @endauth
            <li><a class="dropdown-item" href="/admin/dashboard/complain">Complain</a></li>
          </ul>
        </li>
        @endif
      @endauth
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
            @auth
            @if(auth()->user()->role == "manager")
            <li><a class="dropdown-item" href="/admin/dashboard/teamlist">Team List</a></li>
            @endif
            @endauth
            <li><a class="dropdown-item" href="/admin/dashboard/profile">Profile</a></li>
            <li><a class="dropdown-item" href="/admin/dashboard/logout">Logout</a></li>
          </ul>
        </li>
      </ul>

    </div>
  </div>
</nav>