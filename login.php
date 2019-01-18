<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>login.php</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="loginbox">
            <div class="row">
                <div class="col-md-6">
                    <h2>Log in!</h2>
                    <form method="post" action="validation.php">
                        <div class="form-group">
                            <input type="text" name="user" placeholder="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="password" placeholder="password" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            login
                        </button>

                    </form>
                </div>

                <div class="col-md-6">
                    <h2>YOU CAN REGISTER HERE!</h2>
                    <form method="post" action="registration.php">
                        <div class="form-group">
                            <input type="text" name="user" placeholder="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="password" placeholder="password" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            register
                        </button>

                    </form>
                </div>



            </div>

<?php echo $_SESSION_['username']?>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>

</html>
