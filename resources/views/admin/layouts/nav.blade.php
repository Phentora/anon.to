<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
        <i class="fa fa-2x fa-user-secret"></i>
    </div>
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ url('admin') }}"><i class="c-sidebar-nav-icon fa fa-tachometer-alt"></i> Dashboard</a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ url('admin/links') }}"><i class="c-sidebar-nav-icon fa fa-link"></i> Links</a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ url('admin/redirects') }}"><i class="c-sidebar-nav-icon fa fa-external-link-alt"></i> Redirects</a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ url('admin/reports') }}"><i class="c-sidebar-nav-icon fa fa-file"></i> Reports</a>
        </li>
        <li class="c-sidebar-nav-title">Config</li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ url('admin/users') }}"><i class="c-sidebar-nav-icon fa fa-users"></i> Users</a>
            <a class="c-sidebar-nav-link" href="{{ url('admin/lists') }}"><i class="c-sidebar-nav-icon fa fa-check-square"></i> Allow Lists</a>
        </li>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>
