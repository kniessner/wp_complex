<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
        <meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php bloginfo('template_url');?>/core/css/style.css">

        <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url');?>/_/img/favicon.ico" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300" type="text/css" />
        <?php wp_head(); ?>

</head>

<body>

<header>
      <img id="logo" class="hidden" src="<?php bloginfo('template_url');?>/src/img/logorbit.png" />
      <?php get_template_part('wp_setup/components/logo_svg.php');?>
      
        <!--<svg id="logo" class=" svg" width="auto" height="236px" viewBox="0 0 274 236" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <desc>Created with Sketch.</desc>
            <defs></defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Group" transform="translate(-152.000000, 0.000000)">
                    <text id="KN-NR" fill="#545454" style="mix-blend-mode: difference;" font-family="AvenirNext-Regular, Avenir Next" font-size="45" font-weight="normal" line-spacing="54" letter-spacing="35">
                        <tspan x="130.2825" y="122.35994">KN</tspan>
                        <tspan x="257.0125" y="104.479919" font-size="60"> </tspan>
                        <tspan x="312.9225" y="122.35994">N</tspan>
                        <tspan x="382.3025" y="122.35994" letter-spacing="5">R</tspan>
                    </text>
                    <path class="circle" d="M287.111524,200.173086 C318.223698,200.173086 343.445098,175.078832 343.445098,144.123502 C343.445098,113.168172 318.223698,88.0739183 287.111524,88.0739183 C263.672922,88.0739183 243.577618,102.316114 235.090746,122.577037 C232.312226,129.210268 230.777949,136.488614 230.777949,144.123502 C230.777949,175.078832 255.999349,200.173086 287.111524,200.173086 Z" id="Path" fill="#545454"></path>
                    <path d="M250.991761,187.137358 L250.991761,197.535458 L244.032908,197.535458 L244.032908,180.242624 C235.762368,170.487712 230.777949,157.884759 230.777949,144.123502 C230.777949,136.488614 232.312226,129.210268 235.090746,122.577037 C237.32028,117.254415 240.350949,112.347166 244.032908,108.004381 L244.032908,34.5410707 C244.032908,14.2313391 261.662003,0.153002484 279.52306,0.153002484 L279.52306,7.0767746 C265.14143,7.0767746 250.991761,18.3856024 250.991761,34.5410707 L250.991761,73.8307299 L332.178383,73.8307299 L316.875701,96.5271839 C332.82902,106.424121 343.445098,124.040303 343.445098,144.123502 C343.445098,151.581273 341.981181,158.698852 339.32366,165.207288 C340.703124,169.332941 341.456854,173.671338 341.456854,178.148897 C341.456854,209.075079 316.404982,235.846998 272.796168,235.846998 L272.796168,228.923225 C311.765747,228.923225 334.498001,205.3824 334.498001,178.148897 C334.498001,177.001037 334.434774,175.861332 334.31126,174.731859 C324.256206,190.050072 306.872033,200.173086 287.111524,200.173086 C273.366141,200.173086 260.770567,195.274991 250.991761,187.137358 Z M250.991761,101.109646 C260.770567,92.9720132 273.366141,88.0739183 287.111524,88.0739183 C295.587261,88.0739183 303.625813,89.9362995 310.836348,93.2722027 L319.188524,80.754502 L250.991761,80.754502 L250.991761,101.109646 Z M250.991761,187.137358 L250.991761,101.109646 C248.476298,103.20294 246.147223,105.510595 244.032908,108.004381 L244.032908,180.242624 C246.147223,182.736409 248.476298,185.044065 250.991761,187.137358 Z M310.836348,93.2722027 L282.538563,135.683094 C308.094347,135.683094 331.976207,153.378887 334.31126,174.731859 C336.273425,171.742631 337.956493,168.555568 339.32366,165.207288 C333.166163,146.791651 314.541226,132.61483 294.832537,129.220907 L316.875701,96.5271839 C314.938157,95.3251926 312.921887,94.2370625 310.836348,93.2722027 Z" id="Combined-Shape" fill="#FFFFFF"></path>
                </g>
            </g>
        </svg>-->

<svg id="logo" class=" svg" width="auto" height="116px" viewBox="0 0 274 116" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 47 (45396) - http://www.bohemiancoding.com/sketch -->
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Desktop-HD" transform="translate(-51.000000, -14.000000)" fill="#545454">
            <g id="Group" transform="translate(47.000000, 14.000000)">
                <text id="KN-NR" font-family="AvenirNext-Regular, Avenir Next" font-size="45" font-weight="normal" line-spacing="54" letter-spacing="35">
                    <tspan x="0" y="104.88002">KN</tspan>
                    <tspan x="126.73" y="87" font-size="60"> </tspan>
                    <tspan x="182.64" y="104.88002">N</tspan>
                    <tspan x="252.02" y="104.88002" letter-spacing="5">R</tspan>
                </text>
                <path d="M117.490721,88.6335524 C113.440783,83.8325402 111,77.6298259 111,70.8570363 C111,67.0994222 111.751308,63.5172857 113.111901,60.2526507 C114.203665,57.6330503 115.68773,55.2178809 117.490721,53.0805202 L117.490721,16.9245547 C117.490721,6.92884454 126.12338,0 134.869626,0 L134.869626,3.40762846 C127.827194,3.40762846 120.898349,8.97342162 120.898349,16.9245547 L120.898349,36.261494 L160.654015,36.261494 L153.16056,47.431862 C160.97262,52.3027741 166.171127,60.972817 166.171127,70.8570363 C166.171127,74.5274796 165.454273,78.0304926 164.152932,81.2337078 C164.828431,83.264204 165.197519,85.3994047 165.197519,87.6030961 C165.197519,102.823837 152.930057,116 131.575585,116 L131.575585,112.592372 C150.658305,112.592372 161.789891,101.006435 161.789891,87.6030961 C161.789891,87.0381614 161.75893,86.4772401 161.698447,85.9213548 C156.774663,93.4604214 148.261939,98.4426 138.585564,98.4426 C131.854691,98.4426 125.686859,96.0319361 120.898349,92.0268896 L120.898349,97.1444558 L117.490721,97.1444558 L117.490721,88.6335524 Z M150.203194,45.8298788 L154.293108,39.6691224 L120.898349,39.6691224 L120.898349,49.6871829 C125.686859,45.6821364 131.854691,43.2714725 138.585564,43.2714725 C142.735984,43.2714725 146.672322,44.1880687 150.203194,45.8298788 Z M117.490721,88.6335524 C118.526064,89.8609029 119.666571,90.9966468 120.898349,92.0268896 L120.898349,49.6871829 C119.666571,50.7174258 118.526064,51.8531696 117.490721,53.0805202 L117.490721,88.6335524 Z M153.16056,47.431862 C152.211778,46.8402857 151.224446,46.3047477 150.203194,45.8298788 L136.346265,66.7029749 C148.860485,66.7029749 160.555012,75.4121999 161.698447,85.9213548 C162.659285,84.4501657 163.483454,82.8816092 164.152932,81.2337078 C161.137713,72.1702021 152.017408,65.192887 142.366409,63.5225217 L153.16056,47.431862 Z" id="Combined-Shape"></path>
            </g>
        </g>
    </g>
</svg>
     

    <span class="background"></span>
    <!--<img class="logo" src="<?php bloginfo('template_url');?>/src/img/logo_form.png" />-->
   <!--  <h1 class="page-title screen-reader-text">Kniessner Complex</h1>-->
</header>
  
  <nav class="navbar navbar-toggleable-md sticky-top bg-faded" id="main_menu">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <?php get_template_part( 'wp_setup/menus/menu-primary' ); ?>
      <div class="social">
        <i class="fa fa-linkedin" aria-hidden="true"></i>
        <i class="fa fa-github" aria-hidden="true"></i>
      </div>

       <?php //get_template_part('wp_setup/components/searchform'); ?>

    </div>
  </nav>