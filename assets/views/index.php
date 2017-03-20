   <head>
      <style>
         .box {
         width: 40%;
         margin: 0 auto;
         background: rgba(255,255,255,0.2);
         padding: 35px;
         border: 2px solid #fff;
         border-radius: 20px/50px;
         background-clip: padding-box;
         text-align: center;
         }
         .button:hover {
         background: #06D85F;
         }
         .overlay {
         position: fixed;
         top: 0;
         bottom: 0;
         left: 0;
         right: 0;
         background: rgba(0, 0, 0, 0.7);
         transition: opacity 500ms;
         visibility: hidden;
         opacity: 0;
         }
         .overlay:target {
         visibility: visible;
         opacity: 1;
         }
         .popup {
         margin: 70px auto;
         padding: 20px;
         background: #fff;
         border-radius: 5px;
         width: 30%;
         position: relative;
         transition: all 5s ease-in-out;
         }
         .popup h2 {
         margin-top: 0;
         color: #333;
         font-family: Tahoma, Arial, sans-serif;
         }
         .popup .close {
         position: absolute;
         top: 20px;
         right: 30px;
         transition: all 200ms;
         font-size: 30px;
         font-weight: bold;
         text-decoration: none;
         color: #333;
         }
         .popup .close:hover {
         color: #06D85F;
         }
         .popup .content {
         max-height: 30%;
         overflow: auto;
         }
         @media screen and (max-width: 700px){
         .box{
         width: 70%;
         }
         .popup{
         width: 70%;
         }
         }
      </style>
   </head>
   <body>
      <main class="container">
         <!-- Jumbotron -->
         <div class="jumbotron">
            <h1>Welcome!</h1>
            <p class="lead">PsychUNC is a dynamic learning module and course companion. Returning users may login.
               If not yet registered, click the button below!
            </p>
            <p><center><a class="btn btn-lg btn-success" href="../Signup/index.php" role="button">Get started today</a></center></p>
         </div>
         <!-- Example row of columns -->
         <center>
         <div class="row">
         <div class="col-lg-4">
            <h2>About</h2>
            <div><a class="btn btn-primary" href="#popup1">Let me Pop up</a>
            </div>
            <div id="popup1" class="overlay">
               <div class="popup">
                  <h2>Here i am</h2>
                  <a class="close" href="#">&times;</a>
                  <div class="content">
                     Thank to pop me out of that button, but now i'm done so you can close this window.
                  </div>
               </div>
            </div>
            <!-- <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p> -->
         </div>
         <div class="col-lg-4">
            <h2>User Guide</h2>
            <div><a class="btn btn-primary" href="#popup1">Let me Pop up</a></div>
            <div id="popup1" class="overlay">
               <div class="popup">
                  <h2>Here i am</h2>
                  <a class="close" href="#">&times;</a>
                  <div class="content">
                     Thank to pop me out of that button, but now i'm done so you can close this window.
                  </div>
               </div>
            </div>
            <!-- <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p> -->
         </div>
         <div class="col-lg-4">
            <h2>Contact Us</h2>
            <div><a class="btn btn-primary" href="#popup1">Let me Pop up</a>
            </div>
            <div id="popup1" class="overlay">
               <div class="popup">
                  <h2>Here i am</h2>
                  <a class="close" href="#">&times;</a>
                  <div class="content">
                     Thank to pop me out of that button, but now i'm done so you can close this window.
                  </div>
               </div>
            </div>
            <!-- <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p> -->
         </div>
       </div>
     </center>
         <br><br>
         <a href="mailto:someone@yoursite.com?cc=someoneelse@theirsite.com, another@thatsite.com, me@mysite.com&bcc=lastperson@theirsite.com&subject=Big%20News&body=Body-goes-here">Email Us</a>
         <a href="tel:1-408-555-5555">+1 (408) 555-5555</a>
      </main>
