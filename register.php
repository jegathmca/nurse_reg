<?php

include 'header.php';
?>


 <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Register Here</h3>
          <p class="section-description">Please Ensure that you are giving relevent entries.</p>
        </div>
      </div>

    Name
age
date of birth
gender
mobile number
email id
blood group
marital status

designation
Nursing Reg. No.
date of joining in Contract
date of joining in Regular
date of Retirement
gpf/cps number

current working station



      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

   

          <div class="col-lg-8 col-md-8">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>

              <form action="" method="post" role="form" class="contactForm">

              	<div class="form-group">
              		<label class="form-control" style="text-align: center; background: #ccc;">Personal Details</label>
              	</div>

                <div class="form-group"> 

                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" name="dateofbirth" class="form-control" id="dateofbirth" placeholder="Your date of Birth (eg:18/11/1985,07/12/1986)" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                 	<select class="form-control" name="gender" id="gender"> <options><option selected value="male" >Male</option><option value="female">Female</option></options></select>
                  <div class="validation"></div>
                </div>
                
                <div class="form-group">
                  <input type="text" name="phoneno" class="form-control" id="phoneno" placeholder="Your Phone Number" maxlength="10" data-rule="minlen:10" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control" id="email" placeholder="Your email id" data-rule="" data-msg="" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" name="bloodgroup" class="form-control" id="bloodgroup" placeholder="Your Blood Group (eg: AB+,O+,O-,A-)" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <select class="form-control" name="maritalstatus" id="maritalstatus"> <options><option selected  value="married">Married</option><option value="single">Single</option></options></select>
                  <div class="validation"></div>
                </div>


                <div class="form-group">
                	<label ></label>
              		<label class="form-control" style="text-align: center; background: #ccc;">Professional Details</label>
              	</div>


              	<div class="form-group">
                  <input type="text" name="designation" class="form-control" id="designation" placeholder="Your Designation"  data-rule="" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>

                <div class="form-group">
                  <input type="text" name="nurseregno" class="form-control" id="nursingregno" placeholder="Your Nursing Registration Number" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>

                <div class="form-group">
                  <input type="text" name="gpfcpsnumber" class="form-control" id="gpfcpsnumber" placeholder="Your GPF/CPS Number" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" name="dojincontract" id="dojincontract" placeholder="Date of joining in Contract (eg:18/11/1985)" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" name="dojinregular" id="dojinregular" placeholder="Date of joining in Regular (eg:18/11/1985)" data-rule="minlen:4" data-msg="Please enter date in dd/mm/yyyy format" />
                  <div class="validation"></div>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" name="dateofret" id="dateofret" placeholder="Date of Retirement (eg:18/11/1985)" data-rule="minlen:4" data-msg="Please enter date in dd/mm/yyyy format" />
                  <div class="validation"></div>
                </div>

                <div class="form-group">
                  <input type="text" name="currentstation" class="form-control" id="currentstation" placeholder="Your Current Work Station" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>

                  <div class="form-group">
                	<label ></label>
              		<label class="form-control" style="text-align: center; background: #ccc;">Family Details</label>
              	  </div>


                <div class="text-center"><button  type="clear">Clear</button><button type="submit">Submit</button></div>

              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

<?php
include 'footer.php';
?>




