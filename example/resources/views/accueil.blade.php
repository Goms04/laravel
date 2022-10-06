<!doctype html>
<html lang="en" class="semi-dark">


<!-- Mirrored from codervent.com/dashkote/demo/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Sep 2022 19:32:47 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- loader-->
  <link href="{{asset ('assets/css/pace.min.css')}}" rel="stylesheet" />
  <script src="assets/js/pace.min.js"></script>

  <!--plugins-->
  <link href="{{asset ('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
  <link href="{{asset ('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
  <link href="{{asset ('assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="{{asset ('assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset ('assets/css/bootstrap-extended.css')}}" rel="stylesheet">
  <link href="{{asset ('assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset ('assets/css/icons.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">

{{-- import font awesomme icons --}}
  <link href="{{asset ('fontawesomepro/css/fontawesome.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset ('fontawesomepro/css/solid.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset ('fontawesomepro/css/sharp-solid.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset ('fontawesomepro/css/brands.css')}}" rel="stylesheet" type="text/css">

  <!--Theme Styles-->
  <link href="{{asset ('assets/css/dark-theme.css')}}" rel="stylesheet" />
  <link href="{{asset ('assets/css/semi-dark.css')}}" rel="stylesheet" />
  <link href="{{asset ('assets/css/header-colors.css')}}" rel="stylesheet" />

  <title>Dashkote - Bootstrap5 Admin Template</title>
</head>

<body>


  <!--start wrapper-->
  <div class="wrapper">

    <!--start sidebar -->
    <aside class="sidebar-wrapper" data-simplebar="true">
      <div class="sidebar-header">
        <div>
          <img src="assets/images/logo-icon-2.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
          <h4 class="logo-text">Dashkote</h4>
        </div>
        <div class="toggle-icon ms-auto">
          <ion-icon name="menu-sharp"></ion-icon>
        </div>
      </div>
      <!--navigation-->
      <ul class="metismenu" id="menu">
        <li>
          <a href="{{route('accueil')}}" class="has-arrow">
            <div class="parent-icon">
            </div>
            <div class="menu-title">Accueil</div>
          </a>
        </li>
      </ul>
      <!--end navigation-->
    </aside>
    <!--end sidebar -->

    <!--start top header-->
    <header class="top-header">
      <nav class="navbar navbar-expand gap-3">
        <div class="mobile-menu-button">
          <ion-icon name="menu-sharp"></ion-icon>
        </div>
        <form class="searchbar">
          <div class="position-absolute top-50 translate-middle-y search-icon ms-3">
            <ion-icon name="search-sharp"></ion-icon>
          </div>
          <input class="form-control" type="text" placeholder="Search for anything">
          <div class="position-absolute top-50 translate-middle-y search-close-icon">
            <ion-icon name="close-sharp"></ion-icon>
          </div>
        </form>
        <div class="top-navbar-right ms-auto">

          <ul class="navbar-nav align-items-center">
            <li class="nav-item mobile-search-button">
              <a class="nav-link" href="javascript:;">
                <div class="">
                  <ion-icon name="search-sharp"></ion-icon>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link dark-mode-icon" href="javascript:;">
                <div class="mode-icon">
                  <ion-icon name="moon-sharp"></ion-icon>
                </div>
              </a>
            </li>
            <li class="nav-item dropdown dropdown-large dropdown-apps">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                <div class="">
                  <ion-icon name="apps-sharp"></ion-icon>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                <div class="row row-cols-3 g-3 p-3">
                  <div class="col text-center">
                    <div class="app-box mx-auto bg-gradient-purple text-white">
                      <ion-icon name="cart-sharp"></ion-icon>
                    </div>
                    <div class="app-title">Orders</div>
                  </div>
                  <div class="col text-center">
                    <div class="app-box mx-auto bg-gradient-info text-white">
                      <ion-icon name="people-sharp"></ion-icon>
                    </div>
                    <div class="app-title">Teams</div>
                  </div>
                  <div class="col text-center">
                    <div class="app-box mx-auto bg-gradient-success text-white">
                      <ion-icon name="shield-checkmark-sharp"></ion-icon>
                    </div>
                    <div class="app-title">Tasks</div>
                  </div>
                  <div class="col text-center">
                    <div class="app-box mx-auto bg-gradient-danger text-white">
                      <ion-icon name="videocam-sharp"></ion-icon>
                    </div>
                    <div class="app-title">Media</div>
                  </div>
                  <div class="col text-center">
                    <div class="app-box mx-auto bg-gradient-warning text-white">
                      <ion-icon name="file-tray-sharp"></ion-icon>
                    </div>
                    <div class="app-title">Files</div>
                  </div>
                  <div class="col text-center">
                    <div class="app-box mx-auto bg-gradient-branding text-white">
                      <ion-icon name="notifications-sharp"></ion-icon>
                    </div>
                    <div class="app-title">Alerts</div>
                  </div>
                </div>
              </div>
            </li>

          </ul>

        </div>
      </nav>
    </header>
    <!--end top header-->


    <!-- start page content wrapper-->
    <div class="page-content-wrapper">




        <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="col">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleExtraLargeModal"><i class="fa-solid fa-user-plus"></i>Ajouter un utilisateur</button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleExtraLargeModal" tabindex="-1" aria-hidden="true">
                      <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Ajout de User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                                Contrary to popular belief, Lorem Ipsum is not simply random text.
                                It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up
                                one of the more obscure Latin words, consectetur.
                            </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <form class="ms-auto position-relative">
                    <div class="position-absolute top-50 translate-middle-y search-icon px-3"><ion-icon name="search-sharp"></ion-icon></div>
                    <input class="form-control ps-5" type="text" placeholder="search">
                  </form>
              </div>
              <div class="table-responsive mt-3">
                <table class="table align-middle">
                  <thead class="table-secondary">
                    <tr>
                     <th>Name</th>
                     <th>Address</th>
                     <th>City</th>
                     <th>Pin Code</th>
                     <th>Country</th>
                     <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>James</td>
                      <td>89 Chicago UK</td>
                      <td>Chicago</td>
                      <td>8574201</td>
                      <td>United Kingdom</td>
                      <td>

                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>




    </div>
    <!--end page content wrapper-->


    <!--start footer-->
    <footer class="footer bg-secondary">
      <div class="footer-text ">
        Copyright © 2021. All right reserved.
      </div>
    </footer>
    <!--end footer-->


    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top">
      <ion-icon name="arrow-up-outline"></ion-icon>
    </a>
    <!--End Back To Top Button-->

    <!--start switcher-->
    <div class="switcher-body">
      <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
        <ion-icon name="color-palette-sharp" class="me-0"></ion-icon>
      </button>
      <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false"
        tabindex="-1" id="offcanvasScrolling">
        <div class="offcanvas-header border-bottom">
          <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
          <h6 class="mb-0">Theme Variation</h6>
          <hr>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1">
            <label class="form-check-label" for="LightTheme">Light</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
            <label class="form-check-label" for="DarkTheme">Dark</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDark" value="option3"
              checked>
            <label class="form-check-label" for="SemiDark">Semi Dark</label>
          </div>
          <hr />
          <h6 class="mb-0">Header Colors</h6>
          <hr />
          <div class="header-colors-indigators">
            <div class="row row-cols-auto g-3">
              <div class="col">
                <div class="indigator headercolor1" id="headercolor1"></div>
              </div>
              <div class="col">
                <div class="indigator headercolor2" id="headercolor2"></div>
              </div>
              <div class="col">
                <div class="indigator headercolor3" id="headercolor3"></div>
              </div>
              <div class="col">
                <div class="indigator headercolor4" id="headercolor4"></div>
              </div>
              <div class="col">
                <div class="indigator headercolor5" id="headercolor5"></div>
              </div>
              <div class="col">
                <div class="indigator headercolor6" id="headercolor6"></div>
              </div>
              <div class="col">
                <div class="indigator headercolor7" id="headercolor7"></div>
              </div>
              <div class="col">
                <div class="indigator headercolor8" id="headercolor8"></div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!--end switcher-->


    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

  </div>
  <!--end wrapper-->


  <!-- JS Files-->
  <script src="{{asset ('assets/js/jquery.min.js')}}"></script>
  <script src="{{asset ('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
  <script src="{{asset ('assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
  <script src="{{asset ('assets/js/bootstrap.bundle.min.js')}}"></script>
  <script type="module" src="{{asset ('unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.esm.js')}}"></script>
  <!--plugins-->
  <script src="{{asset ('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
  <script src="{{asset ('assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
  <script src="{{asset ('assets/plugins/chartjs/chart.min.js')}}"></script>
  <script src="{{asset ('assets/js/index.js')}}"></script>
  <!-- Main JS-->
  <script src="{{asset ('assets/js/main.js')}}"></script>

  <script src="{{asset ('fontawesomepro/js/fontawesome.js')}}"></script>
  <script src="{{asset ('fontawesomepro/js/solid.js')}}"></script>
  <script src="{{asset ('fontawesomepro/js/sharp-solid.js')}}"></script>
  <script src="{{asset ('fontawesomepro/js/brands.js')}}"></script>


</body>


<!-- Mirrored from codervent.com/dashkote/demo/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Sep 2022 19:32:48 GMT -->
</html>
