<?php 
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) { ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-user role-login-system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa; /* Bootstrap light gray background color */
        }
        .container {
            min-height: 100vh;
        }
        form {
            width: 100%;
            max-width: 450px;
            background-color: #fff; /* White background color */
            border: 1px solid #dee2e6; /* Bootstrap gray border color */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Subtle shadow effect */
            padding: 20px;
        }
        h1 {
            color: #007bff; /* Bootstrap primary blue color */
        }
        .alert {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center">
    <form class="border shadow rounded" action="php/check-login.php" method="post">
      <h1 class="text-center pb-3">LOGIN</h1>
      <?php if(isset($_GET['error'])) { ?>
        <div class="alert alert-danger" role="alert"><?=$_GET['error']?></div>
      <?php } ?>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" name="username" id="username" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Select User Type:</label>
        <select class="form-select" name="role" aria-label="Default select example">
          <option selected value="user">User</option>
          <option value="admin">Admin</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">LOGIN</button>
    </form>
  </div>
</body>
</html>
<?php } else {
    header("Location: home.php");
} ?>
