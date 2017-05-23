<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Armand TOQUET</title>
	<meta name="description" content="CV Website">
	<meta name="author" content="TOQUET Armand">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="{{ asset('css/default.css')}}">
	<link rel="stylesheet" href="{{ asset('css/layout.css')}}">
   <link rel="stylesheet" href="{{ asset('css/media-queries.css')}}">
   <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">

   <!-- Script
   ================================================== -->
	<script src="{{asset('js/modernizr.js')}}"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png" >

</head>

<body>

   <!-- Header
   ================================================== -->
   <header id="home">

      <nav id="nav-wrap">

         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	      <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

         <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="#home">Home</a></li>
            <li><a class="smoothscroll" href="#about">About</a></li>
	         <li><a class="smoothscroll" href="#resume">Resume</a></li>
            <li><a class="smoothscroll" href="#portfolio">Works</a></li>
            <li><a class="smoothscroll" href="#testimonials">Skills</a></li>
            <li><a class="smoothscroll" href="#contact">Contact</a></li>
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->

      <div class="row banner">
         <div class="banner-text">
            <h1 class="responsive-headline">Armand TOQUET,General developer.</h1>
            <h3> I'm a general developper. Ready to code all types of project. Your app's quality ? My motivation. </h3>
            <hr />
            <ul class="social">
               <li><a href="https://www.linkedin.com/in/armand-toquet-a8633510b/"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="skype:toquet.armand?userinfo"><i class="fa fa-skype"></i></a></li>
            </ul>
         </div>
      </div>

      <p class="scrolldown">
         <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
      </p>

   </header> <!-- Header End -->


   <!-- About Section
   ================================================== -->
   <section id="about">

      <div class="row">

         <div class="three columns">

            <img class="profile-pic"  src="{{asset('images/profilepic.jpg')}}" alt="" />

         </div>

         <div class="nine columns main-col">

            <h2>About Me</h2>

            <p>
            I am an IT programmer since i get graduated in 2016 at HND specialized in IT, in Lyon France.
            IT is my passion, I am coding many types of application, from web app to mobile app, going on software and networking.
                I'm attached to the fact to work individually my own way that's why i'm working in free-lance.
           
            </p>

            <div class="row">

               <div class="columns contact-details">

                  <h2>Contact Details</h2>
                  <p class="address">
						   <span>TOQUET Armand</span><br>
						   <span>7 rue du père Aubry<br>
						         71000 Mâcon France
                     </span><br>
						   <span>+33/0786182802</span><br>
                     <span>armand.toquet1995@gmail.com</span>
					   </p>

               </div>

               <div class="columns download">
                  <p>
                     <a href="{{URL::to('download')}}" class="button"><i class="fa fa-download"></i>Download Resume</a>
                  </p>
               </div>

            </div> <!-- end row -->

         </div> <!-- end .main-col -->

      </div>

   </section> <!-- About Section End-->


   <!-- Resume Section
   ================================================== -->
   <section id="resume">

      <!-- Education
      ----------------------------------------------- -->
      <div class="row education">

         <div class="three columns header-col">
            <h1><span>Education</span></h1>
         </div>

         <div class="nine columns main-col">
@foreach($education as $item)
 <div class="row item">

               <div class="twelve columns">

                  <h3>{{$item->titre}}</h3>
                  
                  <p class="info">
                  {{$item->etablissement}}
                  <p>
                  {{$item->description}}
                  </p>

               </div>

            </div>

@endforeach

  </div>

      </div> <!-- End Education -->


      <!-- Work
      ----------------------------------------------- -->
      <div class="row work">
      
      

         <div class="three columns header-col">
            <h1><span>Work</span></h1>
         </div>

         <div class="nine columns main-col">

           

             @foreach($experience as $item)
 <div class="row item">

               <div class="twelve columns">

                  <h3>{{$item->titre}}</h3>
                  <p class="info">{{$item->etablissement}} <span>&bull;</span> <em class="date">{{$item->date_deb}} to {{$item->date_inf}}</em></p>

                  <p>
                  {{$item->description}}
                  </p>

               </div>

            </div> <!-- item end -->

@endforeach

         </div> <!-- main-col end -->

      </div> <!-- End Work -->


      <!-- Skills
      ----------------------------------------------- -->
      <div class="row skill">

         <div class="three columns header-col">
            <h1><span>Skills</span></h1>
         </div>

         <div class="nine columns main-col">

            <p>Here are my programming and IT skills, often updated to have the best quality on your projects. The quality of your project? My motivation !
            </p>

				<div class="bars">

				   <ul class="skills">
					    <li><span class="bar-expand php"></span><em>Php</em></li>
                        <li><span class="bar-expand laravel"></span><em>Laravel</em></li>
						<li><span class="bar-expand rubyonrails"></span><em>Ruby on Rails</em></li>
						<li><span class="bar-expand css"></span><em>CSS</em></li>
						<li><span class="bar-expand html5"></span><em>HTML5</em></li>
                        <li><span class="bar-expand jquery"></span><em>jQuery</em></li>
                         <li><span class="bar-expand cakephp"></span><em>CakePhp</em></li>
                          <li><span class="bar-expand bootstrap"></span><em>Bootstrap</em></li>
                           <li><span class="bar-expand java"></span><em>Java</em></li>
                           <li><span class="bar-expand wordpress"></span><em>WordPress</em></li>
          </ul>
					</ul>

				</div><!-- end skill-bars -->

			</div> <!-- main-col end -->

      </div> <!-- End skills -->

   </section> <!-- Resume Section End-->


   <!-- Portfolio Section
   ================================================== -->
   <section id="portfolio">

      <div class="row">

         <div class="twelve columns collapsed">

            <h1>Check Out Some of My Works.</h1>

            <!-- portfolio-wrapper -->
            <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf">

          	   <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-01" title="">
                        <img alt="" src="{{asset('images/front.png')}}">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5>This WebSite ! </h5>
                              <p>Entirely done under Laravel ! </p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> <!-- item end -->

             <!-- item end -->

            </div> <!-- portfolio-wrapper end -->

         </div> <!-- twelve columns end -->


         <!-- Modal Popup
	      --------------------------------------------------------------- -->

         <div id="modal-01" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/front.png" alt="" />

		      <div class="description-box">
			      <h4>My own CV website</h4>
			      <p>This Website is entirely done under Laravel 5, it's got a custom CMS to admin the database.</p>
               <span class="categories"><i class="fa fa-tag"></i>Webdesign and dev</span>
		      </div>

            <div class="link-box">
               <a href="http://armandtoquet.com" target="_blank">Details</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div>

	      </div><!-- modal-01 End -->

        


      </div> <!-- row End -->

   </section> <!-- Portfolio Section End-->


   <!-- Call-To-Action Section
   ================================================== -->
   <section id="call-to-action">

      <div class="row">

         <div class="two columns header-col">

            <h1><span>Get our services.</span></h1>

         </div>

         <div class="seven columns">

            <h2><span class="lead">Our action Panel</span></h2>
            <p><span class="lead">Look at what we can do for your app, here are our main skills :  </span></p>

         </div>

         <div class="three columns action">



         </div>

      </div>

   </section> <!-- Call-To-Action Section End-->


   <!-- Testimonials Section
   ================================================== -->
   <section id="testimonials">

      <div class="text-container">

         <div class="row">

            <div class="two columns header-col">

               <h1><span>Panel</span></h1>

            </div>

            <div class="ten columns flex-container">

               <div class="flexslider">

                  <ul class="slides">

                
                <li>
                        <blockquote>
                           <p>Website
                           </p>
                           <img alt="" src="{{asset('images/implement.png')}}">
     	<cite>Conception,implementation and maintenance</cite>
                        </blockquote>
                     </li>
                     
                     
                     
                     
                     <li>
                        <blockquote>
                           <p>Security
                           </p>
                    <img alt="" src="{{asset('images/websec.png')}}">
          	<cite>Secure applications and website</cite>
     
                        </blockquote>
                     </li>
                     
                     
                      <li>
                        <blockquote>
                           <p>Applications
                           </p>
                                               <img alt="" src="{{asset('images/mobile.png')}}">
     	          	<cite>Development of web, software & mobile custom applications. </cite>
                        </blockquote>
                     </li>
               
                
                
					<li>
                        <blockquote>
                           <p>E-commerce
                           </p>
                                               <img alt="" src="{{asset('images/bd.png')}}">
               	<cite>Implement E-commerce solutions</cite>
                        </blockquote>
                     </li> <!-- slide ends -->

                  </ul>

               </div> <!-- div.flexslider ends -->

            </div> <!-- div.flex-container ends -->

         </div> <!-- row ends -->

       </div>  <!-- text-container ends -->

   </section> <!-- Testimonials Section End-->


   <!-- Contact Section
   ================================================== -->
   <section id="contact">

         <div class="row section-head">

            <div class="two columns header-col">

               <h1><span>Get In Touch.</span></h1>

            </div>

            <div class="ten columns">

                  <p class="lead">Contact us to find the best solution about your project ! You will be answered quickly.
                  </p>

            </div>

         </div>

         <div class="row">

            <div class="eight columns">

               <!-- form -->
               <form action="{{ action('PresentationController@sendContact')}}" method="post" id="contact" name="contact">
                  {{ csrf_field() }} 

					<fieldset>

                  <div>
						   <label for="contactName">Name <span class="required">*</span></label>
						   <input type="text" value="" size="35" id="contactName" name="contactName">
                  </div>

                  <div>
						   <label for="contactEmail">Email <span class="required">*</span></label>
						   <input type="text" value="" size="35" id="contactEmail" name="contactEmail">
                  </div>

                  <div>
						   <label for="contactSubject">Subject</label>
						   <input type="text" value="" size="35" id="contactSubject" name="contactSubject">
                  </div>

                  <div>
                     <label for="contactMessage">Message <span class="required">*</span></label>
                     <textarea cols="50" rows="15" id="contactMessage" name="contactMessage"></textarea>
                  </div>

                  <div>
                     <button class="submit">Submit</button>
                     <span id="image-loader">
                        <img alt="" src="{{asset('images/loader.gif')}}">
                     </span>
                  </div>

					</fieldset>
				   </form> <!-- Form End -->

               <!-- contact-warning -->
               <div id="message-warning"> Error boy</div>
               <!-- contact-success -->
				   <div id="message-success">
                  <i class="fa fa-check"></i>Your message was sent, thank you!<br>
				   </div>

            </div>


            <aside class="four columns footer-widgets">

               <div class="widget widget_contact">

					   <h4>Address</h4>
					   <p class="address">
						   TOQUET Armand<br>
						   7 rue du père Aubry <br>
						   71000 Mâcon France<br>
						   
					   </p>

				   </div>


            </aside>

      </div>

   </section> <!-- Contact Section End-->


   <!-- footer
   ================================================== -->
   <footer>

      <div class="row">

         <div class="twelve columns">

         



         </div>

         <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>

      </div>

   </footer> <!-- Footer End-->

   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="{{ asset('js/jquery-1.10.2.min.js')}}"><\/script>')</script>
   <script type="text/javascript" src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>

   <script src="{{ asset('js/jquery.flexslider.js')}}"></script>
   <script src="{{asset('js/waypoints.js')}}"></script>
   <script src="{{asset('js/jquery.fittext.js')}}"></script>
   <script src="{{asset('js/magnific-popup.js')}}"></script>
   <script src="{{asset('js/init.js')}}"></script>

</body>

</html>