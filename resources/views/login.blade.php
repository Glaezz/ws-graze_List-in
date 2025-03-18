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
      href="/plugins/css/bootstrap.min.css"
      type="text/css"
    />

    <!-- Responsive Table -->
    <link
      href="/plugins/css/rwd-table.min.css"
      type="text/css"
      media="screen"
      rel="stylesheet"
    />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="../plugins/css/style.css" />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css
      "
      type="text/css"
    />
  </head>
  <body>
    <!-- Login page -->
    <div class="account-background">
      <div class="account-table">
        <div class="account-table-cell">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-4 col-lg-offset-4">
                <div class="bg-form p-4 mt-5 rounded">
                  <div class="text-center h1 fw-bolder">
                    <center>
                      <!-- <img
                        src="../glaezz.png"
                        class="img-responsive"
                        width="250px"
                      /> -->
                      Login
                    </center>
                  </div>
                  <form action="{{ Route("in") }}" class="login_account" method="post">
                    @csrf
                    <div class="row">
                      <div class="col-lg-12 mt-2">
                        <label for="inputUser" class="col-sm-2 control-label">Username</label>
                        <input
                          type="text"
                          name="name"
                          class="form-control"
                          placeholder="Username"
                          required=""
                          style="color: #000"
                        />
                      </div>
                      <div class="col-lg-12 mt-2">
                        <label for="inputUser" class="col-sm-2 control-label">Password</label>
                        <input
                          type="password"
                          name="password"
                          class="form-control"
                          style="color: #000"
                          placeholder="Password"
                        />
                      </div>

                      <div class="col-lg-12 mb-2 mt-3">
                        <input
                          type="submit"
                          name="submit"
                          class="btn btn-success w-100"
                          value="Login"
                        />
                      </div>
                    </div>
                  </form>
                  <!-- <div>
                                        <p style="text-align: right;"><a href="https://okeconnect.com/forgot-password"  style="color: white;" >Reset password ?</a></p>
                                    </div>-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Login Page -->

    <!-- jQuery  -->
    <script src="/plugins/js/jquery.min.js"></script>
    <script src="/plugins/js/bootstrap.min.js"></script>
    <script src="/plugins/js/jquery.slimscroll.min.js"></script>
    <script
      src="https://kit.fontawesome.com/73fc2df129.js"
      crossorigin="anonymous"
    ></script>

    <!--Morris Chart-->

    <!-- Custom Js   -->
    <script src="../plugins/js/style.js"></script>
  </body>
</html>
