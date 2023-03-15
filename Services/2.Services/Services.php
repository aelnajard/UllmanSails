<style media="screen">

    /* Services */
    .Services-row{
      display: flex;
      flex-direction: column;
      text-align: center;
      background: #F2F2F2;
      padding: 60px 0;
    }
      .Services-row p {
        text-align: left;
      }

    .Services-Cards{
      display: flex;
      align-items: center;
      flex-direction: column;
    }
      .Services-Cards p {
        max-width: 900px;
        width: 80%;
        margin: 10px 0 40px 0;
      }
      .Services-Cards h3 {
        font-size: 1.2em;
        color: black;
        margin-bottom: 20px;
      }
        .Serv-Wrapper {
          max-width: 960px;
          align-items: center;
        }
        .Serv3 {
          display: flex;
          flex-direction: row;
          flex-wrap: wrap;
        }

    .Services-Card {
      align-items: center;
      justify-content: center;
      width: 300px;
      padding: 20px;
      margin: 10px;
      background-color: #E1E1E1;
    }

    @media(max-width: 980px){

        .Serv-Wrapper {
          max-width: 640px;
          align-items: center;
        }
    }

    @media(max-width: 700px){

        .Serv-Wrapper {
          max-width: 320px;
          align-items: center;
        }
    }
</style>
<section class="Services-row">

  <div class="Services-Cards">
    <h2>Services</h2>
    <p>Ullman Sails offers a variety of services to help you maintain the quality
      of your current sail inventory. We apply our extensive knowledge and experience
      to make sure you ..... details. The answer isn't always a brand new sail.
      We'll find the right solution that meets your goals and your budget. </p>
      <div class="Serv-Wrapper">
        <div class="Serv3">
          <div class="Services-Card">
              <h3> All Sail Repairs </h3>
              <button class="OpenContactUs" type="button"> Contact Us </button>
          </div>

          <div class="Services-Card">
              <h3> Sail and Canvas Cleaning  </h3>
              <button class="OpenContactUs" type="button"> Contact Us </button>
          </div>

          <div class="Services-Card">
              <h3> Canvas Repairs </h3>
              <button class="OpenContactUs" type="button"> Contact Us </button>
          </div>

          <div class="Services-Card">
              <h3> Hardware Upgrades </h3>
              <button class="OpenContactUs" type="button"> Contact Us </button>
          </div>

          <div class="Services-Card">
              <h3> Furling System Installation </h3>
              <button class="OpenContactUs" type="button"> Contact Us </button>
          </div>

          <div class="Services-Card">
              <h3> Sail Handling System </h3>
              <button class="OpenContactUs" type="button"> Contact Us </button>
          </div>
      </div>

  </div>
</div>
</section>

<script type="text/javascript">
const buttonTitle = document.querySelectorAll(".OpenContactUs");

for (let i = 0; i < buttonTitle.length; i++) {
 buttonTitle[i].addEventListener("click", function(){
    window.open("../ContactUs/index.php", "_self");
 })
}




</script>
