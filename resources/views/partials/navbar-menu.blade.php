<div id="navbar-menu" class="closed">
    <div id="close-navbar-menu-button" class="pull-left">
        <a href="javascript:void(0)"><i class="fa fa-close fa-2x"></i></a>
    </div>
    <div class="navigation">

        <ul id="nav-menu-items">

            <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/" class="btn btn-lg">Home <span class="sr-only">(current)</span></a></li>
            <li class="{{ Request::is('about') ? "active" : "" }}"><a href="/about" class="btn btn-lg">About</a></li>
            <li class="{{ Request::is('portfolio') ? "active" : "" }}"><a href="/portfolio" class="btn btn-lg">Portfolio</a></li>
            <li class="{{ Request::is('blog') ? "active" : "" }}"><a href="/blog" class="btn btn-lg">Blog</a></li>
            <li class="{{ Request::is('contacts') ? "active" : "" }}"><a href="/contacts" class="btn btn-lg">Contacts</a></li>

        </ul>
    </div>
</div>