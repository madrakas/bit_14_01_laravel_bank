<div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0">
                    <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 280px;">
                        <span class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                        <span class="fs-4">User menu</span>
                        </span>
                        <hr/>
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item">
                            <li class="">  
                                <a href="{{ route('user-show-accounts') }}" class="nav-link {{ (Route::currentRouteName() === 'user-show-accounts') ? 'active' : 'link-body-emphasis' }}" {{ (Route::currentRouteName() === 'user-show-accounts') ? 'aria-current="page"' : '' }}>
                                    Accounts
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link link-body-emphasis">
                                    New transaction
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link link-body-emphasis">
                                    Transactions history
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('user-show')}}" class="nav-link {{ (Route::currentRouteName() === 'user-show') ? 'active' : 'link-body-emphasis' }}" {{ (Route::currentRouteName() === 'user-show') ? 'aria-current="page"' : '' }}>
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