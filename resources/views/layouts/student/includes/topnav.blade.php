<div class="row dashboard-top-nav">
    <div class="col-sm-3 logo">
        <h5><i class="fa fa-book"></i>PATHSHALA</h5>
    </div>

    <div class="col-sm-5 notification-area" style="float : right;">
        <ul class="top-nav-list">
            <li class="user dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span>JOHN DOE<span class="caret"></span></span>
                </a>
                <ul class="dropdown-menu notification-list">
                    <li>
                        <a href="#"><i class="fa fa-users"></i> USER PROFILE</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
