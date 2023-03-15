<style media="screen">


/* News */
.News-row {
  display: flex;
  flex-wrap: wrap;
  flex-direction: row;
}
  .News-row p {
    color: #838383;
  }

.News-L {
  display: flex;
  flex: 60%;
  flex-direction: column;
  background-color: #F2F2F2;

  text-align: center;
  align-items: center;
  justify-content: center;

  padding: 50px 0;
}
  .L-Top {
    display: flex;
    flex-direction: column;
    margin-bottom: 20px;
  }
    .L-Top h2 {
      margin-bottom: 30px;
    }

  .L-Bot {
    max-width: 900px;
  }
  .Group-Card{
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
  }


  .News-Card {
      width: 250px;
      margin: 20px;
      text-align: left;
  }
  .News-Card h4 {
    margin: 5px 0;
  }
    .News-Card > img {
      width: 100%;
      height: 55%;
    }

  .News-Card span {
    cursor: pointer;
  }




.News-R {
  display: flex;
  flex-direction: column;
  background-color: #111C42;
  align-items: center;
  margin: 70px auto;

}
  .r-NewsCards {
    display: flex;
    flex-direction: column;
    text-align: center;
  }
    .rNews-Card {
      background-color: #F2F2F2;
      padding: 10px;
      margin: 15px;
      width: 380px;
    }
    .rNews-Card p {
      text-align: center;
      font-size: 0.9em;
    }
    .rNews-Card > img {
      height: 190px;
      border-radius: 2.5px;
      margin: 10px 0;
    }
    .SeeMoreNews:hover{
      text-decoration: underline;
    }

    @media screen and (max-width: 1300px ) {
        .News-R h3 {
          margin: 20px 0;
        }
        .rNews-Card {
            max-width: 700px;
            padding: 30px;
            width: 80%;
            margin: 15px auto;
        }
    }

    @media screen and (max-width: 880px ) {

        .L-Bot {
          max-width: 580px;
          justify-content: center;
        }

    }

    @media screen and (max-width: 600px ) {

        .L-Bot {
          max-width: 280px;
        }

    }

</style>
<section class="News-row">

  <!-- News Left -->
  <div class="News-L">

    <div class="L-Top">
      <h2> News </h2>

      <div class="Tabs">
        <button class="Tabs-button" type="button"> 1 </button>
        <button class="Tabs-button" type="button"> 2 </button>
        <button class="Tabs-button" type="button"> 3 </button>
        <button class="Tabs-button" type="button"> 4 </button>
      </div>
    </div>

    <div class="L-Bot">



      <div class="Group-Card">
        <div class="News-Card">
          <img src="4.News/Images/1.jpg " alt="">
          <h4> Ullman Sails support RC1000 </h4>
          <p> RC1000 race series is a brand new racing class based in Plymouth
            and the south west, aiming for  ..
            <strong class="SeeMoreNews"><span>See more</span></strong>   </p>
        </div>

        <div class="News-Card">
          <img src="4.News/Images/2.jpg " alt="">
          <h4> Ullman Sails Inshore & Offshore Race Series </h4>
          <p> Ullman Sails are pleased to announce the dates for our inshore
            and offshore points races series for 2020. ..
            <strong class="SeeMoreNews"><span>See more</span></strong>   </p>
        </div>

        <div class="News-Card">
          <img src="4.News/Images/3.jpg" alt="">
          <h4> Victory in the Quarter Ton Cup </h4>
          <p> Ullman Sails customer John Santy recently cruised to victory at
             the Quarter Ton Cup. Read his amusing  ..
             <strong class="SeeMoreNews"><span>See more</span></strong>   </p>
        </div>
      </div>



      <div class="Group-Card">
           <div class="News-Card">
             <img src="4.News/Images/4.jpg " alt="">
             <h4> Loft Updates </h4>
             <p> 2018 has seen the loft in Plymouth grow in all aspects –
               we are now sporting over 115 square   ...
               <strong class="SeeMoreNews"><span>See more</span></strong>   </p>
           </div>

           <div class="News-Card">
             <img src="4.News/Images/5.jpg " alt="">
             <h4> Customer Updates </h4>
             <p> This year loft regular Mike Nuttall managed a series win
               in the Plym Yacht Club Friday night ...
               <strong class="SeeMoreNews"><span>See more</span></strong>   </p>
           </div>

           <div class="News-Card">
             <img src="4.News/Images/6.jpg" alt="">
             <h4> Quarter Tonner Developments </h4>
             <p> We’ve been working particularly hard this season in the
               highly competitive Quarter Tonner  ...
                <strong class="SeeMoreNews"><span>See more</span></strong>   </p>
           </div>
       </div>





  <div class="Group-Card">
            <div class="News-Card">
              <img src="4.News/Images/7.jpg " alt="">
              <h4> London Boat Show </h4>
              <p> Here at Ullman Sails GBR we used to love the London Boat
                Show. It was a fantastic opportunity   ...
                <strong class="SeeMoreNews"><span>See more</span></strong>   </p>
            </div>

            <div class="News-Card">
              <img src="4.News/Images/8.jpg " alt="">
              <h4> Welcome The Newest Member Of Our Team </h4>
              <p> Charlie has been sailing for over ten years  ...
                <strong class="SeeMoreNews"><span>See more</span></strong>   </p>
            </div>

            <div class="News-Card">
              <img src="4.News/Images/9.jpg" alt="">
              <h4> Penarth – Cruising Code Zero </h4>
              <p> Our newest dealers in South Wales have had a very busy
                winter! We have just delivered ...
                 <strong class="SeeMoreNews"><span>See more</span></strong>   </p>
            </div>
        </div>


      <div class="Group-Card">
        <div class="News-Card">
          <img src="4.News/Images/10.jpg " alt="">
          <h4> Hit By a Once in a Life Time Storm</h4>
          <p> In the Ostar Race In 2017, Mervyn Wheatley ﻿was hit
             by a once in a life time storm.  ...
             <strong class="SeeMoreNews"><span>See more</span></strong>
          </p>
        </div>
      </div>

    </div>
  </div>


  <script type="text/javascript">
  const Tabs = document.querySelectorAll(".Tabs-button");
  const GroupCard = document.querySelectorAll(".Group-Card");
  var GroupCardOn = 0;


  for (let i = 0; i < Tabs.length; i++) {

    GroupCard[i].style.display = "none";
    GroupCard[0].style.display = "flex";

    Tabs[i].addEventListener("click", function(){

    if (GroupCard[i].style.display == "none" || GroupCard[i].style.display == ""){
        GroupCardOn  = i;
          GroupCard[i].style.display = "flex";
        turnOffOtherGroupCards();
      }

    })
  }

  function turnOffOtherGroupCards(){
    for (let i = 0; i < Tabs.length; i++) {
      if (i != GroupCardOn) {
        GroupCard[i].style.display = "none";
      }
    }
  }



  const SeeMoreNews = document.querySelectorAll(".SeeMoreNews");

  for (let i = 0; i < SeeMoreNews.length; i++) {
    SeeMoreNews[i].addEventListener("click", function(){

      alert();
    })
  }


  </script>


  <!-- END News Left -->


  <!-- News Right -->


  <div class="News-R">

        <h3> Recommended News </h3><br>
        <div class="r-NewsCards">
          <a href="https://www.facebook.com/ullmansailssolent" target="_blank">
            <div class="rNews-Card">
               <h4> Another day and more new sails to fit. This time a full suit
                 of sails for an Island packet 439. Built too our Endurance
                 Series Specification these sails are designed for long lasting
                 extensive cruising </h4><br>
               <img src="4.News/Images/r1.jpg" alt="">
             </div>
          </a>


      <!--       <div class="rNews-Card">
              <h4> Loft Updates </h4>
              <img src="4.News/n1.jpg" alt="">
              <p> 2018 has seen the loft in Plymouth grow in all aspects -
                  we are now sporting over 115 square meters of floor space to.. </p>
            </div>

            <div class="rNews-Card">
              <h4> Loft Updates </h4>
              <img src="4.News/n1.jpg" alt="">
              <p> 2018 has seen the loft in Plymouth grow in all aspects -
                  we are now sporting over 115 square meters of floor space to.. </p>
            </div> -->

        </div>

  </div> <!-- END News Right -->

</section> <!-- END Section NEWS -->
