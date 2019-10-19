<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Nguyễn Đức Anh
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="javascript:;" class="nav-link">
                                <i class="far fa-circle nav-icon text-danger"></i>
                                <p>Tạo tài khoản admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:;" class="nav-link">
                                <i class="far fa-circle nav-icon text-danger"></i>
                                <p>Đăng xuất</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
                       <li class="nav-item has-treeview">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link @if(Request::is('admin/dashboard')) active @endif">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>

                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{ route('admin.product.index') }}" class="nav-link @if(Request::is('admin/products')) active @endif">
                            <i class="nav-icon fas fa-shopping-basket"></i>
                            <p>
                                Quản lý sản phẩm
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">6</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.product.create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon text-info"></i>
                                    <p>Tạo mới</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.product.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon text-info"></i>
                                    <p>Sản phẩm đang bán</p>
                                    <span class="badge badge-info right">6</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.product.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon text-info"></i>
                                    <p>Sản phẩm bị ẩn</p>
                                    <span class="badge badge-info right">6</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.product.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon text-info"></i>
                                    <p>Sản phẩm hết hàng</p>
                                    <span class="badge badge-info right">6</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.product.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon text-info"></i>
                                    <p>Sản phẩm đã bán</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{ route('admin.categories.index') }}" class="nav-link @if(Request::is('admin/categories')) active @endif">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Quản lý danh mục
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        {{-- <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.categories.create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tạo mới</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.categories.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách</p>
                                </a>
                            </li>
                        </ul> --}}
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{ route('admin.users.index') }}" class="nav-link @if(Request::is('admin/users')) active @endif">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Quản lý người dùng
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right"></span>
                            </p>
                        </a>
                        {{-- <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.users.create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tạo mới</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.users.index') }}" class="nav-link @if(Request::is('admin/users')) active @endif">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách</p>
                                </a>
                            </li>
                        </ul> --}}
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{ route('admin.users.index') }}" class="nav-link @if(Request::is('admin/users')) active @endif">
                            <i class="nav-icon fas fa-tag"></i>
                            <p>
                                Quản lý tag
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right"></span>
                            </p>
                        </a>
                        {{-- <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.users.create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tạo mới</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.users.index') }}" class="nav-link @if(Request::is('admin/users')) active @endif">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách</p>
                                </a>
                            </li>
                        </ul> --}}
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{ route('admin.users.index') }}" class="nav-link @if(Request::is('admin/users')) active @endif">
                            <i class="nav-icon fas fa-shopping-cart"></i>
                            <p>
                                Sale
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right"></span>
                            </p>
                        </a>
                        {{-- <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.users.create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tạo mới</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.users.index') }}" class="nav-link @if(Request::is('admin/users')) active @endif">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách</p>
                                </a>
                            </li>
                        </ul> --}}
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{ route('admin.users.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-comments"></i>
                            <p>
                                Quản lý bình luận
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right"></span>
                            </p>
                        </a>
                        {{-- <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.users.create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tạo mới</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.users.index') }}" class="nav-link @if(Request::is('admin/users')) active @endif">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Danh sách</p>
                                </a>
                            </li>
                        </ul> --}}
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>