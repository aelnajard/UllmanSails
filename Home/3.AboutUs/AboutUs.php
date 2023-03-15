<style media="screen">
  .aboutUs{
    position: relative;
    background-color: #FAFAFA;
    padding: 3vw  10vw;
  }
  .titleAboutUs{
    position: relative;
    width: 85%;
    background-color: #0E193B;
    left: 50%;
    transform: translateX(-50%);
    padding: 5px;
  }
  .titleAboutUs h3{
    text-align: center;
  }
  .groupBoxAboutUs{
      position: relative;
     display: flex;
     justify-content: center;
     flex-wrap: wrap;
  }
  .boxAboutUs{
    position: relative;
    width: 300px;
    height: 400px;
    min-width: 300px;
    min-height: 320px;
    margin: 10px  0;
    background-color: rgb(239, 238, 241);
    border: 2px solid grey;
    margin: 20px 10px;
  }
  .pictureAboutUsBox{
    position: relative;
    width: 100%;
    height: 70%;
    padding-top: 20px;
  }
  .pictureAboutUs{
    position: relative;
    width: 85%;
    height: 100%;
    left: 50%;
    transform: translateX(-50%);
    border-radius: 50%;

    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  .pictureAboutUsCat{
    background-image: url("3.AboutUs/Cat.jpg");
  }
  .pictureAboutUsRob{
    background-image: url("3.AboutUs/RobLarke.png");
  }
  .pictureAboutUsJonPegg{
    background-image: url("3.AboutUs/JonPegg.jpg");
  }
  .pictureAboutUsDan{
    background-image: url("3.AboutUs/DanCrawford.jpg");
  }
  .pictureAboutUsVicky{
    background-image: url("3.AboutUs/VickyLawrence.jpg");
  }


  .boxProfession{
    position: relative;
    width: 100%;
    padding: 5px;
    padding-left: 10px;
  }
  .boxProfession h3{
    color: #0E193B;
  }
  .boxProfession h4{
    font-size: 1.2em;
    color: black;
  }
  .boxSocialMedia{
    position: relative;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
  }
  .socialMedia{
    position: relative;
    height: 44px;
    width: 50px;
    margin: 5px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    cursor: pointer;
  }
  .socialMedia:hover{
    background-color: rgb(240, 240, 230);
  }
  .socialMedia:nth-child(1){
    background-image: url("3.AboutUs/facebook.png");
  }
  .socialMedia:nth-child(2){
    background-image: url("3.AboutUs/Instagram.png");
  }
  .socialMedia:nth-child(3){
    background-image: url("3.AboutUs/Twitter.png");
  }
  .socialMedia:nth-child(4){
    background-image: url("3.AboutUs/YouTube.png");
  }
  .boxContactUs{
    position: relative;
    width: 300px;
    height: 400px;
    margin: 20px 10px;
    border: 2px solid grey;
  }
  .contact{
    position: relative;
    width: 100%;
    height: 50%;
    padding-top: 10px;


  }
  .contactTitle{
    position: relative;
    width: 95%;
    background-color: #0E193B;
    left: 50%;
    transform: translateX(-50%);
    padding: 5px;
  }
  .contactTitle h3{
    text-align: center;
  }
  .contact h4{
    padding-left: 10px;
    margin: 4px 0;
  }
  .boxInfoContainer{
    position: relative;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    margin: 10px 0;

  }
  .boxInfo{
    position: relative;
    width: 45%;
  }
  .buttonTitle{
    position: relative;
    width: 45%;
    background-color: #0E193B;
    padding: 5px;
    margin-top: 10px;
    cursor: pointer;
  }
  .buttonTitle:hover{
    background-color: rgb(36, 46, 77);
  }
  .buttonTitle h3{
    text-align: center;
    font-size: 1.2em;
  }


.display480px{
  display: block;
}
.display1024px{
  display: none;
}
.display1200px{
  display: none;
}

  @media screen and (min-width: 480px) {
    .display480px{
      display: block;
    }
  }
  @media screen and (min-width: 768px) {
    .display480px{
      display: none;
    }
    .display1024px{
      display: block;
    }
  }
  @media screen and (min-width: 1024px) {

  }

  @media screen and (min-width: 1200px) {
    .display1024px{
      display: none;
    }
    .display1200px{
      display: block;
    }
  }
</style>
<section class="aboutUs">
  <div class="titleAboutUs">
    <h3>SOLENT</h3>
  </div>
  <div class="groupBoxAboutUs">

    <div class="boxAboutUs">
      <div class="pictureAboutUsBox">
        <div class="pictureAboutUs pictureAboutUsCat">
        </div>
      </div>
      <div class="boxProfession">
        <a href="../AboutUs-Cat/index.php"><h3>Managing Director</h3></a>
      </div>
      <div class="boxProfession">
        <h4>Catrina Southworth</h4>
      </div>
    </div>

    <div class="boxAboutUs">
      <div class="pictureAboutUsBox">
        <div class="pictureAboutUs pictureAboutUsRob">
        </div>
      </div>
      <div class="boxProfession">
        <a href="../AboutUs-Rob/index.php"><h3>Solent Sails</h3></a>


      </div>
      <div class="boxProfession">
        <h4>Robert Larke</h4>
      </div>
    </div>


      <div class="boxContactUs display1200px">
        <div class="contact">

          <div class="contactTitle">
            <h3>Solent</h3>
          </div>

          <div class="boxInfoContainer">

            <div class="boxInfo">

              <h4><strong>Main office:</strong> </h4>
              <h4><strong>Robert Larke</strong></h4>
            </div>

            <div class="boxInfo">
              <h4>Solent:</h4>
              <h4>02380 457711</h4>
              <h4>Rob mobile:</h4>
              <h4>07753 131903</h4>
            </div>

            <div class="buttonTitle">
              <h3 class="openContactUs">Contact us</h3>
            </div>

          </div>

        </div>

        <div class="contact">

          <div class="contactTitle">
            <h3>Plymouth</h3>
          </div>

          <div class="boxInfoContainer">

            <div class="boxInfo">
              <h4><strong>Main office:</strong> </h4>
              <h4><strong>Jon Peg</strong></h4>
            </div>

            <div class="boxInfo">
              <h4>Plymouth:</h4>
              <h4>01752 337131</h4>
              <h4>Jon mobile:</h4>
              <h4>07979 591999</h4>
            </div>

            <div class="buttonTitle">
              <h3 class="openContactUs">Contact us</h3>
            </div>

          </div>

        </div>
      </div>

  </div>

  <div class="titleAboutUs">
    <h3>PLYMOUTH</h3>
  </div>

  <div class="groupBoxAboutUs">

    <div class="boxAboutUs">
      <div class="pictureAboutUsBox">
        <div class="pictureAboutUs pictureAboutUsJonPegg">
        </div>
      </div>
      <div class="boxProfession">
        <a href="../AboutUs-Pegg/index.php"><h3>Loft Director</h3></a>


      </div>
      <div class="boxProfession">
        <h4>Jon Pegg</h4>
      </div>
    </div>

    <div class="boxAboutUs">
      <div class="pictureAboutUsBox">
        <div class="pictureAboutUs pictureAboutUsDan">
        </div>
      </div>
      <div class="boxProfession">
        <a href="../AboutUs-Dan/index.php"><h3>Sailmaker</h3></a>
      </div>
      <div class="boxProfession">
        <h4>Dan Crawford</h4>
      </div>
    </div>

    <div class="boxAboutUs">
      <div class="pictureAboutUsBox">
        <div class="pictureAboutUs pictureAboutUsVicky">
        </div>
      </div>
      <div class="boxProfession">
        <a href="../AboutUs-Vicky/index.php"><h3>Sail Servicing</h3></a>
      </div>
      <div class="boxProfession">
        <h4>Vicky Lawrence</h4>
      </div>
    </div>

    <div class="boxContactUs  display1024px">
      <div class="contact">

        <div class="contactTitle">
          <h3>Solent</h3>
        </div>

        <div class="boxInfoContainer">

          <div class="boxInfo">

            <h4><strong>Main office:</strong> </h4>
            <h4><strong>Robert Larke</strong></h4>
          </div>

          <div class="boxInfo">
            <h4>Solent:</h4>
            <h4>02380 457711</h4>
            <h4>Rob mobile:</h4>
            <h4>07753 131903</h4>
          </div>

          <div class="buttonTitle">
            <h3 class="openContactUs">Contact us</h3>
          </div>

        </div>

      </div>

      <div class="contact">

        <div class="contactTitle">
          <h3>Plymouth</h3>
        </div>

        <div class="boxInfoContainer">

          <div class="boxInfo">
            <h4><strong>Main office:</strong> </h4>
            <h4><strong>Jon Peg</strong></h4>
          </div>

          <div class="boxInfo">
            <h4>Plymouth:</h4>
            <h4>01752 337131</h4>
            <h4>Jon mobile:</h4>
            <h4>07979 591999</h4>
          </div>

          <div class="buttonTitle">
            <h3 class="openContactUs">Contact us</h3>
          </div>

        </div>

      </div>
    </div>

  </div>

  <div class="boxSocialMedia">
    <div id="facebookLink" class="socialMedia">
    </div>
    <div id="instagramLink" class="socialMedia">
    </div>
    <div id="twiterLink" class="socialMedia">
    </div>
    <div id="youTubeLink" class="socialMedia">
    </div>
  </div>


  <div class="groupBoxAboutUs">

    <div class="boxContactUs  display480px">

      <div class="contact">

        <div class="contactTitle">
          <h3>Solent</h3>
        </div>

        <div class="boxInfoContainer">

          <div class="boxInfo">

            <h4><strong>Main office:</strong> </h4>
            <h4><strong>Robert Larke</strong></h4>
          </div>

          <div class="boxInfo">
            <h4>Solent:</h4>
            <h4>02380 457711</h4>
            <h4>Rob mobile:</h4>
            <h4>07753 131903</h4>
          </div>

          <div class="buttonTitle">
            <h3 class="openContactUs">Contact us</h3>
          </div>

        </div>

      </div>

      <div class="contact">

        <div class="contactTitle">
          <h3>Plymouth</h3>
        </div>

        <div class="boxInfoContainer">

          <div class="boxInfo">
            <h4><strong>Main office:</strong> </h4>
            <h4><strong>Jon Peg</strong></h4>
          </div>

          <div class="boxInfo">
            <h4>Plymouth:</h4>
            <h4>01752 337131</h4>
            <h4>Jon mobile:</h4>
            <h4>07979 591999</h4>
          </div>

          <div class="buttonTitle">
            <h3><a href="../ContactUs/index.php"></a>Contact us</h3>
          </div>

        </div>

      </div>


    </div>

  </div>





</section>
<script type="text/javascript">
    const buttonTitle = document.querySelectorAll(".buttonTitle");

    for (let i = 0; i < buttonTitle.length; i++) {
     buttonTitle[i].addEventListener("click", function(){
        window.open("../ContactUs/index.php", "_self");
     })
    }

    var facebookLink = document.getElementById('facebookLink');
    var instagramLink = document.getElementById('instagramLink');
    var twiterLink = document.getElementById('twiterLink');
    var youTubeLink = document.getElementById('youTubeLink');

    facebookLink.addEventListener("click", function(){
      window.open("https://web.facebook.com/ullmansails.co.uk/?_rdc=1&_rdr");
    })
    instagramLink.addEventListener("click", function(){
      window.open("https://instagram.com/ullmansailsuk");
    })
    twiterLink.addEventListener("click", function(){
      window.open("https://twitter.com/ullmansailsuk");
    })
    youTubeLink.addEventListener("click", function(){
      window.open("https://www.youtube.com/user/UllmanSailsTV");
    })






</script>
