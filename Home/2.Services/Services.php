<style media="screen">
  .services{
    position: relative;
    background-color: #FAFAFA;
    padding: 2vw;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
  }

  .box-services{
    position: relative;
    weight: 30vw;
    min-width: 300px;
    height: 200px;
    margin: 10px;

    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;

    background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size: cover; /* Resize the background image to cover the entire container */
  }
  .pictureServicesHome1 {
    background-image: url("../Home/2.Services/Image/Cruising.jpg"); /* The image used */
  }
  .pictureServicesHome2 {
    background-image: url("../Home/2.Services/Image/Racing.jpg"); /* The image used */
  }


  .wrap-box-services{
    position: relative;
    padding: 7px 14px;
    background-color: rgba(255, 0, 0, .1);
    height: 70%;
    width: 70%;
    top: 50%;
    transform: translateY(-50%);
  }

  .wrap-box-services:hover{
    background-color: rgba(255, 0, 0, .3);
    cursor: pointer;
  }

  .wrap-box-services h3{
    position: relative;
    top: 50%;
    transform: translateY(-200%);
    text-align: center;
    color: white;
    font-weight: 500;
    text-shadow: 1px 1px 1px black;
  }
  .wrap-box-services h4{
    position: relative;
    top: 50%;
    transform: translateY(-200%);
    text-align: center;
    font-weight: 200;
    color: white;
    text-shadow: 1px 1px 1px black;
  }
</style>

<section class="services">

  <a href="../Cruising/index.php">
    <div class="box-services pictureServicesHome1">
      <div class="wrap-box-services">
        <h3>Cruising Sails</h3>
        <h4>See more</h4>
      </div>
    </div>
  </a>

  <a href="../Racing/index.php">
    <div class="box-services pictureServicesHome2">
      <div class="wrap-box-services ">
        <h3>Racing Sails</h3>
        <h4>See more</h4>
      </div>
    </div>
  </a>

<!--
  <div class="box-services">
    <div class="wrap-box-services">
      <h3>Cruising sails</h3>
      <h4>See more</h4>

    </div>
  </div>

  <div class="box-services">
    <div class="wrap-box-services">
      <h3>One Design</h3>
      <h4>See more</h4>

    </div>
  </div>

  <div class="box-services">
    <div class="wrap-box-services">
      <h3>Specialized</h3>
      <h4>See more</h4>

    </div>
  </div>

  <div class="box-services">
    <div class="wrap-box-services">
      <h3>David Ullman </h3>
      <h4>See more</h4>

    </div>
  </div>
-->
</section>

<script type="text/javascript">

</script>
