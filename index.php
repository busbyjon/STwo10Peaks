<?php include('includes.php') ?>
<?php $search = new TwitterSearch('monkey');
$results = $search->results();?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/styles.css">
        <link href='http://fonts.googleapis.com/css?family=Russo+One' rel='stylesheet' type='text/css'>
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!-- is there a tidier way to do this? I'm putting items in divs (to clear the content left and right), but to only make the background as wide as the content, Jon Busby -->
        <div id='container'>
          <span id='miles'>
              152
          </span>
          <div id='miles-description-container'>
            <span id='miles-description' style='display:none'>
              training miles<br/> completed
            </span>
          </div>
          
          <div id='donate-container'>
            <span id='donate' style='display:none'>
            Donate Now!
            </spn>
          </div>
          
          <div id='feed' style='display:none'>
            <?php foreach ($results as $result):?>
            <div class='feeddiv'>
              <img src='<?php echo $result->profile_image_url?>'/>
            <div class='feeditem'><?php echo $result->text?></div>
            </div>
            <?php endforeach;?>
          </div>
          
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/jquery.shuffleLetters.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
      -->
    </body>
</html>
