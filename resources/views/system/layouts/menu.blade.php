{{-- start menu logo --}}
@include('system.layouts.menu.logo')
{{-- end menu logo --}}

<div id="scrollbar">
    <div class="container-fluid">

        <div id="two-column-menu">
        </div>
        <ul class="navbar-nav" id="navbar-nav">
            <li class="menu-title"><span data-key="t-menu">Menu</span></li>

            {{-- start Dashboard Menu --}}

            @include('system.layouts.menu.dashboard')

            <!-- end Dashboard Menu -->
            

            {{-- start app menu --}}

            {{-- @include('system.layouts.menu.app') --}}

            {{-- end app menu --}}

            

            {{-- start Layouts menu --}}

            {{-- @include('system.layouts.menu.Layouts') --}}

            {{-- end Layouts menu --}}


        </ul>
    </div>
    <!-- Sidebar -->
</div>
