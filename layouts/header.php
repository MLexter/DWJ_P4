<header>
    <nav id="navbar-responsive" class="navbar navbar-expand-lg">
        <div id="logo_site_container">
            <a class="navbar-brand" href="<?= HOST ?>">

                <h1 id="logo_site_name">JEAN FORTEROCHE</h1>
                <h2 id="sub_logo_title">Le blog de l'auteur</h2>
            </a>
        </div>
        <div id="header-menu_content">

            <button id="button-navbar-responsive" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"> <img src="public/images/svg/bars-solid.svg" alt="phone-menu"> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-lg-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= HOST . '' ?>">Accueil<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= HOST . 'book' ?>">Livre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= HOST . 'about' ?>">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= HOST . 'contact' ?>">Contact</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</header>



<!-- VOIR SAISIE SCRIPT BOOTSTRAP -->
<!-- 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav> -->