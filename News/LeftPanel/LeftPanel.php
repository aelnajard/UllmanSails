<style media="screen">

.contentLeftPanel{
  position: relative;
  padding: 0px 0;
  width: 100%;
  margin-top: 10%;

}
.scrollLeftPanel{
  height: 100vh;
  overflow-y: scroll;
}
.itemsLeftPanel{
  position: relative;
  text-align: center;
  color: white;
  padding: 7px;
  cursor: pointer;
  margin: 1px 0;
}

.itemsLeftPanel:nth-child(odd){
  background-color: rgb(96, 103, 124);
}
.itemsLeftPanel:nth-child(odd):hover{
  background-color: rgb(81, 87, 109);
}
.itemsLeftPanel:nth-child(even){
  background-color: rgb(17, 27, 64);
}
.itemsLeftPanel:nth-child(even):hover{
  background-color: rgb(34, 43, 74);
}


.logoNews{
  position: relative;
  width: 70%;
  left: 50%;
  transform: translateX(-50%);
}
.leftPanel h4{
  color: white;
  cursor: pointer;
  margin: 0;
  margin-top: 5px;
  font-weight: 400;

}
.leftPanel a{
   all: unset;
}
.containerItemsLeftPanelGoHome{
  position: relative;
  height: 35px;
  width: 100px;
  padding-left: 10px;
}
.itemsLeftPanelGoHomeIcon{
  position: relative;
  height: 15px;
  top: 50%;
  transform: translateY(-50%);
  display: inline-block;
}
.itemsLeftPanelGoHome{
  position: relative!important;
  text-align: left;
  color: white;
  cursor: pointer;
  margin: 0!important;
  top: 50%;
  transform: translateY(-50%);
  display: inline-block;
}
</style>
<div class="scrollLeftPanel">

<div id="goHome" class="containerItemsLeftPanelGoHome">
  <img class="itemsLeftPanelGoHomeIcon" src="../../News/LeftPanel/Images/LeftArrow.png" alt="">
  <h4 class="itemsLeftPanelGoHome">  Home</h4>
</div>

<!--  <h2><a href="../../Home/"><</a></h2>-->
  <img class="logoNews" src="../../News/LeftPanel/Images/LogoUS.png" alt="">
  <div class="contentLeftPanel">
    <h4 class="itemsLeftPanel">Ullman Sails support RC1000</h4>
    <h4 class="itemsLeftPanel">Ullman Sails Inshore & Offshore Race Series</h4>
    <h4 class="itemsLeftPanel">Victory in the Quarter Ton Cup</h4>
    <h4 class="itemsLeftPanel">Loft Updates</h4>
    <h4 class="itemsLeftPanel">Customer Updates</h4>
    <h4 class="itemsLeftPanel">Quarter Tonner Developments</h4>
    <h4 class="itemsLeftPanel">London Boat Show</h4>
    <h4 class="itemsLeftPanel">Welcome The Newest Member Of Our Team</h4>
    <h4 class="itemsLeftPanel">Penarth – Cruising Code Zero</h4>
    <h4 class="itemsLeftPanel">Hit By a Once in a Life Time Storm</h4>
  </div>
</div>

  <script type="text/javascript">
    goHome = document.getElementById('goHome');

    goHome.addEventListener("click", function(){
      window.open("../../Home/", "_self");
    })

  </script>
