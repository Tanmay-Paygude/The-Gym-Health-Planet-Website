<!DOCTYPE html>
<html>
  <head>
    <title>Gym Membership Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <style>
      body {
        background-image: url("pho2.jpg.jpg");
        background-repeat: no-repeat;
        background-size: cover;
      }
      
      
      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }
      
      body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
      }
      
      .container {
        max-width: 500px;
        margin: 50px auto;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
      }
      
      h2 {
        text-align: center;
        margin-bottom: 20px;
      }
      
      form {
        display: flex;
        flex-direction: column;
      }
      
      label {
        font-weight: bold;
        margin-bottom: 5px;
      }
      
      input {
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid black; /* Add black border */
      }
      
      button {
        background-color: #007bff;
        color: #fff;
        padding: 10px;
        border-radius: 5px;
        border: none;
        cursor: pointer;
      }
      
      button:hover {
        background-color: #0062cc;
      }
      
      p {
        margin-top: 20px;
        text-align: center;
      }
      
      a {
        color: #007bff;
      }
      
</style>



<div class="container">
<form method="post" action="dash.php">

    <h2>Gym Membership Login</h2>
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
    <button type="submit" class="btn btn-primary" id="login-btn">Login</button>
    <p>Not a member yet? <a href="signup.php">Sign up here</a></p>
  </form>
  <div id="message"></div>
</div>

  </body>
</html>
