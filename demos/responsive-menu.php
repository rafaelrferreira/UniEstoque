<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Responsive Menu</title>
</head>
<body>
    <header class="header-internas">
        <!-- Fixed navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Alternar Navegação</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="home">meusite</a>
            </div>
            <nav class="navbar-collapse collapse">
                <div class="menu-fixed-menu-container">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                          <a href="#" type="button" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            Dropdown <span class="caret"></span>
                          </a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Menu 1</a></li>
                            <li><a href="#">Menu 2</a></li>
                            <li><a href="#">Menu 3</a></li>
                          </ul>
                        </li>
                        <li><a href="#">Menu 2</a></li>
                        <li><a href="#">Menu 3</a></li>
                        <li><a href="#">Menu 4</a></li>
                    </ul>
                </div>
            </nav><!--/.nav-collapse -->
          </div>
        </div>
    </header>

  <script src="../assets/libs/jquery/jquery-1.11.1.min.js"></script>
  <script src="../assets/libs/bootstrap/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../assets/libs/bootstrap/bootstrap.min.css">
</body>
</html>
