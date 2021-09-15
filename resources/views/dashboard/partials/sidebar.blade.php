<div class="sidebar" data-color="purple" data-background-color="white" >

  <div class="logo"><a href="#" class="simple-text logo-normal">
      Larablog 
    </a></div>
  <div class="sidebar-wrapper">
    <ul class="nav">

      <li class="nav-item {{ Request::path() == 'dashboard/user' ? 'active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">person</i>
          <p>Usuarios</p>
        </a>
      </li>
      <li class="nav-item {{ Request::path() == 'dashboard/category' ? 'active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">list</i>
          <p>Categorias</p>
        </a>
      </li>
      <li class="nav-item {{ Request::path() == 'dashboard/post' ? 'active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">insert_drive_file</i>
          <p>Posts</p>
        </a>
      </li>
      
    </ul>
  </div>
</div>