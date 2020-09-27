<li class="{{ Request::is('typeComptes*') ? 'active' : '' }}">
    <a href="{{ route('typeComptes.index') }}"><i class="fa fa-edit"></i><span>Type Comptes</span></a>
</li>

<li class="{{ Request::is('entreprises*') ? 'active' : '' }}">
    <a href="{{ route('entreprises.index') }}"><i class="fa fa-edit"></i><span>Entreprises</span></a>
</li>

<li class="{{ Request::is('typeOperations*') ? 'active' : '' }}">
    <a href="{{ route('typeOperations.index') }}"><i class="fa fa-edit"></i><span>Type Operations</span></a>
</li>



<li class="{{ Request::is('clients*') ? 'active' : '' }}">
    <a href="{{ route('clients.index') }}"><i class="fa fa-edit"></i><span>Clients</span></a>
</li>

<li class="{{ Request::is('comptes*') ? 'active' : '' }}">
    <a href="{{ route('comptes.index') }}"><i class="fa fa-edit"></i><span>Comptes</span></a>
</li>

