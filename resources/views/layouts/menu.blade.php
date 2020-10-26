<li class="{{ Request::is('personas*') ? 'active' : '' }}">
    <a href="{{ route('personas.index') }}"><i class="fa fa-user"></i><span>Personas</span></a>
</li>

<li class="{{ Request::is('solicituds*') ? 'active' : '' }}">
    <a href="{{ route('solicituds.index') }}"><i class="fa fa-calendar"></i><span>Solicituds</span></a>
</li>

<li class="{{ Request::is('tramites*') ? 'active' : '' }}">
    <a href="{{ route('tramites.index') }}"><i class="fa fa-tags"></i><span>Tramites</span></a>
</li>

