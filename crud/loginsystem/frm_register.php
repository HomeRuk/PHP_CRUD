<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Member Login</title>

    <!-- Bootstrap -->
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body style="background:#eee;">
    
    <div class="container">
            <p><br/></p>
        <div class="row">
            <div class="col-md-3"></div>
            
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                            <div class="page-header">
                            <h3>Register Admin</h3>
                        </div>
                        <form role="form" action="register.php" method="POST">
                            <div class="form-group">
                                    <label for="username">Username: </label>
                                    <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                    <input type="text" class="form-control" placeholder="Enter username" name="username" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label for="password">Password: </label>
                                    <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
                                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                                </div>
                            </div>
                            <hr/>
    
                            <button type="submit" class="btn btn-primary" value="Register"><span class="glyphicon glyphicon-lock"></span> Register
                            </button>      
                            <p align="center"><br/><br/>
                                    <a href="index.php" class="btn btn-info" ><span class="glyphicon glyphicon-arrow-left">
                            </span> หน้าหลัก</a>
                            </p>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>
