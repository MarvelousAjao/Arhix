<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Arhix</title>
  <link rel="shortcut icon" href="./images/img (2).png" type="png/image">

  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="./fontawesome-free-6.5.2-web/fontawesome-free-6.5.2-web/css/all.min.css" />
</head>

<body>

  <div class="nav">
    <h1 class="logo headline"><span class="logo-design">Ahrix</span></h1>
    <ul>
      <li class="ul active"><a href="#">Home</a></li>
      <li class="ul"><a href="#gallery">Gallery</a></li>
      <li class="ul"><a href="#contact">Contact Us</a></li>
      <li>
        <a href="./Pages/Sign_In.php
          ">
          <button>
            Sign_In
          </button></a>
</li>
      <li>
        <a href="#"><i class="fa fa-cog"></i>
          <ul class="setting ">
            <li class="darkbtn"><a href="#">Dark Mode</a></li>
            <li class="lightbtn"><a href="#">LightMode</a></li>
            <li><a href="./Pages/">Report</a></li>
            <li><a href="./Pages/faq.php">FAQ'S</a></li>
          </ul>
        </a>
      </li>
    </ul>
  </div>
  <header>
    <span class="icons">
      <i class="fab fa-facebook fa-lg"></i>
      <i class="fab fa-whatsapp fa-lg"></i>
      <i class="fab fa-instagram fa-lg"></i>
      <i class="fab fa-youtube fa-lg"></i>
      <i class="fab fa-linkedin fa-lg"></i>
    </span>
    <div class="hero-info">
      <h4>Welcome to <span class="logo-design">Ahrix</span></h4>

      <h1 class="john">Here To Inform, Inspire, Innovate the future Generations about Red Cars</h1>

      <p>
        Here we provide you the latest information about the future of
        technology with the Red's
      </p>

      <button>Join Us Today</button> 
    </div>
    <div class="hero-image">home</div>
  </header>

  <main>
    <div class="gallery" id="gallery">
      <h2>Gallery</h2>
      <div class="galleries">

      </div>
    </div>
    <div class="grid">
      <h1>Best Red Cars of 2023</h1>
      <div class="flex-cap">

      </div>
    </div>
  </main>

  <script src="./scroll.js"></script>
<script src="./js/app.js"></script>

<div class="contact" id="contact">
  <img src="./images/img (3).png" alt="">

<form >
  <h1>Contact Us</h1>
  <Input type="text" placeholder="Your Name" required/>
  <Input type="email" placeholder="Your Email" required />
  <Input type="email" value="arhix@gmail.com" readonly/>
  <input type="text" placeholder="Subject" required>
  <textarea name="" id="" placeholder="Your Message Here"></textarea>
  <input type="submit" value="Submit">
</form>
</div>




</body>

</html>