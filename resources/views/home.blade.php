@php
$config = [
'appName' => config('app.name'),
'locale' => $locale = app()->getLocale(),
'locales' => config('app.locales'),
'githubAuth' => config('services.github.client_id'),
];
@endphp
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" type="image/png" href="images/favicon.png">
        <!-- Web Font -->
        <link
            href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
            rel="stylesheet">
        
        <!-- StyleSheet -->
        <link rel="manifest" href="/manifest.json">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="http://vp2.test/frontend/css/bootstrap.css">
        <!-- Magnific Popup -->
        <link rel="stylesheet" href="http://vp2.test/frontend/css/magnific-popup.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="http://vp2.test/frontend/css/font-awesome.css">
        <!-- Fancybox -->
        <link rel="stylesheet" href="http://vp2.test/frontend/css/jquery.fancybox.min.css">
        <!-- Themify Icons -->
        <link rel="stylesheet" href="http://vp2.test/frontend/css/themify-icons.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="http://vp2.test/frontend/css/niceselect.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="http://vp2.test/frontend/css/animate.css">
        <!-- Flex Slider CSS -->
        <link rel="stylesheet" href="http://vp2.test/frontend/css/flex-slider.min.css">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="http://vp2.test/frontend/css/owl-carousel.css">
        <!-- Slicknav -->
        <link rel="stylesheet" href="http://vp2.test/frontend/css/slicknav.min.css">
        <!-- Jquery Ui -->
        <link rel="stylesheet" href="http://vp2.test/frontend/css/jquery-ui.css">
        
        <!-- Eshop StyleSheet -->
        <link rel="stylesheet" href="http://vp2.test/frontend/css/reset.css">
        <link rel="stylesheet" href="http://vp2.test/frontend/css/style.css">
        <link rel="stylesheet" href="http://vp2.test/frontend/css/responsive.css">        
        <style>
            /* Multilevel dropdown */
            .dropdown-submenu {
                position: relative;
            }
        
            .dropdown-submenu>a:after {
                content: "\f0da";
                float: right;
                border: none;
                font-family: 'FontAwesome';
            }
        
            .dropdown-submenu>.dropdown-menu {
                top: 0;
                left: 100%;
                margin-top: 0px;
                margin-left: 0px;
            }        
            #Gslider .carousel-inner {
                background: #000000;
                color: black;
            }
        
            #Gslider .carousel-inner {
                height: 550px;
            }
        
            #Gslider .carousel-inner img {
                width: 100% !important;
                opacity: .8;
            }
        
            #Gslider .carousel-inner .carousel-caption {
                bottom: 60%;
            }
        
            #Gslider .carousel-inner .carousel-caption h1 {
                font-size: 50px;
                font-weight: bold;
                line-height: 100%;
                color: #F7941D;
            }
        
            #Gslider .carousel-inner .carousel-caption p {
                font-size: 18px;
                color: black;
                margin: 28px 0 28px 0;
            }
        
            #Gslider .carousel-indicators {
                bottom: 70px;
            }
        </style>        
    </head>

    <body class="js">
        <div id="root">            
            <app></app>
        </div>

        {{-- Global configuration object --}}
        <script>
            window.config = @json($config);
        </script>

        <script src="{{ asset('js/app.js') }}"></script>

        <script src="http://vp2.test/frontend/js/jquery.min.js"></script>
        <script src="http://vp2.test/frontend/js/jquery-migrate-3.0.0.js"></script>
        <script src="http://vp2.test/frontend/js/jquery-ui.min.js"></script>
        <!-- Popper JS -->
        <script src="http://vp2.test/frontend/js/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="http://vp2.test/frontend/js/bootstrap.min.js"></script>
        <!-- Color JS -->
        <script src="http://vp2.test/frontend/js/colors.js"></script>
        <!-- Slicknav JS -->
        <script src="http://vp2.test/frontend/js/slicknav.min.js"></script>
        <!-- Owl Carousel JS -->
        <script src="http://vp2.test/frontend/js/owl-carousel.js"></script>
        <!-- Magnific Popup JS -->
        <script src="http://vp2.test/frontend/js/magnific-popup.js"></script>
        <!-- Waypoints JS -->
        <script src="http://vp2.test/frontend/js/waypoints.min.js"></script>
        <!-- Countdown JS -->
        <script src="http://vp2.test/frontend/js/finalcountdown.min.js"></script>
        <!-- Nice Select JS -->
        <script src="http://vp2.test/frontend/js/nicesellect.js"></script>
        <!-- Flex Slider JS -->
        <script src="http://vp2.test/frontend/js/flex-slider.js"></script>
        <!-- ScrollUp JS -->
        <script src="http://vp2.test/frontend/js/scrollup.js"></script>
        <!-- Onepage Nav JS -->
        <script src="http://vp2.test/frontend/js/onepage-nav.min.js"></script>
        
        <script src="http://vp2.test/frontend/js/isotope/isotope.pkgd.min.js"></script>
        <!-- Easing JS -->
        <script src="http://vp2.test/frontend/js/easing.js"></script>
        
        <!-- Active JS -->
        <script src="http://vp2.test/frontend/js/active.js"></script>
        
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>    
        <script>
            /*==================================================================
                [ Isotope ]*/
                setTimeout(() => {                
                var $topeContainer = $('.isotope-grid');
                var $filter = $('.filter-tope-group');
        
                // filter items on button click
                $filter.each(function () {
                    $filter.on('click', 'button', function () {
                        var filterValue = $(this).attr('data-filter');
                        $topeContainer.isotope({filter: filterValue});
                    });
                    
                });
        
                // init Isotope
                /* $(window).on('load', function () { */
                    var $grid = $topeContainer.each(function () {
                        $(this).isotope({
                            itemSelector: '.isotope-item',
                            layoutMode: 'fitRows',
                            percentPosition: true,
                            animationEngine : 'best-available',
                            masonry: {
                                columnWidth: '.isotope-item'
                            }
                        });
                    });
                /* }); */
        
                var isotopeButton = $('.filter-tope-group button');
        
                $(isotopeButton).each(function(){
                    $(this).on('click', function(){
                        for(var i=0; i<isotopeButton.length; i++) {
                            $(isotopeButton[i]).removeClass('how-active1');
                        }
        
                        $(this).addClass('how-active1');
                    });
                });
                }, 2000);
        </script>
        <script>
            function cancelFullScreen(el) {
                    var requestMethod = el.cancelFullScreen||el.webkitCancelFullScreen||el.mozCancelFullScreen||el.exitFullscreen;
                    if (requestMethod) { // cancel full screen.
                        requestMethod.call(el);
                    } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
                        var wscript = new ActiveXObject("WScript.Shell");
                        if (wscript !== null) {
                            wscript.SendKeys("{F11}");
                        }
                    }
                }
        
                function requestFullScreen(el) {
                    // Supports most browsers and their versions.
                    var requestMethod = el.requestFullScreen || el.webkitRequestFullScreen || el.mozRequestFullScreen || el.msRequestFullscreen;
        
                    if (requestMethod) { // Native full screen.
                        requestMethod.call(el);
                    } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
                        var wscript = new ActiveXObject("WScript.Shell");
                        if (wscript !== null) {
                            wscript.SendKeys("{F11}");
                        }
                    }
                    return false
                }
        </script>
        
        <script>
            setTimeout(function(){
        		  $('.alert').slideUp();
        		},5000);
        		$(function() {
        		// ------------------------------------------------------- //
        		// Multi Level dropdowns
        		// ------------------------------------------------------ //
        			$("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
        				event.preventDefault();
        				event.stopPropagation();
        
        				$(this).siblings().toggleClass("show");
        
        
        				if (!$(this).next().hasClass('show')) {
        				$(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
        				}
        				$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
        				$('.dropdown-submenu .show').removeClass("show");
        				});
        
        			});
        		});
        </script>       
       
    </body>

</html>