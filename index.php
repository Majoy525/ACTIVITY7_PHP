<?php 
    session_start();

    $email = (isset($_POST['email'])) ? $_POST['email'] : "";
    $password = (isset($_POST['password'])) ? $_POST['password'] : "";
    $message = "";
    
if(isset($_GET['logout'])&& $_GET['logout'] == true){
    $message = "";
}else{
    if($email == "arellanomaryjoy01@gmail.com" && $password == "majoy"){
        $_SESSION['email']= $email;
        $_SESSION['password']= $password;
        $message = "<div class='alert alert-success'>Login Successfull</div>";
        echo "<script>window.location.href = 'pages/dashboard.php';</script>";
    }elseif($email == "" && $password == ""){
        $message = "<div class='alert alert-danger'>Please enter your email and password</div>";
    }else{
        $message = "<div class='alert alert-danger'>Login Failed</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <style>
            body {
                background-color: gray; /* White background */
                color: #333; /* Dark text */
                font-family: 'Arial', sans-serif;
            }

            #layoutAuthentication {
                min-height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 20px;
            }

            #layoutAuthentication_content {
                width: 100%;
                max-width: 400px;
                background-color: #ffffff; /* White background for the form */
                border-radius: 8px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                padding: 30px;
            }

            .card {
                background-color: #ffffff; /* White card background */
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .card-header {
                background-color: transparent; /* No background color for the header */
                color: #333;
                font-size: 20px; /* Reduced font size for header */
                text-align: center;
                padding: 10px; /* Reduced padding for the header */
            }

            .card-body {
                padding: 20px;
            }

            .form-control {
                margin-bottom: 10px;
                font-size: 16px;
                background-color: #f8f9fa; /* Light background for inputs */
                border: 1px solid #ccc; /* Light border */
                color: #333;
            }

            .form-control:focus {
                background-color: #fff;
                border-color: #007bff; /* Blue border on focus */
            }

            .btn-primary {
                width: auto; /* Button width adjusted */
                padding: 8px 20px; /* Smaller padding for a smaller button */
                font-size: 14px; /* Smaller font size */
                background-color: #007bff;
                border: none;
                border-radius: 4px;
                color: white;
            }

            .btn-primary:hover {
                background-color: #0056b3;
            }

            .alert {
                margin-bottom: 15px;
            }

            footer {
                padding: 20px;
                text-align: center;
                background-color: transparent; /* Transparent footer background */
                color: #333;
            }

            footer .small {
                color: #888;
            }

            a {
                color: #007bff;
            }

            a:hover {
                color: #0056b3;
            }
        </style>
    </head>
    <body>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="my-4">Login</h3>
                            </div>
                            <div class="card-body">
                                <form action="" method="post" onSubmit="return confirm('DO YOU REALLY WANT TO CONTINUE?');">
                                    <?php echo $message;?>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" name="email" type="email" placeholder="name@example.com" value="<?php echo $email; ?>" />
                                        <label for="inputEmail">Email address</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Password" />
                                        <label for="inputPassword">Password</label>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a class="small" href="password.html">Forgot Password?</a>
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="small text-muted">
                    Copyright &copy; Your Website 2024
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
