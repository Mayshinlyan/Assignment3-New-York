<!DOCTYPE html>

<html lang="en-US">
<head>
	
	<title>James Fazio</title>

    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans:300" rel="stylesheet">

</head>
    
<body>

  

<div class="container">
    
    <header>
        <h1>The Landing to Computer Science</h1>
    
    </header>

  <?php include "inc/nav.inc"; ?>
    
    <h2 class="subtitle">James Fazio</h2>
    
    <div class="sectOne">

        <img src="images/james.jpg" alt="James">
    
        <h3>About James</h3>

        <p>I have always been interested in AI and the way that computers can think fo themselves, but my true interest was sparked by the class I took my senior year of high school. It was a class based on current events and current technology, and my interest in that class directly translated into my college career.
        </p>

    </div>
    
    <div class="sectTwo">

        <h3>How James landed to Computer Science?</h3>

        <p>Over the past seven semesters here at the University of Rochester, I have had an interesting journey. Since my high school did not have a computer science department, I did not have any programming experience whatsoever when I starting school here in the Fall of 2014. I held an immense interest in the world of technology however, so I was pretty set coming in about the major choice of computer science. It took me no more than one semester (and a D-) in CHM II to realize that chemistry was not for me. I think back at that now and wonder what I was thinking. I went the rest of my sophomore year without a major in mind, but I began taking computer science class again to see how I would do. After taking CSC 170 and loving it, I took 171 (Intro to Java) and 172 (Data Structures and Algorithms) and realized that CS was definitely the major for me. I declared my major later than normal, in the fall of my Junior year, but I was finally on the right track.
        </p>

    </div>
    
    <div class="sectThree">

        <img src="images/apple.jpg" alt="Apple"> 

        <h3>Work Experience</h3>

        <p> 
          From November of 2015 through August of 2017, I worked as a Specialist at an Apple Retail Store. As a self-proclaimed Apple enthusiast, I had always wanted to work for the company in any capacity and applied for a retail spot when I turned 18. A full year later, I received an email invitation to a hiring event, Apple’s unique but effective format of selecting its employees. After five total interviews/events and a month of training and shadowing, I was officially a Specialist at Apple. Working for Apple, even at the retail level, was an incredible experience. The entire 90+ employee team worked and communicated together. 
        </p>
        
    </div>
        
    

	<div class="footer">
        
        <h2>Special Credit:</h2>
        <ul>
            <li><a href="http://urcsc174.org/assignment01/cernst/work.php"> Conley Ernst</a></li>
            <li><a href="http://urcsc174.org/assignment01/kpollock/index.php"> Kyle Pollock</a></li>
            <li><a href="http://urcsc174.org/assignment01/jfazio/image"> James Fazio</a></li>
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
