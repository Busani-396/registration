<?php
//session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Registration Page</title>
</head>
<body>
<div class="m-auto py-6 my-6">
        <h3 class="text-center py-4">Good Day - User</h3>
    </div>
    <div class="col-lg-9 col-sm-12 m-auto p-4">
            <div class="col-4 m-auto" style="margin-top : 30px;">
            <div class="card h-100">
            <div class="card-body">
                <p class="card-title">Logged in user Email : <?php echo  $_SESSION["user_email"]   ?> </p>
                <a href="/Busani-project/logout.php" class="btn btn-secondary">logout</a>
            </div>
            </div>
        </div>
    </div>
</body>
</html>

