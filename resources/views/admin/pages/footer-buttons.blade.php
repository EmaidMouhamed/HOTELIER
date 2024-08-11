<div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <form method="POST" class="d-inline-block" action="{{ route('admin.logout') }}">
        @csrf
        <a data-toggle="tooltip" data-placement="top" title="Logout" href=""
            onclick="event.preventDefault();this.closest('form').submit();">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
    </form>
</div>

