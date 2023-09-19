<section id="manga">
  <div class="container-fluid text-center">
  <h6 class="text-center pt-2" id="sect-title">Chainsaw Man Manga</h6>

<article class="accordion mt-5">
	<span id="acc1">
		<h2><a href="#acc1">Volumes 1-3</a></h2>
		<p>This content appears on page 1.</p>
	</span>
	
	<span id="acc2">
		<h2><a href="#acc2">Volumes 4-6</a></h2>
		<p>This content appears on page 2.</p>
	</span>
	
	<span id="acc3">
		<h2><a href="#acc3">Volumes 7-9</a></h2>
		<p>This content appears on page 3.</p>
	</span>
	
	<span id="acc4">
		<h2><a href="#acc4">Volumes 10-12</a></h2>
		<p>This content appears on page 4.</p>
	</span>
	
	<span id="acc5">
		<h2><a href="#acc5">Volumes 13-15</a></h2>
		<p>This content appears on page 5.</p>
	</span>

  <span id="acc6">
		<h2><a href="#acc6">Volumes 16+</a></h2>
		<p>This content appears on page 6.</p>
	</span>
</article>

  </div>
</section>

<style>
article.accordion {
	display: block;
    width: 43em;
	margin: 0 auto;
    margin-top: 150px !important; 
    background-color: #E1C16E;
	overflow: auto;
	border-radius: 5px;
	box-shadow: 0 3px 3px rgba(0,0,0,0.3);

	/* overflow-x: auto;
    overflow-y: hidden; */
}

article.accordion span  {
	position: relative; 
	display: block;
	float: left;
	width: 2em;
	height: 12em;
	margin: 0.5em 0 0.5em 0.5em; 
	color: #333;
	background-color: #333; 
	overflow: hidden;
	border-radius: 3px;
}

article.accordion span h2 {
  position: relative;
	font-size: 1em;
	font-weight: bold;
	width: 12em;
	height: 2em;
	top: 12em; 
	left: 0; 
	text-indent: 1em;
	padding: 0;
	margin: 0; 
	color: #ddd; 
	-webkit-transform-origin: 0 0;
	-moz-transform-origin: 0 0;
	-ms-transform-origin: 0 0;
	-o-transform-origin: 0 0;
	transform-origin: 0 0;
	-webkit-transform: rotate(-90deg);
	-moz-transform: rotate(-90deg);
	-ms-transform: rotate(-90deg);
	-o-transform: rotate(-90deg);
	transform: rotate(-90deg);
}

article.accordion span h2 a {
	display: block;
	width: 100%;
	line-height: 2em;
	text-decoration: none;
	color: inherit;
	outline: 0 none;
}

article.accordion span:target {
	width: 29.5em;  
	padding: 0 1em;
	color: #333;
	background-color: #333; 
}

article.accordion span:target h2 {
	position: static;  
	font-size: 1.3em;
	text-indent: 0;
	color: #333;
	-webkit-transform: rotate(0deg);
	-moz-transform: rotate(0deg);
	-ms-transform: rotate(0deg);
	-o-transform: rotate(0deg);
	transform: rotate(0deg);
}

article.accordion span,
article.accordion span h2 {
  -webkit-transition: all 1s ease;
	-moz-transition: all 1s ease;
	-ms-transition: all 1s ease;
	-o-transition: all 1s ease;
	transition: all 1s ease;
} 
</style>
