<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Login Toko Andre Mantap">
    <meta name="author" content="Andre Mantap">
    <title>Login - Toko Andre Mantap</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Orbitron:400,500,700|Nunito:200,300,400,600,700" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(45deg,rgb(0, 0, 0), #0000ff,rgb(64, 122, 199));
            color: #fff;
            font-family: 'Orbitron', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        
        @keyframes neonBackground {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        .card {
            background: rgba(0, 0, 0, 0.9);
            border-radius: 15px;
            box-shadow: 0px 0px 20px rgba(0, 255, 255, 0.8);
        }
        .btn-custom {
            background: linear-gradient(90deg, #00ffea, #00aaff);
            border: none;
            color: white;
            font-weight: bold;
            text-shadow: 0px 0px 8px rgba(0, 255, 255, 0.8);
        }
        .btn-custom:hover {
            background: linear-gradient(90deg, #00aaff, #00ffea);
            box-shadow: 0px 0px 15px rgba(0, 255, 255, 1);
        }
        .bg-login-image {
            background: url('img/shop.jpg');
            background-position: center;
            background-size: cover;
            border-radius: 15px 0 0 15px;
            box-shadow: 0px 0px 20px rgba(0, 255, 255, 0.5);
        }
        .neon-text {
            text-shadow: 0px 0px 10px rgba(0, 255, 255, 1), 0px 0px 20px rgba(0, 255, 255, 0.8);
            color: #00ffff;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg">
            <div class="card-body p-5">
                <div class="text-center">
                    <h1 class="h4 mb-4 neon-text">Stride Men!</h1>
                </div>
                <form  class="user" method="post" action="login.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="txtUsername" id="exampleInputEmail" placeholder="Masukkan Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="txtPassword" id="exampleInputPassword" placeholder="Masukkan Password">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox small">
                            <input type="checkbox" class="custom-control-input" id="customCheck">
                            <label class="custom-control-label" for="customCheck">Ingat Saya</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-custom btn-user btn-block">Login</button>
                </form>
                <hr>
                <div class="text-center">
                </div>
                <div class="text-center">
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
</body>

</html>

