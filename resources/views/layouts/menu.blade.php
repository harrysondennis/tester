<li class="nav-item">
    <a href="{{ route('users.index') }}">
        <p>Users</p>
    </a>
</li>

{{-- @role("manager") --}}
<li class="nav-item">
    <a href="{{ route('roles.index') }}">
        <p>Roles</p>
    </a>
</li> 
{{-- @endrole --}}

<li class="nav-item">
    <a href="{{ route('permissions.index') }}">
        <p>Permissions</p>
    </a>
</li>