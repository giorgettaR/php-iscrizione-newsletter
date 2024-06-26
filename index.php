<?php
include __DIR__ . '/utilities.php';
$email = $_POST['email'] ?? '';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>php-iscrizione-newsletter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row p-2">
            <div class="col-12">
                <form action="" method="POST">
                    <h1>Iscriviti alla newsletter</h1>
                    <p>
                        <label for="emal">Inserisci l'email</label>
                        <input name="email" type="text" id="email">
                    </p>
                    <p>
                        <button>Iscriviti</button>
                    </p>
                </form>
            </div>
            <div class="col-12">
                <?php 
                if ($email != '') {
                    if (isEmailOk($email)) {
                        $_SESSION['email'] = $email;
                        $_SESSION['isEmailOk'] = true;
                        header('Location: ./subscription.php');
                    } else {
                        $_SESSION['isEmailOk'] = false;
                        header('Location: ./subscription.php');
                    }
                };
                 ?>
            </div>
        </div>
    </div>
    
</body>
</html>
