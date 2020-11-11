<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
    <div class="container">
        <h1 class="navbar-brand" href="#">Bothell High School's Computer Science Club</h1>
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
                    <a class="nav-link" href="{{route('projects')}}">Current Projects</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
