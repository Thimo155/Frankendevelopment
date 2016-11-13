<nav class="navbar navbar-default">
  <a class="navbar-brand" href="www.frankendevelopment.nl">Franken Webdevelopment</a>
  <div class="CenteredContainer">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <?php
                if($_GET['p'] == 'Home') { print('<li class="active"><a href="?p=Home">Home</a></li>'); } else { print('<li><a href="?p=Home">Home</a></li>'); }
				if($_GET['p'] == 'Portfolio')  { print('<li class="active"><a href="?p=Portfolio">Portfolio</a></li>'); } else { print('<li><a href="?p=Portfolio">Portfolio</a></li>'); }
				if($_GET['p'] == 'Webhost') { print('<li class="active"><a href="?p=Webhost">Webhosting</a></li>'); } else { print('<li><a href="?p=Webhost">Webhosting</a></li>'); }
				if($_GET['p'] == 'Contact') { print('<li class="active"><a href="?p=Contact">Contact</a></li>'); } else { print('<li><a href="?p=Contact">Contact</a></li>'); }
				if($_GET['p'] == 'Reviews') { print('<li class="active"><a href="?p=Reviews">Reviews</a></li>'); } else { print('<li><a href="?p=Reviews">Reviews</a></li>'); }
                ?>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CMS<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Wordpress</a></li>
                    <li><a href="#">Joomla!</a></li>
                    <li><a href="#">Drupal</a></li>
                  </ul>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
                <li><a href="#" data-toggle="modal" data-target="#Register">Registreer</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
  </div>
  </nav>
