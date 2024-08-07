
  if(localStorage.getItem("theme") == "dark"){
      document.body.classList+= "dark";
  }
  else{
    document.body.classList-="dark";
  }


    const menu = document.querySelector(".setting");
    const btn = document.querySelector(".fa-cog");



    btn.addEventListener("click", () => {
      menu.classList.toggle("active");
    })




    function darkmode() {
      const darkmode = document.querySelector(".darkbtn");
      const lightmode = document.querySelector(".lightbtn");
      darkmode.addEventListener("click", function(e) {
        localStorage.setItem("theme","dark");
        document.body.classList.add("dark");
      })
      lightmode.addEventListener("click", function(e) {
        localStorage.setItem("theme","light");
        document.body.classList.remove("dark");
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
