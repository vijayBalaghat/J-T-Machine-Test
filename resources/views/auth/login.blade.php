<!doctype html>
<html lang="en">
  <head>
    <title>Social Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body>
      <div class="container w-25 mt-5">
          <div class="card">
              <div class="card-header">
                  <h3 class="text-center text-succcess">Social Login</h3>
              </div>
              <div class="card-body">
                  <div class="facebook">
                      <a class="btn btn-primary w-100" href="{{route('fb.login')}}">Facebook Login</a>
                  </div><hr>
                  <div class="google">
                      
                      <a href="{{route('gmail.login')}}" class="btn btn-warning w-100">Google Login</a>
                  </div>
              </div>
              <div class="card-footer">
                  <h4 class="text-center text-primary">&copy; <?php echo date('Y'); ?></h4>
              </div>
          </div>
      </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>