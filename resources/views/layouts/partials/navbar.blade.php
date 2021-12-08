<nav class="navbar navbar-expand-lg navbar-light fixed-top bg ">
    <div class="container ">
        <a class="navbar-brand" href="index.php">
            <img src="img/logo1.png" style="width: 200px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link {{ ($title=="Home")? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title=="About")? 'active' : '' }}" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title=="Gallery")? 'active' : '' }}" href="/gallery">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary tombol" href="/commission">Commission</a>
            </li>
            </ul>
        </div>
    </div>
</nav>