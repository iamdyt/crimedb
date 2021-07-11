<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li>
                            <!-- User Profile-->
                            <div class="user-profile d-flex no-block dropdown mt-3">
                                <div class="user-pic"><img src="{{asset('template/assets/images/users/1.png')}}" alt="users" class="rounded-circle" width="40" /></div>
                                <div class="user-content hide-menu ml-2">
                                    <a href="javascript:void(0)" class="" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <h5 class="mb-0 user-name font-medium">{{auth()->user()->username}} </h5>
                                        <span class="op-5 user-email">{{auth()->user()->email}}</span>
                                    </a>
                                </div>
                            </div>
                            <!-- End User Profile-->
                        </li>
                        <!-- User Profile-->
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Classified</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link  waves-effect waves-dark" href="{{route('dashboard')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard </span></a></li>
                        @can('crud_station')
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-tune-vertical"></i><span class="hide-menu">Station </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{route('station.add')}}" class="sidebar-link"><i class="mdi mdi-view-quilt"></i><span class="hide-menu"> Add Station </span></a></li>
                                <li class="sidebar-item"><a href="{{route('station.all')}}" class="sidebar-link"><i class="mdi mdi-view-parallel"></i><span class="hide-menu"> All Station </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-content-copy"></i><span class="hide-menu">Departments </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{route('department.add')}}" class="sidebar-link"><i class="mdi mdi-format-align-left"></i><span class="hide-menu"> Add Department</span></a></li>
                                    <li class="sidebar-item"><a href="{{route('department.all')}}" class="sidebar-link"><i class="mdi mdi-format-align-right"></i><span class="hide-menu"> All Departments </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-inbox-arrow-down"></i><span class="hide-menu">Ranks </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{route('rank.create')}}" class="sidebar-link"><i class="mdi mdi-email"></i><span class="hide-menu"> Add Rank </span></a></li>
                                <li class="sidebar-item"><a href="{{route('rank.all')}}" class="sidebar-link"><i class="mdi mdi-email-alert"></i><span class="hide-menu"> All Ranks </span></a></li>
                            </ul>
                        </li>
                        @endcan
                        @can('view_officer')
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-bookmark-plus-outline"></i><span class="hide-menu">Officers </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{route('officer.create')}}" class="sidebar-link"><i class="mdi mdi-book-multiple"></i><span class="hide-menu"> Enrol Officer </span></a></li>
                                <li class="sidebar-item"><a href="{{route('officer.all')}}" class="sidebar-link"><i class="mdi mdi-book-plus"></i><span class="hide-menu"> All Officers </span></a></li>
                            </ul>
                        </li>   
                        @endcan

                        

                        @can('crud_case')
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-gradient"></i><span class="hide-menu">Cases </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{route('complainant.add')}}" class="sidebar-link"><i class="mdi mdi-comment-processing-outline"></i><span class="hide-menu"> New Cases</span></a></li>
                                <li class="sidebar-item"><a href="{{route('case.clerk.all')}}" class="sidebar-link"><i class="mdi mdi-calendar"></i><span class="hide-menu"> All Cases </span></a></li>
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark"><i class="mdi mdi-widgets"></i><span class="hide-menu">Complainants</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" ><i class="mdi mdi-credit-card-multiple"></i>Accuseds</a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" aria-expanded="false"><i class="mdi mdi-credit-card-multiple"></i>Victims</a></li>
                       @endcan 
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>