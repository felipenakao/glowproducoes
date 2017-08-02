    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Clique para retornar ao topo da página" data-placement="left">
        <span class="back-to-top-arrow" id="back-to-top-arrow-l"></span>
        <span class="back-to-top-arrow" id="back-to-top-arrow-r"></span>
    </a>

    <footer>
        <?php include('map.php'); ?>
            <div id="copyright">
                <div id="copyright-grid">
                    <div id="copyright-left" class="copyright-inline">
                      <p>WhatsApp: (11) 9 9946 4569</p>
                      <p>
                        E-mail: contato@glowproducoes.com.br
                      </p>

                      <p>
                        Rua do Rocio, 423 - Vila Olimpia
                      </p>

                      <p>
                        04552-000 - São Paulo - SP
                      </p>

                    </div>

                    <div id="copyright-center" class="copyright-inline">
                        <img height="50px" src="http://glowproducoes.com.br/sites/glow2017/img/home/footer-logo.png">
                        <p>
                          Produções Audiovisuais
                        </p>
                        <p>
                          Todos os direitos reservados
                        </p>
                    </div>

                    <div id="copyright-right" class="copyright-inline">
                        <div class="copyright-title">Siga nossas redes sociais:</div>
                        <a class="logo-footer" id="face-footer" target="_blank" href="https://facebook.com.br/producoesglow"></a>
                        <a class="logo-footer" id="insta-footer" target="_blank" href="https://instagram.com/glowproducoes"></a>
                        <a class="logo-footer" id="youtube-footer" target="_blank" href="https://www.youtube.com/channel/UCYZSqBmS5RHpVaK41uelz2w"></a>
                    </div>

                </div>
            </div>
    </footer>

    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: new google.maps.LatLng(-23.5946933, -46.6876293),
          mapTypeId: 'roadmap'
        });

        var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
        var icons = {

          info: {
            icon: 'http://img.glowproducoes.com.br/home/marker.png'
          }
        };

        var features = [
          {
            position: new google.maps.LatLng(-23.5946933, -46.6876293),
            type: 'info'
          }

        ];

        // Create markers.
        features.forEach(function(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
            icon: icons[feature.type].icon,
            map: map
          });
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5nSvRbNcIdPv7aG0khbMr72fWxLXAFvk&callback=initMap">
    </script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-101274575-1', 'auto');
        ga('send', 'pageview');
    </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="http://lib.glowproducoes.com.br/jquery.js"></script>
    <script type="text/javascript" src="http://lib.glowproducoes.com.br/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://lib.glowproducoes.com.br/scrolling-nav.js"></script>
    <script type="text/javascript" src="http://lib.glowproducoes.com.br/jquery.easing.min.js"></script>
    <script type="text/javascript" src="http://lib.glowproducoes.com.br/baguetteBox.js"></script>
    <script type="text/javascript" src="http://lib.glowproducoes.com.br/plugins.js"></script>
    <script type="text/javascript" src="http://lib.glowproducoes.com.br/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="http://lib.glowproducoes.com.br/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="http://lib.glowproducoes.com.br/lity.js"></script>
    <script type="text/javascript" src="http://lib.glowproducoes.com.br/prism.js"></script>
    <script type="text/javascript" src="http://lib.glowproducoes.com.br/swiper.min.js"></script>
    <script type="text/javascript" src="http://lib.glowproducoes.com.br/instafeed.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){

      var userFeed = new Instafeed({
        get: 'user',
        sortBy: 'most-recent',
        userId: '1656776306',
        limit: 20,
        accessToken: '1656776306.aeeff59.cbf622f6b7b8478191047613e435f232'
        });
        userFeed.run();

      function readURL(input) {

          if (input.files && input.files[0]) {
              var reader = new FileReader();

              reader.onload = function (e) {
                  $('#blah').attr('src', e.target.result);
              }

              reader.readAsDataURL(input.files[0]);
          }
        }

        $("#imgInp").change(function(){
          readURL(this);
        });


      $('#dashboard-mobile li').on('click', function(){
        $('.navbar-toggle').click() //bootstrap 3.x by Richard
      });

        // quick search regex
        var qsRegex;
        var buttonFilter;

        // init Isotope
        var $grid = $('.grid').isotope({
          itemSelector: '.element-item',
          layoutMode: 'fitRows',
          filter: function() {
            var $this = $(this);
            var searchResult = qsRegex ? $this.text().match( qsRegex ) : true;
            var buttonResult = buttonFilter ? $this.is( buttonFilter ) : true;
            return searchResult && buttonResult;
          }
        });

        $('#filters').on( 'click', 'button', function() {
          buttonFilter = $( this ).attr('data-filter');
          $grid.isotope();
        });

        // use value of search field to filter
        var $quicksearch = $('#quicksearch').keyup( debounce( function() {
          qsRegex = new RegExp( $quicksearch.val(), 'gi' );
          $grid.isotope();
        }) );

          // change is-checked class on buttons
        $('.button-group').each( function( i, buttonGroup ) {
          var $buttonGroup = $( buttonGroup );
          $buttonGroup.on( 'click', 'button', function() {
            $buttonGroup.find('.is-checked').removeClass('is-checked');
            $( this ).addClass('is-checked');
          });
        });
        // debounce so filtering doesn't happen every millisecond
        function debounce( fn, threshold ) {
          var timeout;
          return function debounced() {
            if ( timeout ) {
              clearTimeout( timeout );
            }
            function delayed() {
              fn();
              timeout = null;
            }
            setTimeout( delayed, threshold || 100 );
          };
        }


        var swiper = new Swiper('.swiper-container',{
            pagination: '.swiper-pagination',
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            paginationClickable: true,
            spaceBetween: 0,
            centeredSlides: true,
            autoplay: 3500,
            autoplayDisableOnInteraction: false,
            loop: true,
        });

        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('#back-to-top').fadeIn();
            }

          else {
              $('#back-to-top').fadeOut();
          }

        });

        $('#back-to-top').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });

        if ( typeof oldIE === 'undefined' && Object.keys) {
            hljs.initHighlighting();
            baguetteBox.run('.baguetteBoxOne');
            baguetteBox.run('.baguetteBoxTwo');
            baguetteBox.run('.baguetteBoxThree', {
                animation : 'fadeIn',
                noScrollbars : true
            });

            baguetteBox.run('.baguetteBoxFour', {
                buttons : false
            });

            baguetteBox.run('.baguetteBoxFive', {
                captions : function(element) {
                return element.getElementsByTagName('img')[0].alt;
                }
            });
        };

          $('.lazy').lazy({
            effect: "fadeIn",
          effectTime: 300,
          threshold: 2000,
          });

            setTimeout(function(){
                $(".se-pre-con").fadeOut("fast");
            },3000)
          });
      </script>
  </body>
</html>
