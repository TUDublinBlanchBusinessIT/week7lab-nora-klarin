<ul class="nav navbar-nav pull-right">
    @if(Auth::guest())
        <li>
            <a href="{{ route('register') }}"><strong>Register</strong>
                <span class="glyphicon glyphicon-pencil"></span>
            </a>
        </li>
        <li>
            <a href="{{ route('login') }}"><strong>Login</strong>
                <span class="glyphicon glyphicon-log-in"></span>
            </a>
        </li>
    @else
        <li>
            <a href="{{ route('logoff') }}"><strong>Logoff</strong>
                <span class="glyphicon glyphicon-log-out"></span>
            </a>
        </li>
    @endif
</ul>
