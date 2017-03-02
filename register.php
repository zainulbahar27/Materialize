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

    <body style = "height : 1000px">
      <div class="navbar-fixed">
        <ul id="dropdown1" class="dropdown-content">
          <li><a href="#!">Indonesia</a></li>
          <li><a href="#!">English</a></li>
          <li class="divider"></li>
          <li><a href="#!">Chinese</a></li>
        </ul>
        <nav>
            <div class="nav-wrapper indigo accent-4">
              <a href="#" class="brand-logo center">Twitty</a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Languange<i class="material-icons right">arrow_drop_down</i></a></li>
              <li><a href="login.php">Have an account? login</a></li>
              </ul>
            </div>
        </nav>
      </div>

      <div class="container">
        <div class="row">
          <form method="post" action="register_process.php" class="col s12">
            <h2>Register</h2>
              <div class="row">
                <div class="input-field col s12">
                  <input name="fullname" id="fullname" type="text" class="validate">
                  <label for="fullname">Fullname</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input name="username" id="username" type="text" class="validate">
                  <label for="username">Username</label>
                </div>
                </div>
              <div class="row">
                <div class="input-field col s12">
                  <input name="email" id="email" type="email" class="validate">
                  <label for="email">Email</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input name="password" id="password" type="password" class="validate">
                  <label for="password">Password</label>
              </div>
              <p>
                <input type="checkbox" id="test5" />
                <label for="test5">I agree with the terms and condition above</label>
              </p>
                <button class="btn waves-effect waves-light indigo accent-4" type="submit" name="action" >Submit
                <i class="material-icons right">send</i>
                </button>
          </form>
      </div>
    </div>
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>