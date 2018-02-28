<!DOCTYPE html>

<html lang="en-US">
<head>
	
	<title>Kyle Pollock</title>

    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans:300" rel="stylesheet">
 
</head>
    
<body>

   

<div class="container">
    
    <!--Designer please follow the layout and look from here http://jedmund.com/ to create a simple, elegant and professional look-->
    <!--The main title of the site-->
    
    <header>
        <h1>The Landing to Computer Science</h1>
    
    </header>

    <!--Coder please sync the nav here-->
    <?php include "inc/nav.inc"; ?>
    
    <h2 class="subtitle">Kyle Pollock</h2>
    
    <!--sectOne briefly decribes about the person-->
    <div class="sectOne">

        <img src="images/kyle.jpg" alt="Kyle">

    
        <h3>About Kyle</h3>

        <p>I’m a total nerd. And, like most nerds, I played a lot of video games as a kid. I eventually got bored of playing the same games, so I started to modify the code behind my games: adding to them, perfecting them. I didn't know it then, but that was just the start of my love of programming. I moved on from just coding video games to learning multiple programming languages and coding more and more, both in the classroom and beyond. 
        </p>

    </div>
    
    <!--sectTwo states about how the person landed to Computer Science-->
    <div class="sectTwo">

        <h3>How Kyle landed to Computer Science?</h3>

        <p>I began my undergraduate career at the University of Rochester studying genetics with a focus in premedical studies. The second semester of my freshman year, I went out on a limb and took CSC171 (Introduction to Java). I knew that the class would be difficult, especially since I had absolutely zero experience in programming, but it ended up being the best choice I made in college! Starting my sophomore year, I switched to a computer science major and have not looked back since! I dived into the major, taking as many courses as I could possibly take in a given semester in order to keep up with the other students in my class and graduate on time. To this day, I am so glad that I ended up switching majors and my career trajectory. Ever since I wrote my first “Hello, World!” program, I have been completely sold on computer science as both a career, pastime, and continuous education.
        </p>

    </div>
    
    <!--secThree states the work experience-->
    <div class="sectThree">

        <img src="images/voiceport.jpg" alt="voice port">

        <h3>Work Experience</h3>

        <p> 
            I am the founder &amp; Chief Software Architect at Espre Studios, LLC. I started it on May 2017 and is still running it now. I have also done Market Research and Business Development Intern at CommunityRoot from June 2017 to August 2017 for 3 months. Apart from that, I have also worked as Software Development Intern at VoicePort, LLC from May 2017 to August 2017 for four months. Moreover, I have also been a Cancer Stem Cell Researcher at Cleveland Clinic form October 2013 to May 2014 for eight months. 
        </p>
        
    </div>
        
    
    <!--footer goes here -->
	<div class="footer">
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
