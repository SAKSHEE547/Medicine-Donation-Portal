const template = document.createElement("template");
template.innerHTML = ` <div class="nav">
<h2>Med+</h2>
<ul id="item">
  <li><a href="./index.html">Home</a></li>
  <li><a href="./aboutus.html">About Us</a></li>
  <li><a href="loggin.php">LogIn</a></li>
  <li><a href="signup.php">SignIn</a></li>
  <div class="icon">
    <i class="fa-brands fa-facebook-f"></i>
    <i class="fa-brands fa-twitter-square"></i>
    <i class="fa-brands fa-youtube"></i>
  </div>
</ul>
</div>`;
document.body.appendChild(template.content);
