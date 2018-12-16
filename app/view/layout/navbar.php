<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-warning">
    <a class="navbar-brand" href="#"><i class="fas fa-play-circle pr-2 ml-3 text-success"></i>Zug Babanın yeri</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo URL;?>">Home</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" method="get" action="<?php echo URL.'/search/movie/';?>">
            <input class="form-control mr-sm-2" name="moviename" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-warning" type="submit">Search</button>
        </form>
    </div>
</nav>