 <!-- Header -->
<nav-bar-dash-component
    logo_hb="{{asset('assets/logo/63204d38-9f57-4358-9bf7-77538c56ccf4.png')}}"
    logo_ytcb="{{asset('assets/logo/6b0040fb-7d76-41c1-af2d-4830bdc3afd9.png')}}"
    is_admin="{{auth()->user()->is_super_admin === 1 || auth()->user()->roles_user()->where('role', 2)->first() !== null || auth()->user()->roles_user()->where('role', 3)->first() !== null ? 'true' : 'false'}}"></nav-bar-dash-component>
<!-- End Header -->
