
<!-- Login Modal -->
<div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="loginmodalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="justify-content:space-between;">
        <h5 class="modal-title" id="loginmodalLabel">Sign In</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-4 p-md-5">
        <form class="login-form" id="login-form" action="content/_loginhandle.php" method="POST">
        <input type="hidden" name="redirect" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
          <div class="form-group p-3">
            <input type="email" class="form-control rounded-left" placeholder="Email" name="email">
          </div>
          <div class="form-group d-flex p-3">
            <input type="password" class="form-control rounded-left" placeholder="Password" name="password">
          </div>
          <div class="form-group p-3">
            <button type="submit" class="form-control btn btn-primary rounded submit px-3" form="login-form">Login</button>
          </div>
          <div class="form-group d-md-flex p-3">
            <div class="text-md-right">
              <a href="#">Forgot Password</a>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer justify-content-center">
        <p>Not a member? <a href="#" id="registerbtn" data-bs-toggle="modal" data-bs-target="#registermodal" >Create an account</a></p>
      </div>
    </div>
  </div>
</div>



    
<!-- Register Modal -->
<div class="modal fade" id="registermodal" tabindex="-1" role="dialog" aria-labelledby="registermodalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="justify-content:space-between;">
        <h5 class="modal-title" id="registermodalLabel">Register</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-4 p-md-5">
        <form class="register-form" id="register-form" action="content/_registerhandle.php" method="POST">
        <input type="hidden" name="redirect" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
          <div class="form-group p-3">
            <input type="text" class="form-control rounded-left" placeholder="Name" name="name">
          </div>
          <div class="form-group p-3">
            <input type="email" class="form-control rounded-left" placeholder="Email" name="email">
          </div>
          <div class="form-group d-flex p-3">
            <input type="password" class="form-control rounded-left" placeholder="Password" name="password">
          </div>
          <div class="form-group p-3">
            <button type="submit" class="form-control btn btn-primary rounded submit px-3" form="register-form">Register</button>
          </div>
          <div class="form-group d-md-flex p-3">
            <div class="text-md-right">
              <a href="#">Forgot Password</a>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer justify-content-center">
        <p>Already a member? <a href="#" id="loginbtn" data-bs-toggle="modal" data-bs-target="#loginmodal" >Login</a></p>
      </div>
    </div>
  </div>
</div>

