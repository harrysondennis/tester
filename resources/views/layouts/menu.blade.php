<li class="nav-item" >
    <a href="{{ route('users.index') }}">
        <p><i class="fa fa-user">  USERS</i></p>
    </a>
</li>

{{-- @role("manager") --}}
<li class="nav-item">
    <a href="{{ route('roles.index') }}">
        <p><i class="fa fa-users">  ROLES</i></p>
    </a>
</li> 
{{-- @endrole --}}

<li class="nav-item">
    <a href="{{ route('permissions.index') }}">
        <p><i class="fa fa-user">  PERMISSION</i></p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('reg.create') }}">
        <p><i class="fa fa-registered">  REGISTER PwD</i></p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('reg.index') }}">
        <p><i class="fa fa-list-ul">  REGISTERED PwD</i></p>
    </a>
</li>