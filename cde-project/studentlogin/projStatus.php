<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Status</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            About
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">REVIEW COMMITTEE MEMBER</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Guidelines</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="projStatus.php">Project Status</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../guidelogin/guidelogin.php">Guide Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Guide List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Schedule Set 29</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Reports
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Format Review I</a></li>
            <li><a class="dropdown-item" href="#">Format Review II</a></li>
            <li><a class="dropdown-item" href="#">Thesis Preparation</a></li>
          </ul>
        </li>
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>
   
    <div class="center"style="box-shadow: 2px 4px 8px #2691d9;">
      <h1 style="color:#2691d9;">Student Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" required>
           <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass"><a href="forgotpassword.php" style="text-decoration:none;">Forgot password?</a></div>
        <input type="submit" style="backgroundcolor: #2691d9;" value="Login">
        <br/>
        <br/>
        <div class="sigunup_link">
          Not a member?<a href="signup.php" style="text-decoration:none;">Signup</a>
        </div>
        <br/>
      </form>
    </div>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>
<style>
  body {
    margin: 0;
    padding: 0;
    font-family: montserrat;
    /* background: linear-gradient(120deg,#2980b9,#8e44ad); */
    height: 100vh;
    overflow: hidden;
  }
  .center{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
    background: white;
    border-radius: 10px solid #2691d9;
    
  }
  .center h1{
    text-align: center;
    padding: 0 0 20px 0;
    border-bottom: 1px solid silver;
    
  }
  .center form{
    padding: 0 40px;
    box-sizing: border-box;
  }
  form .txt_field{
    position: relative;
    border-bottom: 2px solid #adadad;
    margin: 30px 0;
  }
  .txt_field input {
   width: 100%;
    padding: 0 5px;
    height: 40px;
    font-size: 16px;
    border: none;
    background: none;
    outline: none;
  }
  .txt_field label{
    position: absolute;
    top: 50%;
    left: 5px;
    color: #adadad;
    transform: translateY(-50%);
    pointer-events:none;
  }
  .txt_field span::before{
    content:' ';
    position: absolute;
    top: 40px;
    left: 0;
    width: 0;
    height: 2px;
    background: #2691d9;
    transition: .5s;
    
  }
  .txt_field input:focus ~ label,
  .txt_field input:valid ~ label{
    top: -5px;
    color: #2691d9;
  }
  .txt_field input:focus ~ span::before,
  .txt_field input:valid ~ span::before{
    width: 100%;
  }
  .pass {
    margin: -5px 0 20px 5px;
    color: #a6a6a6;
    cursor: pointer;
  }
  input[type="submit"]{
    width:100%;
    height: 50px;
    border: 1px solid;
    background: #2691d9;
    border-radius: 25px;
    font-size: 18px;
    color: #e9f4fb;
    font-weight: 700;
    outline: none;
  }
  input[type="submit"]:hover{
    border-color: #2691d9;
    transition: .5s;
  }
  .signup_link{
    margin: 30px 0;
    text-align: center;
    font-size: 16px;
    color: #666666;
  }
  .signup_link a{
    color: #2691d9;
    text-decoration: none;
  }
  .signup_link a:hover{
    text-decoration: underline;
  }
</style>
