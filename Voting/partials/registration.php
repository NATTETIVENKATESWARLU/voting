<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>voting system -registration page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <h1 class="text-center text-info p-3">voting system</h1>
    <div class="bg-info">
        <h2 class="text-center  text-center p-3">register Account</h2>
        <div class="container text-center">
            <form action="../actions/register.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" placeholder="enter your username" required="required" name="username">
                </div>
                <div class="mb-3">
                    <input type="mobile" class="form-control w-50 m-auto" placeholder="enter your mobile" required="required" name="mobile">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto" placeholder="enter your password" required="required" name="password">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto" placeholder="confirm password" required="required" name="cpassword">
                </div>
                <div class="mb-3">
                    <input type="file" name="photo" class="form-control w-50 m-auto" >
                </div>
                <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark my-4">register</button>
                <p>Don't have an account? <a href="../" class="text-white">login here</a> </p>
            </form>
        </div>
    </div>

</body>
</html>