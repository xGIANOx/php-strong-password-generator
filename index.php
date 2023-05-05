<?php

   if (isset($_GET['numberInput'])) {
    $numberInput = (int)$_GET['numberInput'];
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!"#$%&\'()*+,-./:;<=>?@[\\]^_`{|}~';

    $password = '';

	for ($i = 0; $i < $numberInput; $i++) {
		$password .= $characters[rand(0, strlen($characters) - 1)];
	}
   }
   echo "<p>Your new secure password is: <strong>$password</strong></p>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body{
            /* background-color: darkblue; */
        }
        input{
            width: 300px;
        }
    </style>
</head>
<body>
    <h1 class="text-center text-white mt-3 text-muted">
        Strong Password Generator
    </h1>
    <h3 class="text-center text-white mt-3 fw-normal mb-3">
        Genera una password sicura
    </h3>
    
    <div class="container">
        <div class="card p-5 d-flex">
            <div class="row">
            <div class="mt-3 d-flex justify-content-center align-items-center">
                <form action="" method="get">
                    <label for="numberInput" class="form-label me-3">Lunghezza password</label>
                    <input type="text" class="ms-3 me-3" name="numberInput" id="numberInput" placeholder="">
                    <button class="btn btn-primary ms-3" type="submit">Invia</button>
                </form>
            </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>