<div id="wrapper">
    <div class="navbar-custom">
        <div class="d-flex justify-content-between flex-row">
            <div class="d-flex align-items-start">
                <img src="/assests/images.png" alt="" height="60">
            </div>
            <div class="d-flex align-items-end flex-row">
                <ul class="row">
                    <li>
                        <a href="{{ route('companies.index') }}" class="menu{{ Request::routeIs('companies.*') ? ' active' : '' }}">
                            Customers
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('subcription.index') }}" class="menu{{ Request::routeIs('subcription.*') ? ' active' : '' }}">
                            <span>Subscriptions</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('profile.index') }}" class="menu{{ Request::routeIs('profile.*') ? ' active' : '' }}">
                            <span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <form action="{{ route('signout') }}" method="GET" class="menu-1">
                            @csrf
                            <button type="submit">
                                <span><b>Logout</b></span>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>

          
    </div>   
</div>

<style>
     ul {
      list-style-type: none; 
    }
    .navbar-custom{
        background-color: #232F47;
    }
    .menu{
        padding-right: 20px;
        padding-left: 20px;
        color: white;
    }
    .menu-1{
        padding-right: 20px;
        padding-left: 100px;
        color: white;
    }
    .menu:hover{
        color: white;
        text-decoration: none;
    }
    .active {
        color: #DB4C00; 
        font-weight: bold; 
</style>