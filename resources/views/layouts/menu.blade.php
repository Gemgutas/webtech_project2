<li class="nav-item">
    <a href="{{ route('weatherAPIs.index') }}"
       class="nav-link {{ Request::is('weatherAPIs*') ? 'active' : '' }}">
        <p>Weather A P Is</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('logs.index') }}"
       class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <p>Logs</p>
    </a>
</li>


