<!-- Login Grid Section -->
    <main class="container">
      <section id="login">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2>Login</h2>
              <hr class="star-primary">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
              <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
              <form name="loginForm" id="loginForm" validate>
                <div class="row control-group">
                  <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>User Name</label>
                    <input type="text" class="form-control" placeholder="User Name" id="userName" required data-validation-required-message="Please enter user name.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="row control-group">
                  <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Password</label>
                    <textarea type="num" class="form-control" placeholder="Password" id="password" required data-validation-required-message="Please enter password."></textarea>
                  </div>
                </div>
                <button type="submit" class="btn btn-default btn-lg">Login</button>
              </form>
            </div>
          </div>
       </div>
     </section>
   </main>
