<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<?php
/*
* Template Name: Updated Party Landing Template
*/


get_header(); ?>

<style>

    #wp-live-chat-header { display:none !important; }

    @font-face {
        font-family: 'Futura-ExtraBold';
        src: url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/Futura-ExtraBold.woff2') format('woff2'),
            url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/Futura-ExtraBold.woff') format('woff'),
            url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/Futura-ExtraBold.ttf') format('truetype');
        font-weight: 800;
        font-style: normal;
    }

    @font-face {
        font-family: 'Futura-Bold';
        src: url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/Futura-Bold.woff2') format('woff2'),
            url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/Futura-Bold.woff') format('woff'),
            url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/Futura-Bold.ttf') format('truetype');
        font-weight: bold;
        font-style: normal;
    }

    @font-face {
        font-family: 'Univers 67 Condensed';
        src: url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/Univers-CondensedBold.eot');
        src: url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/Univers-CondensedBold.eot?#iefix') format('embedded-opentype'),
            url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/Univers-CondensedBold.woff2') format('woff2'),
            url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/Univers-CondensedBold.woff') format('woff'),
            url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/Univers-CondensedBold.ttf') format('truetype'),
            url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/Univers-CondensedBold.svg#Univers-CondensedBold') format('svg');
        font-weight: bold;
        font-style: normal;
    }



    body {background: #162638;}

    .site-logo img {
        width: 175px;
    }

    .button {
        display: inline-block;
        vertical-align: middle;
        margin: 0 0 1rem;
    }

    [type=color], [type=date], [type=datetime-local], [type=datetime], [type=email], [type=month], [type=number], [type=password], [type=search], [type=tel], [type=text], [type=time], [type=url], [type=week], textarea {
        display: block;
        box-sizing: border-box;
        width: 100%;
        height: 2.4375rem;
        margin: 0 0 1rem;
        padding: .5rem;
        border: 1px solid #cacaca;
        border-radius: 0;
        background-color: #fefefe;
        box-shadow: inset 0 1px 2px hsla(0,0%,4%,.1);
        font-family: inherit;
        font-size: 1rem;
        font-weight: 400;
        color: #0a0a0a;
        transition: box-shadow .5s,border-color .25s ease-in-out;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    @media screen and (min-width: 1200px) {
        .row {max-width: 100% !important; /* overwrite FOUNDATION */}
    }

    #LoAvailableBtn {display: none !important; /* HIDE livechat */}


    /* fix bootstrap flex-fill */
    .flex-fill {flex-basis: 0 !important; }

    @media (min-width: 576px) {
        .flex-sm-fill {flex-basis: 0 !important;}
        .flex-sm-nofill {flex-basis: auto !important;}
    }

    @media (min-width: 768px) {
        .flex-md-fill {flex-basis: 0 !important;}
        .flex-md-nofill {flex-basis: auto !important;}
    }

    @media (min-width: 992px) {
        .flex-lg-fill {flex-basis: 0 !important;}
        .flex-lg-nofill {flex-basis: auto !important;}
    }

    @media (min-width: 1200px) {
        .flex-xl-fill {flex-basis: 0 !important;}
        .flex-xl-nofill {flex-basis: auto !important;}
    }
    /** end fix **/

	/* button styles need to override foundation and default iplay stylesheet */
    button, input[type="button"], input[type="reset"], input[type="submit"],
    .button, .button:visited {background: none; border: 1px solid transparent; color: #fff; box-shadow: none; border-radius: 3px; transition: .2s ease-in-out; font-family: 'Lato', sans-serif; font-weight: 900; font-size: 14px; text-align: center; padding: 15px 35px; min-width: 158px; position: relative; z-index: 1; text-decoration: none !important; -webkit-appearance: none; appearance: none; text-shadow: none; line-height: 1;}

    /* override default iplay stylesheet */
    button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover {position: relative; width: auto; height: auto; z-index: 1; border-color: transparent; box-shadow: none;}
    /* end */

    button.button, input[type="button"].button, input[type="reset"].button, input[type="submit"].button {font-size: 26px; min-width: auto;}

    .button:before {content: ''; display: block; width: 100%; height: 100%; position: absolute; left: 0; top: 0; transition: .2s ease-in-out; z-index: -1;}
    .button:hover:before {opacity: 1 !important;}

    .button-outline {border-color: #fff;}
    .button-outline:before {background:#2138a5; opacity: 0;}

    button.button-red, input[type="button"].button-red, input[type="reset"].button-red, input[type="submit"].button-red,
    .button-red {background: #2138a5; }

    .button-red:before {background: #3854da; opacity: 0;}

    button.button-red:hover, input[type="button"].button-red:hover, input[type="reset"].button-red:hover, input[type="submit"].button-red:hover,
    .button-red:hover {background: #3854da; color:#fff; }


    .theme-teens button.button-red, .theme-teens input[type="button"].button-red, .theme-teens input[type="reset"].button-red, .theme-teens input[type="submit"].button-red,
    .theme-teens .button-red {background: #fa2b2b; background-image: linear-gradient(#cb1f26, #a1191f); }

    .theme-teens .button-red:before {background-image: linear-gradient(#a1191f, #cb1f26); opacity: 0;}

    .theme-adults button.button-red, .theme-adults input[type="button"].button-red, .theme-adults input[type="reset"].button-red, .theme-adults input[type="submit"].button-red,
    .theme-adults .button-red {background: #911a39; background-image: linear-gradient(#8e1938, #73152d); }

    .theme-adults .button-red:before {background-image: linear-gradient(#a21d40, #851935); opacity: 0;}

    .theme-holidays button.button-red,
    .theme-holidays input[type="button"].button-red,
    .theme-holidays input[type="reset"].button-red,
    .theme-holidays input[type="submit"].button-red,
    .theme-holidays .button-red {background: #a81f2b; }
    .theme-holidays .button-red:before {background: #880a15; opacity: 0;}

    .circle-callouts {position: fixed; right: 0; top: 0; font-family: 'Montserrat'; font-weight: 700; font-size: 19px; color: #fff; overflow: hidden; width: 265px; height: 166px; z-index: 3; }
    .circle-callouts a {color: #fff; text-decoration: none !important;}
    .circle-callouts .circle { border-radius: 100%; position: absolute;}
    .circle-callouts .circle-red {background: #fa2b2b; width: 190px; height: 190px; z-index: 3; right: 96px; top: -160px;}
    .circle-callouts .circle-yellow {background: #ffea31; width: 73px; height: 73px; z-index: 1; right: 164px; top: 15px;}
    .circle-callouts .circle-blue {background: #199ef0; width: 232px; height: 232px; z-index: 2; right: -40px; top: -75px; transition: .2s ease-in-out;}
    .circle-callouts .circle-blue:hover {width: 240px; height: 240px;}

    .yellow-text {font-family: 'Lato', sans-serif; font-weight: 900; font-size: 15px; color: #ffea31; }

    .teen-callouts {position: fixed; right: 0; top: 30px; font-family: 'Montserrat'; font-weight: 700; font-size: 19px; color: #fff; overflow: hidden; width: auto; height: auto; z-index: 3; background: #CA2231; transition: .2s ease-in-out;}
    .teen-callouts a {color: #fff !important; text-decoration: none !important; display: block;}
    .teen-callouts span {display: block;}
    .teen-callouts .yellow-text {color: #fff;}

    .theme-adults .teen-callouts { background: #911a39; }
    .theme-holidays .teen-callouts { background: #a81f2b; }

    .teen-callouts:hover {padding-right: 10px; }

    #landing-dark {color: #fff; position: relative; z-index: 2;}
    h1 {font-family: 'Futura-Bold'; font-size: 86px; line-height: 1.2; font-weight: normal; text-transform: uppercase;}

    .theme-kids h1 {font-family: 'Futura-Bold';}
    .theme-teens h1 {font-family: 'Univers 67 Condensed'; line-height: 1;}
    .theme-adults h1 {font-family: 'Univers 67 Condensed'; line-height: 1;}
    .theme-holidays h1 {font-family: 'Univers 67 Condensed'; line-height: 1;}

    h2 {font-family: 'Montserrat', sans-serif; color: #fff; font-weight: 700; font-size: 25px;}
    p {font-family: 'Montserrat', sans-serif; font-weight: 400; font-size: 18px;}

    h3 {font-family: 'Montserrat', sans-serif; font-weight: bold; font-size: 20px;}

    .each-package {position: relative; cursor: pointer;}
    .each-package-image {border: 3px solid #716e6e; width: 100%; height: auto; }
    .each-package.active .each-package-image {border-color: #fff;}
    .each-package.active:after {content: ''; width: 0; height: 0; border-left: 15px solid transparent; border-right: 15px solid transparent; border-top: 15px solid #fff; position: absolute; top: 100%; left: 50%; -webkit-transform: translateX(-50%); -moz-transform: translateX(-50%); transform: translateX(-50%);}
    .best-seller-stamp {position: absolute; right: 6px; top: -7px;}

    .each-package-details {display: none;}
    .package-1 {display: block;}

    .each-package-price {border-right: 1px solid #fff; min-width: 235px;}
    .each-package-details p {color: #e8e8e8; font-size: 14px; margin-bottom: 5px;}

    .compare-packages, .compare-packages a, a.compare-packages {font-size: 16px; font-family: 'Montserrat', sans-serif; font-weight: bold; text-decoration: none !important; line-height: 1; margin-bottom: 0;}
    .compare-packages {min-width: 120px;}
    .compare-packages a {display: block; top: 50%; -webkit-transform: translateY(-50%); -moz-transform: translateY(-50%); transform: translateY(-50%); position: relative;}

    .theme-kids .compare-packages, .theme-kids .compare-packages a, .theme-kids a.compare-packages {color: #ffea31; }
    .theme-teens .compare-packages, .theme-teens .compare-packages a, .theme-teens a.compare-packages {color: #bf3d52; }
    .theme-adults .compare-packages, .theme-adults .compare-packages a, .theme-adults a.compare-packages {color: #cfcfcf; }
    .theme-holidays .compare-packages, .theme-adults .compare-packages a, .theme-holidays a.compare-packages {color: #cfcfcf; }

    .form-box { margin-top: -170px; box-shadow: 0 5px 30px 0 rgba(0,0,0,0.2);}

    .theme-kids .form-box {background: #1a3859;}
    .theme-teens .form-box {
        background: #b3b3b3;
background: -moz-linear-gradient(left, #b3b3b3 0%, #eaeaea 45%, #eaeaea 55%, #b3b3b3 100%);
background: -webkit-linear-gradient(left, #b3b3b3 0%,#eaeaea 45%,#eaeaea 55%,#b3b3b3 100%);
background: linear-gradient(to right, #b3b3b3 0%,#eaeaea 45%,#eaeaea 55%,#b3b3b3 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3b3b3', endColorstr='#b3b3b3',GradientType=1 );
    }

    .theme-adults .form-box {
        background: #b3b3b3;
background: -moz-linear-gradient(left, #b3b3b3 0%, #eaeaea 45%, #eaeaea 55%, #b3b3b3 100%);
background: -webkit-linear-gradient(left, #b3b3b3 0%,#eaeaea 45%,#eaeaea 55%,#b3b3b3 100%);
background: linear-gradient(to right, #b3b3b3 0%,#eaeaea 45%,#eaeaea 55%,#b3b3b3 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3b3b3', endColorstr='#b3b3b3',GradientType=1 );
    }

    .theme-holidays .form-box {
        background: #b3b3b3;
background: -moz-linear-gradient(left, #b3b3b3 0%, #eaeaea 45%, #eaeaea 55%, #b3b3b3 100%);
background: -webkit-linear-gradient(left, #b3b3b3 0%,#eaeaea 45%,#eaeaea 55%,#b3b3b3 100%);
background: linear-gradient(to right, #b3b3b3 0%,#eaeaea 45%,#eaeaea 55%,#b3b3b3 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3b3b3', endColorstr='#b3b3b3',GradientType=1 );
    }

    .theme-teens .form-box h2 {color: #1d3162;}
    .theme-teens  #book-online-form + p {color: #1d3162;}

    .theme-adults .form-box h2 {color: #141f3a;}
    .theme-adults  #book-online-form + p {color: #141f3a;}

    .theme-holidays .form-box h2 {color: #141f3a;}
    .theme-holidays  #book-online-form + p {color: #141f3a;}


    #landing-white { background: #fff; position: relative; margin-top: 120px; z-index: 0;}
    #landing-white:before {content: ''; position: absolute; top: -30px; left: 0; width: 100%; height: 47px; background: #fff; transform: skewY(-1deg)}


    input[type="email"], input[type="text"] {line-height: 1; font-size: 18px; font-family: 'Montserrat', sans-serif; font-weight: 600; color: #616161; min-width: 0;}
    #book-online-form + p {color: #0b476b; font-family: 'Montserrat', sans-serif; font-weight: 700; font-size: 16px; margin-bottom: 0;}

    .theme-kids .white {color: #fff;}
    .theme-teens .white {color: #000;}
    .theme-adults .white {color: #0f1a35;}
    .theme-holidays .white {color: #0f1a35;}

    #add-ons {font-weight: bold;}
    #add-ons h3 {color: #717171; font-size: 18px; line-height: 1.2;}
    #add-ons span {margin: 0 5px; font-size: 14px;}

    #testimonials-section {border-top: 1px solid #b3b3b3;}
    #testimonials-section h2 {color: #1c2e5e; font-size: 26px; font-weight: 600; font-family: 'Montserrat', sans-serif;}
    #testimonials-section .testimonial, #testimonials-section .testimonial p, #testimonials-section .testimonial a {color: #717171; font-size: 14px; font-weight: 600; font-family: 'Montserrat', sans-serif;}
    #testimonials-section .testimonial-author {color: #000000; font-size: 14px; font-weight: 600; font-family: 'Montserrat', sans-serif; font-style: italic;}


    .chat-bubble {position: fixed; left: 30px; bottom: 5px; -webkit-transform: scale(1.2,1); -moz-transform: scale(1.2,1); transform: scale(1.2,1); cursor: pointer; transition: .2s ease-in-out;}
    .chat-bubble:hover {left: 35px; bottom: 10px;}

    .chat-bubble .fas.fa-comment { font-size: 200px; position: absolute; left: 4px; top: 3px; z-index: 1;}

    .chat-bubble .far.fa-comment {color: #fff; font-size: 208px; position: relative; text-shadow: 5px 5px 30px rgba(0,0,0,0.1);}
    .chat-bubble-text {position: absolute; z-index: 1; top: 50%; left: 50%; -webkit-transform: translate(-50%, -50%) scale(.8,1); -moz-transform: translate(-50%, -50%) scale(.8,1); transform: translate(-50%, -50%) scale(.8,1); width: 85%; }
    .chat-bubble-text p {font-family: 'Montserrat', sans-serif; font-weight: 700; font-size: 12px; margin-bottom: 5px; line-height: 1.2;}
    .chat-bubble-text p.chat-bubble-title { font-size: 22px;}
    .chat-bubble-text p.chat-bubble-link { font-size: 14px;}


    #chat-bubble { bottom:-200px;}
    #chat-bubble.active {bottom: 5px; }


    /* THEMES */
    .theme-kids.chat-bubble .fas.fa-comment {color: #ffea31; }
    .theme-teens.chat-bubble .fas.fa-comment {color: #c91f26; }
    .theme-adults.chat-bubble .fas.fa-comment {color: #911a39; }
    .theme-holidays.chat-bubble .fas.fa-comment {color: #a81f2b; }

    .theme-kids .chat-bubble-text p.chat-bubble-title {color: #0a3148;}
    .theme-kids .chat-bubble-text p {color: #030303;}
    .theme-kids .chat-bubble-text p.chat-bubble-link {color: #0a3148;}

    .theme-teens .chat-bubble-text p.chat-bubble-title {color: #fff;}
    .theme-teens .chat-bubble-text p {color: #fff;}
    .theme-teens .chat-bubble-text p.chat-bubble-link {color: #fff;}

    .theme-adults .chat-bubble-text p.chat-bubble-title {color: #fff;}
    .theme-adults .chat-bubble-text p {color: #fff;}
    .theme-adults .chat-bubble-text p.chat-bubble-link {color: #fff;}

    .theme-holidays .chat-bubble-text p.chat-bubble-title {color: #fff;}
    .theme-holidays .chat-bubble-text p {color: #fff;}
    .theme-holidays .chat-bubble-text p.chat-bubble-link {color: #fff;}

    /** Event Center Styles **/

    .main-header-bar-wrap { display:none; }
    .ast-container { width:100%; max-width:100%; padding:0px; margin:0px; }
    footer.footer { display:none; }

    @media screen and (max-width: 1850px ) {
        h1 {font-size: 76px;}
    }

    @media screen and (max-width: 1650px ) {
        h1 {font-size: 66px;}
        .chat-bubble .fas.fa-comment {font-size: 180px;}
        .chat-bubble .far.fa-comment {font-size: 188px;}
        .chat-bubble-text p {font-size: 11px;}
        .chat-bubble-text p.chat-bubble-title {font-size: 20px;}
        .chat-bubble-text p.chat-bubble-link {font-size: 12px;}
    }

    @media screen and (max-width: 1460px ) {
        h1 {font-size: 56px;}

        .chat-bubble .fas.fa-comment {font-size: 160px;}
        .chat-bubble .far.fa-comment {font-size: 168px;}
        .chat-bubble-text {width: 88%;}
        .chat-bubble-text p {font-size: 10px; margin-bottom: 2px;}
        .chat-bubble-text p.chat-bubble-title {font-size: 18px;}
        .chat-bubble-text p.chat-bubble-link {font-size: 12px;}

        #add-ons span img {display: block; margin: 0 auto;}
    }

    @media screen and (max-width: 1399px ) {
        .circle-callouts {position: absolute;}
        .theme-teens .teen-callouts {position: absolute;}
        .theme-adults .teen-callouts {position: absolute;}
        .theme-holidays .teen-callouts {position: absolute;}
        .circle-callouts .circle-blue {width: 212px; height: 212px; right: -35px; top: -75px;}
        .circle-callouts .circle-blue:hover {width: 220px; height: 220px;}
        .circle-callouts .circle-red {top: -174px;}
    }

    @media screen and (max-width: 1250px ) {
        h1 {font-size: 50px;}

    }

    @media screen and (max-width: 1199px ) {

         #chat-bubble { display: none !important; }
        .theme-teens .teen-callouts {font-size: 16px;}
        .theme-adults .teen-callouts {font-size: 16px;}
        .theme-holidays .teen-callouts {font-size: 16px;}
    }

    @media screen and (max-width: 1050px ) {
        h1 {font-size: 45px;}
/*
        .theme-teens .teen-callouts {font-size: 12px;}
        .theme-teens .teen-callouts .yellow-text {font-size: 12px;}
*/
    }



    @media screen and (max-width: 991px ) {

        #add-ons span img {display: inline-block;}
    }

    @media screen and (max-width: 767px ) {
        .each-package-price {border-right: 0;}
        .compare-packages a {top: 0; -webkit-transform: none; -moz-transform: none; transform: none; margin-top: 10px;}
        .compare-packages a br {display: none;}

        #testimonials-section h2 {font-size: 20px;}
        #testimonials-section h2 img {max-width: 28px;}
        .site-logo img { width:200px; padding-left:20px; }
        .site-logo { text-align:center !important; }
        .button.button-red.package-call { width:100% !important; }
        header .button-red { width:100%; }
        header .button-outline { width:100%; }
    }

    @media (max-width: 575px) {
        header {padding-top: 60px;}
        .circle-callouts {position: fixed; top: 0; left: 0; width: 100%; height: auto; z-index: 100;}
        .circle-callouts .circle-blue {
            width: 100%; height: auto; left: 0; top: 0; border-radius: 0; right: 0; position: relative;
        }
        .circle-callouts .circle-blue br {display: none;}
        .circle-callouts .circle-blue:hover {width: 100%; height: auto;}

        .theme-teens .teen-callouts {position: fixed; top: 0; left: 0; width: 100%; z-index: 100;}
        .theme-adults .teen-callouts {position: fixed; top: 0; left: 0; width: 100%; z-index: 100;}
        .theme-holidays .teen-callouts {position: fixed; top: 0; left: 0; width: 100%; z-index: 100;}
        .teen-callouts:hover {padding-right: 0;}

        button, input[type="button"], input[type="reset"], input[type="submit"], .button, .button:visited {min-width: 100px; padding: 15px;}

        h2 {font-size: 25px;}
/*        input[type="email"], input[type="text"] {font-size: 18px; padding: 25px; }*/
        button.button, input[type="button"].button, input[type="reset"].button, input[type="submit"].button {font-size: 18px;}
        #book-online-form + p {font-size: 12px; font-weight: 400;}

        #add-ons span {margin: 10px 0; display: block; }

        #testimonials-section h2 img {max-width: 20px;}
    }


    /* Custom xxl classes */
    @media (min-width: 1400px) {
        .col-xxl-8 {
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%;
        }

        .offset-xxl-2 {
            margin-left: 16.666667%;
        }
    }

</style>


<header class="<?php echo get_field('theme'); ?>">

    <div class="container">
        <div class="row">

               <div class="col-12 col-sm-12 col-md-4 col-lg-6 col-xl-6 mt-3">

                    <div class="site-logo">
                        <a href="<?php echo site_url(); ?>">
                            <!-- <img src="<?php echo site_url(); ?>/images/iplay-america-dark.svg" alt="iPlay America Logo"> -->
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2018/09/event-center-logo-2-165x88.png" alt="The Event Center">
                        </a>
                    </div>

                </div>

                <div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6 text-center text-md-right mt-3 mt-md-5">
                    <div class="d-block d-md-flex align-items-center justify-content-end h-100">

                        <a href="<?php echo site_url(); ?>/" class="button button-outline mx-2" target="_blank">View Event Spaces</a>
                        <a href="tel:<?php echo preg_replace("/[^0-9]/", "", get_field('call_link') ); ?>" class="button button-red mx-2">Call Now</a>

                        <?php if (get_field('theme') == 'theme-adults'): ?>

                        <?php elseif (get_field('theme') == 'theme-holidays'): ?>

                        <?php else: ?>

                        <?php endif; ?>

                    </div>
                </div>

        </div>
    </div>

    <?php if (get_field('theme') == 'theme-kids'): ?>
        <div class="circle-callouts" style="display:none;">
            <div class="circle circle-red d-none d-md-block"></div>
            <div class="circle circle-yellow d-none d-xl-block"></div>
            <a href="tel:<?php echo preg_replace("/[^0-9]/", "", get_field('call_link') ); ?>" class="circle circle-blue align-content-center justify-content-center flex-wrap d-block d-sm-flex text-center">
                <p class="yellow-text mb-0 mt-0 mt-sm-5 mr-0 mr-sm-4 d-block d-sm-block">Hurry &amp; book now!</p>
                <span class="mr-0 mr-sm-4"><?php echo get_field('call_link'); ?><?php echo (get_field('extension')) ? ' <br>Ext&nbsp;' . get_field('extension') : ''; ?></span>
            </a>
        </div>
    <?php endif; ?>

    <?php if (get_field('theme') == 'theme-teens'): ?>
        <div class="teen-callouts" style="display:none;">
            <a href="tel:<?php echo preg_replace("/[^0-9]/", "", get_field('call_link') ); ?>" class="p-2 p-lg-3 p-xl-4 text-center">
                <span class="yellow-text">Hurry &amp; book now!</span>
                <span><?php echo get_field('call_link'); ?><?php echo (get_field('extension')) ? ' <br>Ext&nbsp;' . get_field('extension') : ''; ?></span>
            </a>
        </div>
    <?php endif; ?>

    <?php if (get_field('theme') == 'theme-adults'): ?>
        <div class="teen-callouts" style="display:none;">
            <a href="tel:<?php echo preg_replace("/[^0-9]/", "", get_field('call_link') ); ?>" class="p-2 p-lg-3 p-xl-4 text-center">
                <span class="yellow-text">Hurry &amp; book now!</span>
                <span><?php echo get_field('call_link'); ?><?php echo (get_field('extension')) ? ' <br>Ext&nbsp;' . get_field('extension') : ''; ?></span>
            </a>
        </div>
    <?php endif; ?>

    <?php if (get_field('theme') == 'theme-holidays'): ?>
        <div class="teen-callouts" style="display:none;">
            <a href="tel:<?php echo preg_replace("/[^0-9]/", "", get_field('call_link') ); ?>" class="p-2 p-lg-3 p-xl-4 text-center">
                <span class="yellow-text">Hurry &amp; book now!</span>
                <span><?php echo get_field('call_link'); ?><?php echo (get_field('extension')) ? ' <br>Ext&nbsp;' . get_field('extension') : ''; ?></span>
            </a>
        </div>
    <?php endif; ?>

</header>




<?php $frmsource = 'Teens Parties Landing'; ?>
<?php if (has_post_thumbnail() ): ?>
    <?php $background_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
<?php endif; ?>

    <style>

        body { background-repeat: no-repeat; background-attachment: scroll !important;}

        <?php if ( get_field('theme') == 'theme-kids' ): ?>
            body {background-image: url('<?php echo $background_image[0]; ?>'); background-color: #162638; background-position: top center; background-size:contain; }
        <?php endif; ?>

        <?php if (get_field('theme') == 'theme-teens'): ?>
            body {background-image: url('<?php echo $background_image[0]; ?>'); background-color: #1d3162; background-position: top center; background-size: contain;}

            @media screen and (max-width: 768px) {
                body { background-size: auto;}
            }

        <?php endif; ?>

        <?php if (get_field('theme') == 'theme-adults'): ?>
            body {background-image: url('<?php echo $background_image[0]; ?>'); background-color: #141f3a; background-position: top center; background-size: contain;}

            @media screen and (max-width: 768px) {
                body { background-size: auto;}
            }

        <?php endif; ?>

        <?php if (get_field('theme') == 'theme-holidays'): ?>
            body {background-image: url('<?php echo $background_image[0]; ?>'); background-color: #101d2e; background-position: top center; background-size: contain;}

            @media screen and (max-width: 768px) {
                body { background-size: auto;}
            }

        <?php endif; ?>

        @media screen and (max-width: 768px) {
            body {background-attachment: scroll;}
            .button-outline { width:90%; }
        }

        .email-confirm {
            display: none !important;
            border: 0 !important;
            opacity: 0 !important;
            font-size: 0 !important;
            outline: none !important;
        }

        .success-msg {margin: 0; }
        .error-msg {margin: 0; color: red;}
        .error-field {border: 1px solid red !important;}

        .spinner {width:20px;height:20px;margin:0;margin-left:10px;display:inline-block;vertical-align:middle;background-color:#fff;border-radius:100%;-webkit-animation:sk-scaleout 1s infinite ease-in-out;animation:sk-scaleout 1s infinite ease-in-out}@-webkit-keyframes sk-scaleout{0%{-webkit-transform:scale(0)}100%{-webkit-transform:scale(1);opacity:0}}@keyframes sk-scaleout{0%{-webkit-transform:scale(0);transform:scale(0)}100%{-webkit-transform:scale(1);transform:scale(1);opacity:0}}
    </style>

<script>
jQuery(document).ready(function($) {

    //var for WP AJAX requests
    var ajaxurl = '<?php echo site_url(); ?>/wp-admin/admin-ajax.php';

    $('.each-package').on('click', function() {

        var thisPackageID = $(this).attr('data-package'),
            thisPackageLink = $(this).attr('data-book-link');

        $('.each-package').removeClass('active');
        $(this).addClass('active');
        $('.success-msg').html('');
        $('#book-online-form').show();

        $('.each-package-details').hide();
        $('.'+thisPackageID).show();

        if (thisPackageLink != null && thisPackageLink != '' && thisPackageLink != undefined ) {
            $('#book-online-form').attr('action', thisPackageLink);
            $('.package-call').hide();
            $('.package-form').show();
        } else {
            $('#book-online-form').attr('action', '');
            $('.package-call').show();
            $('.package-form').hide();
        }


    })

    function sanitizeInput(str) {
        return str.replace(/<script>|<\/script>|>|<|"|'|;|,|^|cc:|CC:|Cc:|cC:|bcc:|BCC:|Bcc:|BCc:|BcC:|bCc:|bcC|#/gi, '');
    }

    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }

    $('#book-online-form').on('submit', function(e){

        e.preventDefault();

        var form           = $('#book-online-form'),
            formAction     = form.attr('action'),
            fnameField     = form.find('#fname'),
            lnameField     = form.find('#lname'),
            phoneField     = form.find('#phone'),
            eventtypeField = form.find('#eventtype'),
            companyField   = form.find('#company'),
            emailField     = form.find('#email'),
            submitBtn      = form.find('button[type="submit"]'),
            fnameVal       = sanitizeInput(fnameField.val().trim()),
            lnameVal       = sanitizeInput(lnameField.val().trim()),
            phoneVal       = sanitizeInput(phoneField.val().trim()),
            eventtypeVal   = sanitizeInput(eventtypeField.val().trim()),
            companyVal     = sanitizeInput(companyField.val().trim()),
            emailVal       = sanitizeInput(emailField.val().trim().replace(/\s/g,'')),
            submitBtnVal   = submitBtn.html(),
            submitBtnWidth = submitBtn.outerWidth(true),
            email_confirm  = form.find('#email_confirm').val(),
            frmSubmit      = '<?php echo $frmsource; ?>',
            utm_source     = '<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : ""; ?>',
            utm_medium     = '<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : ""; ?>',
            utm_campaign   = '<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : ""; ?>',
            utm_content    = '<?php echo isset($_GET['utm_content']) ? $_GET['utm_content'] : ""; ?>',
            user_ip        = '<?php echo $_SERVER['REMOTE_ADDR']; ?>',
            valid          = true;

        $('.error-msg').html('');
        fnameField.removeClass('error-field');
        lnameField.removeClass('error-field');
        phoneField.removeClass('error-field');
        eventtypeField.removeClass('error-field');
        companyField.removeClass('error-field');
        emailField.removeClass('error-field');

        if (fnameVal === '' || fnameVal === null) {
            valid = false;
            $('.error-msg').append('Please enter a valid first name.<br>');
            fnameField.addClass('error-field');
        }

        if (lnameVal === '' || lnameVal === null) {
            valid = false;
            $('.error-msg').append('Please enter a valid last name.<br>');
            lnameField.addClass('error-field');
        }

        if (phoneVal === '' || phoneVal === null) {
            valid = false;
            $('.error-msg').append('Please enter a valid phone number.<br>');
            phoneField.addClass('error-field');
        }

//        if (eventtypeVal === '' || eventtypeVal === null) {
//            valid = false;
//            $('.error-msg').append('Please enter a valid event type.<br>');
//            eventtypeField.addClass('error-field');
//        }

//        if (companyVal === '' || companyVal === null) {
//            valid = false;
//            $('.error-msg').append('Please enter a valid company name.<br>');
//            companyField.addClass('error-field');
//        }

        if (emailVal === '' || emailVal === null || !validateEmail(emailVal)) {
            valid = false;
            $('.error-msg').append('Please enter a valid email address.<br>');
            emailField.addClass('error-field');
        }

        if (valid) {

            $('.error-msg').html('');
            fnameField.removeClass('error-field');
            lnameField.removeClass('error-field');
            phoneField.removeClass('error-field');
            eventtypeField.removeClass('error-field');
            companyField.removeClass('error-field');
            emailField.removeClass('error-field');

            submitBtn.html('<span class="spinner"></span>');
            submitBtn.css('width', submitBtnWidth);

            $.ajax({
                url: ajaxurl,
                type: 'POST',
                data: {
                    action:        'submit_parties_landing',
                    fname:         fnameVal,
                    lname:         lnameVal,
                    phone:         phoneVal,
                    eventtype:     eventtypeVal,
                    company:       companyVal,
                    email:         emailVal,
                    formAction:    formAction,
                    source:        frmSubmit,
                    utm_source:    utm_source,
                    utm_medium:    utm_medium,
                    utm_campaign:  utm_campaign,
                    utm_content:   utm_content,
                    page:		   window.location.href,
                    user_ip:       user_ip,
                    phone_to_call: '<?php echo get_field("call_link"); ?>',
                    ext_to_call:   '<?php echo get_field("extension"); ?>'
                },
                error: function() {
                    $('.error-msg').html('There was an error. Please refresh the page and try again.');
                    submitBtn.html(submitBtnVal);
                },
                success: function(response) {

                    $('.error-msg').html('');
                    $('.success-msg').html(response);

                    form.hide();
                    submitBtn.html(submitBtnVal);
                    emailField.val('');
                    $('h2.package-call').hide();

                }
            })
        }

    })


    $('#testimonials-slider').slick({
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: false,
        fade: true
    });


    $(window).on("scroll", function() {
        var scrollPos = $(window).scrollTop();
        if (scrollPos <= 200) {

            $("#chat-bubble").removeClass('active');

        } else  {

            $("#chat-bubble").addClass('active');

        }

    });

})
</script>

<?php
    $comparison_link = get_field('comparison_link');
    $package_rows = get_field('packages');
    $first_package_link = $package_rows[0]['booking_link']
?>

<section id="landing-dark" class="container-fluid pt-5 pb-3 px-3 px-sm-4 px-md-5 px-xl-0 <?php echo get_field('theme'); ?>">
    <div class="row">

        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-10 offset-xl-1 col-xxl-8 offset-xxl-2">

            <div class="d-block d-md-flex text-center text-md-left">

                <!-- <div class="mb-3 mb-md-0 mr-md-4">
                    <img src="<?php echo get_field('title_image'); ?>" alt="" />
                </div> -->

                <div class="flex-grow-1 text-center">
                    <h1 class="my-0"><?php echo get_field('title'); ?></h1>
                    <center><img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/event-landing-logos.png" class="img-responsive" /></center>
                    <p><?php echo get_field('subtitle'); ?> <?php if ($comparison_link): ?><a class="compare-packages d-none d-md-inline-block d-lg-none" href="<?php echo $comparison_link; ?>" target="_blank">Compare Packages</a><?php endif; ?></p>
                </div>

            </div>


            <?php if (get_field('theme') == 'theme-adults'): ?>

            <div class="text-center">
                <h2>STEP 1: CHOOSE YOUR PARK PACKAGE</h2>
            </div>

            <?php endif; ?>


            <?php if (have_rows('packages')): ?>

                <div class="d-block d-md-flex flex-row mb-4">

                    <?php $x = 1; ?>
                    <?php while (have_rows('packages')): the_row(); ?>

                        <div data-package="package-<?php echo $x; ?>" data-book-link="<?php echo get_sub_field('booking_link'); ?>" class="each-package flex-fill mx-1 <?php echo ($x==1 ? 'active' : ''); ?> mt-4 mt-md-0">
                            <img class="each-package-image" src="<?php echo get_sub_field('image'); ?>" alt="<?php echo get_sub_field('title'); ?>" />
                            <?php if(get_sub_field('best_seller')): ?>
                                <img class="best-seller-stamp" src="https://www.iplayamerica.com/wp-content/uploads/best-seller.png" alt="Best Seller" />
                            <?php endif; ?>
                        </div>

                        <div class="d-block d-md-none">
                            <div class="each-package-details package-<?php echo $x; ?>">
                                <div class="d-block d-md-flex flex-row text-center">

                                    <div class="each-package-price py-3 py-md-0 pr-md-5">
                                        <h3><?php echo get_sub_field('title'); ?></h3>
                                    </div>
                                    <div class="px-0 px-md-5">
                                        <?php echo get_sub_field('description'); ?>
                                    </div>
                                    <?php if ($comparison_link): ?>
                                    <div class="compare-packages">
                                        <a href="<?php echo $comparison_link; ?>" target="_blank"><i class="fas fa-balance-scale align-middle"></i> <span class="pl-1 d-inline-block align-middle">Compare <br>Packages</span></a>
                                    </div>
                                    <?php endif; ?>

                                    <?php if ( get_sub_field('disclaimer') ): ?>
                                        <p class="text-center mt-3" style="line-height: 1;"><?php echo get_sub_field('disclaimer'); ?></p>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>

                    <?php $x++; ?>
                    <?php endwhile; ?>

                </div>

                <?php $x = 1; ?>
                <div class="d-none d-md-block">
                <?php while (have_rows('packages')): the_row(); ?>

                    <div class="each-package-details package-<?php echo $x; ?>">
                        <div class="d-block d-md-flex flex-row">

                            <div class="px-0 px-md-5">
                                 <h2><?php echo get_sub_field('title'); ?></h2>
                                <?php echo get_sub_field('description'); ?>
                            </div>
                            <?php if ($comparison_link): ?>
                                <div class="compare-packages d-none d-lg-block">
                                    <a href="<?php echo $comparison_link; ?>" target="_blank"><i class="fas fa-balance-scale align-middle"></i> <span class="pl-1 d-inline-block align-middle">Compare <br>Packages</span></a>
                                </div>
                            <?php endif; ?>

                        </div>

                        <?php if ( get_sub_field('disclaimer') ): ?>
                            <p class="text-center mt-4"><?php echo get_sub_field('disclaimer'); ?></p>
                        <?php endif; ?>
                    </div>

                <?php $x++; ?>
                <?php endwhile; ?>
                </div>

            <?php endif; ?>

            <?php if (get_field('theme') == 'theme-adults'): ?>

            <hr style="margin-top:40px;margin-bottom:40px; border-top:1px solid #eee !important;" />

            <div class="text-center">
                <h2>STEP 2: CHOOSE YOUR MENU PACKAGE <span style="color:#ff0000;font-size:18px;"><sup>*</sup></span></h2>
                <p>All menus are served family style & include cookies & soft drinks. <a href="https://www.iplayamerica.com/wp-content/uploads/AdultParties_MenuPackages.pdf" target="_blank">View full menu package options</a>.</p>

                    <div class="row">

                    <div class="col-xl-3 col-md-6">
                        <h3 style="color:#ca2852;">$18.95+</h3>
                        <h4><strong>PIZZA TIME</strong></h4>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <h3 style="color:#ca2852;">$20.95+</h3>
                        <h4><strong>ALL AMERICAN</strong></h4>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <h3 style="color:#ca2852;">$20.95+</h3>
                        <h4><strong>ITALIAN STALLION</strong></h4>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <h3 style="color:#ca2852;">$23.95+</h3>
                        <h4><strong>BACKYARD BBQ</strong></h4>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <h3 style="color:#ca2852;">$23.95+</h3>
                        <h4><strong>THE FIESTA</strong></h4>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <h3 style="color:#ca2852;">$28.95+</h3>
                        <h4><strong>MEDITERRANEAN</strong></h4>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <h3 style="color:#ca2852;">$28.95+</h3>
                        <h4><strong>KANSAI POKE</strong></h4>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <h3 style="color:#ca2852;">$38.95+</h3>
                        <h4><strong>SURF & TURF</strong></h4>
                    </div>

                </div>


            </div>

            <hr style="margin-top:40px;margin-bottom:40px; border-top:1px solid #eee !important;" />

            <div class="text-center">
                <h2>STEP 3(OPTIONAL): CHOOSE YOUR BEVERAGE PACKAGE <span style="color:#ff0000;font-size:18px;"><sup>*</sup></span></h2>
                <p>All menus are served family style & include cookies & soft drinks. <a href="https://www.iplayamerica.com/wp-content/uploads/AdultParties_BeveragePackage.pdf" target="_blank">View full beverage package options</a>.</p>

                    <div class="row">

                    <div class="col-xl-4 col-md-4">
                        <h3 style="color:#ca2852;">$26+ (2hrs)</h3>
                        <h4><strong>SUPER PREMIUM</strong></h4>
                    </div>

                    <div class="col-xl-4 col-md-4">
                        <h3 style="color:#ca2852;">$22+ (2hrs)</h3>
                        <h4><strong>PREMIUM</strong></h4>
                    </div>

                    <div class="col-xl-4 col-md-4">
                        <h3 style="color:#ca2852;">$16+ (2hrs)</h3>
                        <h4><strong>BEER & WINE</strong></h4>
                    </div>

                </div>

            <hr style="margin-top:40px;margin-bottom:40px; border-top:1px solid #eee !important;" />

            <div class="text-center">
                <h2>ADDITIONAL OPTIONS</h2>
<p style="color:#ffffff; text-align:center;font-size:18px;padding-top:20px;"><img src="https://www.iplayamerica.com/wp-content/uploads/top-golf-seal.png" width="36px" height="34px"> <strong>ADD TOPGOLF SWING SUITE TO ANY PACKAGE:</strong> 1HR GAME | MON - THURS $15PP & FRI - SUN $20PP</p>
            </div>

            <div class="text-center">
                <span style="font-size:10px;line-height:1 !important;"><span style="color:#ff0000;">*</span> 20% Gratuity on Food & Beverages Tax not included</span>
            </div>

            </div>

            <?php endif; ?>

        </div>

    </div>
</section>

<section id="landing-white" class="container-fluid pt-5 pb-4 px-3 px-sm-4 px-md-5 px-xl-0 <?php echo get_field('theme'); ?>">
    <div class="row">

        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-8 offset-xl-2">

            <div class="form-box mx-3 px-3 px-md-5 py-4 text-center">
                <p class="success-msg"></p>

                <form action="<?php echo $first_package_link; ?>" method="post" id="book-online-form">
                    <h2 class="mb-3">
                        <span class="d-none d-sm-inline-block"><?php echo get_field('form_title'); ?></span>
                        <span class="d-inline-block d-sm-none"><?php echo get_field('form_title_mobile'); ?></span>
                    </h2>
                    <p class="error-msg"></p>
<!--                    <div class="d-block d-md-flex">-->
                        <input type="text" id="fname" class="text-center text-md-left" placeholder="First Name">
                        <input type="text" id="lname" class="text-center text-md-left" placeholder="Last Name">
                        <input type="text" id="phone" class="text-center text-md-left" placeholder="Phone">
                        <input type="text" id="eventtype" class="text-center text-md-left" placeholder="Type of Event">
                        <input type="text" id="company" class="text-center text-md-left" placeholder="Company Name">
                        <input type="email" id="email" class="text-center text-md-left" placeholder="Email">

                        <input type="text" name="email-confirm" value="" size="40" class="email-confirm" />
                        <input name="source" type="hidden" value="<?php echo $frmsource; ?>" />
                        <input name="frmSubmit" type="hidden" value="<?php echo $frmsource; ?>" />

                        <button type="submit" class="button button-red package-call" style="<?php echo ($first_package_link) ? 'display: none;' : 'display: block;' ; ?> margin: 0 auto;">Get&nbsp;More&nbsp;Info</button>
                        <button type="submit" class="button button-red package-form" style="<?php echo ($first_package_link) ? 'display: block;' : 'display: none;' ; ?> margin: 0 auto;">Book&nbsp;Online</button>
<!--                    </div>-->
                </form>
                <?php if (get_field('special_offer_form')): ?>
                    <p onclick="javascript:fsLightbox3257098.show()" style="cursor: pointer;"><?php echo get_field('special_offer_form'); ?></p>
                <?php endif; ?>
            </div>

            <?php if (have_rows('add-ons')): ?>
                <div id="add-ons" class="mx-3 pt-5 pb-2">
                    <div class="d-block d-lg-flex justify-content-between align-items-center text-center text-lg-left">

                        <?php if (get_field('add-ons_title')): ?>
                            <h3 class="mb-2 mb-lg-0"><?php echo get_field('add-ons_title'); ?></h3>
                        <?php endif; ?>

                        <?php while (have_rows('add-ons')): the_row(); ?>
                            <span style="color: <?php echo get_sub_field('color'); ?>;"><img src="<?php echo get_sub_field('icon'); ?>" alt="<?php echo get_sub_field('add_on'); ?> icon"/> <?php echo get_sub_field('add_on'); ?></span>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (get_field('above_testimonials')): ?>
                <div style="margin: 55px 0 0 0;">
                    <h3 class="text-center"><?php echo get_field('above_testimonials') ?></h3>
                </div>
            <?php endif; ?>

        </div>
    </div>


    <?php if (have_rows('testimonials')): ?>
        <div class="row">
            <div id="testimonials-section" class="col-12 col-sm-12 col-md-12 col-lg-12 offset-lg-0 col-xl-8 offset-xl-2 py-4 mt-5 text-center">

                <h2 class="mb-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/open-quote.png" alt="open quote">&nbsp;What People are Saying about <span style="white-space: nowrap;">The Event Center<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/close-quote.png" alt="close quote"></span></h2>

                <div id="testimonials-slider" class="col-12 col-xl-10 offset-xl-1">

                    <?php while (have_rows('testimonials')): the_row(); ?>
                        <div class="each-slide">
                            <p class="testimonial">"<?php echo get_sub_field('testimonial'); ?>"</p>
                            <p class="testimonial-author">-<?php echo get_sub_field('author'); ?></p>
                        </div>
                    <?php endwhile; ?>

                </div>

            </div>
        </div>
    <?php endif; ?>

    <?php if (get_field('page_disclaimer')): ?>
        <div class="row">
            <div id="page-disclaimer" class="col-12 col-sm-12 col-md-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 py-4 mt-5 text-center">
                <p style="font-size:10px;line-height:1 !important;"><?php echo get_field('page_disclaimer'); ?></p>
            </div>
        </div>
    <?php endif; ?>

</section>



<!-- have to add this theme class everywhere bc we don't have access to the body -->

<div id="chat-bubble" class="chat-bubble <?php echo get_field('theme'); ?>" style="display:none !important;" onclick="javascript:fsLightbox3257098.show()">

    <i class="fas fa-comment"></i>
    <i class="far fa-comment"></i>
    <div class="chat-bubble-text">
        <p class="chat-bubble-title">Let us help!</p>
        <?php if ( get_field('special_offer_bubble') ): ?>
            <p><?php echo get_field('special_offer_bubble'); ?></p>
        <?php endif; ?>
        <p class="chat-bubble-link">Schedule Now ></p>
    </div>

</div>

<style>
    .fsLightbox {border: 0 !important; background: #f0f0f0 !important;}
    .fsLightbox h2 {color: #000 !important; text-align: center;}
    .fsForm {background: transparent !important; border: 0 !important;}
    .lightbox-close {color: #000 !important;}
</style>
<!-- Begin Lightbox -->
<div id="fsLightbox3257098" class="fsLightbox" style="display:none;">
    <div align="right" style="padding-bottom:5px;">
        <a id="fsLightboxClose3257098" href="#" title="close" class="lightbox-close"><i class="fas fa-times"></i></a>
    </div>
    <h2>Schedule your tour now!</h2>
    <div id="fsLightboxContent3257098" style="height:450px; width:650px; padding-top:0px; overflow:auto;">
        <script type="text/javascript" src="https://iplayamerica.formstack.com/forms/js.php/cmds_kids_landing_tour?nojquery=1&amp;nojqueryui=1&amp;nomodernizr=1"></script>
    </div>
</div>

<script type="text/javascript" src="https://iplayamerica.formstack.com/forms/js/lightbox.js"></script>
<script type="text/javascript">
    var fsLightbox3257098 = new FSLightbox({
        form: 3257098,
//        handleText: "CMDS | Kids | Landing | Tour",
//        handlePosition: "left",
//        handleImage: "https://iplayamerica.formstack.com/forms/lightboxHandle.php?str=CMDS+%7C+Kids+%7C+Landing+%7C+Tour",
        handle: 'chat-bubble'
    });
</script>
<!-- Use fsLightbox3257098.show() or set handle: "ID" to open lightbox without using predefined handle -->
<!-- End Lightbox -->

<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>

<?php get_footer(); ?>