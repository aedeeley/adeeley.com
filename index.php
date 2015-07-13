
<!--

         .-;':':'-.
        {'.'.'.'.'.}
         )        '`.
        '-. ._ ,_.-='
          `). ( `);(      My Brain is
          ('. .)(,'.)        just a jellyfish
           ) ( ,').(            in the ocean
          ( .').'(').               of my head
          .) (' ).('
           '  ) (  ).
            .'( .)'
              .).'


-->

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ADEELEY.COM - the design studio of Alex Deeley</title>
<link rel="shortcut icon" href="/favicon.ico">
<link href='http://fonts.googleapis.com/css?family=Lato:100,400,700,900,100italic,300italic,700italic,900italic' rel='stylesheet' type='text/css'>

<style type="text/css">
@import url("style.css");
</style>



  <!-- CSS for slidesjs.com example -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- End CSS for slidesjs.com example -->

</head>

<body>
<header>

<div class="container" style="height:550px;">

    <ul id="social">
    	<li><a href="https://www.facebook.com/adeeleydesigns?ref=br_rs" target="_blank"><img src="img/facebook.png" alt="Facebook" /></a></li>
    	<li><a href="https://twitter.com/aedeeley" target="_blank"><img src="img/twitter.png" alt="Twitter" /></a></li>
    	<li><a href="http://www.linkedin.com/in/aedeeley" target="_blank"><img src="img/linkedin.png" alt="LinkedIn" /></a></li>
    	<li><a href="http://adeeley.prosite.com/" target="_blank"><img src="img/behance.png" alt="BeHance" /></a></li>
     </ul>

	<img src="img/logo.png" alt="adeeley.com logo" id="logo" />


     <h1 id="title">Marketing your <strong>brand, product or business</strong> is simple</h1>

     <div id="header-info">Hi, my name is Alex and I am a web developer, print designer and user experience specialist who has been in business for over 14 years. I’ve got what it takes to market you simply and successfully!</div>

     <div id="scroll-down"><img src="img/downarrow.png" alt="Down Arrow" /> <div>Scroll down to find out more</div></div>

</div>

<div style="clear:both;"></div>
</header>

<section id="web">

<div class="container">

<h2>Website design as easy as</h2>

<div class="third">

<img src="img/web1.png" alt="Web 1" style="margin-left:105px;" />

<h3>1. Design</h3>
<p>Design an effective and aesthetically pleasing website focusing on call-to-action, information capture and lead generation.</p>

</div>

<div class="third">

<img src="img/web2.png" alt="Web 2" style="margin-left:100px;" />

<h3>2. Develop</h3>
<p>Once the design is picked, coding begins. The code will be implemented into an administration system, for easy editing and upgrading.</p>

</div>

<div class="third" style="margin:0;">

<img src="img/web3.png" alt="Web 3" style="margin-top:-28px;margin-left:75px;" />

<h3>3. Launch</h3>
<p>Your site is launched with a comprehensive set of website owner tools, including: SEO, email and marketing tools. </p>

</div>


<div id="web-projects">

<h6>Client Studies: Use dots below to navigate.</h6>


<div id="slides">
      <img src="img/web-4.png" alt="Web Gallery">
      <img src="img/web-1.png" alt="Web Gallery">
      <img src="img/web-2.png" alt="Web Gallery">
      <img src="img/web-5.png" alt="Web Gallery">
      <img src="img/web-3.png" alt="Web Gallery">
    </div>

<div style="clear:both;"></div>
</div>



<div style="clear:both;"></div>

</div>
</section>

<section id="print">
<div class="container">


<h2>Print design as easy as</h2>

<div id="left">
<h3>1. Brainstorm</h3>
<p>To develop an effective user experience with your design, we first gather essential information from you which will set the foundation of the final product. We then brainstorm for an effective solution to your marketing problem.</p>


<h3>2. Wireframe</h3>
<p>An initial wireframe of your design will be mocked up and sent to you. There may be a few variations of the design, including modifications to the color scheme, design flow and aethetics.</p>


<h3>3. Revise</h3>
<p>A series of simple revisions will bring this piece up to 2014’s standards and have your design ready to be sent to print fast!</p>

</div>

<div id="print-projects">

<img src="img/print-1.png" alt="Print 1" />

</div>

<div style="clear:both;"></div>
</div>
</section>


<section id="contact">
<div class="container">

<h2>GET IN TOUCH WITH ME TODAY</h2>

<h4>I would love to hear about your project and help get you started right away. <br />Please use the form below to contact us, we will contact you shortly.</h4>

<form action="sendmail.php" method="post">

<input type="text" placeholder="Name" name="name" id="name" />

<input type="text" placeholder="Telephone" name="phone" id="phone" />

<input type="text" placeholder="Email Address" name="email" id="email" />

<textarea id="message" placeholder="Message here..." name="message"></textarea>

<input type="submit" id="submit" value="SEND THE EMAIL" />

</form>

<div style="clear:both;"></div>
</div>
</section>

 <!-- SlidesJS Required: Link to jQuery -->
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <!-- End SlidesJS Required -->

  <!-- SlidesJS Required: Link to jquery.slides.js -->
  <script src="js/jquery.slides.min.js"></script>
  <!-- End SlidesJS Required -->

  <!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
  <script>
    $(function() {
      $('#slides').slidesjs({
        width: 800,
        height: 360,
        play: {
          active: true,
          auto: true,
          interval: 8000,
          swap: true
        }
      });
    });
  </script>
  <!-- End SlidesJS Required -->

</body>
</html>
