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
        <h1 class="text-center py-4">Registration</h1>
    </div>
    <div class="col-lg-9 col-sm-12 m-auto p-4">
        <form class="row g-3" action="process_registration.php" method="post">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="email">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4" name="password">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity" name="city">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Province</label>
                <select id="inputState" class="form-select" name="province">
                    <option selected>Choose...</option>
                    <option>KZN</option>
                    <option>GAUTENG</option>
                    <option>WESTEN CAPE</option>
                    <option>MPUMALANGA</option>
                    <option>NORTH WEST</option>
                </select>
            </div>

            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Register</button>
            </div>
        </form>
    </div>
</body>
</html>

