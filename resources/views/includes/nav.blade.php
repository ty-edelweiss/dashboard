<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarEexample">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Research Dashboard</a>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{ Request::segment(1) == 'sources' ? 'active' : '' }}">
                    <a href="/sources">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                        Sources
                    </a>
                </li>
                <li class="{{ Request::segment(1) == 'charts' ? 'active' : '' }}">
                    <a href="/charts">
                        <span class="glyphicon glyphicon-stats" aria-hidden="true"></span>
                        Charts
                    </a>
                </li>
                <li class="{{ Request::segment(1) == 'explore' ? 'active' : '' }}">
                    <a href="/explore">
                        <span class="glyphicon glyphicon-flash" aria-hidden="true"></span>
                        Explore
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ Request::segment(1) == 'settings' ? 'active' : '' }}">
                    <a class="icon-anchor" href="/settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
