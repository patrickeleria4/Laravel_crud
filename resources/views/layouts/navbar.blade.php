<nav class="navbar navbar-expand-lg " style="background-color: #33FFBD;">
    <div class="container">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page"  href="{{route('product.home')}}"><i class="fa-solid fa-house fa-xs"> Home</i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('product.index')}}"><i class="fa-solid fa-basket-shopping fa-xs"> Order</a></i>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('product.account')}}"><i class="fa-solid fa-user-tie fa-sm"> Account</a></i>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('product.setting')}}"><i class="fa-solid fa-users-gear fa-sm"> Settings</a></i>
          </li>

          
        </ul>
        <form action="{{ route('logout') }}" method="POST"  role="search">
          @csrf
          @method('DELETE')
   
      <button class="btn btn-outline-danger" type="submit"><i class="fa-solid fa-power-off fa-sm"> Logout</button></i>

    
  </form>
      </div>
    </div>
    
</nav>
    
          