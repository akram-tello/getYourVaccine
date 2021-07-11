<?php 
   session_start();
   if (!isset($_SESSION['ic']) && !isset($_SESSION['id'])) {   ?>
<?php include("layout/header.php"); ?>
<form>
<div class="container">
<div class="col-12">
    <div style="display:flex;  align-items: center; padding:20px" class="bgblue">
        <div class="banner_intext text-light" style="width:100%">
            <table width="100%">
                <tbody><tr>
                    <td>
                        <div class="size200 fontb" style="width:100%" id="txticon">
                            <span class="textgreen text-uppercase">CHECK YOUR</span><br><span class="text-uppercase" style="color: #fff;">VACCINATION APPOINTMENT</span>
                        </div>
                    </td>
                    <td align="right">
                        <img src="assets/images/check/semak_icon.png" style="max-width:100px" id="imgicon">
                    </td>
                </tr>
            </tbody></table>
        </div>
    </div>
</div>
<div class="col-lg-8 mt-5" style="float:none;margin:auto;">
    <div class="bg-light p-3 p-lg-5 p-xl-5 p-md-5 p-sm-3 banner_intext mx-auto">
        <div class="textblue size140 fontb"> Login to check your appointment</div>
        <div class="textblue size100 font500 mt-3 mb-5">
            Please key in your identity card (MyKad) OR passport number AND your registered telephone number to check your vaccination appointment.
        </div>
        <form class="border shadow p-3 rounded"
      	      action="server/checkLogin.php" 
      	      method="post" 
      	      style="width: 450px;">
      	      <?php if (isset($_GET['error'])) { ?>
      	      <div class="alert alert-danger" role="alert">
				  <?=$_GET['error']?>
			  </div>
			  <?php } ?>
		  <div class="mt-5">
		    <label for="username" 
		           class="form-label textblue">MyKad No. / Passport No. <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
		    <input type="text" 
		           class="form-control" 
                   placeholder="Write your IC / Passport No. here"
		           name="ic" 
		           id="ic">
		  </div>
		  <div class="mt-5">
		    <label for="password" 
		           class="form-label textblue">Telephone No. <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
		    <input type="number" 
		           name="tel" 
                   placeholder="Write your phone number here"
		           class="form-control" 
		           id="tel">
		  </div>

        <div class="mt-5 p-4 textblue btn-submit text-center">
                <input class="btn btn-block btn-success bggreen bordergreen fontb" type="submit" name="submit" value="LOGIN" alt="Submit Button">
        </div>
    </div>
</div>

<?php }else{
	header("Location: error.php");
} ?>