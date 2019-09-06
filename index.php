<!DOCTYPE html>
<html lang="en">
<head>
    <title>Zeeve Rogoszinski's Website</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootstrap 4 Portfolio/Resume Theme for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico">  
    
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> 
    
    <!-- FontAwesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>
    
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    
    <!-- github calendar css -->
    <link rel="stylesheet" href="assets/plugins/github-calendar/dist/github-calendar.css">
    <!-- github acitivity css -->    
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/octicons/2.0.2/octicons.min.css">
    <link rel="stylesheet" href="assets/plugins/github-activity/github-activity-0.1.5.min.css">
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
	
	<!-- Academic Icons -->
	<link rel="stylesheet" href="assets/css/academicons.min.css"/>
    
</head> 

<body>
    <!-- ******HEADER****** --> 
    <header class="header">
        <div class="container clearfix">                       
            <img class="profile-image img-fluid float-left" src="images/me-circ.png" alt="Zeeve Rogoszinski" width=20% height=20%/>
            <div class="profile-content float-left">
                <h1 class="name">Zeeve Rogoszinski</h1>
                <h2 class="desc">PhD Candidate <span>&#8226;</span> University of Maryland </h2> 			
                <ul class="social list-inline">
                    <!--<li class="list-inline-item"><a href="mailto:zero@astro.umd.edu"><i class="fas fa-envelope"></i></a></li>-->
                    <li class="list-inline-item"><a href="https://ui.adsabs.harvard.edu/search/q=%20author%3A%22Zeeve%20Rogoszinski%22&sort=date%20desc%2C%20bibcode%20desc&p_=0" target="_blank"><i class="ai ai-ads ai-zx"></i></a></li>
                    <li class="list-inline-item"><a href="https://arxiv.org/find/astro-ph/1/au:+ROGOSZINSKI_Z/0/1/0/all/0/1" target="_blank"><i class="ai ai-arxiv ai-zx"></i></a></li>
                    <li class="list-inline-item"><a href="https://github.com/zrogoszinski" target="_blank"><i class="fab fa-github"></i></a></li>    
                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/zrogoszinski" target="_blank"><i class="fab fa-linkedin"></i></a></li>   
                    <li class="list-inline-item last-item"><a href="https://scholar.google.com/citations?user=BZvowKcAAAAJ&hl=en" target="_blank"><i class="ai ai-google-scholar ai-zx"></i></a></li>                
                </ul> 
            </div><!--//profile-->
            <a class="btn btn-cta-primary float-right" href="mailto:zero@astro.umd.edu" target="_blank"><i class="fas fa-paper-plane"></i> Contact Me</a>              
        </div><!--//container-->
    </header><!--//header-->
    
    <div class="container sections-wrapper">
        <div class="row">
            <div class="primary col-lg-8 col-12">
                <section class="about section">
                    <div class="section-inner">
                        <h2 class="heading">About Me</h2>
                        <div class="content">
                            <p> Today is <?php echo date('l, F jS, Y'); ?>. I am a sixth year PhD candidate at the University of Maryland at College Park, and I study orbital dynamics and planetary 
							formation with <a href="https://www.astro.umd.edu/~hamilton/" target="_blank"> Prof. Douglas Hamilton</a>. I plan to defend my thesis in the summer of 2020. </p>
                         
                        </div><!--//content-->
                    </div><!--//section-inner-->                 
                </section><!--//section-->
    
               <section class="research section">
                    <div class="section-inner">
                        <h2 class="heading">Research</h2>
                        <div class="content">    
                            <p> My primary focus is the origin of the spin-states of planetary bodies either through giant impacts or a spin-orbit resonance. 
							I am particularly fascinated by Uranus, and I use numerical tools to help explain why it is tilted on its side. Details to come.</p>                   
                            
                        </div><!--//content-->  
                    </div><!--//section-inner-->                
                </section><!--//section-->
               <section class="publications section">
                    <div class="section-inner">
                        <h2 class="heading">Publications</h2>
                        <div class="content">    
							<ul class="list-unstyled">					
								<li><i class="fas fa-spinner"> <a href="https://arxiv.org/abs/1908.10969" target="_blank"></i> <span style="font-weight:bold"> Tilting Ice Giants with a Spin-Orbit Resonance</span></a>. 
								Rogoszinski, Z., Hamilton, D. P. 2019, ApJ, submitted </li>
							</ul>
						</div><!--//content-->  
                    </div><!--//section-inner-->                
                </section><!--//section-->
               <section class="posters section">
                    <div class="section-inner">
                        <h2 class="heading">Posters</h2>
                        <div class="content">    
                                               
                            
                        </div><!--//content-->  
                    </div><!--//section-inner-->                
                </section><!--//section-->

            </div><!--//primary-->
			
			<div class="secondary col-lg-4 col-12">
                 <aside class="info aside section">
                    <div class="section-inner">
                        <h2 class="heading sr-only">Basic Information</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-map-marker-alt"></i><span class="sr-only">Location:</span>College Park, MD</li>
                                <li><i class="fas fa-envelope"></i><span class="sr-only">Email:</span>zero(at)astro.umd.edu</li>
                                <li><i class="fas fa-file"></i><span class="sr-only">CV:</span><a href="CV/resume.pdf" target="_blank">CV</a></li>
								<li><i class="fas fa-list"></i><span class="sr-only">ADS:</span><a href="https://ui.adsabs.harvard.edu/search/q=%20author%3A%22Zeeve%20Rogoszinski%22&sort=date%20desc%2C%20bibcode%20desc&p_=0" target="_blank">ADS Listing</a></li>
                            </ul>
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </aside><!--//aside-->
                
                
                <aside class="education aside section">
                    <div class="section-inner">
                        <h2 class="heading">Education</h2>
                        <div class="content">
							<div class="item">                      
								<h3 class="title"><i class="fas fa-graduation-cap"></i> PhD Astronomy</h3>
								<h4 class="university">University of Maryland <span class="year"><br>(2020 (expected))</span></h4>
							</div><!--//item-->
                            <div class="item">                      
                                <h3 class="title"><i class="fas fa-graduation-cap"></i> MS Astronomy</h3>
                                <h4 class="university">University of Maryland <span class="year">(2016)</span></h4>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><i class="fas fa-graduation-cap"></i> BA Astronomy & Physics</h3>
                                <h4 class="university">Vassar College <span class="year">(2014)</span></h4>
                            </div><!--//item-->
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
                
                
                <aside class="list talks aside section">
                    <div class="section-inner">
                        <h2 class="heading">Talks</h2>
                        <div class="content">
                            <ul class="list-unstyled">
								<p> <span>&#8226;</span> <a href="https://ui.adsabs.harvard.edu/abs/2019DDA....5040005R/abstract" target="_blank"> Tilting Ice Giants with Circumplanetary Disks </a> <br>
								51st Division of Dynamical Astronomy meeting <br>
								Boulder, Co </p>
								
								<p> <span>&#8226;</span> <a href="https://ui.adsabs.harvard.edu/abs/2018AAS...23111502R/abstract" target="_blank"> Using collisions and resonances to tilting Uranus </a><br>
								231st American Astronomical Society meeting <br>
								Washington, DC </p>

								<p> <span>&#8226;</span> <a href="https://ui.adsabs.harvard.edu/abs/2017DPS....4950801R/abstract" target="_blank"> Continuing the investigationtotilting Uranuswith a secular spin-orbit resonance </a> <br>
								49th Division of Planetary Science meeting <br>
								Provo, UT </p>	

								<p> <span>&#8226;</span> Tilting Uranus without a Collision <br>
								5th AstroCon DC <br>
								Washington, DC </p>									
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
                              
            </div><!--//secondary-->    
        </div><!--//row-->
    </div><!--//masonry-->
    
    <!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="container text-center">
                <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out our commercial license options via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Designed with <i class="fas fa-heart"></i> by <a href="https://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
        </div><!--//container-->
    </footer><!--//footer-->
 
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/plugins/popper.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>    
    <script type="text/javascript" src="assets/plugins/jquery-rss/dist/jquery.rss.min.js"></script> 
    <!-- github calendar plugin -->
    <script type="text/javascript" src="assets/plugins/github-calendar/dist/github-calendar.min.js"></script>
    <!-- github activity plugin -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.2/mustache.min.js"></script>
    <script type="text/javascript" src="assets/plugins/github-activity/github-activity-0.1.5.min.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="assets/js/main.js"></script>            
</body>
</html> 

