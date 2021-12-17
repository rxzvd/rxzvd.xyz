<head>
    <meta charset="utf-8">
    <title>rxzvd ♡ rxzvd.xyz</title>
    <meta property="og:title" content="rxzvd · rxzvd.xyz">
    <meta name="description" content="Coder, Editor and Graphic Designer From UK, Newcastle Who does freelancing.">
    <meta property="og:description" content="Coder, Editor and Graphic Designer From UK, Newcastle Who does freelancing.">
    <meta property="og:image" content="https://i.upload.systems/kdrV0cyA">
    <meta name="twitter:card" content="summary">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content=#f45452">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#f45452">
    <meta name="msapplication-TileColor" content="#f45452">
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fuzzy+Bubbles">
</head>
<body>

<div id="image">
    <img src="img/bg/fire.gif">
</div>

<div class="ctr">
<h1>    <div class="RGB">

        
<div class="rgb"> <pre>
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀    ////
  ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀   	////
 //////// /////   ////  ///////// //// ⠀  ///// ///////////
 ////⠀ ⠀⠀  ⠀////////⠀       /////   ////  ⠀//// ////⠀   ////
 ////   ⠀⠀⠀⠀⠀//////  ⠀⠀⠀  ///// ⠀⠀⠀  //// ////  ////⠀   ////
 ////   ⠀⠀⠀/////////⠀   ⠀///////⠀⠀⠀⠀  ///////   ////////////
 ////   ⠀⠀////  ⠀/////  /////////⠀⠀⠀⠀  /////⠀⠀⠀   //////////</pre>                                                                                                                                    
</div>                                                                                                                                                                            
    </div>		
</h1>

<?php

		$key = 'd137b48e2d94326febc0ec4e85071abd';
		$user = 'rxzvd';

		$string = file_get_contents('http://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user='.$user.'&api_key='.$key.'&format=json');
		$json = json_decode($string, true);

		$artist = $json['recenttracks']['track'][0]['artist']['#text'];
		$album = $json['recenttracks']['track'][0]['album']['#text'];
		$title = $json['recenttracks']['track'][0]['name'];
		$song = $title;
		$profile = 'https://www.last.fm/user/'.$user;
		$url = $json['recenttracks']['track'][0]['url'];

		echo '<a style="font-family: Fuzzy Bubbles;"> I last listened to <a style=" font-family: Fuzzy Bubbles; color: #f45452; text-decoration: none; padding: 0;" href="'.$url.'">'.$song.'</a> <a style="font-family: Fuzzy Bubbles;"> by <a style="font-family: Fuzzy Bubbles; color: #f48d52; text-decoration: none; padding: 0;" href="'.$url.'">'.$artist.'</a>';
?>

<div style="padding-top: 25px;">
    <a href="https://open.spotify.com/user/6jcwftbul9wcnn0rh12wydqs3" title="rxzvd" class="fab fa-spotify fa-2x"></a>
    <a href="https://discord.com/users/704350446361378846" title="rx#5269" class="fab fa-discord fa-2x"></a>
    <a href="https://twitter.com/rxzvd" title="rxzvd" class="fab fa-twitter fa-2x"></a>
    <a href="https://github.com/rxzvd" title="rxzvd" class="fab fa-github fa-2x"></a>
    <a href="https://www.twitch.tv/rxzvd" title="rxzvd" class="fab fa-twitch fa-2x"></a>
    <a href="https://www.youtube.com/channel/UC2qnQw6KzAJJNTmadXw2n5g" title="rxzvd" class="fab fa-youtube fa-2x"></a>
</div>

</body>

<!--  
                         .-----------------TTTT_-----_______
                       /''''''''''(______O] ----------____  \______/]_
    __...---'"""\_ --''   Q  rx made this                  ___________@
|'''                   ._   _______________=---------"""""""
|                ..--''|   l L |_l   |
|          ..--''      .  /-___j '   '
|    ..--''           /  ,       '   '
|--''                /           `    \
                     L__'         \    -
                                   -    '-.
                                    '.    /
                                      '-./
 -->