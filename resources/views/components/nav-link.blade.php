<div>
    <a class="nav-link {{request()->routeIs($routs) ? "active" : " "}}" 
    {!!request()->routeIs($routs) ? "aria-current='page'" : " " !!} 
    href="{{ route($routs)}}">{{$slot}}</a>
</div>