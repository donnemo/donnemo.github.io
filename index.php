<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<!-- ⏏ -->

<!-- ✎ -->
<title>GeekyMuse: Andrew Paulson</title>
<meta name="description" content="GeekyMuse: Developer, illustrator, geek, satirist, and occasional blogger, Andrew has been drawing since he could hold a crayon. He started with squiggles, but they were darned good squiggles if he says so himself. And he will; just ask." />
<meta name="keywords" content="geek, geeky, developer, designer, illustrator, artist, front-end" />
<meta name="mySite" content="GeekyMuse" />
<meta name="PHP_SELF" content="/index.php" />
<meta name="SERVER_NAME" content="GeekyMuse" />
<meta name="HTTP_HOST" content="GeekyMuse" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="flex.css">
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
	  <article>
	    <div class="avatar">
	      <a href="https://codepen.io/apaulson">
	        <img src="/images/about.png" alt="Andrew Paulson" />
	      </a>
	    </div>
	    <div class="content">
	      <h1>Geeky Muse</h1>
	      <p class="nomargin">Andrew Paulson</p>
	      <?php include("andrew-social.php"); ?>
				<p class="intro text-left">Developer, illustrator, geek, satirist, and occasional blogger, Andrew has been drawing since he could hold a crayon. He started with squiggles, but they were darned good squiggles if he says so himself. And he will; just ask.</p>
				<ul class="flex one two-600">
					<li><a href="#development" class="button cta"><span>Development</span></a></li>
					<li><a href="#illustration" class="button cta"><span>Illustration</span></a></li>
					<li><a href="#design" class="button cta"><span>Design</span></a></li>
					<li><a href="#branding" class="button cta"><span>Branding</span></a></li>
				</ul>
	    </div>
	  </article>
	</div>

	<article id="development">
		<div class="content text-left">
			<h2>Development</h2>
			<p>The act or process of casting spells in arcane languages to force browsers to do your bidding.</p>
			<ul>
				<li><a href="/bingo/">Conference Call Bingo</a></li>
				<li><a href="/bingo/got-bingo.html">Game of Thrones Bingo</a></li>
			</ul>
		</div>
	</article>

	<article id="illustration">
		<div class="content text-left">
			<h2>Illustration</h2>
			<p>Because any child can tell you that a book is better with pictures.</p>
			<a href="https://www.etsy.com/shop/BirdArtByAndrew" target="_blank"><img src="images/andrew-banner.jpg" alt="Bird Art by Andrew"></a>
			<p>Find bird art, original drawings and paintings on my <a href="https://www.etsy.com/shop/BirdArtByAndrew" target="_blank">Etsy shop: Bird Art by Andrew</a>.</p>
		</div>
	</article>

	<article id="design">
		<div class="content text-left">
			<h2>Design</h2>
			<p>Good design is invisible. Great design solves problems that are only obvious in retrospect.</p>
		</div>
	</article>

	<article id="branding">
		<div class="content text-left">
			<h2>Branding</h2>
			<p>Successful businesses have a distinct voice, character, and personality. Whether yours is big or small, branding is key to distinguish it from competitors.</p>
		</div>
	</article>

	<?php include("journal-toc.php"); ?>
</body>
</html>
