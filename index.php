<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <link rel="stylesheet" href="css/all.min.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>ISchool</title>
</head>
<body>
 <!--start navigation -->
 <nav class="navbar navbar-expand-sm navbar-dark  fixed-top  ">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">ISchool</a>
    <span class="navbar-text">Learn and Implement</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav custom-nav " >
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="Courses.php">courses</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="paymentstatus.php ">payment</a>
        <li class="nav-item custom-nav-item">
          <a class="nav-link " href="#"data-bs-toggle="modal"
            data-bs-target="#stuloginmodalcenter">login </a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link " href="#" data-bs-toggle="modal"
            data-bs-target="#sturegmodalcenter">signup</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link " href="contact.php">contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>   
<!--end navigation-->

<!--start video background-->
<div class="container-fluid remove-vid-marg">
    <div class="vid-parent">
        <video playsinline autoplay muted loop>
            <source src="video/banvid.mp4"> 
        </video>
        <div class="vid-overlay"></div>
    </div>
    <div class="vid-content">
        <h1 class="my-content">Welcome to ISchool</h1>
        <small class="my-content">Learn and Implement</small> <br>
        <a href="#" class="btn btn-danger" data-bs-toggle="modal"
            data-bs-target="#sturegmodalcenter">Get Started</a>
    </div>
</div>

<!-- end video -->
<!-- start text banner-->
<div class="container-fluid bg-danger txt-banner">
    <div class="row bottom-banner">
        <div class="col-sm">
            <h5><i class="fas fa-book-open mr-3"></i>100+ online courses</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-users mr-3"></i>Expert Instructors</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-keyboard mr-3"></i>Lifetime Access</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-rupee-sign mr-3"></i>Money back guarantee*</h5>
        </div>
    </div>
</div>
<!-- end text banner-->

<!-- start most popular course -->
<div class="container mt-5">
    <h1 class="text-center">Popular courses</h1>
    <div class="card-deck mt-4">
      <a href="#" class="btn" style="text-align: left; padding:0px;
        margin:0px;">
        <div class="card">
            <img src="image/guitar.jpg" class="card-img-top" alt="Guitar" />
            <div class="card-body">
                <h5 class="card-tittle">Learn Guitar Easy Way</h5>
                <p class="card-text"> Lorem ipsum dolor sit amet consectetur
                    adipisicing eli.facilis,nemo.</p>
            </div>
            <div class="card-footer">
                <p class="card-text d-inline">Price: <small><del>&
                    #8377 2000</del></small><span class="
                    font-weight-bolder">&#8377 200</span></p>
                    <a  class="btn btn-primary text while font weight-bolder
                    float-right" href="#">Enroll</a>
            </div>
        </div>
    </div>

    <div class="card-deck mt-4">
    <a href="#" class="btn" style="text-align: left; padding:0px;
        margin:0px;">
        <div class="card">
            <img src="image/python.jpg" class="card-img-top" alt="Python" />
            <div class="card-body">
                <h5 class="card-tittle">Learn Python</h5>
                <p class="card-text"> Lorem ipsum dolor sit amet consectetur
                    adipisicing eli.facilis,nemo.</p>
            </div>
            <div class="card-footer">
                <p class="card-text d-inline">Price: <small><del>&
                    #8377 3000</del></small><span class="
                    font-weight-bolder">&#8377 300</span></p>
                    <a  class="btn btn-primary text while font weight-bolder
                    float-right" href="#">Enroll</a>
            </div>
       </div>
    </div>

 <div class="text-center m-2">
     <a class="btn btn-danger btn-sm" href="courses.php">View All courses

     </a>
 </div>
</div>
<!-- end most popular course -->

<!--start student reg-->

<!-- Modal -->
<div class="modal fade" id="sturegmodalcenter" tabindex="-1" aria-labelledby="sturegmodalcenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="sturegmodalcenterLabel">Student Registration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
      <div class="mb-3">
    <label for="exampleInputname" class="form-label">Name</label>
    <input type="name" class="form-control" id="stuname">
  </div>
  <div class="mb-3">
    <label for="stuemail" class="form-label">Email </label>
    <input type="email" class="form-control" id="stuemail" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="stupassword" class="form-label">New Password</label>
    <input type="password" class="form-control" id="stupassword">
  </div>
</form>
      </div>
      <div class="modal-footer">
        <span id="successMsg"></span>
      <button type="button" class="btn btn-primary"onclick="addstu()">Signup</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!--end student reg--> 
<!--start login modal-->
<div class="modal fade" id="stuloginmodalcenter" tabindex="-1" aria-labelledby="sturegmodalcenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuloginmodalcenterLabel">Student login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email </label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
</form>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" id="stuLoginBtn"
       onclick="checkStuLogin()">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancell</button>
        
      </div>
    </div>
  </div>
</div>
<!--end login modal-->
<div class="container-fluid bg-danger">
<!--start social follow-->
 <div class="row text-white text-center p-1">
  <div class="col-sm">
    <a class="text-white social-hover" href="#"><i class="fab 
  fa-facebook-f"></i>Facebook</a>
  </div>
  <div class="col-sm">
    <a class="text-white social-hover" href="#"><i class="fab 
  fa-twitter"></i>Twitter</a>
  </div>
  <div class="col-sm">
    <a class="text-white social-hover" href="#"><i class="fab 
  fa-whatsapp"></i>Whatsapp</a>
  </div>
  <div class="col-sm">
    <a class="text-white social-hover" href="#"><i class="fab 
  fa-instagram"></i>Instagram</a>
  </div>
</div>
</div>
</div>

<!--start footer-->
<footer class="container-fluid bg-dark text-center p-2">
  <small class="text-white">Copyright &copy; 2022|| Desgined By 
    E-Learning</small>
</footer>









<!-- end social follow-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>

<!--ajax call js-->
<script type="text/javascript" src="js/ajaxrequest.js"></script>


</body>
</html> 