 <!-- Header -->
<nav-bar-dash-component
    logo_hb="{{asset('assets/logo/hbics_putih.png')}}"
    logo_ytcb="{{asset('assets/logo/ytcb_putih.png')}}"
    is_admin="{{auth()->user()->is_super_admin === 1 || auth()->user()->roles_user()->where('role', 2)->first() !== null || auth()->user()->roles_user()->where('role', 3)->first() !== null ? 'true' : 'false'}}"></nav-bar-dash-component>
<!-- End Header -->
