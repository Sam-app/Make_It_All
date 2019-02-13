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
         <style>
                          
              html {
                  overflow-y: scroll;
              }
                body {
                  margin: 0;
                  text-align: center;
                  position:relative
              }
                table {
                  border: none;
                  border-collapse: collapse;
                }

                td {
                  padding: 8px;
                  border: 1px solid #CCC;
                }

                th {
                  text-align: left;
                  padding: 8px;
                  border: 1px solid #CCC;
                }

                .container {
                  padding: 8px;
                }

                .navbar{
                  background-color: #E7E7E7;
                  padding: 8px;
                }

                ul {
                  list-style-type: none;
                  margin: 0;
                  padding: 0;
                  overflow: hidden;
              }

              li {
                  float: left;
              }

              .navbtn{
                display: block;
                color: #333333;
                padding: 024px;
                height: 64px;
                background-color: #E7E7E7;
                border: none;
                font-size: 12px;
              }

              .navbtn:hover {
                background-color: #C9C9C9;
              }


                  .loginBanner{
                      box-sizing: border-box;
                      text-align: left;
                      border: 2px solid black;
                      border-radius: 5px;
                      font-size: 16px;
                      font-family: Arial;


                  }
                  .loginDataDiv{
                      padding-left: 89%;
                  }
                  .logOutButtonDiv{
                      padding-left: 91%;
                  }
                  .banner{
                      text-align: center;
                      font-size: 25px;
                      font-family: "Trebuchet MS";
                      font-variant: small-caps;
                  }
                  .table{
                      border-collapse: collapse;

                  }
                  .headingCell{
                      text-align: center;
                      /*border-bottom: 1px black;*/
                      background-color: #230c32;
                      color: white;
                      padding: 11px;
                      font-family: "Trebuchet MS";

                  }
                  .dataRow{}

                  .dataRow:nth-child(even){background-color: #f2f2f2}

                  .dataRow:hover {background-color: darkorchid; color: white;}


                  .dataCell{
                      text-align: center;
                      padding: 11px;
                      font-family: Arial;
                  }
                  .logOutButton{
                      font-family: Arial;
                      font-size: 16px;
                      background-color: #3b1253;
                      color: white;
                      height: 30px;
                  }
                  .logOutButton:hover {background-color: darkorchid; color: white;}

                  .modifyButton{
                      font-family: Arial;
                      font-size: 16px;
                      background-color: #9ee7ff;
                      text-align: center;
                      height: 30px;
                      /*border: 2px ridge #00002b;*/
                      border-radius: 4px;
                  }

                  .modifyButton:hover {background-color: #d12e73; color: white;/*border: 3px groove #491225; */border-radius: 4px;}

              .recTbl{
              background-color: white;
              border: 1px solid #DDDDDD;
              border-collapse: collapse;
              margin:8px;
              width:720px;
              }


              .recHdr{
                border: none;
                border-collapse: collapse;
                color:#4D90FF;
                /* min-width:640px;
                max-width:640px; */
                font-weight: bold;
              }

              .recLbl{
                font-family: "Trebuchet MS", Helvetica, sans-serif;
                font-size: 12px;
                text-align: left;
                border: none;
                border-collapse: collapse;
                width:192px;
              }

              .recVal{
                text-align: left;
                border:none;
                border-left: none;
                border-right: none;
                border-collapse: collapse;
              }

              .recInput{
                  border:1px solid #DDDDDD;
                  width:100%;
                }

                .recTitle{
                  text-align:left;
                  color:white;
                  font-size: 24px;
                  background-color: #DD3B3C;
                  padding:16px;
                  width:768px;
                  margin:auto;
                }
                .recContainer{
                  background-color: #F6F6F6;
                  padding:16px;
                  width:768px;
                  margin:auto;
                }

                .recRow{
                  text-align: left;
                  border:none;
                }

                .recBtn{
                  background-color: #DD3B3C;
                  border-radius: 32px;
                  color:white;
                  float: right;
                  border:none;
                  padding:8px;
                  font-size: 12px;
                }
         </style>   
        <title>Make-IT-All</title>
</head>
<body>
      <!-- navigation -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <!-- <a class="navbar-brand" href="#">Make-It-All</a> -->
          <a class="navbar-brand" href="#"><img style="width: 100px;height:40px" src="public/img/logo.png" alt="Make-IT-All"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="./index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./record_page.html">New Record</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./problem_list_page.html">Show All Record</a>
              </li>
              <li class="nav-item">
                      <a class="nav-link" href="./specialist_page.html">My Tasks</a>
               </li>
              <li class="nav-item">
                  <a class="nav-link" href="./login.html">logout</a>
                </li>
            </ul>
            
          </div>
          <!-- navbar right login  -->
          <!-- <p>
              <a class="btn btn-primary btn-lg" href="./login.html" role="button">Login</a>
              <a class="btn btn-primary btn-lg" href="./register.html" role="button">Register</a>
          </p> -->
          
  </nav>


    @yield('content')
    
</body>
</html>