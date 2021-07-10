<?php include("header.php"); ?>
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
        <div class="form-group mt-4">
            <label class="form-title fontb textblue size100" for="ic-number">MyKad No. / Passport No.*</label>
            <input type="text" name="ic_number" id="ic-number" class="form-control" placeholder="Write your IC / Passport No. here" maxlength="50">
            <div class="ic-number">
            </div>
        </div>

        <div class="form-group">
            <label class="form-title fontb textblue size100" for="phone-number">Telephone No.*</label>
            <input type="text" name="phone_number" id="phone-number" class="form-control" placeholder="Write your phone number here" maxlength="50">
            <div class="phone-number">
            </div>
        </div>

        <div class="mt-5 p-4 textblue btn-submit text-center">
                <input class="btn btn-block btn-success bggreen bordergreen fontb" type="submit" name="submit" value="LOGIN" id="btn-submit" alt="Submit Button">
        </div>
    </div>
</div>

