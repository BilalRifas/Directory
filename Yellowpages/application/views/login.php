<!-- <!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->
<head>

<style>
    :root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}

body {
  background: #007bff;
  background: linear-gradient(to right, #e6d2cf, #ff6739);
}

.card-signin {
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.64);
  background-color: #908e8e63;
}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 700;
  font-size: 2.5rem;
  font-family: raleway;
  color:#ffffff;
}

.card-signin .card-body {
  padding: 2rem;
}

.form-signin {
  width: 100%;
}

.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  height: auto;
  border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}

.btn-google {
  color: white;
  background-color: #ea4335;
}

.btn-facebook {
  color: white;
  background-color: #3b5998;
}

/* Fallback for Edge
-------------------------------------------------- */

@supports (-ms-ime-align: auto) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input::-ms-input-placeholder {
    color: #777;
  }
}

/* Fallback for IE
-------------------------------------------------- */

@media all and (-ms-high-contrast: none),
(-ms-high-contrast: active) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input:-ms-input-placeholder {
    color: #777;
  }
}
</style>
</head>
<body>

 <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <!-- <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">ARE YOU LOST IN AUSTRALIA?</h1> -->

    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">
          <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center"><b>Login</h5>
            <form class="form-signin">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                <label for="inputPassword">Password</label>
              </div>

               
                <a href><label >No account? SignIn</label></a><br>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Login</button>
              <!-- <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button> -->
            </form>
          </div>
        </div>

        </div>
      </div>
    </div>

       <!--  <h2 class="text-white-50 mx-auto mt-2 mb-5">A free, responsive, one page Bootstrap theme created by Start Bootstrap.</h2>
        <a href="#about" class="btn btn-primary js-scroll-trigger">Get Started</a> -->
      </div>
    <!-- </div> -->
  </header>

<!-- <div class="container">
    <div class="row"><br><br><br>
        <div class="col-sm-9 col-md-4 col-lg-3 mx-auto"></div>
      <div class="col-sm-9 col-md-4 col-lg-6 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center"><b>Login In</h5>
            <form class="form-signin">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                <label for="inputPassword">Password</label>
              </div>

               
                <a href><label >No account? SignIn</label></a><br>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Login</button>
              <!-- <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button> -->
         <!--    </form>
          </div>
        </div>
      </div>
        <div class="col-sm-9 col-md-4 col-lg-3 mx-auto"></div>

    </div>
  </div>  -->

<!-- <div class="container">
    <div class="row">
        <div class="col-md-6">
            <nav class="navbar navbar-light bg-light">
                </br>    
                <div class="form-group row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2"></div>

                    <div class="col-md-2">

                        <form action="/Yellowpages/index.php/YellowpagesController/SignInButton" method="GET">
                        <button class="btn btn-primary" type="submit" name="signInButton">Sign-in</button></form>         
                    </div>
                        
                    <div class="col-md-2">
                        <form action="/Yellowpages/index.php/YellowpagesController/LoginButton" method="GET">
                        <button class="btn btn-primary" type="submit" name="loginButton">Login</button>
                        </form>
                    </div>
                </div>

            </nav>

            <h2>ARE YOU LOST IN AUSTRALIA?</h2>
            
            <nav class="navbar navbar-light bg-light">
                        <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search Place" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
            </nav>
            <div class="col-md-4">
                <form action="/Yellowpages/index.php/YellowpagesController/ShowDashboard" method="POST">
                    <div class="form-group">
                                      
                        <h3>TODO TASK:</h3>       
   
                <input type="text" class="form-control" name="TODOACTION" placeholder="Search Place" id="TODOACTION">
                    </div>
                    <input type="submit" class="form-control" value="Add Action">
                    </br>

                </form>

                 <form action="/Yellowpages/index.php/YellowpagesController/ShowTodos" method="GET">

                        <input type="submit" class="form-control" name="empty" value="Show Todos">

                 </form>       
            </div>
        </div>
    </div>
</div> -->
</body>
</html>