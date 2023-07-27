<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <a class="brand-link">
            <img src="/assets/back/dist/img/AdminLTELogo.png" alt="Admin Panel" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Admin Panel</span>
            </a>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item mb-3 mt-2">
                    <a  href="{{ route('admin.posts.index') }}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Posts
                        </p>
                    </a>
                </li>
                <li class="nav-item mb-3 mt-2">
                    <a  href="{{ route('admin.about.edit') }}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            About
                        </p>
                    </a>
                </li>
                <li class="nav-item mb-3 mt-2">
                    <a  href="{{ route('admin.about-cards.index') }}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            About cards
                        </p>
                    </a>
                </li>
                <li class="nav-item mb-3 mt-2">
                    <a  href="{{ route('admin.about-employes.index') }}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            About employes
                        </p>
                    </a>
                </li>
                <li class="nav-item mb-3 mt-2">
                    <a  href="{{ route('admin.categories.index') }}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Categories
                        </p>
                    </a>
                </li>
                <li class="nav-item mb-3 mt-2">
                    <a  href="{{ route('admin.contact.edit') }}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Contacts
                        </p>
                    </a>
                </li>
                <li class="nav-item mb-3 mt-2">
                    <a  href="{{ route('admin.letter') }}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Letters
                        </p>
                    </a>
                </li>
                <li class="nav-item mb-3 mt-2">
                    <a  href="{{ route('admin.statuses.index') }}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Statuses
                        </p>
                    </a>
                </li>
                <li class="nav-item mb-3 mt-2">
                    <a  href="{{ route('admin.tags.index') }}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Tags
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>