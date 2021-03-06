<!DOCTYPE html>

<html lang="en-US">
<head>
	
	<title>Team New York</title>

    <link rel="stylesheet" type="text/css" href="css/styles.css">      
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans:300" rel="stylesheet">
 
</head>


    
<body>
<div class="container">
    
<!--  Designer please follow the layout and look from here http://jedmund.com/ to create a simple, elegant and professional look-->
    
    
<!--The main title of the site-->

    <header>
        <h1>The Landing to Computer Science</h1>
    </header>
    
<!--    Coder please sync the nav here -->
<!--    and also add a javascript plugin for menu-highlighter and/or image switcher javascript plugin (this is an example: https://highlightjs.org/usage/)-->
    
   <?php include "inc/nav.inc"; ?>
    
<!--    sectOne includes brief info of person one-->
    <div class="sectOne">


	<img src="images/kyle.jpg" alt="Kyle" 
                onmouseover=this.src='images/voiceport-big.jpg';
                onmouseout=this.src='images/kyle.jpg';
            >
    
    <h2>Kyle Pollock</h2>
        

    <p>I'm a total nerd. And, like most nerds, I played a lot of video games as a kid. I eventually got bored of playing the same games, so I started to modify the code behind my games: adding to them, perfecting them. I didn't know it then, but that was just the start of my love of programming. I moved on from just coding video games to learning multiple programming languages and coding more and more, both in the classroom and beyond. </p>
        
    </div>
    
<!--    sectTwo includes brief info of person two-->
    <div class="sectTwo">

	<img src="images/conley.jpg" alt="Conley"
                onmouseover=this.src='images/drift-big.jpg';
                onmouseout=this.src='images/conley.jpg';
            >
	
        
    <h2>Conley Ernst</h2>

	<p>I am a Junior at the University of Rochester double majoring in Computer Science and Digital Media Studies, which provides the unique intersection of engineering and creative arts. Studying to be a software engineer, my academic and professional experience has given me a strong understanding of both the technical and user experience sides of a product.</p>
        
    </div>
    
<!--    sectThree includes brief info of person three-->
    <div class="sectThree">

	<img src="images/james.jpg" alt="James"
             onmouseover=this.src='images/apple-big.jpg';
                onmouseout=this.src='images/james.jpg';>

    
    <h2>James Fazio</h2>
        
	<p>I have always been interested in AI and the way that computers can think fo themselves, but my true interest was sparked by the class I took my senior year of high school. It was a class based on current events and current technology, and my interest in that class directly translated into my college career.</p>
        
    </div>

    
<!--this is a footer     -->
	<div class="footer">
        
        <h2>Special Credit:</h2>
        <ul>
            <li><a href="http://urcsc174.org/assignment01/cernst/work.php"> Conley Ernst</a></li>
            <li><a href="http://urcsc174.org/assignment01/kpollock/index.php"> Kyle Pollock</a></li>
            <li><a href="http://urcsc174.org/assignment01/jfazio"> James Fazio</a></li>
        </ul>
        <p>
           &copy; 2018 Created by team New York 
        </p>

    </div>

</div><!--container-->
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script>
$(function(){
  $('a').each(function() {
    if ($(this).prop('href') == window.location.href) {
      $(this).addClass('current');
    }
  });
});
</script>

</body>
</html>
