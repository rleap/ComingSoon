<?php

  if (isset($_POST['submit'])) {

    $to = 'robertleap@gmail.com';
    $subject = 'Email Signup';
    $message = 'Please sign me up to the mailing list';
    $from = $_POST['email'];

    if (!$_POST['email']) {
      $emailError = '<div class="text-danger"><i class="fas fa-exclamation-triangle"></i> Please enter a valid email address</div>';
    }

    if (!$emailError) {
      if (mail($to, $subject, $message, $from)) {
        $result = '<div class="text-success"><i class="fas fa-check"></i> Thank you we\'ll keep you updated</div>';
      } else {
        $result = '<div class="text-danger"><i class="fas fa-exclamation-triangle"></i>Sorry there has been an error, please try again</div>';
      }
    }


  }

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700" rel="stylesheet">
  <title>Coming Soon</title>
</head>

<body>

  <section id="logo">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <img src="img/my-logo.png" alt="logo" class="img-fluid logo" />
        </div>
      </div>
    </div>
  </section>

  <section id="into">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p>We are working hard, we'll be ready to launch in ..</p>
        </div>
      </div>
    </div>
  </section>

  <section id="counter">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="countdown">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="icons">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <ul class="list-inline">
            <a href="http://www.twitter.com" target="blank">
              <li class="list-inline-item">
                <i class="fab fa-twitter-square twitter"></i>
              </li>
            </a>
            <a href="http://www.facebook.com" target="blank">
              <li class="list-inline-item">
                <i class="fab fa-facebook-square facebook"></i>
              </li>
            </a>
            <a href="http://www.google.com" target="blank">
              <li class="list-inline-item">
                <i class="fab fa-google-plus-square google"></i>
              </li>
            </a>
            <a href="http://www.instagram.com" target="blank">
              <li class="list-inline-item">
                <i class="fab fa-instagram instagram"></i>
              </li>
            </a>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="signup">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <form class="form-inline" role="form" action="#signup" method="post">
            <input type="email" class="form-control form-control-sm" name="email" placeholder="enter your email" />
            <button type="submit" class="btn btn-signup btn-sm" name="submit" value="send">Find Out More</button>
          </form>

          <?php echo $emailError; ?>
          <?php echo $result; ?>

        </div>
      </div>
    </div>
  </section>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.countdown.js"></script>
  <script type="text/javascript">
    $(function() {
      $('.countdown').countdown({
        date: "June 7, 2018 12:00:00"
      });
    });
  </script>
</body>

</html>
