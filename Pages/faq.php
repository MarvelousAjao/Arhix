<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="../fontawesome-free-6.5.2-web/fontawesome-free-6.5.2-web/css/all.css"
    />
    <link rel="stylesheet" href="../css/fa.css">
  </head>
  <body>
    <div class="nav">
        <h1 class="logo headline"><span class="logo-design">Ahrix</span> Of Time</h1>
        <ul>
            <li class="active"><a href="../index.php">Home</a></li>
          <li>
            <a href="../Pages/Sign_In.php
              ">
              <button>
                Sign_In
              </button></a>
          </li>
        </ul>
      </div>
    <div class="container">
        <h1>Frequently Asked Questions?</h1>
      <div class="q">
        <button id="q1">Where are does site exist? <i class="fa fa-plus"></i></button>
        <p class="q1">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
          repellat culpa tempore quae pariatur libero voluptas blanditiis
          aliquam excepturi officiis similique quia, odio delectus et distinctio
          voluptates mollitia laudantium sequi.
        </p>
      </div>
      <div class="q">
        <button id="q2">Who created the site ?<i class="fa fa-plus"></i></button>
        <p class="q2">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
            repellat culpa tempore quae pariatur libero voluptas blanditiis
            aliquam excepturi officiis similique quia, odio delectus et distinctio
            voluptates mollitia laudantium sequi.
        </p>
      </div>
      <div class="q">
        <button id="q3">Can We Posts Pictures Here ? <i class="fa fa-plus"></i></button>
        <p class="q3">
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
          repellat culpa tempore quae pariatur libero voluptas blanditiis
          aliquam excepturi officiis similique quia, odio delectus et distinctio
          voluptates mollitia laudantium sequi.
        </p>
      </div>
    </div>

    <script>
        const buttons = document.querySelectorAll("button");

        for (let i = 0; i < buttons.length; i++) {
            const btn = buttons[i];
            btn.addEventListener("click",function(){
            var itemid = this.id; 
            const p =  document.querySelector(`.${itemid}`);

            
            console.log(p)

            if(itemid = p){
                p.classList.toggle("active");
            }
                     
          
            })            
        }
    </script>
      <script src="../js/app.js"></script>
  </body>
</html>
