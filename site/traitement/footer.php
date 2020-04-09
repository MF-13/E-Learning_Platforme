<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../static/css/bootstrap.css">
    <link rel="stylesheet" href="../static/css/Index.css">
</head>
<body>
<!-- Footer -->
  <section class="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-4 ">
          <div>
            <h5>Menu</h5>
          </div>
          <ul class="mylist fixUl">
            <li><a href="filiere-1.php" style="color : #ecf0f1; text-decoration: none;">Filiére</a></li><br>
            <li><a href="cours-espace.php" style="color : #ecf0f1; text-decoration: none;">Cours</a></li><br>                                  
            <li><a href="contact-us.php" style="color : #ecf0f1; text-decoration: none;">Contact</a></li><br>
            <li><a href="Profile.php" style="color : #ecf0f1; text-decoration: none;">Profile</a></li><br>               
          </ul>                      
        </div>                                        
      <div class="col-sm-12 col-md-12 col-lg-4">
        <h5>Liens utiles</h5>                                     
        <ul class="mylist fixUl">      
          <li>
            <a href="http://www.est-umi.ac.ma" style="color : #ecf0f1; text-decoration: none;" target="_blank">ESTM</a>
          </li><br>          
          <li>
            <a href="http://www.umi.ac.ma" style="color : #ecf0f1; text-decoration: none;" target="_blank">UMI</a>
          </li><br>
          <li>
            <a href="http://https://www.enssup.gov.ma/fr" style="color : #ecf0f1; text-decoration: none;" target="_blank">Ministere de l'education</a>
          </li>                                                 
        </ul>                                                 
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
    <script src="static/js/bootstrap.js"></script>
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
        //changer les couleurs du button de scroll
         document.getElementById("btnScroll").style.color = "black";
         document.getElementById("btnScroll").style.background= "blue";
      } 

      function toUp(){
        document.body.scrollTop = 0;
        document.documentElement.scrollTop=0;
      }
      </script>
</body>