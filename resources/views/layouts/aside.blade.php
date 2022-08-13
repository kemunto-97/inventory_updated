<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="{{ asset('img/logo-ct-dark.png') }}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">INVENT</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($title=='Home') ? 'active':'' }}" href="{{ url('/home') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title=='Profile') ? 'active':'' }}" href="{{ url('/profile') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <hr class="horizontal dark mt-0">
       
        <li class="nav-item">
          <a class="nav-link {{ ($title=='Payments') ? 'active':'' }}" href="{{ url('/payments') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Payments</span>
          </a>
        </li>
        <hr class="horizontal dark mt-0">
        
        <li class="nav-item">
          <a class="nav-link {{ ($title=='Orders') ? 'active':'' }}" href="{{ url('/orders') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-delivery-fast text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Orders</span>
          </a>
        </li>
        <hr class="horizontal dark mt-0">
      
        <li class="nav-item">
          <a class="nav-link {{ ($title=='Expenses') ? 'active':'' }}" href="{{ url('/expenses') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-money-coins text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Expenses</span>
          </a>
        </li>
        <hr class="horizontal dark mt-0">

        <li class="nav-item">
          <a class="nav-link {{ ($title=='Customers') ? 'active':'' }}" href="{{ url('/customers') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Customers</span>
          </a>
        </li>
        <hr class="horizontal dark mt-0">
        
        <li class="nav-item">
          <a class="nav-link {{ ($title=='Products') ? 'active':'' }}" href="{{ url('/products') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-cart text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Products</span>
          </a>
        </li>
        <hr class="horizontal dark mt-0">

        <li class="nav-item">
          <a class="nav-link {{ ($title=='Invoices') ? 'active':'' }}" href="{{ url('/invoices') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-archive-2 text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Invoices</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>