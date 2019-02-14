<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
        <title>Make-IT-All</title>
</head>
<body>
      <!-- navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <!-- <a class="navbar-brand" href="#">Make-It-All</a> -->
          <a class="navbar-brand" href="#"><img style="width: 100px;height:40px" src="public/img/logo.png" alt="Make-IT-All"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/problems/create">New Record</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/problems">Show All Record</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">logout</a>
                </li>
            </ul>
            
          </div>
          <!-- navbar right login  -->
          <!-- <p>
              <a class="btn btn-primary btn-lg" href="./login.html" role="button">Login</a>
              <a class="btn btn-primary btn-lg" href="./register.html" role="button">Register</a>
          </p> -->
          
  </nav>

<div class="container">
    @include('inc.messages')
    @yield('content')
</div>
   
    
</body>
</html>