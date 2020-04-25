@php
  $menu = config("menu", []);
@endphp

<aside class="main-sidebar {{ config('theme.variant') == 'dark' ? 'sidebar-dark-info' : 'sidebar-light-info' }} elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        <img src="{{ asset("assets/dist/img/AdminLTELogo.png") }}" alt="{{config('app.name')}}" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-bold">{{config('app.name')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset("assets/dist/img/avatar5.png") }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <nav class="mt-2">

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
