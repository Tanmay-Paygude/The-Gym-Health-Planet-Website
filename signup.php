
<!DOCTYPE html>
<html>
  <head>
    <title>Gym Membership Sign-Up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
        border: 1px solid black;
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
    <script>
    const form = document.querySelector('form');
const nameInput = document.getElementById('name');
const emailInput = document.getElementById('email');
const passwordInput = document.getElementById('password');
const confirmPasswordInput = document.getElementById('confirm_password');
const signUpBtn = document.getElementById('signup-btn');
const messageDiv = document.getElementById('message');

form.addEventListener('submit', function(event) {
  event.preventDefault();

  const name = nameInput.value.trim();
  const email = emailInput.value.trim();
  const password = passwordInput.value.trim();
  const confirmPassword = confirmPasswordInput.value.trim();

  if (!name || !email || !password || !confirmPassword) {
    showMessage('Please fill in all fields.');
  } else if (password !== confirmPassword) {
    showMessage('Passwords do not match.');
  } else {
    showMessage(`Welcome, ${name}!`);
  }
});

function showMessage(message) {
  
  alert(message);
}

  </script>
  </head>
  <body>
  
    
    <div class="container">
    <form action="process_signup.php" method="post">

        <h2>Gym Membership Sign-Up</h2>
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        <label for="confirm_password">Confirm Password</label>
        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
        <button type="submit" class="btn btn-primary"  id="signup-btn">Sign Up</button>
        <p>Already have an account? <a href="login.php">Log in here</a></p>
    </div>
    
 

      </form>
    
  </body>
</html>
