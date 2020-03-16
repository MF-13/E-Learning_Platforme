 <!-- Comtact section -->
  <section class="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 ">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13253.011846027564!2d-5.5799945!3d33.8573711!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x227685e2846b5a39!2sEcole%20Sup%C3%A9rieure%20de%20Technologie!5e0!3m2!1sfr!2sma!4v1581183400398!5m2!1sfr!2sma" width="330" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 ">
          <ul class="mylist myBtoo">
            <li>Address:  Km 5, Rue d'Agouray، N6, Meknes 50040</li>
            <li>Tel : 05 35 46 70 85</li>
            <li>Tel : 05 35 46 70 86</li>
            <li>Email : estm@est-umi.ac.ma</li>
            <br>
            <li>
              <a href="https://www.facebook.com/ESTMEKNES2017/?fref=ts"  target="_blank"><i class="fab fa-facebook-square fa-3x" aria-hidden="true"></i></a>
              <a href="https://twitter.com/umi_meknes?lang=fr"  target="_blank"><i class="fab fa-twitter-square fa-3x" aria-hidden="true"></i></a>
            </li>
            <br>
          </ul>
        </div>
      </div>
    </div>
  </section>
<!-- End Contact section -->
<!-- Footer -->
  <section class="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-4 ">
          <div>
            <h5>Menu</h5>
          </div>
          <ul class="mylist fixUl">
            <li><a href="filiere.php">Filiére</a></li><br>
            <li><a href="cours-espace.php">Cours</a></li><br>                                  
            <li><a href="contact-us.php">Contact</a></li><br>              
          </ul>                      
        </div>                                        
      <div class="col-sm-12 col-md-12 col-lg-4">
        <h5>Liens utiles</h5>                                     
        <ul class="mylist fixUl">      
          <li><a href="#">ESTM</a></li><br>          
          <li><a href="#">UMI</a></li>                                                  
        </ul>                                                 
      </div>                                                                                                                                                       
      <div class="col-sm-12 col-md-12 col-lg-4">                                         
        <form>                                                 
          <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-outline-warning" type="button">Go!</button>
              </span>
            </div>                                                 
          </form>              
        </div>              
      </div>
      <div>
        <p class="myText">Copyright © E-Learning <?php echo "2019-".date("Y"); ?> - Tous droits réservés.</p>
      </div>
    </div>
  </section>
<!-- End Footer -->
<!-- Top buttons -->    
  <button type="button" id="btnScroll" class="btn btn-warning" onclick="toUp()"><i class="fa fa-arrow-circle-up fa-2x" aria-hidden="true"></i>
  </button>
<!-- End top buttons -->
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <script>
      var sections = $('section,header')
      , nav = $('nav')
      , nav_height = nav.outerHeight();
          
      $(window).on('scroll', function () {
        var cur_pos = $(this).scrollTop();
       
        sections.each(function() {
        var top = $(this).offset().top - nav_height,
        bottom = top + $(this).outerHeight();
          
        if (cur_pos >= top && cur_pos <= bottom) {
        nav.find('a').removeClass('active');
        sections.removeClass('active');
          
        $(this).addClass('active');
        nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
        }
        });
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
      $("a").on('click', function(event) {
               
      if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
      scrollTop: $(hash).offset().top
      }, 800, function(){
      window.location.hash = hash;
      });
      } 
      });
      });
    </script>
    <script>
      window.onscroll = function(){
        scrollFunction();
      };
      function scrollFunction(){
        if(document.body.scrollTop > 20 || document.documentElement.scrollTop>20){
          document.getElementById("btnScroll").style.display = "block";

        }else{
          document.getElementById("btnScroll").style.display = "none";
        }
      } 

      function toUp(){
        document.body.scrollTop = 0;
        document.documentElement.scrollTop=0;
      }
      </script>