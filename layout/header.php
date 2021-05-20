<div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-md navbar-light bg-primary">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <span class="navbar-text text-light">
                    Selamat datang <?php echo $_SESSION["user"]["email"] ?> <a class="text-danger" href="admin/logout.php"> Logout</a>
                </span>
              </ul>
            </div>
          </div>
        </nav>