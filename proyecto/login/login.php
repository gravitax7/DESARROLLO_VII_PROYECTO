<?php
include 'config_session.php';

if($_SERVER["REQUEST_METHOD"]== "POST"){
    if(!isset($_POST['csrf_token'])|| $_POST['csrf_token']!== $_SERVER['csrf_token']){
        die("Error de validación token csrf");
    }
session_start();

if(isset($_SESSION['usuario'])){
    header("Location: index.php");
    exit();
}

if($_SERVER["REQUEST_METHOD"]== "POST"){
$usuario =$_POST['usuario'];
$contrasena = $_POST['contrasena'];

    if($usuario === "admin" && $contrasena === "1234"){
        $_SESSION['usuario'] = $usuario;
        header("Location:".URL_BASE."/public/index.php");
        exit();
    } else{
        $error ="Usuario o contraseña incorrectos";
    }

}

}
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css"
    crossorigin="anonymous">
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<link href="vendor/fontawesome/css/all.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <h2>login</h2>
    <?php
        if(isset($error)){
            echo "<p style='color:red;'>$error</p>";
        } ?>
    <div id="template-bg-1">
    <div
        class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div class="card p-4 text-light bg-dark mb-5">
            <div class="card-header">
                <h3>Sign In</h3>
            </div>
            <div class="card-body w-100">
                <form name="login" action="" method="post">
                    <div class="input-group form-group mt-3">
                        <div class="bg-secondary rounded-start">
                            <span class="m-3"><i
                                class="fas fa-user mt-2"></i></span>
                        </div>
                        <input type="text" class="form-control"
                            placeholder="username" name="username" id="usuario">
                    </div>
                    <div class="input-group form-group mt-3">
                        <div class="bg-secondary rounded-start">
                            <span class="m-3"><i class="fas fa-key mt-2"></i></span>
                        </div>
                        <input type="password" class="form-control"
                            placeholder="password" name="password" id="contrasena">
                    </div>

                    <div class="form-group mt-3">
                        <input type="submit" value="Login"
                            class="btn bg-secondary float-end text-white w-100"
                            name="login-btn">
                    </div>
                    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token'];?>">
                </form>
                <?php if(!empty($loginResult)){?>
				<div class="text-danger"><?php echo $loginResult;?></div>
				<?php }?>
			</div>
            <div class="card-footer">
                <div class="d-flex justify-content-center">
                    <div class="text-primary">If you are a registered
                        user, login here.</div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>