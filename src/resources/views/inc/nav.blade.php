<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
    <div class="container">
        <a class="navbar-brand" href="#">BHS Computer Science Club</a>
		<a class="navbar-brand" href="events">Events Page</a> <!-- Do we want events on the main part of the top bar, or just on the right?-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}"><img src="imgs/logo.png"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Members</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="events">Events</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
