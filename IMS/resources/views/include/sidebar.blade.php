<nav>
    <ul>
        <li class="logo">
            <img src="{{ asset('images/Logo White.svg') }}" alt="Logo">
        </li>
        <li><a href="#">
            <span class="nav-item">Dashboard</span>
        </a></li>
        <li><a href="#">
            <span class="nav-item">Inventory</span>
        </a></li>
        <li><a href="#">
            <span class="nav-item">Reports</span>
        </a></li>
        <li><a href="#">
            <span class="nav-item">Users</span>
        </a></li>
        <li><a href="#">
            <span class="nav-item">Database</span>
        </a></li>
        <li style="margin-bottom:20%;"><a href="#">
            <span class="nav-item">Settings</span>
        </a></li>
        <li><a href="#">
            <table style="margin-left:auto;margin-right:auto;width:100%;">
                <tr>
                    <td rowspan="2"><img src="{{ asset('images/User.svg') }}" alt="User" class="propic"></td>
                    <td>
                        @auth
                            <span style="text-transform:uppercase" class="tab-item">{{auth()->user()->name}}</span>
                        @endauth
                    </td>
                </tr>
                <tr>
                    <td><span class="tab-item"><a href={{route('logout')}}>Log Out</a></span></td>
                </tr>
            </table>
        </a></li>
    </ul>
</nav>