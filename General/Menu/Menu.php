<style media="screen">
  .menuContainer{
    position: relative;
    height: 3px;
    width: 100vw;
  }
  .menu{
    position: fixed;
    top: 0px;
    left: 0px;
    width: 120vw;
    height: 70px;
    background-color: rgba(255, 0, 0, .7);
    z-index: 10;
  }
  .logoMenu{
    position: relative;
    width: 30%;
    float: left;
    height: 56px;
    top: 4px;
    margin-left: 30px;
    display: inline-block;
    transition:.5s;
  }
  .logoMenu img:nth-child(1){
    position: relative;
    top: 11px;
    left: 0px;
    height: 180%;
    z-index: 9;
  }
  .logoMenu img:nth-child(2){
    position: absolute;
    padding-left: 10px;
    height: 35%;
    top: 50%;
    transform: translateY(-50%);
    z-index: 9;
  }
  .contentMenu{
    position: relative;
    width: calc(70% - 40px);
    height: 70px;
    float: right;
  }
  .contentMenu h3{
    position: relative;
    display: inline-block;
    margin: 0 10px;
    color: rgba(253, 253, 253, 1);
    font-size: 1.2em;
    font-weight: 200;
    text-align: right;
    cursor: pointer;
  }
  .textMenuContainer{
    position: absolute;
    display: block;
    padding: 1px 10px;
    right: 25%;
    top: 50%;
    transform: translateY(-50%);
  }
  .contentMenu img{
    display: none;
    position: absolute;
    height: 40%;
    left: 64%;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
  }
  .contentMenu img{
    display: none;
  }
  .menuMobile{
    position: fixed;
    width: 100%;
    height: 80vh;
    z-index: 9;
  }
  .textMenuContainerMobile{
    position: absolute;
    width: 100%;
    height: 100vh;
    top: 70px;
  }
  .textMenuContainerMobile h3{
    background-color: rgba(255, 0, 0, .1);
    padding: 9px 10px;
    color: white;
    font-size: 1.2em;
    font-weight: 200;
    text-align: center;
    cursor: pointer;
  }
  .textMenuContainerMobile h3:nth-child(even){
    background-color: rgba(255, 0, 0, .7);

  }
  .textMenuContainerMobile h3:nth-child(odd){
    background-color: rgba(17,62,164,0.7);

  }
  .textMenuContainerMobile h3:hover{
    opacity: 0.9;
    transition: .5s;
  }
  .subItemContainer{
    position: relative;
    width: 100vw;
    height: 30vh;
    background-color: rgba(17,62,164,0.5);
    border-top: 1px solid white;
    z-index: 0;
    top: 0px;
    display: flex;
  }
  .subItem{
    position: relative;
    height: 100%;
    width: 50%;
  }
  .subItemBox{
    position: relative;
    height: 80%;
    width: 90%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: inline-block;
    overflow: hidden;
  }
  .subItemBox h3{
    color: white;
    font-weight: 200;
    cursor: pointer;
  }
  .subItemBox img{
    position: relative;
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%);
    height: 150%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

  }


  @media only screen and (max-width: 1276px) {

    .logoMenu img:nth-child(2){
      display: none;
    }
    .contentMenu{
      width: calc(85% - 40px);
    }
    .logoMenu{
      width: 15%;
    }
  }
 @media only screen and (max-width: 1048px) {
    .textMenuContainer{
      display: none;
    }
    .contentMenu img{
      display: block;
    }
    .menuMobile{
      position: fixed;
    }
    .subItemContainer{
      display: none;
    }
  }
   @media  (orientation: landscape) {
    .textMenuContainerMobile{
      height: 100vh;
      overflow-y: scroll;
    }
   }
  @media only screen and (-webkit-device-pixel-ratio: 3) {
    .menu{
      height: 120px;
    }
    .logoMenu{
      height: 120px;
    }
    .logoMenu img:nth-child(2){
      height: 50%;
    }
    .logoMenu{
      width: 15%;
      padding-left: 50px;
    }
    .contentMenu h3{
      font-size: 2em;
      margin: 0 20px;
    }
    .textMenuContainerMobile h3{
      font-size: 2.3em;
      font-weight: 300;
    }
    .contentMenu{
      position: absolute;
      right: 0px;
      height: 120px;
      width: 400px;
    }

    .menuMobile{
      top: 170px;
    }
  }

  @media only screen and (max-width: 2144px) and (-webkit-device-pixel-ratio: 3){
    .logoMenu img:nth-child(2){
      display: none;
    }
    .contentMenu{
      width: calc(85% - 40px);
    }
    .logoMenu{
      width: 15%;
    }
  }
  @media only screen and (max-width: 1750px) and (-webkit-device-pixel-ratio: 3){
    .textMenuContainer{
      display: none;
    }
    .contentMenu img{
      display: block;
    }
    .menuMobile{
      position: fixed;
    }
  }
  a{
    all: unset;
  }

</style>

<section id="menuContainer" class="menuContainer">
  <div class="menu menuHR">
    <div class="relative">
      <div class="logoMenu">
        <img id="logoMenu" src="../General/Menu/Logo.png" alt="">
        <img id="ulmanSailsImg" src="../General/Menu/UllmanSails.png" alt="">
      </div>
      <div class="contentMenu">
        <div class="textMenuContainer">
          <h3><a href="../Home/">Home</a></h3>
          <h3 id="sailsTypes"><a href="../SailTypes/">Sail Types</a></h3>
          <h3><a href="../SailCare/">SailCare</a></h3>
          <h3><a href="../Services/">Services</a></h3>
          <h3><a href="../AboutUs/">About Us</a></h3>
          <h3> <a href="../News/News.php">News</a></h3>
          <h3><a href="../ContactUs/">Contact Us</a></h3>
        </div>
        <img id="closeMenu" src="../General/Menu/close.png" alt="">
        <img id="openMenu" src="../General/Menu/menu.png" alt="">
      </div>
    </div>
    <div id="subItemContainer" class="subItemContainer">
      <div class="subItem">
        <div class="subItemBox">
          <img id="imgMenu1" src="../General/Menu/Cruising.jpg" alt="">
          <img id="imgMenu2" src="../General/Menu/Racing.jpg" alt="">
        </div>
      </div>
      <div  class="subItem">
        <div class="subItemBox">
          <h3 id="openImgMenu1"><a href="../Cruising/index.php">Cruising</a></h3>
          <br><br>
          <h3 id="openImgMenu2"><a href="../Racing/index.php">Racing</a></h3>
        </div>
      </div>
    </div>
  </div>
  <div id="mobileMenu" class="menuMobile">
    <div class="textMenuContainerMobile">



      <h3><a href="../Home/">Home</a></h3>
      <h3><a href="../SailTypes/">Sail Types</a></h3>
      <h3><a href="../SailCare/">SailCare</a></h3>
      <h3><a href="../Services/">Services</a></h3>
      <h3><a href="../AboutUs/">About Us</a></h3>
      <h3> <a href="../News/News.php">News</a></h3>
      <h3><a href="../ContactUs/">Contact Us</a></h3>
    </div>
  </div>

</section>


<script type="text/javascript">
window.addEventListener("scroll", function() {
    var elementTarget = document.getElementById("menuContainer");
    var menu = document.getElementsByClassName("menu")[0];
    var menuMobile = document.getElementsByClassName("menuMobile")[0];
    var ulmanSailsImg = document.getElementById("ulmanSailsImg");

  /*  if (window.scrollY > ( elementTarget.offsetHeight)) {
        menu.style.top = "0px";
        menuMobile.style.top = "50px";
        menu.style.transition = "top .3s";
        ulmanSailsImg.style.display  = "none";
    }
    if (window.scrollY < ( elementTarget.offsetHeight)) {
        menu.style.top = "00px";
        menuMobile.style.top = "170px";
        menu.style.transition = "top .3s";
        ulmanSailsImg.style.display  = "block";
        ulmanSailsImg.style.left  = "130px";
    }**/
  });

    var openMenu = document.getElementById("openMenu");
    var closeMenu = document.getElementById("closeMenu");
    var mobileMenu = document.getElementById("mobileMenu");
    var logoMenu = document.getElementById("logoMenu");

    openMenu.addEventListener("click",function(){
      openMenu.style.display = "none";
      closeMenu.style.display = "block";
      mobileMenu.style.display = "block";
      logoMenu.style.height = "100%";
      logoMenu.style.top = "0px";
    })
    closeMenu.addEventListener("click",function(){
      openMenu.style.display = "block";
      closeMenu.style.display = "none";
      mobileMenu.style.display = "none";
      logoMenu.style.height = "110px";
      logoMenu.style.top = "6px";
     })
     closeMenu.style.display = "none";
     mobileMenu.style.display = "none";


     var sailsTypes = document.getElementById("sailsTypes");
     var subItemContainer = document.getElementById("subItemContainer");

     sailsTypes.addEventListener("mouseover",function(){
         subItemContainer.style.height = "30vh";
         subItemContainer.style.transition = "1";
      })
      subItemContainer.style.height = "0%";

      subItemContainer.addEventListener("mouseleave",function(){
          subItemContainer.style.height = "0%";
          subItemContainer.style.transition = "1";
       })

      var openImgMenu1 = document.getElementById("openImgMenu1");
      var openImgMenu2 = document.getElementById("openImgMenu2");
      var imgMenu1 = document.getElementById("imgMenu1");
      var imgMenu2 = document.getElementById("imgMenu2");

       openImgMenu1.addEventListener("mouseover",function(){
        imgMenu1.style.display = "block";
        imgMenu2.style.display = "none";
       })
       openImgMenu2.addEventListener("mouseover",function(){
         imgMenu1.style.display = "none";
         imgMenu2.style.display = "block";
        })


</script>
