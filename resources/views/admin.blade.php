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
                <a href="https://ws.graze.letz.dev">
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
              <li class="">
                <a href="{{ route("logout") }}">
                  <i class="menu-icon mdi mdi-account-arrow-left"></i
                  ><span>Logout</span>
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
                      ><i class="mdi mdi-menu"></i
                    ></a>
                  </li>
                  <li style="top: 18px">
                    <span onclick="window.location='https://ws.graze.letz.id/'"
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
                        <h4 class="mt-0 header-title">Set Up List</h4>
                        <center>
                          Halo <b>{{$admin}}</b>, Mau handle berapa file hari ini?
                        </center>
                        <br />

                        <div class="row clearfix">
                          <div class="col-md-12">
                            <form class="form-horizontal" action="{{ route("set") }}" method="post">
                              @csrf
                              <div class="form-group">
                                <label
                                  for="inputUser"
                                  class=" control-label"
                                  >Jumlah File</label
                                >
                                <div class="row">
                                  <div class="col-9 ">
                                    <input
                                      type="text"
                                      name="slot"
                                      class="form-control"
                                      id="inputUser"
                                      placeholder=""
                                      value=""
                                    />
                                  </div>
                                  
                                  <div class="col-2">
                                    <button
                                      type="submit"
                                      id="save"
                                      name="act"
                                      value="Simpan"
                                      class="btn btn-success label-left b-a-0 waves-effect waves-light"
                                    >
                                      Set
                                    </button>
                                  </div>
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
                          Yang sudah terlist di <b>List Worker</b>, akan
                          dihubungi admin <i>@graze_404</i>.
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
                                  <th>No. Payment</th>
                                  <th>E-Wallet</th>
                                  <th>Status</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody id="users-list">
                                @foreach($users as $user)
                                    <tr class="d-none d-sm-table-row">
                                        <td><a href="t.me/{{ $user->username }}">{{ $user->username }}</a></td>
                                        <td>{{ $user->file }}</td>
                                        <td>{{ $user->nomor }}</td>
                                        <td>{{ $user->jenis }}</td>
                                        <td>
                                          <span class="badge {{ $badgeClass = $user->status === 'Pending' ? 'text-bg-secondary' : ($user->status === 'Done' ? 'text-bg-success' : 'text-bg-primary'); }}" style="width: 72px; color: #fff"> {{ $user->status }} </span>                                        </td>

                                        <td>
                                            <div class="btn-group" role="group">
                                              <a href="#" class="btn btn-warning editForm" type="button" data-bs-toggle="modal" data-bs-target="#editForm{{ $user->id }}"><i class="mdi mdi-note-edit"></i></a>
                                              <form action="{{route('statDelete', ['user' => $user->id])}}" enctype="multipart/form-data" method="post">
                                                @method("DELETE")
                                                @csrf
                                              <button type="submit" class="btn btn-danger"><i class="mdi mdi-delete-forever"></i></button>
                                              </form>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="mdi mdi-note-check"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                      <form action="{{route('statDone', ['user' => $user->id])}}" enctype="multipart/form-data" method="post">
                                                            @method("PUT")
                                                            @csrf
                                                            <li><button type="submit" class="dropdown-item text-success" href="">Done</button></li>
                                                      </form>
                                                      <form action="{{route('statPaid', ['user' => $user->id])}}" enctype="multipart/form-data" method="post">
                                                        @method("PUT")
                                                        @csrf
                                                        <li><button class="dropdown-item text-primary" href="/status/$user->id/paid">Paid</button></li>
                                                      </form>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- /Modal edit -->
                                    <div class="modal fade" id="editForm{{ $user->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                            <form action="{{ route("dataUpdate", ["user"=>$user->id]) }}" method="POST">
                                              @method("PUT")
                                              @csrf
                                              <div class="form-floating mb-3">
                                                <input type="text" class="form-control" name="file" id="floatingInput" placeholder="File" value="{{ $user->file }}">
                                                <label for="floatingInput">File</label>
                                              </div>
                                              <div class="form-floating mb-3">
                                                <input type="text" class="form-control" name="nomor" id="floatingInput" placeholder="08xxxx" value="{{ $user->nomor }}">
                                                <label for="floatingInput">Nomor</label>
                                              </div>
                                              <div class="form-floating mb-1">
                                                <input type="text" class="form-control" name="jenis" id="floatingInput" placeholder="Dana" value="{{ $user->jenis }}">
                                                <label for="floatingInput">Jenis Payment</label>
                                              </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                          </form>
                                        </div>
                                      </div>
                                  </div>
                                @endforeach
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
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody id="users-list-xs">
                                @foreach($users as $user)
                                <tr class="d-sm-none">
                                    <th scope="row">
                                        <span style="font-weight: 400"><a href="t.me/{{ $user->username }}">{{ $user->username }}</a><br />{{ $user->file }}<br>{{ $user->nomor }}<br>{{ $user->jenis }}</span>
                                    </th>
                                    <td>
                                      <span class="badge {{ $badgeClass = $user->status === 'Pending' ? 'text-bg-secondary' : ($user->status === 'Done' ? 'text-bg-success' : 'text-bg-primary'); }}" style="width: 72px; color: #fff"> {{ $user->status }} </span>                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                          <a href="#" class="btn btn-warning editForm" type="button" data-bs-toggle="modal" data-bs-target="#editFormSm{{ $user->id }}"><i class="mdi mdi-note-edit"></i></a>
                                          <form action="{{route('statDelete', ['user' => $user->id])}}" enctype="multipart/form-data" method="post">
                                            @method("DELETE")
                                            @csrf
                                          <button type="submit" class="btn btn-danger"><i class="mdi mdi-delete-forever"></i></button>
                                          </form>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-note-check"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <form action="{{route('statDone', ['user' => $user->id])}}" enctype="multipart/form-data" method="post">
                                                        @method("PUT")
                                                        @csrf
                                                        <li><button type="submit" class="dropdown-item text-success" href="">Done</button></li>
                                                    </form>
                                                    <form action="{{route('statPaid', ['user' => $user->id])}}" enctype="multipart/form-data" method="post">
                                                      @method("PUT")
                                                      @csrf
                                                      <li><button class="dropdown-item text-primary" href="/status/$user->id/paid">Paid</button></li>
                                                    </form>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                 <!-- /Modal edit -->
                                 <div class="modal fade" id="editFormSm{{ $user->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered modal-sm">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <form action="{{ route("dataUpdate", ["user"=>$user->id]) }}" method="POST">
                                          @method("PUT")
                                          @csrf
                                          <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="file" id="floatingInput" placeholder="File" value="{{ $user->file }}">
                                            <label for="floatingInput">File</label>
                                          </div>
                                          <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="nomor" id="floatingInput" placeholder="08xxxx" value="{{ $user->nomor }}">
                                            <label for="floatingInput">Nomor</label>
                                          </div>
                                          <div class="form-floating mb-1">
                                            <input type="text" class="form-control" name="jenis" id="floatingInput" placeholder="Dana" value="{{ $user->jenis }}">
                                            <label for="floatingInput">Jenis Payment</label>
                                          </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                              
                            @endforeach
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
    
    <!-- jQuery  -->
    <script src="plugins/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="plugins/js/bootstrap.min.js"></script>
    <script src="plugins/js/jquery.slimscroll.min.js"></script>
    <script
      src="https://kit.fontawesome.com/73fc2df129.js"
      crossorigin="anonymous"
    ></script>

    <!--ajax load form-->
    <script>
      window.addEventListener("DOMContentLoaded", (event) => {
        // function loadEditForm(id) {
        //   let url = '{{ route("dataEdit", ["user"=>":id"]) }}';
        //   url = url.replace(':id', id);

        //   $("#popup").load(url);
        // }
        // $(function (){
        //     $('.editForm').click(function (){
        //     $('#editForm').modal('show');
        //     });
        // });
        // $(document).on('click', '.editForm', function() {
        //   $('#myModal').modal('show');
        // });
      });
      </script>
      

    <!-- Custom Js   -->
    <script src="plugins/js/style.js"></script>
  </body>
</html>
