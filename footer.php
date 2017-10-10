        <footer>
            
               <div class="links">
                    <a href="http://www.linkedin.com/in/angie-ellis-4046b15" target="_blank">
                       <i class="fa fa-linkedin fa-2x" ></i>
                   </a>
                   
                    <h4 id="email">
                            <!-- Javascript code adapted from http://joemaller.com/js-mailer.shtml#finished-->
                        <NOSCRIPT> Enable Javascript for Email </NOSCRIPT>
                        <SCRIPT TYPE="text/javascript">	
                              document.write('angie@' + 'angieellis.design')
                        </SCRIPT></h4>
               <a href="https://www.behance.net/AngieEllis" target="_blank"><i class="fa fa-behance fa-2x" ></i></a>
               </div>

               <div class="copyright"><h4>&copy; 2017 Angie Ellis</h4></div>

        </footer>

         
        </main>

            <a href="#" class="scrollToTop"></a>

     </div><!--  grid-->
   </div><!--  wrapper-->
      
<!--retina.js-->
      <script type="text/javascript" src="js/retina.min.js"></script> 

<!--back to top button-->

    <script language="JavaScript" type="text/javascript">
        //BACK TO TOP—— ADAPTED FROM https://paulund.co.uk/how-to-create-an-animated-scroll-to-top-with-jquery

        $(document).ready(function(){

            //Check to see if the window is top if not then display button
            $(window).scroll(function(){
                if ($(this).scrollTop() > 100) {
                    $('.scrollToTop').fadeIn();
                } else {
                    $('.scrollToTop').fadeOut();
                }
            });

            //Click event to scroll to top
            $('.scrollToTop').click(function(){
                $('html, body').animate({scrollTop : 0},800);
                return false;
            });

        });
        
        
    </script>

  </body>
</html>

