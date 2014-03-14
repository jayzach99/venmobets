<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Venmo Bets</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<link href="http://jzachariah.triplelift.net:8020/public/css/jumbotron-narrow.css" rel="stylesheet">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://jzachariah.triplelift.net:8020/public/js/venmobets.js"></script>
    
</head>

<body>
<div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <h3 class="text-muted">Venmo Bets</h3>
      </div>

      <div class="jumbotron">
        <h1>Hey<?php if($result_obj['user']['first_name'] != NULL) { echo " ".$result_obj['user']['first_name']; }?>, Welcome!</h1>
        <p class="lead">Just getting started with this now, but got the API figured out!</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Don't Tell Shaun!</a></p>
      </div>

      <div class="row marketing">
        <div class="col-lg-6">
          <h4>Your Balance:</h4>
          <p>Last I checked, you have <b> <?php echo "$".$result_obj['balance']; ?></b>!</p>
          <?php echo "code: " . $code; ?>

          <h4>Make a Bet</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p -->
        </div>


		<form class="form_bet">
			Bet: <input type="text" name="firstname"><br>
			Amount: <input type="text" name="lastname">
			<a id="form_bet_button" class="btn btn-lg btn-success" role="button">Don't Tell Shaun!</a>
		</form>

        <!-- div class="col-lg-6">
          <h4>Subheading</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

          <h4>Subheading</h4>
          <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

          <h4>Subheading</h4>
          <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div -->
      </div>

      <div class="footer">
        <p>© donttellshaun, inc.</p>
      </div>

    </div>
</body>



</html>
