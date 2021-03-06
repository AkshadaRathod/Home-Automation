<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MIT_LOGIN</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
         <img src="download.png" alt="">&nbsp;&nbsp;
        <a class="navbar-brand" href="#">MIT-SOE</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
            <button type="button" class="btn btn-info" ><a href="index.html" style="color: white">Home</a></button>
            </li>&nbsp;
<!--             <li><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="btn btn-info">Login</button></li> -->
            <li ><button onclick="document.getElementById('id02').style.display='block'" style="width:auto;" class="btn btn-info">User</button></li>
           
          </ul>
        </div>
      </div>
    </nav>
</br>
</br>
</br>
</br>
<!-- <h2> Login Form</h2> -->

<!--   <div class="wrapper">
    <form class="form-signin">       
      <h2 class="form-signin-heading">Please login</h2>
      <input type="text" class="form-control" name="username" placeholder="Email Address" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" />
<button class="btn btn-info" >LOGIN</button>
  </form>
  </div> -->

 <button class="btn btn-info" onclick="toggler('myContent');">LOGIN</button></div>




<div id="id02" class="modal">
  <form class="modal-content animate" action="" method="get">
    <div class="container">

      <br>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li><a href="#user" role="tab" data-toggle="tab" class="big">User Login</a>
        </li>&nbsp;&nbsp;
        <li class="active"><a href="#new" role="tab" data-toggle="tab" class="big">Card Login</a>
        </li>
        
      </ul>
    <div class="tab-content">

        <div class="tab-pane fade" id="user">
          <br>
          <fieldset>
            <div class="form-group">
              <div class="right-inner-addon">
                <i class="glyphicon glyphicon-envelope"></i>
                <input class="form-control input-lg" placeholder="Email Address" type="text">
              </div>
            </div>
            <div class="form-group">
              <div class="right-inner-addon">
                <i class="glyphicon glyphicon-lock"></i>
                <input class="form-control input-lg" placeholder="Password" type="password">
              </div>
            </div>
          </fieldset>
          <br><div class=" text-center">
          <button class="btn btn-info" onclick="toggler('myContent');">LOGIN</button></div>

        </div>

        <div class="tab-pane fade in active" id="new">
          <br>
          <fieldset>
            <div class="form-group">
              <div class="right-inner-addon">
                <i class="glyphicon glyphicon-envelope"></i>
                <input class="form-control input-lg" placeholder="Swipe Your Card for login" type="text">
              </div>
            </div>
                 
          </fieldset>
        </div>
    </div>
 
  
    </div>

  </form>
</div>

<!-- <div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
   

    <div class="container">

      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" class="btn btn-info">Login</button>
     
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-info">Cancel</button>
    </div>
  </form>
</div> -->
    <!-- Page Content -->
<div class="container" >
  <div class="hidden" id="myContent">

      <!-- Page Heading -->
      <h1 class="my-4"><center>SMART LEARNING ENVIROMENT</center>
        <!-- <small>Secondary Text</small> -->
      </h1>

      <div class="row">
        <div class="col-lg-3 col-sm-6 portfolio-item">
          <div class="card h-100">
            <img class="card-img-top" src="if_bulb_49734.png" alt="">
            <div class="card-body">
              <h4 class="card-title" style="text-align:center">
               LIGHT
              </h4>
             <center><button type="button" class="btn btn-info">On</button>
           	<button type="button" class="btn btn-info">Off</button></center>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 portfolio-item">
          <div class="card h-100">
            <img class="card-img-top" src="fan.png" alt="">
            <div class="card-body">
              <h4 class="card-title" style="text-align:center">
                FAN
              </h4>
           	<center><button type="button" class="btn btn-info">On</button>
           	<button type="button" class="btn btn-info">Off</button></center>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 portfolio-item">
          <div class="card h-100">
            <img class="card-img-top" src="projector.png" alt="">
            <div class="card-body">
              <h4 class="card-title" style="text-align:center">
                PROJECTOR
              </h4>
              <center><button type="button" class="btn btn-info">On</button>
           	<button type="button" class="btn btn-info">Off</button></center>
            </div>
          </div>
        </div>
          <div class="col-lg-3 col-sm-6 portfolio-item">
          <div class="card h-100">
            <img class="card-img-top" src="curtain.png" alt="">
            <div class="card-body">
              <h4 class="card-title" style="text-align:center">
                CURTAIN
              </h4>
             <center><button type="button" class="btn btn-info">Open</button>
           	<button type="button" class="btn btn-info">Close</button></center>
            </div>
          </div>
        </div>
    </div>

      <!-- /.row -->
  </div>
<!-- /.container -->
</div>








    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script>
  function toggler(divId) {
    $("#" + divId).toggle();
}
</script>
</body>

</html>
