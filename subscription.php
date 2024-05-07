<?php
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
            <?php if ($_SESSION['isEmailOk']) {
                        echo '<div class="alert alert-success" role="alert">
                                Iscrizione Eseguita con Successo!
                            </div>';
                    } else {
                        echo '<div class="alert alert-warning" role="alert">
                                Email non valida!
                            </div>';
                    } ?>
        </div>
    </div>
    
</body>
</html>
