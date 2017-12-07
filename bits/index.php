<?php
    $app['releasever'] = "1.5.8";
    $app['releasename'] = "Elysium Edition";
    $app['releasefull'] = "v".$app['releasever']." \"".$app['releasename']."\"";
    $app['releasefile'] = "redeclipse_".$app['releasever']."_";
    $app['releasedate'] = "17th January 2017";
    $app['background'] = "/bits/background_01.jpg";
    $app['youtubevid'] = "oJRZHjyj7Zg";
    $app['screenshots'] = 84;

    $app['banner'] = $app['releasefull']." (".$app['releasedate'].")";
    $app['bannerurl'] = "https://redeclipse.net/oldforum/viewtopic.php?f=8&t=638";

    $app['targets'] = array('home' => array('name' => '', 'url' => '/', 'alturl' => '', 'nav' => -1, 'redir' => 0));

    // nav items should be in reverse order for the top navbar
    $app['targets']['download'] = array('name' => 'Download', 'url' => 'https://github.com/red-eclipse/base/releases/tag/v'.$app['releasever'], 'alturl' => 'https://github.com/red-eclipse/base/releases/download/v'.$app['releasever'].'/', 'nav' => 0, 'redir' => 1);
    $app['targets']['torrent'] = $app['targets']['download'];

    $app['targets']['donate'] = array('name' => 'Donate', 'url' => 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=E77G49C2X4WXN', 'alturl' => '', 'nav' => 1, 'redir' => 1);
    $app['targets']['patreon'] = array('name' => 'Patreon', 'url' => 'https://www.patreon.com/redeclipsenet', 'alturl' => '', 'nav' => 1, 'redir' => 1);
    $app['targets']['chat'] = array('name' => 'Chat', 'url' => 'https://webchat.freenode.net/?channels=redeclipse', 'alturl' => '', 'nav' => 1, 'redir' => 1);
    $app['targets']['discuss'] = array('name' => 'Discuss', 'url' => 'https://github.com/red-eclipse/world/issues', 'alturl' => 'https://github.com/red-eclipse/world/issues/', 'nav' => 1, 'redir' => 1);
    $app['targets']['issues'] = array('name' => 'Issues', 'url' => 'https://github.com/red-eclipse/base/issues', 'alturl' => 'https://github.com/red-eclipse/base/issues/', 'nav' => 1, 'redir' => 1);
    $app['targets']['wiki'] = array('name' => 'Wiki', 'url' => 'https://redeclipse.net/wiki/', 'alturl' => 'https://redeclipse.net/wiki/', 'nav' => 1, 'redir' => 1);
    $app['targets']['faq'] = array('name' => 'FAQ', 'url' => 'https://redeclipse.net/wiki/FAQ_for_Red_Eclipse', 'nav' => 1, 'redir' => 1);
    $app['targets']['guide'] = array('name' => 'Guide', 'url' => 'https://redeclipse.net/wiki/Guide', 'nav' => 1, 'redir' => 1);
    $app['targets']['install'] = array('name' => 'Install', 'url' => 'https://redeclipse.net/wiki/How_to_Install_Red_Eclipse', 'nav' => 1, 'redir' => 1);
    $app['targets']['contribute'] = array('name' => 'Contribute', 'url' => 'https://redeclipse.net/wiki/How_to_Contribute_to_Red_Eclipse', 'nav' => 1, 'redir' => 1);
    $app['targets']['stats'] = array('name' => 'Statistics', 'url' => 'http://play.redeclipse.net:28700/', 'alturl' => 'http://play.redeclipse.net:28700/', 'nav' => 1, 'redir' => 1);
    $app['targets']['servers'] = array('name' => 'Servers', 'url' => 'http://redflare.ofthings.net/', 'alturl' => 'http://redflare.ofthings.net/', 'nav' => 1, 'redir' => 1);

    $app['targets']['facebook'] = array('name' => 'Facebook', 'url' => 'https://www.facebook.com/redeclipse.net', 'nav' => 0, 'redir' => 1);
    $app['targets']['youtube'] = array('name' => 'Youtube', 'url' => 'https://www.youtube.com/results?search_query=%22Red%20Eclipse%22', 'alturl' => 'https://www.youtube.com/results?search_query=%22Red%20Eclipse%22+', 'nav' => 0, 'redir' => 1);
    $app['targets']['itchio'] = array('name' => 'Itch.io', 'url' => 'https://redeclipse.itch.io/red-eclipse', 'nav' => 0, 'redir' => 1);
    $app['targets']['gamejolt'] = array('name' => 'Gamejolt', 'url' => 'https://gamejolt.com/games/red-eclipse/73896', 'alturl' => 'https://gamejolt.com/games/red-eclipse/73896/', 'nav' => 0, 'redir' => 1);
    $app['targets']['google'] = array('name' => 'Google', 'url' => 'https://www.google.com/search?q=%22Red%20Eclipse%22', 'alturl' => 'https://www.google.com/search?q=%22Red%20Eclipse%22+', 'nav' => -1, 'redir' => 1);

    $app['targets']['appimage'] = array('name' => 'AppImage', 'url' => 'https://github.com/red-eclipse/deploy/releases', 'alturl' => 'https://github.com/red-eclipse/deploy/releases/tag/appimage_continuous_', 'nav' => -1, 'redir' => 1);
    $app['targets']['svn'] = array('name' => 'SVN', 'url' => 'https://github.com/red-eclipse/', 'alturl' => 'https://svn.icculus.org/redeclipse/?view=rev&revision=', 'nav' => -1, 'redir' => 1);
    $app['targets']['git'] = array('name' => 'GIT', 'url' => 'https://github.com/red-eclipse/', 'alturl' => 'https://github.com/red-eclipse/', 'nav' => -1, 'redir' => 1);

    $app['targets']['apply'] = array('name' => 'Apply', 'url' => 'https://docs.google.com/forms/d/1ZuvNFCIivYY_b5YLpCa_pnsbdR4oRdPplIkcbBexCDU/viewform', 'nav' => -1, 'redir' => 1);
    $app['targets']['guidelines'] = array('name' => 'Guidelines', 'url' => 'https://redeclipse.net/wiki/Multiplayer_Guidelines', 'nav' => -1, 'redir' => 1);
    $app['targets']['trademark'] = array('name' => 'Trademark', 'url' => 'https://redeclipse.net/wiki/Trademark_Policy', 'nav' => -1, 'redir' => 1);
    $app['targets']['devel'] = array('name' => 'Devel', 'url' => 'https://redeclipse.net/wiki/Obtain_development_version', 'nav' => -1, 'redir' => 1);
    $app['targets']['license'] = array('name' => 'License', 'url' => 'https://redeclipse.net/wiki/License', 'nav' => -1, 'redir' => 1);
    $app['targets']['readme'] = array('name' => 'Readme', 'url' => 'https://redeclipse.net/wiki/Readme', 'nav' => -1, 'redir' => 1);
    
    $app['targets']['tracker'] = array('name' => 'Tracker', 'url' => 'https://github.com/red-eclipse/base/issues', 'alturl' => 'https://github.com/red-eclipse/base/issues/', 'nav' => 0, 'redir' => 1);
    $app['targets']['forums'] = array('name' => 'Forums', 'url' => 'https://github.com/red-eclipse/world/issues', 'alturl' => 'https://github.com/red-eclipse/world/issues/', 'nav' => 0, 'redir' => 1);
    $app['targets']['forum'] = array('name' => 'Forum', 'url' => 'https://github.com/red-eclipse/world/issues', 'alturl' => 'https://github.com/red-eclipse/world/issues/', 'nav' => 0, 'redir' => 1);
    $app['targets']['oldforum'] = array('name' => 'Old Forum', 'url' => 'https://redeclipse.net/forum/index.php', 'alturl' => 'https://redeclipse.net/forum/index.php?t=', 'nav' => 0, 'redir' => 1);

    $app['remaps']['indiedb'] = 'gamejolt';

    function checkarg($arg = "", $def = "") {
        return isset($_GET[$arg]) && $_GET[$arg] != "" ? $_GET[$arg] : $def;
    }

    $app['platform'] = "";
    if (preg_match("/linux/i", $_SERVER['HTTP_USER_AGENT'])) $app['platform'] = "nix";
    elseif (preg_match("/mac os/i", $_SERVER['HTTP_USER_AGENT'])) $app['platform'] = "mac";
    elseif (preg_match("/windows|win32/i", $_SERVER['HTTP_USER_AGENT'])) $app['platform'] = "win";

    $app['target'] = checkarg("target", "home");
    if (!isset($app['targets'][$app['target']]))
    {
        if (!isset($app['remaps'][$app['target']])) $app['target'] = "home";
        else {
            $app['target'] = $app['remaps'][$app['target']];
            if (!isset($app['targets'][$app['target']])) $app['target'] = "home";
        }
    }

    $app['download'] = array(
        'win' => $app['releasefile'].'win.exe',
        'windows' => $app['releasefile'].'win.exe',
        'nix' => $app['releasefile'].'nix.tar.bz2',
        'linux' => $app['releasefile'].'nix.tar.bz2',
        'bsd' => $app['releasefile'].'nix.tar.bz2',
        'mac' => $app['releasefile'].'mac.tar.bz2',
        'macos' => $app['releasefile'].'mac.tar.bz2',
        'macosx' => $app['releasefile'].'mac.tar.bz2',
        'osx' => $app['releasefile'].'mac.tar.bz2',
        'combined' => $app['releasefile'].'combined.tar.bz2',
        'all' => $app['releasefile'].'combined.tar.bz2'
    );

    $title = checkarg("title");
    if ($app['targets'][$app['target']]['redir']) {
        if ((($app['target'] == "download") || ($app['target'] == "torrent")) && ($title != "")) {
            if (isset($app['download'][$title])) {
                if ($app['target'] == "torrent") $title = $app['download'][$title].'.torrent';
                else $title = $app['download'][$title];
            }
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
        <title>Red Eclipse: <?php echo ($app['targets'][$app['target']]['name'] != "" ? $app['targets'][$app['target']]['name'] : "A free arena shooter featuring parkour"); ?></title>
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
        <meta name="msapplication-navbutton-color" content="#440000">
        <meta name="msapplication-config" content="/bits/browserconfig.xml">
        <meta name="theme-color" content="#440000">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/bits/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/bits/style.css" />
        <link rel="stylesheet" type="text/css" href="/bits/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="/bits/ekko-lightbox.min.css">
    </head>
    <body>
        <nav class="navbar  navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="/bits/redeclipse-small.png" alt="Red Eclipse"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                    <?php echo $app['navbar']; ?>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="container">
            <div class="row" id="main">
                <div class="col-xs12 col-sm-12 col-md-6" style="text-align:center; padding:22px 0 30px 0;">
                    <h1>a free <b>arena shooter</b></h1>
                    <h3>Fun for everyone, young and old, noob or expert.</h3>
                    <h3>Available for Windows, GNU/Linux, BSD, and MacOS</h3>
                    <h3>Parkour, impulse boosts, dashing, and other tricks</h3>
                    <h3>An array of mutators and variables</h3>
                    <h3>Create your own maps cooperatively online</h3>
                    <div class="col-xs12 col-sm-12 col-md-12">
                        <a href="/download<?php echo $app['platform'] != "" ? '/'.$app['platform'] : ""; ?>" id="button" class="btn btn-primary">
                            <p class="download"><span class="glyphicon glyphicon-download" aria-hidden="true"></span> FREE DOWNLOAD</p>
                            <p class="version"><?php echo $app['releasefull']; ?> released <?php echo $app['releasedate']; ?></p>
                        </a>
                    </div>
                    <div class="col-xs12 col-sm-12 col-md-12">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Platform Downloads<span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/download/win">Windows</a> <a href="/download/nix">Linux/BSD</a> <a href="/download/mac">MacOS</a> <a href="/download/combined">Combined/All</a></li>
                            </ul>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Torrent Downloads<span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/torrent/win">Windows</a> <a href="/torrent/nix">Linux/BSD</a> <a href="/torrent/mac">MacOS</a> <a href="/torrent/combined">Combined/All</a></li>
                            </ul>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Other Sources<span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/gamejolt">Gamejolt</a> <a href="/itchio">Itch.io</a> <a href="/download">GitHub</a>
                            </ul>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="margin-right:0;">Help &amp; Support<span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/faq">FAQs</a> <a href="/install">Installing the Game</a> <a href="/guide">Gameplay Guide</a> <a href="/devel">Development Version</a> <a href="/discuss">Discussions</a> <a href="/chat">Live Chat</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs12 col-sm-12 col-md-6 video">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $app['youtubevid']; ?>?showinfo=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="item active row">
                            <a class="col-xs-6 col-sm-3 col-md-3" style="padding:0" href="/bits/images/001.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="screenshot"><img class="img-responsive" src="/bits/thumbs/001.jpg" alt="screenshot"></a>
                            <a class="col-xs-6 col-sm-3 col-md-3" style="padding:0" href="/bits/images/002.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="screenshot"><img class="img-responsive" src="/bits/thumbs/002.jpg" alt="screenshot"></a>
                            <a class="col-xs-6 col-sm-3 col-md-3" style="padding:0" href="/bits/images/003.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="screenshot"><img class="img-responsive" src="/bits/thumbs/003.jpg" alt="screenshot"></a>
                            <a class="col-xs-6 col-sm-3 col-md-3" style="padding:0" href="/bits/images/004.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="screenshot"><img class="img-responsive" src="/bits/thumbs/004.jpg" alt="screenshot"></a>
                    </div>
                <?php for ($x = 5; $x <= $app['screenshots']; $x++) {
                    if (($x % 4) == 1) { echo '<div class="item row">'; }
                    $y = $x;
                    if ($x < 10) { $y = "00".$x; }
                    elseif ($x < 100) { $y = "0".$x; }
                    echo '<a class="col-xs-6 col-sm-3 col-md-3" style="padding:0" href="/bits/images/'.$y.'.jpg" data-toggle="lightbox" data-gallery="multiimages" data-title="screenshot"><img class="img-responsive" src="/bits/thumbs/'.$y.'.jpg" alt="screenshot"></a>';
                    if (($x % 4) == 0) { echo '</div>'; }
                } ?>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="row texte">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <p>Red Eclipse is a fun-filled new take on the first person arena shooter, built as a total conversion of <a href="http://www.cubeengine.com/">Cube Engine 2</a>, which lends itself toward a balanced gameplay, with a general theme of agility in a variety of environments. For more information, please see our <a href="/wiki">Wiki</a> or <a href="/discuss">Discussions</a>.</p>
                    <p>The project is a <i>Free and Open Source</i> game, built on <a href="http://www.cubeengine.com/">Cube Engine 2</a> using <a href="http://libsdl.org/">SDL</a> and <a href="http://opengl.org/">OpenGL</a> which allows it to be ported to many platforms; you can <a href="/download">download a package</a> for <i>Windows, GNU/Linux, BSD, and MacOS</i>, or grab a development copy from our <a href="/devel">Github</a> repository and live on the bleeding edge.</p>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <p>In a true open source <i>by the people for the people</i> nature, we try to work closely with the gaming and open source communities to provide a better overall experience, aiming to create a game environment that is fun and easy to play, while still having elements to master.</p>
                    <p>If you think you might have something to contribute to the game or community, please feel free to drop by our <a href="/chat">Chat</a> or <a href="/discuss">Discussions</a> and talk to us directly. We try to maintain a standard of friendly behaviour in our community, so don't be afraid to speak up and have your say in building this game for us all!</p>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 support">
                    <h4>Support Us</h4>
                    <p id="donatemsg">Red Eclipse is developed by volunteers, and you get it free of charge; your contributions keep this project alive. You're encouraged to get involved with the community and <a href="/contribute">help evolve the game</a>, <a href="/donate">donate to our worthy cause</a>, or <a href="/patreon">subscribe to our Patreon</a>.</p>
                </div>
            </div>
            <div class="row footer">
                <div class="col-xs-4 col-sm-2 col-md-2">
                    <a href="http://www.cubeengine.com/"><img src="/bits/cube2.png" class="img-responsive" alt="cube2" id="cube2" style="margin:auto"></a>
                </div>
                <div class="col-xs-4 col-sm-2 col-md-2">
                    <a href="/gamejolt"><img src="/bits/gamejolt.png" class="img-responsive" alt="gamejolt" id="gamejolt" style="margin:auto"></a>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-2 col-sm-offset-4 col-md-offset-6 social-icons" style="padding: 20px 30px;">
                  <a href="https://github.com/red-eclipse" target="_blank"><span class="fa fa-github-square"></span></a>
                  <a href="https://www.facebook.com/redeclipse.net" target="_blank"><span class="fa fa-facebook-square"></span></a>
                  <a href="https://plus.google.com/+redeclipsenet" target="_blank"><span class="fa fa-google-plus-square"></span></a>
                </div>
            </div>
            <div id="copyright" style="text-align: center">
                <p>Red Eclipse, Copyright &copy; 2009-2016 Quinton Reeves, Lee Salzman</p>
                <p>Cube Engine 2, Copyright &copy; 2001-2016 Wouter van Oortmerssen, Lee Salzman, Mike Dysart, Robert Pointon, and Quinton Reeves</p>
                <p><a href="http://remiclouet.com" target="_blank">Website by R&eacute;mi Clouet d'Orval</a></p>
            </div>
        </div>
        <script type="text/javascript" src="/bits/jquery.min.js"></script>
        <script type="text/javascript" src="/bits/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/bits/ekko-lightbox.min.js"></script>
        <script type="text/javascript" src="/bits/site.js"></script>
    </body>
</html>
<?php } ?>
