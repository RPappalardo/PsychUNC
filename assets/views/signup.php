<!-- Login Grid Section -->
<main class="container">
<section class="success" id="register">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Register</h2>
                <hr class="star-light">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <form name="registerForm" id="registerForm" validate>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>First Name</label>
                            <input type="text" class="form-control" placeholder="First Name" id="firstname" required data-validation-required-message="Please enter your first name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Last Name</label>
                            <input type="text" class="form-control" placeholder="Last Name" id="lastname" required data-validation-required-message="Please enter your last name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Phone Number</label>
                            <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Code</label>
                            <textarea type="num" class="form-control" placeholder="Class Code" id="classCode" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button fill="#C0C0C0" type="submit" class="btn btn-success btn-lg">
                              <a href= "/signup/index.php">Register</a></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</main>
