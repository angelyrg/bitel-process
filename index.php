<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <!-- <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2"> -->
    <title>Process template</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- Ez-Plus plugging -->
    <script type="text/javascript" src="https://cdn.rawgit.com/igorlino/elevatezoom-plus/1.1.6/src/jquery.ez-plus.js"></script>
    
    <!-- Custom styles for this template -->
    <link href="assets/css/dashboard.css" rel="stylesheet">
    <link href="assets/css/menu.css" rel="stylesheet">
    

  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="./">Bitel</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100 rounded-0 border-0" type="hidden" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="#"></a>
      </div>
    </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">

        <!-- Dashboard menu -->
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
        </ul>
        <!-- / Dashboard menu -->

        <!-- Menu -->
        <aside id="layout-menu " class="col-md-3  d-flex ">

          <!-- Jquery Accordion Menú -->
          <div id="jquery-accordion-menu" class="green jquery-accordion-menu flex-fill">

              <div class="jquery-accordion-menu-header">Menú</div>
              <ul>
                  <li class="active"><a href="#"><i class="fa-solid fa-house"></i> Home </a></li>
                  <li><a href="#"><i class="fa fa-cogs"></i>Core Telco </a>
                      <ul class="submenu">
                          
                          <li><a href="#">Basic Telecom Processes </a>
                              <ul class="submenu">
                                  <li><a href="#">IT Management </a>
                                      <ul class="submenu">
                                          <li><a href="#">Development</a>
                                              <ul class="submenu">
                                                  <li><a href="#" class="click" id="Massive_LL"> Test Process </a></li>
                                                  <li><a href="#" class="click" id="Project_LL_OW_VPN"> User Acceptance Testing</a></li>
                                              </ul>
                                          </li>
                                      </ul>
                                  </li>

                                  <li><a href="#">Network Management</a>
                                      <ul class="submenu">
                                          <li><a href="#">Network setup / spread</a>
                                              <ul class="submenu">
                                                  <li><a href="#" class="click" id="Diagram_1">Receiving Device and Test</a></li>
                                                  <li><a href="#" class="click" id="Kenh_truyen_massive">Admission Process</a></li>
                                              </ul>
                                          </li>
                                      </ul>
                                  </li>
                              </ul>
                          </li>

                          <li><a href="#">L02 </a>
                              <ul class="submenu">
                                  <li><a href="#">L03 </a></li>
                              </ul>
                          </li>

                      </ul>
                  </li>
                  
              </ul>
              <div class="jquery-accordion-menu-footer"> </div>
          </div>
          <!-- / Jquery Accordion Menú -->
        </aside>
        <!-- / Menu -->


      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Process</h1>
        <!-- <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
          </button>
        </div> -->
      </div>




      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

      <!-- Imagen without Zoom -->
      
      <!-- <img src="assets/img/Kenh_truyen_massive.png" id="process_image" width="70%"  data-bs-toggle="modal" data-bs-target="#exampleModal"> -->

      <!-- Imagen with Zoom -->
      <img src="assets/img/Kenh_truyen_massive.png" data-zoom-image="assets/img/Kenh_truyen_massive.png" id="process_image" width="70%" data-bs-toggle="modal" data-bs-target="#exampleModal">


      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Process</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img src="assets/img/Kenh_truyen_massive.png" id="process_image" width="100%" >
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>


    </main>
  </div>
</div>

    <!-- <script src="../assets/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <!-- <script src="assets/js/dashboard.js"></script> -->
    <script src="assets/js/menu.js"></script>
    <script src="assets/js/change-images.js "></script>

    
  </body>
</html>
