<!DOCTYPE html>
<html lang="en_US">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet/less" type="text/css" href="styles/main.less" />
    <script>less = { env: 'development'};</script>
    <script src="styles/less.js"></script>
    <script>less.watch();</script>
    <script type="text/javascript" src="vendor/components/jquery/jquery.js"></script>
    <script>
		if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
			var msViewportStyle = document.createElement('style')
			msViewportStyle.appendChild(
				document.createTextNode(
					'@-ms-viewport{width:auto!important}'
				)
			)
			document.querySelector('head').appendChild(msViewportStyle)
		}

		window.addEventListener('resize', () => {
			let vh = window.innerHeight * 0.01;
			document.documentElement.style.setProperty('--vh', `${vh}px`);
		});
	</script>
</head>
<body>
	<header>
		<div class="header-bg-area align-items-center">
			<h1 id="site-title" class="loading">Kismet</h1>
			<div id="header-bg" class="loading"></div>
			<div id="main-menu" class="loading">
				<div class="nav selected">
					<button id="nav-a">Kismet</button>
				</div>
				<div class="nav">
					<button id="nav-b">Graphics</button>
				</div>
				<div class="nav">
					<button id="nav-c">Web Dev</button>
				</div>
				<div class="nav">
					<button id="nav-d">Branding</button>
				</div>
				<div class="nav">
					<button id="nav-e">Contact</button>
				</div>
			</div>
		</div>
	</header>
    <main>
        <section class="content-frame" id="frame-a">
            <?php include 'pages/home/home.php' ?>
        </section>
        <section class="content-frame" id="frame-b">
            <div class="content-frame-container container">
                <div class="row">
                    <h3 class="page-title">Frame B</h3>
                </div>
            </div>
            <div class="content-frame-container container">
                <div class="row">
                    <p>Content A</p>
                </div>
            </div>
            <div class="content-frame-container container">
                <div class="row">
                    <p>Content B</p>
                </div>
            </div>
        </section>
        <section class="content-frame" id="frame-c">
            
        </section>
        <section class="content-frame" id="frame-d">
            <div class="content-frame-container container">
                <div class="row">
                    <h3 class="page-title">Frame D</h3>
                </div>
            </div>
            <div class="content-frame-container container">
                <div class="row">
                    <p>Content A</p>
                </div>
            </div>
            <div class="content-frame-container container">
                <div class="row">
                    <p>Content B</p>
                </div>
            </div>
        </section>
        <section class="content-frame" id="frame-e">
            <div class="content-frame-container container">
                <div class="row">
                    <h3 class="page-title">Frame E</h3>
                </div>
            </div>
            <div class="content-frame-container container">
                <div class="row">
                    <p>Content A</p>
                </div>
            </div>
            <div class="content-frame-container container">
                <div class="row">
                    <p>Content B</p>
                </div>
            </div>
        </section>
        <section class="content-frame" id="frame-footer">
            <div class="content-frame-container container">
                <div class="row">
                    <h3 class="page-title">Frame Footer</h3>
                </div>
            </div>
            <div class="content-frame-container container">
                <div class="row">
                    <p>Content A</p>
                </div>
            </div>
            <div class="content-frame-container container">
                <div class="row">
                    <p>Content B</p>
                </div>
            </div>
        </section>
    </main>
    <script type="text/javascript">
        // Animate Load
        jQuery(document).ready(function($) {
            $(window).load(function () {
                $('#site-title, #header-bg').removeClass('loading'); // load in background and logo
                
                // setTimeout(function () {
                //     $('#site-title').addClass('push-up'); // center logo in buffer frame as content and menu come in
                //     $('#frame-buffer, #main-menu').removeClass('loading'); // bring content frames and menu into view

                //     $('main').addClass('loading');

                //     setTimeout(function () { // Load CONTENT FRAMES AND MENU
                //         // Shrink buffer frame and fade background
                //         $('main').removeClass('loading').addClass('frame-reset');
                //         $('#site-title').removeClass('push-up').addClass('push-to-menu');
                //         $('#main-menu, #frame-a').addClass('active');
                //         $('#header-bg').removeClass('loading').addClass('active');

                //         setTimeout(function () { //buttons fade in sequentially
                //             let navButton = $('#main-menu .nav');
                //             for (let i = 0; i < navButton.length; i++) {
                //                 (function (index) {
                //                     setTimeout(function () {
                //                         navButton.eq(index).addClass('active');

                //                         setTimeout(function () { //content fades in sequentially
                //                             let frameHomeContent = $('#frame-a .container');

                //                             for (let i = 0; i < frameHomeContent.length; i++) {
                //                                 (function (index) {
                //                                     setTimeout(function () {
                //                                         frameHomeContent.eq(index).addClass('active');
                //                                     }, 500 * index);
                //                                 })(i)
                //                             };
                //                         }, 800); // Content fades in
                //                     }, 200 * index);
                //                 })(i)
                //             };
                //         }, 800); // Buttons fade in sequentially
                //     }, 150); // CONTENT FRAMES AND MENU DELAY */
                // }, 2500); // INIT DELAY (if needed)

                $('#main-menu button').on('click', function () { // on menu button click
                    if ($(this).parent().hasClass('selected')) {
                    } else {

                        let btnId               = $(this).attr('id'),
                            btnIdNum            = btnId.replace('nav-', ''),
                            clickedFrameId      = $('#frame-'+btnIdNum),
                            clickedFrameContent = clickedFrameId.children('.container');

                        $('#main-menu .nav').removeClass('selected');
                        $(this).parent('.nav').addClass('selected');

                        $('.content-frame, .content-frame-container').each(function() {
                            $(this).removeClass('active'); //no frame is active
                        });
                        
                        clickedFrameId.addClass('preparing'); //start frame roll up animation

                        setTimeout(function () { // Wait for bottom to get sucked out
                            clickedFrameId.prependTo('main'); //move frame to top of main in DOM
                            $('.content-frame').children().remove();
                        
                            setTimeout(function () {
                                clickedFrameId.removeClass('preparing').addClass('active'); //animate frame roll down
                                $('.content-frame').css('height',''); // animate other frames to fill space evenly

                                setTimeout(function() {
									if (btnIdNum === 'a') {
										clickedFrameId.load('pages/home/home.php');
									} if (btnIdNum === 'b') {
                                        clickedFrameId.load('pages/graphics/graphics.php');
                                    } if (btnIdNum === 'c') {
                                        clickedFrameId.load('pages/websites/websites.php');
                                    } if (btnIdNum === 'd') {
                                        clickedFrameId.load('pages/branding/branding.php');
                                    } if (btnIdNum === 'e') {
                                        clickedFrameId.load('pages/contact/contact.php');
                                    }

                                    $(document).ajaxComplete(function() {
                                        let activeFrameContent = $('.content-frame.active .container');

                                        for (let i = 0; i < activeFrameContent.length; i++) {
                                            (function (index) {
                                                setTimeout(function () {
                                                    activeFrameContent.eq(index).addClass('active');
                                                }, 500 * index);
                                            })(i)
                                        };
                                    });
                                },800); // Content fades in
                            },100);
                        },500);
                    }
                });
            });
        });
    </script>
</body>
</html>