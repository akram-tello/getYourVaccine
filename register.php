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
                                        <span class="textgreen text-uppercase">REGISTER FOR YOUR</span><br><span class="text-uppercase">VACCINATION TODAY</span>
                                    </div>
                                </td>
                                <td align="right">
                                    <img src="/images/daftar_icon.png" style="max-width:100px" id="imgicon">
                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                </div>
            </div>
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div> 
<!--footer-->
<?php include("footer.php"); ?>