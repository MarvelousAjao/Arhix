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
    <h1 class="logo headline"><span class="logo-design">Ahrix</span> Of Time</h1>
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
            <li><a href="./Pages/">Report</a></li>
            <li><a href="./Pages/faq.html">FAQ'S</a></li>
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
<script>
    const menu = document.querySelector(".setting");
    const btn = document.querySelector(".fa-cog");



    btn.addEventListener("click", () => {
      menu.classList.toggle("active");
    })




    function darkmode() {
      const darkmode = document.querySelector(".darkbtn");

      darkmode.addEventListener("click", function() {
        document.body.classList.toggle("dark");

        if (document.body.classList == "dark") {
          darkmode.innerText == "DarkMode";
        } else if (document.body.classList != "dark") {
          darkmode.innerText == "LightMode";
        }

      })
    }


    darkmode();





    const gallery = [{
        img: "img (1).png",
        name: "Ferari 458 Italia"
      },
      {
        img: "img (3).png",
        name: "Lamborghuni  Gallardo"
      },
      {
        img: "img (4).png",
        name: "Lamborghuni  Sesto Elemento"
      },
      {
        img: "img (5).png",
        name: "Renault Clio"
      },
      {
        img: "img (6).png",
        name: "Ferari la Ferari"
      },
      {
        img: "img (7).png",
        name: "Jaguar "
      },
      {
        img: "img (8).png",
        name: "Peugeuot"
      },
      {
        img: "img (9).png",
        name: "Tesla"
      }
    ]


    const item = gallery.map((item) => {
      return (
        `<div class="gallery-items">
      <img src="./images/${item.img}" alt="${item.name}">
      <h3>${item.name}</h3>
      </div>`
          )
        }).join('');


        document.querySelector(".galleries").innerHTML = item;


        const flex = [{
            img: "img (1).png",

          },
          {
            img: "img (3).png",

          },
          {
            img: "img (4).png",

          },
          {
            img: "img (5).png",

          },
          {
            img: "img (6).png",

          }
        ]

        const flexies = flex.map((item) => {
          return (
            `<div class="flex-items">
      <img src="./images/${item.img}" alt="${item.name}">
      </div>`
          )
        }).join('');

        document.querySelector(".flex-cap").innerHTML = flexies;

        document.querySelectorAll(".flex-items")[2].classList.add("active");


        const list = document.querySelectorAll(".flex-items");

        for (let i = 0; i < list.length; i++) {
          const element = list[i];

          element.addEventListener("click", function() {
            const elem = document.querySelector(".flex-items.active");
            elem.classList.remove("active");

            this.classList.add("active");


          })
        }

        const li = ()=>{
  


          const list = document.querySelectorAll(".ul");

          for (let i = 0; i < list.length; i++) {
            const element = list[i];

            element.addEventListener("click", function() {
              const elem = document.querySelector(".ul.active");
              elem.classList.remove("active");

              this.classList.add("active");


            })}
        }
        
        li();
</script>

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