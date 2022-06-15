<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{\Illuminate\Support\Facades\Auth::User()->name }}</a>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->


            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Books
                        <i class="fas fa-angle-left right"></i>
                        <span class="badge badge-info right">6</span>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('book.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List all Books</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('book.create')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Book</p>
                        </a>
                    </li>


                </ul>
            </li>


            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Categories
                        <i class="fas fa-angle-left right"></i>
                        <span class="badge badge-info right">6</span>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('category.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List all Categories</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('category.create')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Categories</p>
                        </a>
                    </li>

                </ul>
            </li>


            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Authors
                        <i class="fas fa-angle-left right"></i>
                        <span class="badge badge-info right">6</span>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('author.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List all Authors</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('author.create')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Authors</p>
                        </a>
                    </li>

                </ul>
            </li>


            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Users
                        <i class="fas fa-angle-left right"></i>
                        <span class="badge badge-info right">6</span>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('user.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List all Users</p>
                        </a>
                    </li>


                </ul>
            </li>


            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Admins
                        <i class="fas fa-angle-left right"></i>
                        <span class="badge badge-info right">6</span>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('admin.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List all Admins</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.create')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Admins</p>
                        </a>
                    </li>

                </ul>
            </li>


        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
