<li class="nav-item" >
    <a href="{{ route('users.index') }}">
        <button class="btn btn-outline-secondary btn-block border border-0"><i class="fa fa-user float-left" style="color: white">  USERS</i></button>
        <p></p>
    </a>
</li>

{{-- @role("manager") --}}
<li class="nav-item">
    <a href="{{ route('roles.index') }}">
        <button class="btn btn-outline-secondary btn-block col-xs-2 border border-0"><i class="fa fa-users float-left" style="color: white">  ROLES</i></button>
        <p></p>
    </a>
</li> 
{{-- @endrole --}}

<li class="nav-item">
    <a href="{{ route('permissions.index') }}">
        <button class="btn btn-outline-secondary btn-block border border-0"><i class="fa fa-user float-left" style="color: white">  PERMISSION</i></button>
        <p></p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('reg.create') }}">
        <button class="btn btn-outline-secondary btn-block border border-0"><i class="fa fa-registered float-left" style="color: white">  REGISTER PwD</i></button>
        <p></p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('reg.index') }}">
        <button class="btn btn-outline-secondary btn-block border border-0 float-left"><i class="fa fa-list-ul float-left" style="color: white">  REGISTERED PwD</i></button>
        <p></p>
    </a>
</li>
