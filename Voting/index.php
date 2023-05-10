<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body class="bg-dark">
    <h1 class="text-info text-center p-3">Voting System</h1>
    <div class="bg-info py-4">
        <h2 class="text-center">login</h2>
        <div class="container text-center">
            <form action="./actions/login.php" method="POST">
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto"name="username" placeholder="enter your user name" require="require">
                </div>
                <div class="mb-3">
                    <input type="mobile" class="form-control w-50 m-auto" name="mobile" placeholder="enter your user mobile" require="require" minLength="10" maxLength="10">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto" name="password" placeholder="enter your user password" require="require">
                </div>
                <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark my-4">login</button>
                <p>Don't have an account? <a href="./partials/registration.php" class="text-white">register here</a> </p>
                
            </form>
        </div>
    </div>