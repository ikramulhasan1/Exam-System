<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="card-body">
                <div class="media">
                    <div class="mr-3">
                        <a href="#"><img
                                src="{{ asset('ui/backend/global_assets') }}/images/placeholders/placeholder.jpg"
                                width="38" height="38" class="rounded-circle" alt=""></a>
                    </div>

                    <div class="media-body">
                        <div class="media-title font-weight-semibold">{{ Auth::user()->name ?? '' }}</div>
                        <div class="font-size-xs opacity-50">
                            <i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
                        </div>
                    </div>

                    <div class="ml-3 align-self-center">
                        <a href="#" class="text-white"><i class="icon-cog3"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu"
                        title="Main"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link active">
                        <i class="icon-home4"></i>
                        <span>
                            Dashboard
                        </span>
                    </a>
                </li>


                <!-- /main -->

                <!-- Forms -->
                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs">Forms</div> <i class="icon-menu"
                        title="Forms"></i>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i
                            class="fa-solid fa-book fontSize"></i><span>Subjects</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Form components">
                        <li class="nav-item"><a href="{{ route('subjects.index') }}" class="nav-link">Subject</a>
                        </li>

                        <li class="nav-item"><a href="{{ route('subjects.create') }}" class="nav-link">Import</a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="fa-solid fa-tags fontSize"></i> <span>Levels</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Form components">
                        <li class="nav-item"><a href="{{ route('levels.index') }}" class="nav-link">Level</a>
                        </li>

                        <li class="nav-item"><a href="{{ route('levels.create') }}" class="nav-link">Import</a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="fa-regular fa-folder fontSize"></i><span>QuestionBank
                        </span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Form components">
                        <li class="nav-item"><a href="{{ route('questionbanks.index') }}" class="nav-link">
                                Question</a>
                        </li>

                        <li class="nav-item"><a href="{{ route('questionbanks.create') }}" class="nav-link">
                                Import</a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="fa-solid fa-file-lines fontSize"></i> <span>Exams
                        </span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Form components">
                        <li class="nav-item"><a href="{{ route('exams.index') }}" class="nav-link">
                                Exam</a>
                        </li>

                        <li class="nav-item"><a href="{{ route('exams.create') }}" class="nav-link">
                                Import</a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-user fontSize"></i>
                        <span>
                            User
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('profile.setting') }}" class="nav-link">
                        <i class="fa-solid fa-gear fontSize"></i>
                        <span>
                            Settings
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-arrow-right-from-bracket fontSize"></i>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <input class="text-white p-0 border-0 bg-transparent font-weight-bold " type="submit"
                                value="Logout">
                        </form>
                    </a>
                </li>



                <!-- /forms -->




            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
