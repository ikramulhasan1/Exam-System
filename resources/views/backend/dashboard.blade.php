@extends('backend.master')

@section('content')
    <div class="content">
        <!-- Dashboard content -->
        <div class="row">
            <div class="col-xl-8">

                <!-- Quick stats boxes -->
                <div class="row">


                    <div class="col-lg-4">

                        <!-- Current server load -->
                        <div class=" bg-teal-400">
                            <div class="card-body">
                                <div class="d-flex">
                                    <h3 class="font-weight-semibold mb-0">49.4%</h3>
                                    <div class="list-icons ml-auto">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item dropdown-toggle"
                                                data-toggle="dropdown"><i class="icon-cog3"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item"><i class="icon-sync"></i>
                                                    Update data</a>
                                                <a href="#" class="dropdown-item"><i class="icon-list-unordered"></i>
                                                    Detailed log</a>
                                                <a href="#" class="dropdown-item"><i class="icon-pie5"></i>
                                                    Statistics</a>
                                                <a href="#" class="dropdown-item"><i class="icon-cross3"></i>
                                                    Clear list</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    Current server load
                                    <div class="font-size-sm opacity-75">34.6% avg</div>
                                </div>
                            </div>

                        </div>
                        <!-- /current server load -->

                    </div>
                    <div class="col-lg-4">

                        <!-- Current server load -->
                        <div class=" bg-pink-400">
                            <div class="card-body">
                                <div class="d-flex">
                                    <h3 class="font-weight-semibold mb-0">49.4%</h3>
                                    <div class="list-icons ml-auto">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item dropdown-toggle"
                                                data-toggle="dropdown"><i class="icon-cog3"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item"><i class="icon-sync"></i>
                                                    Update data</a>
                                                <a href="#" class="dropdown-item"><i class="icon-list-unordered"></i>
                                                    Detailed log</a>
                                                <a href="#" class="dropdown-item"><i class="icon-pie5"></i>
                                                    Statistics</a>
                                                <a href="#" class="dropdown-item"><i class="icon-cross3"></i>
                                                    Clear list</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    Current server load
                                    <div class="font-size-sm opacity-75">34.6% avg</div>
                                </div>
                            </div>


                        </div>
                        <!-- /current server load -->

                    </div>

                    <div class="col-lg-4">

                        <!-- Current server load -->
                        <div class=" bg-blue-400">
                            <div class="card-body">
                                <div class="d-flex">
                                    <h3 class="font-weight-semibold mb-0">49.4%</h3>
                                    <div class="list-icons ml-auto">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item dropdown-toggle"
                                                data-toggle="dropdown"><i class="icon-cog3"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="#" class="dropdown-item"><i class="icon-sync"></i>
                                                    Update data</a>
                                                <a href="#" class="dropdown-item"><i class="icon-list-unordered"></i>
                                                    Detailed log</a>
                                                <a href="#" class="dropdown-item"><i class="icon-pie5"></i>
                                                    Statistics</a>
                                                <a href="#" class="dropdown-item"><i class="icon-cross3"></i>
                                                    Clear list</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    Current server load
                                    <div class="font-size-sm opacity-75">34.6% avg</div>
                                </div>
                            </div>


                        </div>
                        <!-- /current server load -->

                    </div>


                </div>
                <!-- /quick stats boxes -->

            </div>

            <div class="col-xl-4">

                <!-- My messages -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title">My messages</h6>
                        <div class="header-elements">
                            <span><i class="icon-history text-warning mr-2"></i> Jul 7, 10:30</span>
                            <span class="badge bg-success align-self-start ml-3">Online</span>
                        </div>
                    </div>


                    <!-- Tabs -->
                    <ul
                        class="nav nav-tabs nav-tabs-solid nav-justified bg-indigo-400 border-x-0 border-bottom-0 border-top-indigo-300 mb-0">
                        <li class="nav-item">
                            <a href="#messages-tue" class="nav-link font-size-sm text-uppercase active" data-toggle="tab">
                                Tuesday
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#messages-mon" class="nav-link font-size-sm text-uppercase" data-toggle="tab">
                                Monday
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#messages-fri" class="nav-link font-size-sm text-uppercase" data-toggle="tab">
                                Friday
                            </a>
                        </li>
                    </ul>
                    <!-- /tabs -->


                    <!-- Tabs content -->
                    <div class="tab-content card-body">
                        <div class="tab-pane active fade show" id="messages-tue">
                            <ul class="media-list">
                                <li class="media">
                                    <div class="mr-3 position-relative">
                                        <img src="{{ asset('ui/backend/global_assets') }}/images/placeholders/placeholder.jpg"
                                            class="rounded-circle" width="36" height="36" alt="">
                                        <span
                                            class="badge bg-danger-400 badge-pill badge-float border-2 border-white">8</span>
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#">James Alexander</a>
                                            <span class="font-size-sm text-muted">14:58</span>
                                        </div>

                                        The constitutionally inventoried precariously...
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3 position-relative">
                                        <img src="{{ asset('ui/backend/global_assets') }}/images/placeholders/placeholder.jpg"
                                            class="rounded-circle" width="36" height="36" alt="">
                                        <span
                                            class="badge bg-danger-400 badge-pill badge-float border-2 border-white">6</span>
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#">Margo Baker</a>
                                            <span class="font-size-sm text-muted">12:16</span>
                                        </div>

                                        Pinched a well more moral chose goodness...
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="{{ asset('ui/backend/global_assets') }}/images/placeholders/placeholder.jpg"
                                            class="rounded-circle" width="36" height="36" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#">Jeremy Victorino</a>
                                            <span class="font-size-sm text-muted">09:48</span>
                                        </div>

                                        Pert thickly mischievous clung frowned well...
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="{{ asset('ui/backend/global_assets') }}/images/placeholders/placeholder.jpg"
                                            class="rounded-circle" width="36" height="36" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#">Beatrix Diaz</a>
                                            <span class="font-size-sm text-muted">05:54</span>
                                        </div>

                                        Nightingale taped hello bucolic fussily cardinal...
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="{{ asset('ui/backend/global_assets') }}/images/placeholders/placeholder.jpg"
                                            class="rounded-circle" width="36" height="36" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#">Richard Vango</a>
                                            <span class="font-size-sm text-muted">01:43</span>
                                        </div>

                                        Amidst roadrunner distantly pompously where...
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="messages-mon">
                            <ul class="media-list">
                                <li class="media">
                                    <div class="mr-3">
                                        <img src="{{ asset('ui/backend/global_assets') }}/images/placeholders/placeholder.jpg"
                                            class="rounded-circle" width="36" height="36" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#">Isak Temes</a>
                                            <span class="font-size-sm text-muted">Tue, 19:58</span>
                                        </div>

                                        Reasonable palpably rankly expressly grimy...
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="{{ asset('ui/backend/global_assets') }}/images/placeholders/placeholder.jpg"
                                            class="rounded-circle" width="36" height="36" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#">Vittorio Cosgrove</a>
                                            <span class="font-size-sm text-muted">Tue, 16:35</span>
                                        </div>

                                        Arguably therefore more unexplainable fumed...
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="{{ asset('ui/backend/global_assets') }}/images/placeholders/placeholder.jpg"
                                            class="rounded-circle" width="36" height="36" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#">Hilary Talaugon</a>
                                            <span class="font-size-sm text-muted">Tue, 12:16</span>
                                        </div>

                                        Nicely unlike porpoise a kookaburra past more...
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="{{ asset('ui/backend/global_assets') }}/images/placeholders/placeholder.jpg"
                                            class="rounded-circle" width="36" height="36" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#">Bobbie Seber</a>
                                            <span class="font-size-sm text-muted">Tue, 09:20</span>
                                        </div>

                                        Before visual vigilantly fortuitous tortoise...
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="{{ asset('ui/backend/global_assets') }}/images/placeholders/placeholder.jpg"
                                            class="rounded-circle" width="36" height="36" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#">Walther Laws</a>
                                            <span class="font-size-sm text-muted">Tue, 03:29</span>
                                        </div>

                                        Far affecting more leered unerringly dishonest...
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="messages-fri">
                            <ul class="media-list">
                                <li class="media">
                                    <div class="mr-3">
                                        <img src="{{ asset('ui/backend/global_assets') }}/images/placeholders/placeholder.jpg"
                                            class="rounded-circle" width="36" height="36" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#">Owen Stretch</a>
                                            <span class="font-size-sm text-muted">Mon, 18:12</span>
                                        </div>

                                        Tardy rattlesnake seal raptly earthworm...
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="{{ asset('ui/backend/global_assets') }}/images/placeholders/placeholder.jpg"
                                            class="rounded-circle" width="36" height="36" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#">Jenilee Mcnair</a>
                                            <span class="font-size-sm text-muted">Mon, 14:03</span>
                                        </div>

                                        Since hello dear pushed amid darn trite...
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="{{ asset('ui/backend/global_assets') }}/images/placeholders/placeholder.jpg"
                                            class="rounded-circle" width="36" height="36" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#">Alaster Jain</a>
                                            <span class="font-size-sm text-muted">Mon, 13:59</span>
                                        </div>

                                        Dachshund cardinal dear next jeepers well...
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="{{ asset('ui/backend/global_assets') }}/images/placeholders/placeholder.jpg"
                                            class="rounded-circle" width="36" height="36" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#">Sigfrid Thisted</a>
                                            <span class="font-size-sm text-muted">Mon, 09:26</span>
                                        </div>

                                        Lighted wolf yikes less lemur crud grunted...
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="{{ asset('ui/backend/global_assets') }}/images/placeholders/placeholder.jpg"
                                            class="rounded-circle" width="36" height="36" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="d-flex justify-content-between">
                                            <a href="#">Sherilyn Mckee</a>
                                            <span class="font-size-sm text-muted">Mon, 06:38</span>
                                        </div>

                                        Less unicorn a however careless husky...
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /tabs content -->

                </div>
                <!-- /my messages -->


            </div>
        </div>
        <!-- /dashboard content -->

    </div>
@endsection
