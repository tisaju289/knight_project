<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                @include('system.layouts.header.logo')

                

                <!-- App Search-->
                {{-- @include('system.layouts.header.appSearch') --}}
            </div>

            <div class="d-flex align-items-center">

                <div class="dropdown d-md-none topbar-head-dropdown header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                        id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="bx bx-search fs-22"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                        aria-labelledby="page-header-search-dropdown">
                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..."
                                        aria-label="Recipient's username">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- language --}}
                {{-- @include('system.layouts.header.language') --}}

                {{-- web app --}}
                {{-- @include('system.layouts.header.webApp') --}}

                {{-- cart --}}
                @include('system.layouts.header.cart')

                {{-- full screan --}}
                @include('system.layouts.header.fullScreen')

                {{-- dark mode --}}
                @include('system.layouts.header.darkMode')

                {{-- notification --}}
                @include('system.layouts.header.notification')

                {{-- profile --}}
                @include('system.layouts.header.profile')
            </div>
        </div>
    </div>
</header>