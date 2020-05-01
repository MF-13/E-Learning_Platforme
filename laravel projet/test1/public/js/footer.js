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
        
                 document.getElementById("btnScroll").style.background= "#00adb5";
        
              } 
        
        
        
              function toUp(){
        
                document.body.scrollTop = 0;
        
                document.documentElement.scrollTop=0;
        
              }