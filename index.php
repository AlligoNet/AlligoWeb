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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
  <body>
    <div class="main">
      <div class="landing">
        <div class="navigation">
          <h1 class="brand-name">Alligo</h1>
          <ul>
            <!--<li class="item"><a href="#">Info</a></li>-->
            <li class="item"><a target="_blank" href="browser/">Browser</a></li>
            <li class="item">
              <button id="login" class="block-button">Login</button>
            </li>
            <li class="item">
              <button id="register" class="button-secondary block-button">Register</button>
            </li>
          </ul>
        </div>
        <!--<video autoplay loop poster="#" id="bgvid">
          <source src="http://uplusion23.github.io/cdn/video/reach.mp4" type="video/webm">
            <source src="http://uplusion23.github.io/cdn/video/reach.mp4" type="video/mp4">
          </video>-->
        <div class="landing-content">
          <h1>Welcome</h1>
          <p>The Solution to play any LAN game, around the world.</p>
          <button class="button-secondary block-button fade">Download Now</button>
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
              <button type="button" class="btn btn-secondary">Download</button>
            </div>
            <div class="col-md-6">
              <img src="http://i.gyazo.com/15acfaa20ff4426ab8c914b74c36e262.png">
            </div>
          </div>
        </div>
      </div>
      <div class="large-demo green anchor">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1>Footer</h1>
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
      <form class="login">
        <div class="group">
          <input type="text" required autocomplete="off"><span class="highlight"></span><span class="bar"></span>
          <label>Username</label>
        </div>
        <div class="group">
          <input type="password" required autocomplete="off"><span class="highlight"></span><span class="bar"></span>
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
      <form class="register">
        <div class="group">
          <input type="text" required autocomplete="off"><span class="highlight"></span><span class="bar"></span>
          <label>Username</label>
        </div>
        <div class="group">
          <input type="password" required autocomplete="off"><span class="highlight"></span><span class="bar"></span>
          <label>Password</label>
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
    <div class="messagebox blue"><span class="title">This website is not done!</span>Look, we're students, who have 'lives' doing other things. This website isn't done, but we're working on it! Thanks for your patience.</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
  </body>
</html>