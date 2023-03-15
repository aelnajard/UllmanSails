<style media="screen">
  .contactUs{
    padding: 50px 0;
    position: relative;
    background: rgb(247,247,247);
  }
  .contactUsTitle{
    position: relative;
    text-align: center;
    font-size: calc(1.3vw + 1.6em);
    font-weight: 400;
    color: black;
  }
  .contactUsContainer{
    position: relative;
    display: flex;
    flex-wrap:wrap-reverse;
    justify-content: center;
    width: 95vw;
    left: 50%;
    transform: translateX(-50%);
    margin-top : 60px;
  }
  .contactUsBox{
    position: relative;
    width: 50%;
    padding: 50px 30px;
  }
  .contactUsBox input{
    position: relative;
    height: 35px;
    width: 100%;
    font-size: 1.4em;
    padding-left: 10px;
    margin: 10px 0;
  }
  .contactUsBox textarea {
    position: relative;
    width: 100%;
    font-size: 1.4em;
    padding: 5px 10px;
    margin: 10px 0;
    border: none;
    border-bottom: 1px solid lightgrey;
  }
  .contactUsBox h3{
    position: relative;
    font-weight: 300;
    font-size: 1.4em;
    margin: 0px 0 10px 0;
  }
  .contactUsBox button{
    position: relative;
    left: 50%;
    transform: translateX(-50%);
    cursor: pointer;
  }
  @media screen and (max-width: 1024px){
    .contactUsBox{
      position: relative;
      width: 100%;
      padding: 10px 30px;
    }
  }
  #map {
    height: 300px;
    z-index: 1;
   }

  .containerTable{
    position: relative;
    max-width: 75%;
    overflow-x: scroll;
    left: 50%;
    transform: translateX(-50%);
   }
  table{
    position: relative;

  }
   th{
    background-color: #0E193B;
    color: white;
    padding: 7px;
  }
   td{
    border: 1px solid black;
    background-color: rgba(210, 220, 234,1);
    padding: 4px 7px;
  }
</style>
<section class="contactUs">
  <h1 class="contactUsTitle">Contact us</h1>
  <div class="contactUsContainer">
    <div class="contactUsBox">
      <h3>Your contact info</h3>
      <input type="text" name="" placeholder="Name" value="">
      <input type="text" name="" placeholder="Contact number" value="">
      <input type="text" name="" placeholder="Location of Vessel (?)" value="">
      <input type="text" name="" placeholder="Email address" value="">
      <textarea name="name" placeholder="Please share your experiences" rows="3" cols="80"></textarea>
      <button type="button" name="button">Submit</button>
    </div>
    <div class="contactUsBox">
      <div id="map"></div>
    </div>
  </div>


  <div class="containerTable">
    <table>
        <thead>
          <tr>
            <th>Site</th>
            <th>Plymouth</th>
            <th>Hamble</th>
            <th>ADMIN OFFICE</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Telephone</td>
            <td>01752 337 131</td>
            <td>02380 457 711</td>
            <td>02780 456 611</td>

          </tr>
          <tr>
            <td>Address</td>
            <td>Unit 23a, 10 Bell Close
              Plymouth
              Devon
              PL7 4FD</td>
            <td>15 Compass Point
              Ensign Way, Hamble
              Southampton S031 4RA</td>
            <td></td>

          </tr>
          <tr>
            <td>Email</td>
            <td>sales@ullmansails.co.uk</td>
            <td>sales@ullmansails.co.uk</td>
            <td>catrina@ullmansails.co.uk</td>

          </tr>
          <tr>
            <td>Out of Hours</td>
            <td>07979 591 999</td>
            <td>07753 131 903</td>
            <td></td>

          </tr>
          <tr>
            <td>Head of Loft</td>
            <td>Jon Pegg</td>
            <td>Rob Larke</td>
            <td>Catrina Southworth</td>

          </tr>
          <tr>
            <td>Opening Hours</td>
            <td>08:00 - 17:00</td>
            <td>08:30 - 17:30</td>
            <td></td>

          </tr>


        </tbody>
      </table>

  </div>


</section>

<script type="text/javascript">
  var map = L.map('map').setView([50.859644, -2.320230], 7);
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      maxZoom: 18,
      id: 'mapbox/streets-v11',
      tileSize: 512,
      zoomOffset: -1,
      accessToken: 'your.mapbox.access.token'
  }).addTo(map);

  var marker = L.marker([50.76, -1.320230]).addTo(map);
  var marker = L.marker([50.3, -4.1]).addTo(map);

</script>
