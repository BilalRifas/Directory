<head>

<style>
    :root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}

body {
  /*background: #007bff;*/
  /*background: linear-gradient(to right, #e6d2cf, #ff6739);*/
}

.masthead{
    height:185vh;
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

.col-form-label {
    font-size: 23px;
    color: white;
    font-family: raleway;
    font-weight: 600;
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
    <div class="container d-flex h-100 align-items-center" style="height: 114%!important;">
      <!-- <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">ARE YOU LOST IN AUSTRALIA?</h1> -->

    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">
          <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Add Business</h5>
            <form class="form-signin">
               <div class="form-group row">  
              <label class="col-sm-5 col-form-label">Business Name :</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="businessName" placeholder="Business Name">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-5 col-form-label">Address :</label>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label"></label>
    <label class="col-sm-3 col-form-label">No :</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="businessAddress" placeholder="No">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label"></label>
    <label class="col-sm-3 col-form-label">Street :</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="businessAddress" placeholder="Street">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label"></label>
    <label class="col-sm-3 col-form-label">City :</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="businessAddress" placeholder="City">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label"></label>
    <label class="col-sm-3 col-form-label">State :</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="businessAddress" placeholder="State">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-5 col-form-label">Phone :</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="businessAddress" placeholder="Phone">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-5 col-form-label">Email :</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="businessAddress" placeholder="Email">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-5 col-form-label">Website :</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="businessAddress" placeholder="Website">
    </div>
  </div>
  
  
  <div class="form-group row">
    <label class="col-sm-5 col-form-label">Open Time :</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="businessAddress" placeholder="Open Time">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-5 col-form-label">Business Type :</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="businessAddress" placeholder="Business Type">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-5 col-form-label">Logo :</label>
    
    <fieldset>
        <input type="file" name="picture" id="picture" />
    </fieldset>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Add business</button>
    </div>
  </div>
            </form>
          </div>
        </div>

        </div>
      </div>
    </div>   
</div>
</header>




<!-- <div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Add your business here</h1></br>


<form>
  <div class="form-group row">
    <label class="col-sm-5 col-form-label">Business Name :</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="businessName" placeholder="Business Name">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-5 col-form-label">Address :</label>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label"></label>
    <label class="col-sm-3 col-form-label">No :</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="businessAddress" placeholder="No">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label"></label>
    <label class="col-sm-3 col-form-label">Street :</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="businessAddress" placeholder="Street">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label"></label>
    <label class="col-sm-3 col-form-label">City :</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="businessAddress" placeholder="City">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label"></label>
    <label class="col-sm-3 col-form-label">State :</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="businessAddress" placeholder="State">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-5 col-form-label">Phone :</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="businessAddress" placeholder="Phone">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-5 col-form-label">Email :</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="businessAddress" placeholder="Email">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-5 col-form-label">Website :</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="businessAddress" placeholder="Website">
    </div>
  </div>
  
  
  <div class="form-group row">
    <label class="col-sm-5 col-form-label">Open Time :</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="businessAddress" placeholder="Open Time">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-5 col-form-label">Business Type :</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="businessAddress" placeholder="Business Type">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-5 col-form-label">Logo :</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="businessAddress" placeholder="Logo">
    </div>

    <fieldset>
        <input type="file" name="picture" id="picture" />
    </fieldset>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Add business</button>
    </div>
  </div>
</form> -->



           
           <!--  <div class="col-md-4">
                <form action="/Yellowpages/index.php/YellowpagesController/ShowDashboard" method="POST">
                    <div class="form-group">
                                      
                        <h3>TODO TASK:</h3>   
                <h3>Business name:</h3>
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