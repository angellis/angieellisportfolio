<!doctype html>
<html class="no-js bg-image-location" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
    <title>Contact Angie Ellis</title>
      
    <link rel="stylesheet" href="css/meyerreset.css">
    <link rel="stylesheet" href="css/main.css">
<!--typekit fonts      -->
    <script src="https://use.typekit.net/ezt6hts.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
<!--jQuery      -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
      <script src="js/jquery-1.12.4.min.js"></script>
<!-- a helper script for vaidating the form-->
    <script language="JavaScript" src="js/gen_validatorv31.js" type="text/javascript"></script>
<!-- favicons     -->
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />            
<!--fontawesome embed code      -->
      <script src="https://use.fontawesome.com/de2e8815a3.js"></script>     


  </head>
    
  <body class="map">
    <div id="wrapper" class="group">
     <div class="grid"> 
         <header>
           <div class="col-1-1 nopad">
              <a href="index.php">
                   <img id="logo" src="img/logomark-ae.svg" alt="Angie Ellis Triangle Logo">
                   <h3 class="logoname">Angie Ellis</h3>
               </a>
            </div>

            <nav class="col-1-1 nopad stroke">
              <ul>
                <li><a href="index.php">Work</a></li>
                <li><a href="contact.php" class="current-nav">Contact</a></li>
                <li><a href="about.php">About</a></li>
              </ul>
            </nav>
        </header>
         
        <main>

            <div class="col-1-1 nopad">
                <img class="h1arrow" src="img/arrow-sm.png" alt="arrow pointing down"><h1>Contact</h1>
            </div>
            
        <div class="grid"> 
            <div class="col-1-3 ">
                <p>Send me an email at<br>
                      <!-- Javascript code adapted from http://joemaller.com/js-mailer.shtml#finished-->
                        <NOSCRIPT> Enable Javascript for Email </NOSCRIPT>
                        <SCRIPT TYPE="text/javascript">	
                              document.write('angie@' + 'angieellis.design')
                        </SCRIPT>
                <br>or use the form&hellip;</p>                
            </div> <!--col-1-3-->
            
            <div class="col-2-3">
                    <!--Form code adapted from http://www.html-form-guide.com/contact-form/php-email-contact-form.html-->
               <form method="POST" name="contactform" action="contact-form-handler.php"> 
                    
                    <label for='name'><h4>Name</h4></label>
                    <input type="text" name="name">
                    
                    
                    <label for='email'><h4>Email</h4></label>
                    <input type="text" name="email"> 
                    
                   <label for='message'><h4>A little about your project, timeline, budget</h4></label> 
                    <textarea name="message"></textarea>
                    <br>
                    <input class="button send-form" type="submit" value="Send">
                </form>  

                
            </div> <!--col-2-3-->
            
        </div>  <!--grid-->
            
        <?php include("footer.php"); ?>

         
        </main>


     </div><!--  grid-->
   </div><!--  wrapper-->
<!--retina.js-->
      <script type="text/javascript" src="js/retina.min.js"></script> 

  </body>
</html>

      <!--Form code adapted from http://www.html-form-guide.com/contact-form/php-email-contact-form.html-->

<script language="JavaScript">
// Code for validating the form
// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
// for details
var frmvalidator  = new Validator("contactform");
frmvalidator.addValidation("name","req","Please provide your name"); 
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("email","email","Please enter a valid email address"); 
</script>