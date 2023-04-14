<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ullman Sails</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  </head>
  <body>


    <style media="screen">
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #0E193B;
      font-size: 15px;

      position: relative;
      margin: 0px;
      padding: 0px;
      font-family: 'Montserrat', sans-serif;
      background-color: rgb(17, 27, 64);

      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      justify-content: center;
    }
    p {
      font-size: 0.9em;
    }
    h2 {
      color: #111C42;
      font-size: 2em;
    }
    h3 {
      color: #F2F2F2;
      font-size: 1.6em;
      font-weight: 500;
    }
    h4 {
      color: #111C42;
      font-size: 1em;
      font-weight: 500;
    }
    button {
      background-color: #111C42;
      padding: 15px;
      font-weight: bold;
      border: none;
      color: #F2F2F2;
    }
    button:hover {
      background-color: #F2F2F2;
      color: #111C42;
    }
    header {
      padding: 50px;
      background-color: aquamarine;
      text-align: center;
    }
    nav {
      display: flex;
      flex-direction: row;
      background-color:
    }
    nav a {
      color: white;
      padding: 14px 20px;
      text-decoration: none;
    }
    .content{
      position: relative;
      width: 100vw;
      min-height: 100vh;
      height: 100%;
      background-color: rgb(200,200,200);
    }
    .leftPanel{
      position: fixed;
      left: 0px;
      top: 0px;
      height: 100vh;
      width: 80vw;
      min-height: 100vh;
      height: 100%;
      background-color: #0E193B;
      display: none;
      z-index: 2;
      left: 0px;
    }
    .rightPanel{
      position: relative;
      width: 25vw;
      min-height: 100vh;
      height: 100%;
      background-color: #0E193B;
      padding: 50px 10px;
      display: none;
    }
    .IconMenuNews{
      position: absolute;
      z-index: 2;
      display: block;
      left: 15px;
      top: 15px;
      height: 20px;
      width: 25px;
    }

    @media screen and (min-width: 480px) {
      body{
      }
    }
    @media screen and (min-width: 768px) {
      body{
      }
      .content{
        width: 70vw;
      }
      .leftPanel{
        position: sticky;
        top: 0px;
        display: block;
        width: 30vw;
      }
      .rightPanel{
        display: none;
      }
    }
    @media screen and (min-width: 1024px) {
      body{
      }
      .content{
        width: 50vw;
      }
      .leftPanel{
        width: 25vw;
        display: block;
      }
      .rightPanel{
        position: sticky;
        top: 0px;
        width: 25vw;
        display: block;
      }
    }

    @media screen and (min-width: 1200px) {
      body{
      }
    }

    .IconCloseMenuNews{
      position: absolute;
      z-index: 2;
      display: block;
      right: 15px;
      top: 15px;
      height: 20px;
      width: 25px;
    }
    </style>

    <img id="IconMenuNews" class="IconMenuNews" src="../News/Images/Menu.png" alt="">

    <section id="leftPanel" class="leftPanel">
      <style media="screen">
        @media screen and (min-width: 480px) {

        }
        @media screen and (min-width: 768px) {
          .IconMenuNews{
            display: none;
          }
          .IconCloseMenuNews{
            display: none;
          }
        }
        @media screen and (min-width: 1024px) {

        }
        @media screen and (min-width: 1200px) {

        }
      </style>


      <img id="IconCloseMenuNews" class="IconCloseMenuNews" src="../News/LeftPanel/Images/close.png" alt="">
      <?php  include "LeftPanel/LeftPanel.php" ?>



      <script type="text/javascript">
      IconMenuNews = document.getElementById('IconMenuNews');
      IconCloseMenuNews = document.getElementById('IconCloseMenuNews');
      leftPanel = document.getElementById('leftPanel');

      IconMenuNews.addEventListener("click", function(){
      leftPanel.style.display = "block";
      })

      IconCloseMenuNews.addEventListener("click", function(){
      leftPanel.style.display = "none";
      })


      </script>



    </section>
    <section class="content">
      <?php  include "Content/Content.php" ?>
    </section>
    <section class="rightPanel">
      <?php  include "RightPanel/RightPanel.php" ?>



    </section>






    <script type="text/javascript">



    const contentSections = document.querySelectorAll(".contentSections");
    const itemsLeftPanel = document.querySelectorAll(".itemsLeftPanel");

    leftPanel = document.getElementById('leftPanel');


    var contentSectionsOn = 0;


    for (let i = 0; i < itemsLeftPanel.length; i++) {

      contentSections[i].style.display = "none";
      contentSections[0].style.display = "block";

      itemsLeftPanel[i].addEventListener("click", function(){
        if (  window.innerWidth <= 768) {
          leftPanel.style.display = "none";
        }
        if (contentSections[i].style.display == "none" ){
          contentSectionsOn  = i;
          contentSections[i].style.display = "block";
          turnOffOtherContentSections();
        }
      })
    }

    function turnOffOtherContentSections(){
      for (let i = 0; i < itemsLeftPanel.length; i++) {
        if (i != contentSectionsOn) {
          contentSections[i].style.display = "none";
        }
      }
    }








    </script>




  </body>
</html>
