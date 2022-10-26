<html>
    <head>
        <title>User Registeration And Login</title>
        <link rel="stylesheet" type="text/css" href="Css/bootstrap.css">
    </head>
    <body>
        <div class="container">
            <div class="login-box">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Login Here</h2>
                        <form action="validation.php" method="POST">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="user" class="form-control" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>

                    <div class="col-md-6">
                        <h2>Register Here</h2>
                        <form action="validation.php" method="POST">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="user" class="form-control" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>