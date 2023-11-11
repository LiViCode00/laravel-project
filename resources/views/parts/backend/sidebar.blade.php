<aside class="main-sidebar sidebar-dark-primary elevation-4">
   

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
           
            <div class="info">
                <a href="#" class="d-block">LiViCode</a>
            </div>
        </div>

        

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="pages/widgets.html" class="nav-link">
                  <i class="nav-icon fa fa-home" aria-hidden="true"></i>
                  <p>
                      Tổng quan
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href= "" class="nav-link">
                 <i class="nav-icon fa fa-bars" aria-hidden="true"></i>
                  <p>
                    Danh mục
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('admin.category.list') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Danh sách</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.category.add') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Thêm mới</p>
                    </a>
                  </li>
                  
                </ul>
              </li>
              <li class="nav-item">
                <a href= "" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Người dùng
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href={{ route('admin.user.list') }} class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Danh sách</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href={{ route('admin.user.add') }} class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Thêm mới</p>
                    </a>
                  </li>
                  
                  
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                 <i class="nav-icon fa fa-book" aria-hidden="true"></i>
                  <p>
                    Khóa học
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/forms/general.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Danh sách</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/general.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Thêm mới</p>
                    </a>
                  </li>
                  
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-pencil"></i>
                  <p>
                    Giảng viên
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/forms/general.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Danh sách</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/general.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Thêm mới</p>
                    </a>
                  </li>
                  
                </ul>
              </li>


                <li class="nav-header">EXAMPLES</li>
                <li class="nav-item">
                    <a href="pages/calendar.html" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Calendar
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/gallery.html" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Gallery
                        </p>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
