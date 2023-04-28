<?php
  include_once("session.php");
  ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Donate Med</title>
    <script
      src="https://kit.fontawesome.com/41b051ed13.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
  <div class="nav">
<h2>Med+</h2>
<ul id="item">
  <li><a href="./index.html">Home</a></li>
  <li><a href="./aboutus.html">About Us</a></li>
  <li><a href="loggin.php"><?php echo $_SESSION['user'];?></a></li>
  <li><a href="logout.php">Logout</a></li>
  <div class="icon">
    <i class="fa-brands fa-facebook-f"></i>
    <i class="fa-brands fa-twitter-square"></i>
    <i class="fa-brands fa-youtube"></i>
  </div>
</ul>
</div>
    <div class="back">
      <img src="./img/poor-g7e39b2b1d_1920.jpg" width="100%" height="100%" />
    </div>
    <div class="mid">
      <p>A hand loses nothing by holding other's hand.</p>
      <h2>When one gives, two get happy.</h2>
      <div class="btn">
        <a class="simple" href="#">Donate Now</a>
        <a class="border" href="./learnMore.html">Learn More</a>
      </div>
    </div>
    <div class="details">
      <div class="one">
        <h3>Are you NGO?</h3>
        <h6>Every NGO need to register first</h6>
        <p>
          "All we need is to build human relation with our deeds.Thats only
          thing that lasts forever"
        </p>
        <a href="./ngo_registration.html">Register Now</a>
      </div>
      <div class="two">
        <p>
          "If we all act together - business, governments, NGOs and citizens
          and, especially, the young - just imagine the good we could create"
        </p>
      </div>
    </div>
    <div class="details">
      <div class="one">
        <h3>Are you Donor?</h3>
        <h6>Every donor need to register first</h6>
        <p>
          "Making a donation is the ultimate sign of solidarity. Actions speak
          louder than words"
        </p>
        <a href="./forrm.html">Register Now</a>
      </div>
      <div class="two">
        <p>
          "What a privilege to be here on the planet to contribute your unique
          donation to humankind. Each face in the rainbow of colors that
          populate our world is precious and special"
        </p>
      </div>
    </div>
    <div class="about">
      <div class="info">
        <h2>Why Donation is Important?</h2>
        <p>
          In our research, Why we give, a feeling of social conscience was the
          most widely-given reason to give to charity. Whatever type of charity
          work they supported, 96% said they felt they had a moral duty to use
          what they had to help others, a sentiment very much rooted in their
          personal values and principles. Having the power to improve the lives
          of others is, to many people, a privilege, and one that comes with its
          own sense of obligation. Acting on these powerful feelings of
          responsibility is a great way to reinforce our own personal values and
          feel like we’re living in a way that is true to our own ethical
          beliefs.
        </p>
      </div>
      <div class="info_img">
        <div class="img1">
          <div class="img"><img src="./img/satis.jpg" /></div>
        </div>
      </div>
    </div>
    <div class="event">
      <h2>Our Donation Camp</h2>
      <div class="container">
        <main class="grid">
          <article>
            <img src="./img/satis.jpg" alt="" />
            <div class="text">
              <h3>Madicine Donation</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure,
                cumque quasi atque, est asperiores magni inventore ipsam libero
                molestiae soluta quibusdam fuga beatae quo dolores, possimus
                sequi. Cumque, natus dolores.
              </p>
              <button>Donate</button>
            </div>
          </article>
          <article>
            <img src="./img/satis.jpg" alt="" />
            <div class="text">
              <h3>card2</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure,
                cumque quasi atque, est asperiores magni inventore ipsam libero
                molestiae soluta quibusdam fuga beatae quo dolores, possimus
                sequi. Cumque, natus dolores.
              </p>
              <button>Donate</button>
            </div>
          </article>
          <article>
            <img src="./img/satis.jpg" alt="" />
            <div class="text">
              <h3>card3</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure,
                cumque quasi atque, est asperiores magni inventore ipsam libero
                molestiae soluta quibusdam fuga beatae quo dolores, possimus
                sequi. Cumque, natus dolores.
              </p>
              <button>Donate</button>
            </div>
          </article>
        </main>
      </div>
    </div>
    <div class="contact">
      <div class="form">
        <h2>Contact Us</h2>
        <div class="submit">
          <input type="text" name="" placeholder="Name" /><br />
          <input type="email" name="" placeholder="Email" /><br />
          <textarea
            name=""
            id=""
            cols="30"
            rows="5"
            placeholder="Message"
          ></textarea
          ><br />
          <a href="#">Sent Message</a>
        </div>
      </div>
      <div class="map">
        <h2>Where you can Donate</h2>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121058.92836705955!2d73.79292795448009!3d18.524766324519184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf2e67461101%3A0x828d43bf9d9ee343!2sPune%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1646920783735!5m2!1sen!2sin"
          width="600"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
        ></iframe>
      </div>
    </div>
    <script src="footer.js"></script>
  </body>
</html>