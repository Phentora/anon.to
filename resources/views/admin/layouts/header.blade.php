<header class="c-header c-header-light c-header-fixed c-header-with-subheader">
    <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
        <i class="fa fa-bars"></i>
    </button>
    <a class="c-header-brand d-lg-none" href="{{ url('/') }}">
        <i class="fa fa-2x fa-user-secret"></i>
    </a>
    <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
        <i class="fa fa-bars"></i>
    </button>
    <ul class="c-header-nav ml-auto mr-4">
        <li class="c-header-nav-item dropdown">
            @auth
                <a class="c-header-nav-link" href="{{ url('/') }}">
                    <div class="c-avatar"><i class="fa fa-home"></i></div>
                </a>
            @endauth
        </li>
    </ul>
</header>
