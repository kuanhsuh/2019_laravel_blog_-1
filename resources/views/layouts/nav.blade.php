<!-- Navigation -->
<nav
class="navbar navbar-expand-lg navbar-light fixed-top"
id="mainNav"
>
<div class="container">
    <a class="navbar-brand" href="index.html">Start Bootstrap</a>
    <button
        class="navbar-toggler navbar-toggler-right"
        type="button"
        data-toggle="collapse"
        data-target="#navbarResponsive"
        aria-controls="navbarResponsive"
        aria-expanded="false"
        aria-label="Toggle navigation"
    >
        Menu
        <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <span class="text-white">Welcome, {{ auth()->user()->name}}</span>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
            </li>
            @if (auth()->check())
            <li class="nav-item">
                <a class="nav-link" href="/posts/create">New Post</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/categories/">Categories</a>
            </li>
            <li class="nav-item">
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="nav-link">Logout</button>
                </form>
            </li>
            @endif
            @if (!auth()->check())
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Register</a>
                </li>
            @endif
        </ul>
    </div>
</div>
</nav>
