<?php
session_start();
if (!isset($_GET['keyword'])) {
  header('Location: login.php');
  exit;
}
include_once 'database.php'; 
$sql = <<< SQL
  SELECT * 
    FROM tweet t
    JOIN user u
    ON t.user_id = u.id
    ORDER BY t.id DESC
SQL;

$select = $mysqli->query($sql);
?>


<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body style="height : 1000px">
    <div class="navbar-fixed">
      <nav>
          <div class="nav-wrapper indigo accent-4">
          <a href="#!" class="brand-logo" style="color: black; font-family: Brush script std;"><img style="max-width: 35px; margin-top: 10px; margin-left: 75px;" src="twitter.png"></a>
            <a href="#" class="brand-logo center">Twitty</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><form method="GET" action="search.php">
                <input type="Search" name="keyword" value="" size="15"   maxlength="20"  /> 
                       </li>
                       <li><input type="submit" value="Search"  /> 
                        </form>
                       </li>
              <li><a href="index.php">Home</a></li>
            <li><a href="Mentions.php">Mentions</a></li>
            <li><a href="logout.php">Logout</a></li>
            </ul>
          </div>
      </nav>
    </div>

    <div class="container">
      <div class="row">
       <div class="row">
        <div class="col s12 m12">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Post Something </span>
               <div class="row">
                  <form class="col s12" method="post" action="tweet_process.php">
                     <input type="hidden" name="user" value="#<?php echo $_GET['keyword']?>"/>
                      <div class="input-field col s12">
                        <textarea name="tweet" class="materialize-textarea"></textarea>
                      </div>
                       <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                          <i class="material-icons right">send</i>
                       </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div> 

    <div class="row">
    <?php while ($row = $select->fetch_object()):
    $hastag =strstr($row->tweet,'#'.$_GET['keyword']);
    $carihastag =strstr($row->tweet,$_GET['keyword']);
    if ($hastag == "" && $carihastag == ""){

    }
    else
    { ?>
    <div class="col s12 m12">
          <div class="card white">
            <div class="card-content black-text">
            <a href="user.php?username<?php echo $row->username; ?>">
              <span class="card-title">@<?php echo $row->username; ?></span></a>
              <p><?php 
              $pattern = ['/@(\w+)/i', '/#(\w+)/i'];
              $replace = ['<a href="user.php?username=${1}">@${1}</a>',
                          '<a href="search.php?keyword=${1}">#${1}</a>'];
              $tweet = preg_replace($pattern, $replace, $row->tweet);

              echo $tweet;
               ?></p>
            </div>
          </div>
        </div>

    <?php }; endwhile; ?>
      </div>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>