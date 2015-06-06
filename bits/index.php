<?php
    $app['releasever'] = "1.5.1";
    $app['releasename'] = "Aurora Edition";
    $app['releasefull'] = "v".$app['releasever']." \"".$app['releasename']."\"";
    $app['releasedate'] = "22nd March 2015";
    $app['background'] = "/bits/background_01.jpg";
    $app['youtubevid'] = "oJRZHjyj7Zg";
    $app['screenshots'] = 84;

    $app['banner'] = $app['releasefull']." (".$app['releasedate'].")";
    $app['bannerurl'] = "http://redeclipse.net/forum/viewtopic.php?f=8&t=638";

    $app['targets'] = array('home' => array('name' => '', 'url' => '/', 'alturl' => '', 'nav' => -1, 'redir' => 0));

    // nav items should be in reverse order for the top navbar 
    $app['targets']['download'] = array('name' => 'Download', 'url' => 'http://www.indiedb.com/games/red-eclipse/downloads', 'alturl' => 'http://www.indiedb.com/downloads/start/', 'nav' => 0, 'redir' => 1);
    $app['download'] = array('windows' => '82334', 'linux' => '82335', 'osx' => '83570', 'all' => '82337');

    $app['targets']['donate'] = array('name' => 'Donate', 'url' => 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=E77G49C2X4WXN', 'alturl' => '', 'nav' => 1, 'redir' => 1);
    $app['targets']['chat'] = array('name' => 'Chat', 'url' => 'http://webchat.freenode.net/?channels=redeclipse', 'alturl' => '', 'nav' => 1, 'redir' => 1);
    $app['targets']['forum'] = array('name' => 'Forum', 'url' => 'http://redeclipse.net/forum/index.php', 'alturl' => 'http://redeclipse.net/forum/index.php?t=', 'nav' => 1, 'redir' => 1);
    $app['targets']['wiki'] = array('name' => 'Wiki', 'url' => 'http://redeclipse.net/wiki/', 'alturl' => 'http://redeclipse.net/wiki/', 'nav' => 1, 'redir' => 1);
    $app['targets']['faq'] = array('name' => 'FAQ', 'url' => 'http://redeclipse.net/wiki/FAQ_for_Red_Eclipse', 'nav' => 1, 'redir' => 1);
    $app['targets']['guide'] = array('name' => 'Guide', 'url' => 'http://redeclipse.net/wiki/Guide', 'nav' => 1, 'redir' => 1);
    $app['targets']['install'] = array('name' => 'Install', 'url' => 'http://redeclipse.net/wiki/How_to_Install_Red_Eclipse', 'nav' => 1, 'redir' => 1);
    $app['targets']['contribute'] = array('name' => 'Contribute', 'url' => 'http://redeclipse.net/wiki/How_to_Contribute_to_Red_Eclipse', 'nav' => 1, 'redir' => 1);
    $app['targets']['servers'] = array('name' => 'Servers', 'url' => 'http://redflare.ofthings.net/', 'alturl' => 'http://redflare.ofthings.net/', 'nav' => 1, 'redir' => 1);

    $app['targets']['facebook'] = array('name' => 'Facebook', 'url' => 'http://www.facebook.com/redeclipse.net', 'nav' => 0, 'redir' => 1);
    $app['targets']['youtube'] = array('name' => 'Youtube', 'url' => 'http://www.youtube.com/results?search_query=%22Red%20Eclipse%22', 'alturl' => 'http://www.youtube.com/results?search_query=%22Red%20Eclipse%22+', 'nav' => 0, 'redir' => 1);

    $app['targets']['itchio'] = array('name' => 'Itch.io', 'url' => 'http://redeclipse.itch.io/red-eclipse', 'nav' => 0, 'redir' => 1);
    $app['targets']['indiedb'] = array('name' => 'IndieDB', 'url' => 'http://www.indiedb.com/games/red-eclipse', 'nav' => 0, 'redir' => 1);

    $app['targets']['google'] = array('name' => 'Google', 'url' => 'http://www.google.com/search?q=%22Red%20Eclipse%22', 'alturl' => 'http://www.google.com/search?q=%22Red%20Eclipse%22+', 'nav' => -1, 'redir' => 1);

    $app['targets']['svn'] = array('name' => 'SVN', 'url' => 'http://svn.icculus.org/redeclipse/', 'alturl' => 'http://svn.icculus.org/redeclipse/?view=rev&revision=', 'nav' => -1, 'redir' => 1);
    $app['targets']['git'] = array('name' => 'GIT', 'url' => 'https://github.com/red-eclipse/', 'alturl' => 'https://github.com/red-eclipse/', 'nav' => -1, 'redir' => 1);
    $app['targets']['apply'] = array('name' => 'Apply', 'url' => 'http://docs.google.com/forms/d/1ZuvNFCIivYY_b5YLpCa_pnsbdR4oRdPplIkcbBexCDU/viewform', 'nav' => -1, 'redir' => 1);
    $app['targets']['guidelines'] = array('name' => 'Guidelines', 'url' => 'http://redeclipse.net/wiki/Multiplayer_Guidelines', 'nav' => -1, 'redir' => 1);
    $app['targets']['trademark'] = array('name' => 'Trademark', 'url' => 'http://redeclipse.net/wiki/Trademark_Policy', 'nav' => -1, 'redir' => 1);
    $app['targets']['devel'] = array('name' => 'Devel', 'url' => 'http://redeclipse.net/wiki/Obtain_development_version', 'nav' => -1, 'redir' => 1);
    $app['targets']['license'] = array('name' => 'License', 'url' => 'http://redeclipse.net/wiki/License', 'nav' => -1, 'redir' => 1);
    $app['targets']['readme'] = array('name' => 'Readme', 'url' => 'http://redeclipse.net/wiki/Readme', 'nav' => -1, 'redir' => 1);
    $app['targets']['tracker'] = array('name' => 'Tracker', 'url' => 'http://redeclipse.net/forum/viewforum.php?f=9', 'alturl' => 'http://redeclipse.net/forum/viewforum.php?f=9&t=', 'nav' => 0, 'redir' => 1);
    $app['targets']['forums'] = array('name' => 'Forums', 'url' => 'http://redeclipse.net/forum/index.php', 'alturl' => 'http://redeclipse.net/forum/index.php?t=', 'nav' => 0, 'redir' => 1);

    function checkarg($arg = "", $def = "") {
        return isset($_GET[$arg]) && $_GET[$arg] != "" ? $_GET[$arg] : $def;
    }

    $app['platform'] = "";
    if (preg_match("/linux/i", $_SERVER['HTTP_USER_AGENT'])) $app['platform'] = "linux";
    elseif (preg_match("/mac os x/i", $_SERVER['HTTP_USER_AGENT'])) $app['platform'] = "osx";
    elseif (preg_match("/windows|win32/i", $_SERVER['HTTP_USER_AGENT'])) $app['platform'] = "windows";

    $app['target'] = checkarg("target", "home");
    if ($app['target'] == "desura") $app['target'] = "indiedb";
    if (!isset($app['targets'][$app['target']])) $app['target'] = "home";

    $title = checkarg("title");
    if ($app['targets'][$app['target']]['redir']) {
        if (($app['target'] == "download") && ($title != "")) {
            if (isset($app['download'][$title])) $title = $app['download'][$title];
            else $title = "";
        }
        $app['url'] = $title != "" ? (
                $app['targets'][$app['target']]['alturl'] != "" ? $app['targets'][$app['target']]['alturl'].$title : $app['targets'][$app['target']]['url'].$title
        ) : $app['targets'][$app['target']]['url'];
        header("Location: ".$app['url']);
        exit;
    }
    else {
        $app['url'] = $title != "" ? (
                $app['targets'][$app['target']]['alturl'] != "" ? $app['targets'][$app['target']]['alturl'].$title : $app['targets'][$app['target']]['url'].$title
        ) : $app['targets'][$app['target']]['url'];
        $app['navbar'] = ''; // cache the navbar
        foreach ($app['targets'] as $key => $targ) {
            if ($key != "" && $targ['name'] != "" && $targ['nav'] == 1) {
                $app['navbar'] .= '<li><a href="/'.$key.'">'. $targ['name'] .'</a></li>';
            }
        }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>Red Eclipse: <?php echo ($app['targets'][$app['target']]['name'] != "" ? $app['targets'][$app['target']]['name'] : "A free casual arena shooter featuring parkour"); ?></title>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <link rel="apple-touch-icon" sizes="57x57" href="/bits/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/bits/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/bits/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/bits/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/bits/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/bits/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/bits/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/bits/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/bits/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="/bits/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/bits/favicon-194x194.png" sizes="194x194">
        <link rel="icon" type="image/png" href="/bits/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="/bits/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="/bits/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/bits/manifest.json">
        <link rel="shortcut icon" href="/bits/favicon.ico">
        <meta name="msapplication-TileColor" content="#440000">
        <meta name="msapplication-TileImage" content="/bits/mstile-144x144.png">
        <meta name="msapplication-config" content="/bits/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        
        <link href="/bits/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/bits/style.css" />
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

      
    </head>
    <body>
    <div id="container">
     <nav class="navbar  navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $app['bannerurl']; ?>"><?php echo $app['banner']; ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <?php echo $app['navbar']; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>  
   
    <div class="row" id="header">          
            <div class="col-xs-12 col-sm-6 col-md-4">
             <a href="/home">
            <img src="/bits/redeclipse-regular.png" class="img-responsive" alt="Red Eclipse" style="margin:auto">
            </a>
            </div>
            <div class="col-xs-4 col-sm-2 col-md-2 col-xs-offset-2 col-sm-offset-2 col-md-offset-4">
            <a href="/indiedb">
             <img src="/bits/indiedb.png" class="img-responsive"  alt="indiedb" id="indiedb">
             </a>
            </div>
             <div class="col-xs-4 col-sm-2 col-md-2">
             <a href="/bits/http://www.cubeengine.com/">
             <img src="cube2.png" class="img-responsive" alt="cube2" id="cube2"></a>
            </div>
    </div>
   
   
    <div class="row" id="main">
		<div class="col-xs12 col-sm-12 col-md-12 col-lg-4" style="text-align:center; padding:40px">
       	 	<h1>a free casual <b>arena shooter</b></h1>
        	<h3>Fun for everyone, young and old!</h3>
        	<h3>Available for Windows, GNU/Linux, BSD, and OS X</h3>
        	<h3>Parkour, impulse boosts, dashing, and other tricks</h3>
        	<h3>An array of mutators and variables</h3>
        	<h3>Create your own maps cooperatively online</h3>
        
  
        	<div class="col-xs12 col-sm-12 col-md-12">
        		<a href="/download/<?php echo $app['platform']; ?>" id="button" class="btn btn-primary"><p class="download"><span class="glyphicon glyphicon-download" aria-hidden="true"></span> FREE DOWNLOAD</p><p class="version"><?php echo $app['releasefull']; ?> released <?php echo $app['releasedate']; ?></p></a>
        	</div>
        
        	<div class="col-xs12 col-sm-12 col-md-12">
				<div class="btn-group">
  					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Other download <span class="caret"></span></button>
  					<ul class="dropdown-menu" role="menu">
    					<li><a href="/itchio">Itch.io</a><a href="/indiedb">IndieDB</a></li>
  					</ul>
				</div>
				<div class="btn-group">
  					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Torrent<span class="caret"></span></button>
  					<ul class="dropdown-menu" role="menu">
    					<li><a href="/files/releases/redeclipse_<?php echo $app['releasever']; ?>_win.exe.torrent">Windows</a><a href="/files/releases/redeclipse_<?php echo $app['releasever']; ?>_nix.tar.bz2.torrent">Linux</a><a href="/files/releases/redeclipse_<?php echo $app['releasever']; ?>_osx.tar.bz2.torrent">OS X</a><a href="/files/releases/redeclipse_<?php echo $app['releasever']; ?>_combined.tar.bz2.torrent">Combined</a></li>
  					</ul>
				</div>
				<div class="btn-group">
  					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="margin-right:0;">Help<span class="caret"></span></button>
  					<ul class="dropdown-menu" role="menu">
    					<li><a href="/faq">FAQs</a> <a href="/install">Installing the Game</a> <a href="/guide">Gameplay Guide</a> <a href="/devel">Development Version</a></li>
  					</ul>
 				</div>
 			</div>
            
        </div>

	<div class="col-xs12 col-sm-12 col-md-12 col-lg-8" style="padding:padding:30px 30px 30px 0;">
    	<div class="embed-responsive embed-responsive-16by9">
  			<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/oJRZHjyj7Zg?showinfo=0" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
    
    
</div>

 
    
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


 <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active row">
    	<div class="col-xs-6 col-sm-3 col-md-3" style="padding:0">
      		<a href="images/001.jpg" target="_blank"><img class="img-responsive" src="thumbs/001.jpg" alt="screenshot"></a>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-3" style="padding:0">
      		<a href="images/002.jpg" target="_blank"><img class="img-responsive" src="thumbs/002.jpg" alt="screenshot"></a>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-3" style="padding:0">
      		<a href="images/003.jpg" target="_blank"><img class="img-responsive" src="thumbs/003.jpg" alt="screenshot"></a>
        </div>
         <div class="col-xs-6 col-sm-3 col-md-3" style="padding:0">
      		<a href="images/004.jpg" target="_blank"><img class="img-responsive" src="thumbs/004.jpg" alt="screenshot"></a>
        </div>
    </div>
     <div class="item row">
    	<div class="col-xs-6 col-sm-3 col-md-3" style="padding:0">
      		<a href="images/005.jpg" target="_blank"><img class="img-responsive" src="thumbs/005.jpg" alt="screenshot"></a>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-3" style="padding:0">
      		<a href="images/006.jpg" target="_blank"><img class="img-responsive" src="thumbs/006.jpg" alt="screenshot"></a>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-3" style="padding:0">
      		<a href="images/007.jpg" target="_blank"><img class="img-responsive" src="thumbs/007.jpg" alt="screenshot"></a>
        </div>
         <div class="col-xs-6 col-sm-3 col-md-3" style="padding:0">
      		<a href="images/008.jpg" target="_blank"><img class="img-responsive" src="thumbs/008.jpg" alt="screenshot"></a>
        </div>
    </div>
  </div>


  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon  glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="row texte">
	<div class="col-xs-12 col-sm-4 col-md-4">
<p>Red Eclipse is a fun-filled new take on the casual first person arena shooter, built as a total conversion of <a href="http://www.cubeengine.com/">Cube Engine 2</a>, which lends itself toward a balanced gameplay, with a general theme of agility in a variety of environments. For more information, please see our <a href="/wiki">Wiki</a> or <a href="/forum">Forums</a>.</p>
<p>The project is a <i>Free and Open Source</i> game, built on <a href="http://www.cubeengine.com/">Cube Engine 2</a> using <a href="http://libsdl.org/">SDL</a> and <a href="http://opengl.org/">OpenGL</a> which allows it to be ported to many platforms; you can <a href="/download">download a package</a> for <i>Windows, GNU/Linux, BSD, and OS X</i>, or grab a development copy from our <a href="/devel">Github</a> repository and live on the bleeding edge.</p>
</div>


	<div class="col-xs-12 col-sm-4 col-md-4">
<p>In a true open source <i>by the people for the people</i> nature, we try to work closely with the gaming and open source communities to provide a better overall experience, aiming to create a game environment that is fun and easy to play, while still having elements to master.</p>
<p>If you think you might have something to contribute to the game or community, please feel free to drop by our <a href="/chat">Chat</a> or <a href="/forum">Forums</a> and talk to us directly. We try to maintain a standard of friendly behaviour in our community, so don't be afraid to speak up and have your say in building this game for us all <b>:)</b></p>
</div>



	<div class="col-xs-12 col-sm-4 col-md-4 support">
<h4>Support Us</h4>
<p id="donatemsg">Red Eclipse is developed by volunteers, and you get it free of charge; your contributions keep this project alive. You're encouraged to get involved with the community and <a href="/contribute">help evolve the game</a>, or <a href="/donate">donate to our worthy cause</a>.</p>
</div>

</div>
<div class="row footer">
	<div class="col-xs-12 col-sm-8 col-md-10" style="padding: 20px 45px 0px 45px;">
	<a href="/download"><span class="glyphicon glyphicon-download" aria-hidden="true"></span>&nbsp;Download</a>&nbsp;&nbsp; | &nbsp;&nbsp;<a href="/chat"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span>&nbsp;Chat</a>&nbsp;&nbsp; | &nbsp;&nbsp;<a href="/forum"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;Discuss</a>&nbsp;&nbsp; | &nbsp;&nbsp;<a href="/wiki"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>&nbsp;Learn More</a>
	</div>
    <div class="col-xs-12 col-sm-4 col-md-2 social-icons" style="padding: 15px 30px;">
	  <a href="https://github.com/red-eclipse" target="_blank"><span class="fa fa-github-square"></span></a> 
      <a href="https://www.facebook.com/redeclipse.net" target="_blank"><span class="fa fa-facebook-square"></span></a>
      <a href="https://plus.google.com/+redeclipsenet" target="_blank"><span class="fa fa-google-plus-square"></span></a>

    </div>
   </div>
 <div id="copyright" style="text-align: center">
<p>Red Eclipse, Copyright <span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span> 2009-2015 Quinton Reeves, Lee Salzman</p>
<p>Cube Engine 2, Copyright <span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span> 2001-2015 Wouter van Oortmerssen, Lee Salzman, Mike Dysart, Robert Pointon, and Quinton Reeves</p>
<p><a href="http://remiclouet.com" target="_blank">Website by R&eacute;mi Clouet d'Orval</a></p>
</div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/bits/js/bootstrap.min.js"></script>
      
        <script type="text/javascript">
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-45886576-1', 'redeclipse.net');
            ga('require', 'linkid', 'linkid.js');
            ga('send', 'pageview');
        </script>

    </body>
</html>
<?php } ?>
