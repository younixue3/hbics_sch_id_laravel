<!-- Header -->
<nav-bar-dash-component
    is_admin="{{auth()->user()->is_super_admin === 1 || auth()->user()->roles_user()->where('role', 2)->first() !== null || auth()->user()->roles_user()->where('role', 3)->first() !== null ? 'true' : 'false'}}"></nav-bar-dash-component>
<!-- End Header -->
