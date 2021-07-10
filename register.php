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
                            <span class="textgreen text-uppercase">REGISTER FOR YOUR</span><br><span class="text-uppercase" style="color: #fff;">VACCINATION TODAY</span>
                        </div>
                    </td>
                    <td align="right">
                        <img src="assets/images/register/daftar_icon.png" style="max-width:100px" id="imgicon">
                    </td>
                </tr>
            </tbody></table>
        </div>
    </div>
</div>
<div class="row mt-5">
    <div class="col-12">
        <div class="textblue size160 fontb">Follow these simple steps to register. Act now!</div>
        <div class="textblue size120 font500 mt-3">
            Please ensure that all information provided is complete and accurate for a smooth and fuss-free registration.<br>
            <div class="size90 mt-2"><i>*If you are a MySejahtera user, please register for vaccination through the application. This is because your record is already in the MySejahtera database.</i></div>
        </div>
    </div>
</div>

<div class="form-group mt-5">
    <label for="name" class="textblue">Name</label>
    <input type="name" class="form-control textblue" id="name" aria-describedby="name" placeholder="whrite your Full name here">
  </div>
  
  <div class="form-group mt-5">
    <label for="age" class="textblue">age</label>
    <input type="age" class="form-control textblue" id="age" aria-describedby="age" placeholder="whrite your age here">
  </div>
  
  <div class="form-group mt-5">
    <label for="ic" class="textblue">IC/passport number</label>
    <input type="ic" class="form-control textblue" id="ic" aria-describedby="ic" placeholder="whrite your IC / Passport Number here">
  </div>

  <div class="form-group mt-5">
    <label for="phone" class="textblue">phone number</label>
    <input type="phone" class="form-control textblue" id="phone" aria-describedby="phone" placeholder="whrite your phone number here">
  </div>

  <div class="form-group mt-5">
    <label for="state" class="textblue">select your state</label>
    <select class="form-control textblue" id="state">
      <option>KL</option>
      <option>JB</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>

  <div class="form-group mt-5">
    <label for="email" class="textblue">Email (optinal)</label>
    <input type="email" class="form-control textblue" id="email" placeholder="write your valid email here">
  </div>

  <div class="form-group mt-5">
    <label for="vaccine" class="textblue">1. Are you interested to take the COVID-19 vaccine?</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
        <label class="form-check-label" for="gridRadios1">
        Yes
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
        <label class="form-check-label" for="gridRadios2">
        No
        </label>
    </div>
  </div>

  <div class="form-group mt-5">
    <label for="comorbidities" class="textblue">2. Do you have any comorbidities?</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
        <label class="form-check-label" for="gridRadios3">
        Yes
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="option4">
        <label class="form-check-label" for="gridRadios4">
        No
        </label>
    </div>
  </div>

  <div class="form-group mt-5">
    <label for="OKU" class="textblue">3. Are you registered with the Department of Social Welfare Malaysia as a Disabled Person (OKU)?</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios5" value="option5">
        <label class="form-check-label" for="gridRadios5">
        Yes
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios6" value="option6">
        <label class="form-check-label" for="gridRadios6">
        No
        </label>
    </div>
  </div>

  <div class="form-group mt-5">
    <label for="name" class="textblue">Address</label>
    <input type="name" class="form-control textblue" id="name" aria-describedby="name" placeholder="add your full address here">
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="declare">
    <label class="form-check-label textblue" for="declare">*I hereby declare that the information provided is true and correct</label>
  </div>

  <button type="submit" class="btn btn-primary" style="margin-bottom: 20px;">Submit</button>

</form>
</div> 
<!--footer-->
<?php include("layout/footer.php"); ?>