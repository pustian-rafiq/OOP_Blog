<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
   <div class="container">
       <div class="row">
           <div class="col-md-12 my-5 d-flex justify-content-center">
              <div class="card text-bg-light mb-3" style="width: 30rem;" >
                    <div class="card-header">Login Form</div>
                       <form action="">
                        <div class="card-body my-4">
                                <div class="mb-3 row">
                                    <label for="email" class="col-sm-12 col-md-3 col-form-label">Email</label>
                                    <div class="col-sm-12 col-md-9">
                                        <input type="email"  class="form-control" id="email" placeholder="Enter your email">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                        <label for="password" class="col-sm-12 col-md-3 col-form-label">Password</label>
                                        <div class="col-sm-12 col-md-9">
                                            <input type="password" class="form-control" id="password" placeholder="Enter your password">
                                        </div>
                                </div>
                              
                                    <button type="submit" class="btn btn-success">Signin</button>
                                    <a href="register.php"class="btn btn-primary">Signup</a>
                                    <a href="#" class="float-end">Forgot your password?</a>
                                    <hr>
                              <h6 class="fs-12">Did not receive your verification email?<a href="#">Resend</a></h6>
                            </div>
                       </form>
                </div>
           </div>
       </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
