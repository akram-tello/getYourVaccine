<?php
include("header.php");
// include("find.php");
?>
<body onload="initialize()"><!--banner-section-->
<div class="container-fluid">
    <div class="banner">
        <div class="container">
            <div class="col-lg-12">
                <div class="banner-text animated fadeInLeft">
                    <h2>LINDUNG DIRI,</h2>
                    <h2 style="color: #fff;">LINDUNG SEMUA.</h2>
                    <p style="color: #fff;">Have you registered? If not, do register now to protect yourself and your loved ones</p>																																																								</p>
                    <button type="button" class="btn btn-success mt-4 bggreen bordergreen fontb" onclick="window.location='/register.php/'">REGISTER NOW</button>
                    <div class="scroll">
                        <img class="hvr-grow" src="assets/images/home/avatar_landing_animated.svg" style="max-width:20em" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <!--map-section-->
<div class="container-fluid">
    <div class="map">
        <div class="vaccine">
            <img src="assets/images/home/vaccine.svg" class="img-responsive animated fadeInDown" alt=""/>
        </div>
        <div class="container">
            <div class="map-text">
                <h3>HEALTHCARE AT YOUR DEMAND !</h3>
                <h4>Find a nearby doctor or dentist and book an appointment instantly. And it's free !</span></h4>
            </div>
        </div>
    </div>

</div>
<?php include("footer.php"); ?>