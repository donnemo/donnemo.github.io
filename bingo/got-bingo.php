<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Game of Thrones Bingo</title>
<!-- Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Game of Thrones interactive bingo cards">
<meta name="Author" content="George Fox and Andrew Paulson" />
<meta name="generator" content="oscillator make a circuit with me" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<!-- Open Graph -->
<meta property="fb:app_id" content="344270536012576" />
<meta property="og:title" content="Game of Thrones Bingo" />
<meta property="og:description" content="Play Game of Thrones Bingo!" />
<meta property="og:url" content="http://geekymuse.com/bingo/got-bingo.html" />
<meta property="og:site_name" content="Geeky Muse" />
<meta property="og:image" content="http://geekymuse.com/bingo/game_of_thrones-sm.jpg" />
<meta property="og:image:width" content="800" />
<meta property="og:image:height" content="545" />
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="geekymuse.com">
<meta name="twitter:creator" content="@donnemo">
<meta name="twitter:title" content="Game of Thrones interactive Bingo game">
<meta name="twitter:description" content="Play Game of Thrones Bingo!">
<meta name="twitter:image" content="http://geekymuse.com/bingo/game_of_thrones-sm.jpg">
<link rel="canonical" href="https://geekymuse.com/bingo/got-bingo.html">

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="bingo.css">
<style>
	body {
	background-image: url("game_of_thrones.jpg");
	background-repeat: no-repeat;
		background-position: top center;
	background-size: cover;
}
	.win .container {
	background: url(snow-transparent.gif) repeat;
}
	@media screen and (max-width: 768px) {
		h1 {
		font-size: 1.125em;
		}
	}
	table {
	background-color: rgba(102,102,102, .5);
}
	input[type=checkbox] + label:active, input[type=checkbox]:checked + label {
	background-image: url(raven.png);
}
	#confirmation {
	background-color: rgba(255,153,0, .5);
}
</style>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Facebook APP's SDK Integration -->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=344270536012576&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</head>

<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-11955612-1', 'auto');
  ga('send', 'pageview');

  window.fbAsyncInit = function() {
    FB.init({
      appId      : '344270536012576',
      xfbml      : true,
      version    : 'v2.6'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

	 //reset filters on refresh
	 $(window).on('beforeunload', function(){
		 $('input[type="checkbox"]').each(function(){
   	 	$(this).prop('checked', false);
		 });
	 });
</script>

<div class="container">
   <header>
      <h1>⚔ Game of Thrones Bingo ⚔</h1>
      <button id="random" onClick="history.go(0)">Randomize</button>
   </header>
   <section id="winMsg"> <a href="https://twitter.com/share" class="twitter-share-button" data-text="B I N G O !" data-url="http://www.geekymuse.com/bingo/got-bingo.html" data-via="donnemo" data-hashtags="gotbingo #GoT #GameOfThronesBingo #Bingo" data-show-count="false">Bingo!</a> </section>
   <section id="confirmation" style="display: none">
      <h3>Confirm your winning sequence:</h3>
      <table id="confirmMatrix">
         <tbody>
            <tr>
               <td><input type="checkbox" id="v1" value="v1" />
                  <label for="v1" id="l1"></label></td>
               <td><input type="checkbox" id="v2" value="v2" />
                  <label for="v2" id="l2"></label></td>
               <td><input type="checkbox" id="v3" value="v3" />
                  <label for="v3" id="l3"></label></td>
               <td><input type="checkbox" id="v4" value="v4" />
                  <label for="v4" id="l4"></label></td>
               <td><input type="checkbox" id="v5" value="v5" />
                  <label for="v5" id="l5"></label></td>
            </tr>
         </tbody>
      </table>
      <button id="close">Keep Trying?</button>
   </section>
   <section>
      <table id="bingoMatrix">
         <tbody>
            <tr>
               <td><input type="checkbox" id="a1" value="1" />
                  <label for="a1"> </label></td>
               <td><input type="checkbox" id="a2" value="2" />
				   <label for="a2"> </label></td>
               <td><input type="checkbox" id="a3" value="3" />
                  <label for="a3"> </label></td>
               <td><input type="checkbox" id="a4" value="4" />
                  <label for="a4"> </label></td>
               <td><input type="checkbox" id="a5" value="5" />
                  <label for="a5"> </label></td>
            </tr>
            <tr>
               <td><input type="checkbox" id="b1" value="" />
                  <label for="b1"> </label></td>
               <td><input type="checkbox" id="b2" value="" />
                  <label for="b2"> </label></td>
               <td><input type="checkbox" id="b3" value="" />
                  <label for="b3"> </label></td>
               <td><input type="checkbox" id="b4" value="" />
                  <label for="b4"> </label></td>
               <td><input type="checkbox" id="b5" value="" />
                  <label for="b5"> </label></td>
            </tr>
            <tr>
               <td><input type="checkbox" id="c1" value="" />
                  <label for="c1"> </label></td>
               <td><input type="checkbox" id="c2" value="" />
                  <label for="c2"> </label></td>
               <td><input type="checkbox" id="c3" value="Free">
                  <label for="c3"><span class="free">⚔</span></label></td>
               <td><input type="checkbox" id="c4" value="" />
                  <label for="c4"> </label></td>
               <td><input type="checkbox" id="c5" value="" />
                  <label for="c5"> </label></td>
            </tr>
            <tr>
               <td><input type="checkbox" id="d1" value="" />
                  <label for="d1"> </label></td>
               <td><input type="checkbox" id="d2" value="" />
                  <label for="d2"> </label></td>
               <td><input type="checkbox" id="d3" value="" />
                  <label for="d3"> </label></td>
               <td><input type="checkbox" id="d4" value="" />
                  <label for="d4"> </label></td>
               <td><input type="checkbox" id="d5" value="" />
                  <label for="d5"> </label></td>
            </tr>
            <tr>
               <td><input type="checkbox" id="e1" value="" />
                  <label for="e1"> </label></td>
               <td><input type="checkbox" id="e2" value="" />
                  <label for="e2"> </label></td>
               <td><input type="checkbox" id="e3" value="" />
                  <label for="e3"> </label></td>
               <td><input type="checkbox" id="e4" value="" />
                  <label for="e4"> </label></td>
               <td><input type="checkbox" id="e5" value="" />
                  <label for="e5"> </label></td>
            </tr>
         </tbody>
      </table>
      <article>
         <p>This is your personal "card" of 24 unique, character appearances, random events, significant plot predictions, or phrases that might be spoken by a character. Just tap the squares for anything you see/hear to toggle between checked and unchecked. When you get a winning row, column or diagonal, a confirmation box will appear for you to check off each square again. If you confirm your winning sequence of boxes, you win. If not, you can tap "Keep trying" to continue playing. Reload the page for a new random batch of words - but be careful not to reload the page accidentally or you will lose your progress.</p>
      </article>
   </section>
   <section id="tweet"> <a href="https://twitter.com/share" class="twitter-share-button" data-text="Play Game of Thrones Bingo!" data-url="http://www.geekymuse.com/bingo/got-bingo.html" data-via="donnemo" data-hashtags="gotbingo #GoT #GameOfThronesBingo #Bingo" data-show-count="false">Tweet</a> </section>
   <footer>
      <p>🍔 <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY-NC-SA 4.0</a> 2017 <a href="https://twitter.com/burblebeep" target="_blank">George Fox</a> and <a href="https://twitter.com/donnemo" target="_blank">Andrew Paulson</a>🇺🇸</p>
   </footer>
</div>
<script>
var winSeq = false;

function confirmWin(v1, v2, v3, v4, v5) {
	/*check if winning pattern achieved*/
	// alert("You clicked "+ v1 +","+ v2 +","+ v3 +","+ v4 +","+ v5);

	$( "#l1" ).empty(); $( "#l1" ).append(v1);
	$( "#l2" ).empty(); $( "#l2" ).append(v2);
	$( "#l3" ).empty(); $( "#l3" ).append(v3);
	$( "#l4" ).empty(); $( "#l4" ).append(v4);
	$( "#l5" ).empty(); $( "#l5" ).append(v5);

	if (winSeq == false) {
		$( "#confirmation" ).toggle( "slow" );
	}
};

function hasWon() {
	/*hide confirmation, display Win message*/
	winSeq = true;
	$( "#confirmation" ).toggle( "slow" );
/* 	$( "#winMsg" ).empty(); */ $( "#winMsg" ).prepend( "<h1>D R A C A R Y S!<br/>(aka Bingo)</h1>");
	$( "#winMsg" ).toggle( "slow" );
	$( "body" ).addClass( "win" );
};

$(document).ready(function(){
	$( "#winMsg" ).toggle( "fast" );
	function shuffle(array) {
  var currentIndex = array.length, temporaryValue, randomIndex;

  // While there remain elements to shuffle...
  while (0 !== currentIndex) {

    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;

    // And swap it with the current element.
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }

  return array;
}

// Used like so
var arr = [
"Cleganebowl",
"Main character dies",
"The Hound",
"Arya Stark",
"'Dracarys'",
"Drogon",
"Rhaegal",
"'Dragonglass'",
"White Walkers",
"'The North Remembers'",
"'Winter is Coming'",
"'Winter is Here'",
"A Raven",
"'The Iron Bank'",
"Bronn",
"Greyscale",
"The Night King",
"'Three-eyed Raven'",
"Flashback",
"Tyrion drinks",
"Petyr Baelish (Littlefinger)",
"Dothraki",
"Daenerys' full title used",
"'Kingslayer'",
"Valyrian steel",
"'The Mad King'",
"'Targaryen'",
"Wedding",
"Funeral",
"Poison",
"Beheading",
"King's Landing",
"Dragonstone",
"The Wall",
"The Mountain",
"Cersei",
"The Iron Throne",
"'Valar Morghulis'",
"Bran Stark",
"Missandei",
"Jorah",
"Sansa Stark",
"Euron Greyjoy",
"Melisandre",
"Ellaria Sand",
"Beric Dondarrion",
"Yara Greyjoy",
"Theon Greyjoy",
"The Golden Company",
"Varys",
"Samwell Tarly",
"Gendry",
"Grey Worm",
"Lyanna Mormont",
"Brienne",
"Davos Seaworth",
"Main character resurrected",
"Jon and Daenerys learn they're related",
"Cersei miscarries",
"Jaime kills Cersei",
"The Hound kills Cersei",
"Hot Pie",
"Jon dies",
"Ellaria Sand dies",
"Daenerys dies",
"Drogon dies",
"Grey Worm dies",
"Children of the Forest",
"Bran wargs into someone",
"The dead rise",
"Winterfall Falls",
"King's Landing Falls"];
arr = shuffle(arr);
console.log(arr);

	$('#a1').val(arr[0]);
	$('label[for=a1]').text(arr[0]);

	$('#a2').val(arr[1]);
	$('label[for=a2]').text(arr[1]);

	$('#a3').val(arr[2]);
	$('label[for=a3]').text(arr[2]);

	$('#a4').val(arr[3]);
	$('label[for=a4]').text(arr[3]);

	$('#a5').val(arr[4]);
	$('label[for=a5]').text(arr[4]);

	$('#b1').val(arr[5]);
	$('label[for=b1]').text(arr[5]);

	$('#b2').val(arr[6]);
	$('label[for=b2]').text(arr[6]);

	$('#b3').val(arr[7]);
	$('label[for=b3]').text(arr[7]);

	$('#b4').val(arr[8]);
	$('label[for=b4]').text(arr[8]);

	$('#b5').val(arr[9]);
	$('label[for=b5]').text(arr[9]);

	$('#c1').val(arr[10]);
	$('label[for=c1]').text(arr[10]);

	$('#c2').val(arr[11]);
	$('label[for=c2]').text(arr[11]);

	$('#c4').val(arr[12]);
	$('label[for=c4]').text(arr[12]);

	$('#c5').val(arr[13]);
	$('label[for=c5]').text(arr[13]);

	$('#d1').val(arr[14]);
	$('label[for=d1]').text(arr[14]);

	$('#d2').val(arr[15]);
	$('label[for=d2]').text(arr[15]);

	$('#d3').val(arr[16]);
	$('label[for=d3]').text(arr[16]);

	$('#d4').val(arr[17]);
	$('label[for=d4]').text(arr[17]);

	$('#d5').val(arr[18]);
	$('label[for=d5]').text(arr[18]);

	$('#e1').val(arr[19]);
	$('label[for=e1]').text(arr[19]);

	$('#e2').val(arr[20]);
	$('label[for=e2]').text(arr[20]);

	$('#e3').val(arr[21]);
	$('label[for=e3]').text(arr[21]);

	$('#e4').val(arr[22]);
	$('label[for=e4]').text(arr[22]);

	$('#e5').val(arr[23]);
	$('label[for=e5]').text(arr[23]);

	/*free middle square*/
	$('#c3').prop('checked', true);
	/* test if winning condition on each click */
	$('#bingoMatrix input[type=checkbox]').click(function(){
		 	// which square was clicked?
		var whichSquare = $(this).val();
		// alert("You clicked "+ whichSquare);
		if ($('#a1:checked,#a2:checked,#a3:checked,#a4:checked,#a5:checked').length == 5) { var v1 = $("#a1").val(); var v2 = $("#a2").val(); var v3 = $("#a3").val(); var v4 = $("#a4").val(); var v5 = $("#a5").val(); confirmWin(v1, v2, v3, v4, v5);}
		else if ($('#b1:checked,#b2:checked,#b3:checked,#b4:checked,#b5:checked').length == 5) { var v1 = $("#b1").val(); var v2 = $("#b2").val(); var v3 = $("#b3").val(); var v4 = $("#b4").val(); var v5 = $("#b5").val(); confirmWin(v1, v2, v3, v4, v5);}
		else if ($('#c1:checked,#c2:checked,#c3:checked,#c4:checked,#c5:checked').length == 5) { var v1 = $("#c1").val(); var v2 = $("#c2").val(); var v3 = $("#c3").val(); var v4 = $("#c4").val(); var v5 = $("#c5").val(); confirmWin(v1, v2, v3, v4, v5);}
		else if ($('#d1:checked,#d2:checked,#d3:checked,#d4:checked,#d5:checked').length == 5) { var v1 = $("#d1").val(); var v2 = $("#d2").val(); var v3 = $("#d3").val(); var v4 = $("#d4").val(); var v5 = $("#d5").val(); confirmWin(v1, v2, v3, v4, v5);}
		else if ($('#e1:checked,#e2:checked,#e3:checked,#e4:checked,#e5:checked').length == 5) { var v1 = $("#e1").val(); var v2 = $("#e2").val(); var v3 = $("#e3").val(); var v4 = $("#e4").val(); var v5 = $("#e5").val(); confirmWin(v1, v2, v3, v4, v5);}
		else if ($('#a1:checked,#b1:checked,#c1:checked,#d1:checked,#e1:checked').length == 5) { var v1 = $("#a1").val(); var v2 = $("#b1").val(); var v3 = $("#c1").val(); var v4 = $("#d1").val(); var v5 = $("#e1").val(); confirmWin(v1, v2, v3, v4, v5);}
		else if ($('#a2:checked,#b2:checked,#c2:checked,#d2:checked,#e2:checked').length == 5) { var v1 = $("#a2").val(); var v2 = $("#b2").val(); var v3 = $("#c2").val(); var v4 = $("#d2").val(); var v5 = $("#e2").val(); confirmWin(v1, v2, v3, v4, v5);}
		else if ($('#a3:checked,#b3:checked,#c3:checked,#d3:checked,#e3:checked').length == 5) { var v1 = $("#a3").val(); var v2 = $("#b3").val(); var v3 = $("#c3").val(); var v4 = $("#d3").val(); var v5 = $("#e3").val(); confirmWin(v1, v2, v3, v4, v5);}
		else if ($('#a4:checked,#b4:checked,#c4:checked,#d4:checked,#e4:checked').length == 5) { var v1 = $("#a4").val(); var v2 = $("#b4").val(); var v3 = $("#c4").val(); var v4 = $("#d4").val(); var v5 = $("#e4").val(); confirmWin(v1, v2, v3, v4, v5);}
		else if ($('#a5:checked,#b5:checked,#c5:checked,#d5:checked,#e5:checked').length == 5) { var v1 = $("#a5").val(); var v2 = $("#b5").val(); var v3 = $("#c5").val(); var v4 = $("#d5").val(); var v5 = $("#e5").val(); confirmWin(v1, v2, v3, v4, v5);}
		else if ($('#a1:checked,#b2:checked,#c3:checked,#d4:checked,#e5:checked').length == 5) { var v1 = $("#a1").val(); var v2 = $("#b2").val(); var v3 = $("#c3").val(); var v4 = $("#d4").val(); var v5 = $("#e5").val(); confirmWin(v1, v2, v3, v4, v5);}
		else if ($('#a5:checked,#b4:checked,#c3:checked,#d2:checked,#e1:checked').length == 5) { var v1 = $("#a5").val(); var v2 = $("#b4").val(); var v3 = $("#c3").val(); var v4 = $("#d2").val(); var v5 = $("#e1").val(); confirmWin(v1, v2, v3, v4, v5);}
	});

	$('#confirmMatrix input[type=checkbox]').click(function(){
		 	// which square was clicked?
		var whichSquare = $(this).val();
		//alert("You clicked "+ whichSquare);
		// confirm the winning sequence
		if ($('#v1:checked,#v2:checked,#v3:checked,#v4:checked,#v5:checked').length == 5) {
        	hasWon();
    	}
	});

	$("#close").click(function(){
		$( "#confirmation" ).toggle( "slow" );
	});
});
</script>
<!-- Twitters -->
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
</body>
</html>
