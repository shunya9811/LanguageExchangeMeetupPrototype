<nav class="navbar navbar-expand-lg navbar-light bg-primary px-md-5 text-white">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="{{ url('/') }}">Language Exchange</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/users') }}">User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/meetup') }}">Meetup</a>
                </li>
            </ul>
        </div>
        <p class='d-none d-lg-block'>username: shunya9811</p>
    </div>
</nav>