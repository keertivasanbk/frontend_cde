<div class="signup-form">
  <div class="container">
    <div class="header">
      <h1 style="backgroundcolor: #2691d9;" >Create an Account</h1>
    </div>
    <form>
      <div class="input" style="backgroundcolor: #2691d9;" >
        <i class="fa-solid fa-user"></i>
        <input type="text" placeholder="Username" />
      </div>
      <div class="input">
        <i class="fa-solid fa-envelope"></i>
        <input type="email" placeholder="Email" />
      </div>
      <div class="input">
        <i class="fa-solid fa-lock"></i>
        <input type="password" placeholder="Password" />
      </div>
      <input class="signup-btn" style="backgroundcolor: #2691d9;" type="submit" value="SIGN UP" />
    </form>
    <!-- <p>Or sign up with</p>
    <div class="social-icons">
      <i class="fa-brands fa-facebook-f"></i>
      <i class="fa-brands fa-twitter"></i>
      <i class="fa-brands fa-google"></i>
    </div> -->
    <p>Already have an account? <a href="projStatus.php">sign in</a></p>
  </div>
</div>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline-color: #a5b4fc;
  
}

body {
  min-height: 100vh;
  display: grid;
  place-items: center;
  /* background: linear-gradient(to right, #654ea3, #eaafc8); */
}

p {
  font-size: 17px;
  color: #2691d9;
}

.signup-form {
  width: 480px;
  padding: 32px;
  border-radius: 8px;
  backgroundcolor: #2691d9;;
  box-shadow: 2px 4px 8px #2691d9;
  text-align: center;
}

.header {
  margin-bottom: 48px;
}

.header h1 {
  font-weight: bolder;
  font-size: 28px;
  color: #2691d9;
  
}

.input {
  position: relative;
  margin-bottom: 24px;
}

.input input {
  width: 100%;
  border: none;
  padding: 8px 40px;
  border-radius: 4px;
  background-color: #f3f4f6;
  color:#2691d9;
  font-size: 16px;
}

.input input::placeholder {
  color: #2691d9;
}

.input i {
  top: 50%;
  width: 36px;
  position: absolute;
  transform: translateY(-50%);
  color: #2691d9;
  font-size: 16px;
}

.signup-btn {
  width: 100%;
  border: none;
  padding: 8px 0;
  margin: 24px 0;
  border-radius: 20px;
  background-color: #2691d9;
  color: #ffffff;
  font-size: 16px;
  cursor: pointer;
}

.signup-btn:active {
  background-color: #4f46e5;
  transition: all 0.3s ease;
}

.social-icons i {
  height: 36px;
  width: 36px;
  line-height: 36px;
  border-radius: 50%;
  margin: 24px 8px 48px 8px;
  background-color: gray;
  color: #ffffff;
  font-size: 16px;
  cursor: pointer;
}

i.fa-facebook-f {
  background-color: #3b5998;
}

i.fa-twitter {
  background-color: #1da1f2;
}

i.fa-google {
  background-color: #dd4b39;
}

a {
  color: #6366f1;
  text-decoration: none;
}

</style>