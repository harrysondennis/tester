<li class="nav-item" >
    <a href="{{ route('dashboard.index') }}">
        <button class="btn btn-outline-secondary btn-block border border-0"><i class="fas fa-tachometer-alt float-left" style="color: white">  DASHBOARD</i></button>
        <p></p>
    </a>
</li>

<li class="nav-item" >
    <a href="{{ route('users.index') }}">
        <button class="btn btn-outline-secondary btn-block border border-0"><i class="fa fa-user float-left" style="color: white">  USERS</i></button>
        <p></p>
    </a>
</li>


{{-- @role("manager") --}}
<li class="nav-item">
    <a href="{{ route('roles.index') }}">
        <button class="btn btn-outline-secondary btn-block col-xs-2 border border-0"><i class="fa fa-briefcase float-left" style="color: white">  ROLES</i></button>
        <p></p>
    </a>
</li> 
{{-- @endrole --}}

<li class="nav-item">
    <a href="{{ route('permissions.index') }}">
        <button class="btn btn-outline-secondary btn-block border border-0"><i class="fa fa-unlock-alt float-left" style="color: white">  PERMISSION</i></button>
        <p></p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('reg.create') }}">
        <button class="btn btn-outline-secondary btn-block border border-0"><i class="fa fa-wheelchair float-left" style="color: white">  REGISTER PwD</i></button>
        <p></p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('reg.index') }}">
        <button class="btn btn-outline-secondary btn-block border border-0 float-left"><i class="fa fa-list-ul float-left" style="color: white">  REGISTERED PwD</i></button>
        <p></p>
        
    </a>
</li>
<p></p>

<li class="nav-item">
    <a href="/changes">
        <button class="btn btn-outline-secondary btn-block border border-0 float-left"><i class="fa fa-key float-left" style="color: white">  CHANGE PASSWORD </i></button>
        <p></p>
    </a>
</li>
