<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item mb-3 mt-2">
                    <form action="{{ route('admin.posts.index') }}" method="GET">
                        @csrf
                        <button type="submit"  class="nav-link">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                Posts
                            </p>
                        </button>
                    </form>
                </li>
                <li class="nav-item mb-3">
                    <form action="{{ route('admin.about.edit') }}" method="GET">
                        @csrf
                        <button type="submit"  class="nav-link">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                About
                            </p>
                        </button>
                    </form>
                </li>
                <li class="nav-item mb-3">
                    <form action="{{ route('admin.about-cards.index') }}" method="GET">
                        @csrf
                        <button type="submit"  class="nav-link">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                About cards
                            </p>
                        </button>
                    </form>
                </li>
                <li class="nav-item mb-3">
                    <form action="{{ route('admin.about-employes.index') }}" method="GET">
                        @csrf
                        <button type="submit"  class="nav-link">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                About employes
                            </p>
                        </button>
                    </form>
                </li>
                <li class="nav-item mb-3">
                    <form action="{{ route('admin.categories.index') }}" method="GET">
                        @csrf
                        <button type="submit"  class="nav-link">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                Categories
                            </p>
                        </button>
                    </form>
                </li>
                <li class="nav-item mb-3">
                    <form action="{{ route('admin.contact.edit') }}" method="GET">
                        @csrf
                        <button type="submit"  class="nav-link">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                Contacts
                            </p>
                        </button>
                    </form>
                </li>
                <li class="nav-item mb-3">
                    <form action="{{ route('admin.letter') }}" method="GET">
                        @csrf
                        <button type="submit"  class="nav-link">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                Letters
                            </p>
                        </button>
                    </form>
                </li>
                <li class="nav-item mb-3">
                    <form action="{{ route('admin.statuses.index') }}" method="GET">
                        @csrf
                        <button type="submit"  class="nav-link">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                Statuses
                            </p>
                        </button>
                    </form>
                </li>
                <li class="nav-item mb-3">
                    <form action="{{ route('admin.tags.index') }}" method="GET">
                        @csrf
                        <button type="submit"  class="nav-link">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                Tags
                            </p>
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>