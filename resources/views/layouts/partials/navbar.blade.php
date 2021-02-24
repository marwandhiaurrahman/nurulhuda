<div class="app-header white box-shadow navbar-md">
    <div class="navbar navbar-toggleable-sm flex-row align-items-center">
        <!-- Open side - Naviation on mobile -->
        <a data-toggle="modal" data-target="#aside" class="hidden-lg-up mr-3">
            <i class="material-icons">&#xe5d2;</i>
        </a>
        <!-- / -->

        <!-- Page title - Bind to $state's title -->
        <div class="mb-0 h5 no-wrap" ng-bind="$state.current.data.title" id="pageTitle"></div>

        <!-- navbar collapse -->
        <div class="collapse navbar-collapse" id="collapse">
            <!-- link and dropdown -->
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" href data-toggle="dropdown">
                        Hari ini :
                        {{ date('Y-m-d') }}
                        <span id="waktu"></span>

                    </a>
                    {{-- <div ui-include="'../views/blocks/dropdown.new.html'"></div> --}}
                </li>
            </ul>

            <div ui-include="'../views/blocks/navbar.form.html'"></div>
            <!-- / -->
        </div>
        <!-- / navbar collapse -->

        <!-- navbar right -->
        <ul class="nav navbar-nav ml-auto flex-row">
            {{-- P --}}
            <li class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle text-ellipsis" data-toggle="dropdown">
                    <span class="avatar w-32">
                        <img src="../assets/images/a0.jpg" alt="...">
                        <i class="on b-white bottom"></i>
                    </span>
                    <span class="hidden-sm-down _500">{{Auth::user()->name}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-overlay pull-right">
                    <a class="dropdown-item" ui-sref="app.inbox.list">
                        <span>Inbox</span>
                        <span class="label warn m-l-xs">3</span>
                    </a>
                    <a href="{{ route('profile',Auth::user()->id) }}" class="dropdown-item" ui-sref="app.page.profile">
                        <span>Profile</span>
                    </a>
                    <a class="dropdown-item" ui-sref="app.page.setting">
                        <span>Settings</span>
                        <span class="label primary m-l-xs">3/9</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" ui-sref="app.docs">
                        Need help?
                    </a>

                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>


                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </div>
            </li>
            <li class="nav-item hidden-md-up">
                <a class="nav-link pl-2" data-toggle="collapse" data-target="#collapse">
                    <i class="material-icons">&#xe5d4;</i>
                </a>
            </li>
        </ul>
        <!-- / navbar right -->
    </div>
</div>

<script>
    window.setTimeout("waktu()", 1000);

    function waktu() {
        var waktu = new Date();
        setTimeout("waktu()", 1000);
        document.getElementById("waktu").innerHTML = waktu.getHours()+':'+waktu.getMinutes()+':'+waktu.getSeconds();
    }
</script>
