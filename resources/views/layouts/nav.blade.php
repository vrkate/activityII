<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('root') }}">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="{{ route('products.index') }}">
            <span data-feather="shopping-cart"></span>
            Products
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('users.index') }}">
            <span data-feather="shopping-cart"></span>
            Users
          </a>
        </li>
        
      </ul>

    </div>
  </nav>