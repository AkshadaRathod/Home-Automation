<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MIT_LOGIN</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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
        </div>
      </div>
    </nav>
</br>
</br>
</br>
</br>



<!-- <h2> Login Form</h2> -->
<div id="frm">
  <div class="modal-content animate" id="myLogin">
    <form class="modal-content animate" method="post"> 

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
                <input class="form-control input-lg" placeholder="Username" id="un" type="text">
              </div>
            </div>
            <div class="form-group">
              <div class="right-inner-addon">
                <i class="glyphicon glyphicon-lock"></i>
                <input class="form-control input-lg" placeholder="Password" id="ps" type="password">
              </div>
            </div>
          </fieldset>
          <br><div class=" text-center">
          <button class="btn btn-info" value="4" onClick = "remo_ctrl(this.value)">LOGIN</button></div>

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

  </form>
  </div>
</div>

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
             <center><button type="button" class="btn btn-info" value="1" onClick="remote(this.value)">On</button>
           	<button type="button" class="btn btn-info" value="0" onClick="remote(this.value)">Off</button></center>
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


  <?php      
    if ($_REQUEST["c"] == 1)
    { 
      echo "<script>
          $(document).ready(function(){
              $('#frm').hide();
              $('#myContent').show();
          });
        </script>";

    }
    elseif ($_REQUEST["c"] == 2) {
      alert("Invalid username or password");
    }
  ?>

    <script>  
      function remo_ctrl(str){   
       var xmlhttp = new XMLHttpRequest();
       var un= document.getElementById("un").value;
       var ps= document.getElementById("ps").value;

        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            if(str==4){window.location.href = this.responseText;}
            else{
              document.getElementById("status").innerHTML = this.responseText;
              console.log(this.responseText);
              
            }
          }
        };
        xmlhttp.open("POST", "gpio_ctrl.php?ch=" + str+"&un="+un+"&pwd="+ps, true);
        xmlhttp.send();

      }

      function remote(str){   
       var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            alert(this.responseText);
          }
        };
        xmlhttp.open("POST", "gpio_ctrl.php?ch=" + str, true);
        xmlhttp.send();

      }

      
    </script>
        <!-- Bootstrap core JavaScript -->
    <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
</body>

</html>
