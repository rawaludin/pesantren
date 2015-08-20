<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Pesantren</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav">
        <li><a href="#">Playlist</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::check())
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }} <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="/home">Dashboard</a></li>
              <li><a href="#">Ubah Password</a></li>
              <li><a href="/auth/logout">Logout</a></li>
            </ul>
          </li>
        @else
          <li><a href="/auth/login">Sign in</a></li>
          <li><a href="/auth/register">Register</a></li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>
