<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
    <?php include 'login.php'; ?>
		<meta charset="UTF-8">
    <title>Alligo</title>
    <meta name="description" content="The solution to playing LAN games with friends, anywhere.">
    <meta name="keywords" content="OracleNet, ON, VPN, Tunnel, Gaming, LAN, local, system link">
    <meta name="author" content="Quinton Marchi, uplusion23">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
  
	<body>
    <!--<div class="navbar gray">
      <h1 class="brand-name">Alligo</h1>
      <ul>
        <li class="item"><a href="#">Info</a></li>
        <li class="item"><a href="#">Browser</a></li>
        <li class="item">
          <button id="login" class="block-button">Login</button>
        </li>
        <li class="item">
          <button id="register" class="button-secondary block-button" style="">Register</button>
        </li>
      </ul>
    </div>-->
    <div class="main">
			<div class="landing">
				<div class="navigation">
					<h1 class="brand-name">Alligo</h1>
					<ul>
						<!--<li class="item"><a href="#">Info</a></li>-->
            <li class="item"><a target="_blank" href="browser/">Browser</a></li>
              <?php
	
	     if(isset($_SESSION["name"])){
		  echo '<li class="item">
              <button id="controlPanel" class="block-button">' . $_SESSION["name"] . '</button>
            </li>
            <li class="item">
            <form method="post">
              <input style="display:none" type="text" name="action" value="logOut">
              <button type="submit" class="button-secondary block-button">Log Out</button>
            </form>
            </li>';
	    }
	    else{
		  echo '<li class="item">
              <button id="login" class="block-button">Login</button>
            </li>
            <li class="item">
              <button id="register" class="button-secondary block-button">Register</button>
            </li>';
            }
            ?>
          </ul>
        </div>
        <!--<video autoplay loop poster="#" id="bgvid">
          <source src="http://uplusion23.github.io/cdn/video/reach.mp4" type="video/webm">
            <source src="http://uplusion23.github.io/cdn/video/reach.mp4" type="video/mp4">
          </video>-->
				<div class="landing-content">
					<h1>Welcome</h1>
					<p>The Solution to play any LAN game, around the world.</p>
					<a target="_blank" href="https://alligo.co/alligo_latest.zip" class="button-secondary block-button fade" id="#download-oracle">Download Now</a>
				</div>
				<!--<div class="arrow"></div>-->
			</div>
      <div class="large-demo blue anchor">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="constrict">
                <h2 class="title">Alligo is a <strong>free</strong> network to play with others with LAN-Only games.</h2>
                <p class="lead">
                  Quickly connect to friends and family, and play co-op or multiplayer games, without having to go through the trouble of hosting dedicated servers.
                </p>
              </div>
            </div>
            <div class="col-md-3">
              <i class="fa fa-cube"></i>
              <h3>Simple Connections</h3>
              <p>Simply log in with your Alligo username and password, select the closest server to you, hit connect and <strong>BOOM</strong> you're online!</p>
              <button type="button">Learn More</button>
            </div>
            <div class="col-md-3">
              <i class="fa fa-bolt"></i>
              <h3>Fast as lightning!</h3>
              <p>Running on energy drinks, little sleep, and top tier servers, you can connect quickly without the need to watch a "connecting..." icon.</p>
              <button type="button">Learn More</button>
            </div>
            <div class="col-md-3">
              <i class="fa fa-line-chart"></i>
              <h3>Reliable</h3>
              <p>Nearly 100% up-time, and running multiple servers around the world, with speed rivaling paid alternatives. You can always game at your best!</p>
              <button type="button">Learn More</button>
            </div>
            <div class="col-md-3">
              <i class="fa fa-lock"></i>
              <h3>Secure</h3>
              <p>What's the point of running a service if it's risky?  Almost all parts of our system are available on github for viewing at one's leisure.</p>
              <button type="button">Learn More</button>
            </div>
          </div>
        </div>
      </div>
      <div class="large-demo grey anchor">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="constrict">
                <h2 class="title">Alligo is for any gamer, and all gamers.</h2>
                <p class="lead">
                  We strive to keep our application as easy to understand as possible, as well as making it as smooth as possible.
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <h2>Simple Interface</h2>
              <p>As described above, all you have to do is enter your username and password, select your server, and login!</p>
              <a target="_blank" href="https://alligo.co/alligo_latest.zip" type="button" class="btn btn-secondary block-button">Download</a>
            </div>
            <div class="col-md-6">
              <div class="image">
                <img src="https://i.imgur.com/RIEZbs3.jpg">
              </div>
					  </div>
				  </div>
        </div>
      </div>
      <div class="large-demo green anchor">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1>Footer</h1>
                <p>
                <?php
                // outputs e.g. 'Last modified: March 04 1998 20:43:59.'
                echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
                ?>
                </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cover"></div>
    <div class="modal login">
      <div class="top">
        <h2 class="title">Login</h2>
      </div>
      <form class="login" method="post">
        <input style="display:none" type="text" name="action" value="login">
        <div class="group">
          <input type="text" name="name" required autocomplete="off"><span class="highlight"></span><span class="bar"></span>
          <label>Username</label>
        </div>
        <div class="group">
          <input type="password" name="password" required autocomplete="off"><span class="highlight"></span><span class="bar"></span>
          <label>Password</label>
        </div>
        <button type="submit" class="button buttonBlue">
          Login
          <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
        </button>
      </form>
    </div>
    <div class="modal register">
      <div class="top">
        <h2 class="title">Register</h2>
      </div>
      <form class="register" method="post">
        <input style="display:none" type="text" name="action" value="register">
        <div class="group">
          <input type="text" name="name" required autocomplete="off"><span class="highlight"></span><span class="bar"></span>
          <label>Username</label>
        </div>
        <div class="group">
          <input type="password" name="password" required autocomplete="off"><span class="highlight"></span><span class="bar"></span>
          <label>Password</label>
        </div>
        <div class="group">
          <input type="email" name="email" required autocomplete="off"><span class="highlight"></span><span class="bar"></span>
          <label>Email</label>
        </div>
        <div class="group captcha">
          <div class="g-recaptcha" data-sitekey="6LfDUQcTAAAAALV6Ffae1aU3wWxiUDPO7oXjnBWd"></div>
        </div>
        <button type="submit" class="button buttonBlue">
          Register
          <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
        </button>
      </form>
    </div>
    <div class="modal controlPanel">
      <div class="top">
        <h2 class="title">User Control Panel</h2>
      </div>
      <div class="controlPanel">
        <button id="pwChange" class="button buttonBlue">
            Change Password
            <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
        </button>
        <button id="delete" class="button buttonBlue">
            Delete Account
            <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
        </button>
      </div>
    </div>
    <div class="modal pwChange">
      <div class="top">
        <h2 class="title">Change Password</h2>
      </div>
      <form class="pwChange" method="post">
        <input style="display:none" type="text" name="action" value="pwChange">
        <div class="group">
          <input type="password" name="newpassword" required autocomplete="off"><span class="highlight"></span><span class="bar"></span>
          <label>New Password</label>
        </div>
        <div class="group">
          <input type="password" name="password" required autocomplete="off"><span class="highlight"></span><span class="bar"></span>
          <label>Password</label>
        </div>
        <button type="submit" class="button buttonBlue">
          Change Password
          <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
        </button>
      </form>
    </div>
    <div class="modal delete">
      <div class="top">
        <h2 class="title">Delete Account</h2>
      </div>
      <form class="delete" method="post">
        <input style="display:none" type="text" name="action" value="delete">
        <div class="group">
          <input type="password" name="password" required autocomplete="off"><span class="highlight"></span><span class="bar"></span>
          <label>Password</label>
        </div>
        <button type="submit" class="button buttonBlue">
          Delete Account
          <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
        </button>
      </form>
    </div>
    
      <?php 
        if(isset($err) | isset($nameerr) || isset($emailerr) || isset($pwerr)){
          if(!isset($err)){
            $err = "Problems were found with your input:<br>";
          }
         echo '<div class="messagebox blue"><span class="title">' . $err . '</span>';
         echo $nameerr . $emailerr . $pwerr; 
         echo '</div>';
        }
        else{
          echo '<div class="messagebox blue"><span class="title">This website is not done!</span>Look, we\'re students, who have \'lives\' doing other things. This website isn\'t done, but we\'re working on it! Thanks for your patience.</div>';
        }
      ?>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index2.js"></script>
  </body>
</html>
