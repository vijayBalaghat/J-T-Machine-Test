<!doctype html>
<html lang="en">

<head>
  <title>Dashboard</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script>
    if (window.location.href.indexOf('#_=_') > 0) {
      window.location = window.location.href.replace(/#.*/, '');
    }
  </script>
</head>

<body>
  <div class="container mt-5">
    <h4 class="text-center text-primary">Dashboard</h4>
    </br>
    Facebook : <b>{{session()->get('facebook')}}</b> <br>
    Google : <b>{{session()->get('google')}}</b> <br><br>
    <a href="{{url('logout')}}" class="btn btn-danger">Logout</a>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>