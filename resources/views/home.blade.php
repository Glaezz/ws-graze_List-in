<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Glaezz. - Graze. | List-in" />
    <meta name="author" content="Glaezz." />

    <!-- Site Title -->
    <title>List-in</title>

    <!-- Site favicon -->
    <link
      rel="icon"
      href="glaezz.png"
      type="image/x-icon"
    />

    <!-- Bootstrap core CSS -->
    <link
      rel="stylesheet"
      href="plugins/css/bootstrap.min.css"
      type="text/css"
    />

    <!-- Responsive Table -->
    <link
      href="plugins/css/rwd-table.min.css"
      type="text/css"
      media="screen"
      rel="stylesheet"
    />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="plugins/css/style.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css
      "
      type="text/css"
    />
  </head>
  <body>
    <!-- Page Container -->
    <div class="page-container">
      <!-- Page Sidebar -->
      <div class="page-sidebar">
        <a class="logo-box" href="ws.graze.letz.dev">
          <span>
            <img
              src="glaezz.png"
              id="fixed-sidebar-toggle-button"
              height="30px"
            />
            <span>List-in</span>
          </span>

          <i class="mdi mdi-close" id="sidebar-toggle-button-close"></i>
        </a>
        <div class="page-sidebar-inner">
          <div class="page-sidebar-menu">
            <ul class="accordion-menu">
              <li class="active-page">
                <a href="https://ws.graze.letz.dev/">
                  <i class="menu-icon mdi mdi-home"></i><span>Home</span>
                </a>
              </li>
              <li class="menu-divider"></li>
              <li class="">
                <a href="https://t.me/graze_404">
                  <i class="menu-icon mdi mdi-card-account-details"></i
                  ><span>Contact</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- /Page Sidebar -->

      <!-- Page Content -->
      <div class="page-content">
        <!-- Page Header -->
        <div class="page-header">
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <div class="logo-sm">
                  <a href="javascript:void(0)" id="sidebar-toggle-button"
                    ><i class="fa fa-bars"></i
                  ></a>
                </div>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->

              <div
                class="collapse navbar-collapse"
                id="bs-example-navbar-collapse-1"
              >
                <ul class="nav navbar-nav d-res-none-full">
                  <li>
                    <a
                      href="javascript:void(0)"
                      id="collapsed-sidebar-toggle-button"
                      ><i class="fa fa-bars"></i
                    ></a>
                  </li>
                  <li style="top: 18px">
                    <span onclick="window.location='https://ws.graze.letz.dev/'"
                      >Home &#187;</span
                    >
                  </li>
                </ul>
              </div>
              <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
          </nav>
        </div>
        <!-- /Page Header -->
        <!-- Page Inner -->
        <div class="page-inner">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
              <div id="main-wrapper">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="panel mb-0">
                      <div class="panel-body">
                        <h4 class="mt-0 header-title">Request List</h4>
                        <center>
                          
                          Max list di <b>List Worker</b> hanya
                          {{$works->slot}}, akan ada slot kosong jika ada yang
                          gagal! 
                        </center>
                        <br />

                        <div class="row clearfix">
                          <div class="col-md-12">
                            <form class="form-horizontal" action="{{ route("workAdd") }}" method="post">
                              @csrf
                              <div class="form-group">
                                <label
                                  for="inputUser"
                                  class="col-sm-5 control-label"
                                  >Username Telegram</label
                                >
                                <div class="input-group col-sm-10 mb-3">
                                  <span class="input-group-text" id="basic-addon1">@</span>
                                  <input type="text" class="form-control" placeholder="Username" name="username" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                              </div>

                              <div class="form-group">
                                <div class="col-sm-12 text-right">
                                  <button
                                    type="submit"
                                    id="save"
                                    name="take"
                                    class="btn btn-success label-left b-a-0 waves-effect waves-light"
                                  >
                                    Take Slot
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <br />

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
              <div id="main-wrapper">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="panel mb-0">
                      <div class="panel-body">
                        <h4 class="mt-0 header-title">List Worker</h4>
                        <center>
                          Yang sudah terlist di <b>List Worker</b>, silahkan chat telegram <i> <a href="t.me/graze404">@graze_404</a></i>.
                          <br />
                          <span class="text-danger"
                            ><b>Peringatan! Jika dalam 10 menit sejak start
                            <b>Tiada Kabar/No Respon/Read Only, maka akan
                            dianggap Gagal!</b>
                          </span>
                        </center>
                        <br>
                        
                        <span class="text-secondary">Date: <i>{{ $works->created_at }}</i></span>
                        
                        <br />
                        <div id="table-rep-plugin" class="d-none d-sm-block">
                          <div
                            class="table-responsive"
                            data-pattern="priority-columns"
                          >
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th>Username</th>
                                  <th>File</th>
                                  <th>Status</th>
                                </tr>
                              </thead>
                              <tbody id="users-list">
                                <!-- replaced data here -->
                              </tbody>
                            </table>
                          </div>
                        </div>

                        <div id="table-rep-plugin">
                          <div class="" data-pattern="priority-columns">
                            <table
                              class="table table-striped table-responsive d-sm-none"
                            >
                              <thead>
                                <tr>
                                  <th>Detail</th>
                                  <th>Status</th>
                                </tr>
                              </thead>
                              <tbody id="users-list-xs">
                                <!-- replaced data xs here -->
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          @foreach ($errors as $error) 
          <div class="alert alert-warning alert-dismissible fade show position-fixed top-0 end-0" role="alert">
            <span class="w-25 me-5 p-3">{{ $error->error }}</span>
            <button type="button" class="btn-close ms-5" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endforeach
          <div class="page-footer">
            <p style="text-align: center !important">
              Copyright &copy;2024 Graze. | Glaezz.
            </p>
          </div>
        </div>
      </div>
      <!-- /Page Content -->
    </div>
    <!-- /Page Container -->
    

    <!-- jQuery  -->
    <script src="plugins/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="plugins/js/bootstrap.min.js"></script>
    <script src="plugins/js/jquery.slimscroll.min.js"></script>
    <script
      src="https://kit.fontawesome.com/73fc2df129.js"
      crossorigin="anonymous"
    ></script>
    
    

    <!--ajax realtime-->
    <script type="text/javascript">
      $(document).ready( function(){
        setInterval( function(){
          $("#users-list").load("{{ route("userRead") }}");
          $("#users-list-xs").load("{{ route("userRead") }}");
        }, 1000);
      });
    </script>

    
    <!-- Custom Js   -->
    <script src="plugins/js/style.js"></script>
  </body>
</html>
