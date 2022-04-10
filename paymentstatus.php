<?php
include('./header.php');
?>
<!--start course page-->
<div class="container-fluid bg-dark">
    <div class="row"> 
        <img src="./image/payment.jpg" alt="courses" style="height:500px; 
        width:100%; object-fit:cover; box: shadow 10px;"/>

    </div>
</div>
<!--end course page-->
<div class="container">
    <h2 class="text-center my-4">Payment Status</h2>
    <form method="post" action="">
        <div class="form-group row">
        <label class="offset-sm-3 col-form-label">Order ID:</label>
    <div>
        <input type="text" class="form-control mx-3">
    </div>
    <div>
    <input type="submit" class="btn btn-primary mx-4" value="view">
    </div>
    </div>
    </form>
</div>
<!--contact us-->
<div class="container mt-4" id="contact">
    <h2 class="text-center mb-4">Contact US</h2>
    <div class="row">
        <div class="col-md-8">
            <input type="text" class="form-control" name="name"
            placeholder="name"><br>
            <input type="text" class="form-control" name="subject"
            placeholder="Subject"><br>
            <input type="text" class="form-control" name="email"
            placeholder="E-mail"><br>
            <textarea class="form-control" name="message" placeholder=
            "How can we help you?" style="height:150px;"></textarea><br>
            <input class="btn btn-primary" type="submit" value="send"
             name="submit"><br><br>
             </form>
        </div>

        <div class="col-md-4 anim text-black text-center">
            <h4>ISchool</h4>
            <p>ISchool,
                Near phagwara modeltown-144401 <br/>
                phone: 38573987 <br />
                www.ischool.com </p>

        </div>  
    </div>
</div>
<footer class="container-fluid bg-dark text-center p-2">
  <small class="text-white">Copyright &copy; 2022|| Desgined By 
    E-Learning</small>
</footer>
</body>
</html>