<?php

include 'header.php';
?>


 <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Login Here</h3>
          
        </div>
      </div>

    

      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

   

          <div class="col-lg-6 col-md-8">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>

              <form action="" method="post" role="form" class="contactForm">

                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="username" placeholder="Please Enter your username" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="password" name="name" class="form-control" id="password" placeholder="Please Enter your password" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                             
                <div class="text-center"><a href="register.php" >Register Here</a><button type="submit">Submit</button></div>

              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

<?php

include 'footer.php';
?>