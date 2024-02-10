<div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0">
                    <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 280px;">
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item">

                            <li class="">  



                                <a href="{{ route('user-show-accounts') }}" class="nav-link {{ (Route::currentRouteName() === 'user-show-accounts') ? 'active' : 'link-body-emphasis' }}" {{ (Route::currentRouteName() === 'user-show-accounts') ? 'aria-current="page"' : '' }}>
                                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                                    Accounts
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link link-body-emphasis">
                                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                                    New transaction
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link link-body-emphasis">
                                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                                    Transactions history
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('user-show')}}" class="nav-link {{ (Route::currentRouteName() === 'user-show') ? 'active' : 'link-body-emphasis' }}" {{ (Route::currentRouteName() === 'user-show') ? 'aria-current="page"' : '' }}>
                                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                                    User profile
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            <div class="col py-3">
            
             <div class="container">
                <div class="row justify-content-center">
                    @yield('content')
                </div>
            </div>
            
            </div>