<?php


    include_once "../classes/Register.php";

    $register = new Register();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $addUser = $register->AddUser($_POST);
    }


?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
   <div class="container my-5">
       <div class="row  d-flex justify-content-center">
           <div class="col-md-6" >
                       
              <div class="card text-bg-light mb-3" style="width: 30rem;" >
                        <span>
                            <?php if(isset($addUser)) { ?>
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                    <?php echo "$addUser" ?>
                                </div>

                            <?php }?>
                         </span>
                    <div class="card-header">Register Form</div>
                       <form action="" method="POST">
                        <div class="card-body my-4">
                                <div class="mb-3 row">
                                    <label for="name" class="col-sm-12 col-md-3 col-form-label">Name</label>
                                    <div class="col-sm-12 col-md-9">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="phone" class="col-sm-12 col-md-3 col-form-label">Phone</label>
                                    <div class="col-sm-12 col-md-9">
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter your phone no">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="email" class="col-sm-12 col-md-3 col-form-label">Email</label>
                                    <div class="col-sm-12 col-md-9">
                                        <input type="email" name="email"  class="form-control" id="email" placeholder="Enter your email">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                        <label for="password" class="col-sm-12 col-md-3 col-form-label">Password</label>
                                        <div class="col-sm-12 col-md-9">
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
                                        </div>
                                </div>
                                <div class="mb-3 row">
                                        <label for="ConfirmPassword" class="col-sm-12 col-md-3 col-form-label">Confirm Password</label>
                                        <div class="col-sm-12 col-md-9">
                                            <input type="password" class="form-control" id="ConfirmPassword" placeholder="Enter confirm password">
                                        </div>
                                </div>
                              
                                    <!-- <button type="submit" class="btn btn-success">Signin</button> -->
                                    <button type="submit" class="btn btn-success">Signup</button>
                                    <a href="#" class="float-end">Forgot your password?</a>
                                  
                              <!-- <h6 class="fs-12">Did not receive your verification email?<a href="#">Resend</a></h6> -->
                            </div>
                       </form>
                </div>
           </div>
       </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
