<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Bestower solutions</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" /> 
        <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script> 
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        
    <link rel="stylesheet" href="owl/css/docs.theme.min.css">

<!-- Owl Stylesheets -->
<link rel="stylesheet" href="owl/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="owl/owlcarousel/assets/owl.theme.default.min.css">


<script src="owl/vendors/jquery.min.js"></script>
<script src="owl/owlcarousel/owl.carousel.js"></script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="http://academy.bestowersolutions.com/wp-content/uploads/2019/10/logo.png" alt="Bestower solution"></a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars ml-1"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                    @foreach($cat as $row)
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#{{strtolower($row->categoryname)}}">{{$row->categoryname}}</a></li>
                       
                    
                    @endforeach
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome </div>
                <div class="masthead-subheading">To </div>
                
                <div class="masthead-heading text-uppercase">BESTOwER SOLUTIONS</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
            </div>
        </header>
        <!-- Services-->
        @foreach($cat as $row)
        <section class="page-section" id="{{strtolower($row->categoryname)}}">
            <div class="container">
            <div class="text-center">
                    <h2 class="section-heading text-uppercase">{{$row->categoryname}}</h2>
                    
                </div>
                    @if($row->categoryname=='Services')
                
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i></span>
                        <h4 class="my-3">E-Commerce</h4>
                       
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-laptop fa-stack-1x fa-inverse"></i></span>
                        <h4 class="my-3">Responsive Design</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fas fa-lock fa-stack-1x fa-inverse"></i></span>
                        <h4 class="my-3">Web Security</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
                
            </div>
        </section>
        @elseif($row->categoryname=='Portfolio')
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
        @foreach($subcat as $sub)
      @if($sub->subcatID != 2 )
            <div class="container">
               <h3 style="margin-left:40%;color:#e3342f;justify-content:center">{{$sub->subcategoryname}}</h3>
          <div class="owl-carousel ">
     
          @foreach($prd as $row) 
          @if($row->subcategoryname == $sub->subcatID ) 
      
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolio{{$row->productid}}"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset($row->image)}}" alt="..."
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{$row->productname}}</div>
                               
                            </div>
                        </div>
               
                    @endif
            @endforeach 

        </div>
        </div>
                @endif
                @endforeach
     
      @foreach($prd as $row)
                     <!-- Portfolio Modals--><!-- Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolio{{$row->productid}}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">{{$row->productname}}</h2>
                                   
                                    <img class="img-fluid d-block mx-auto" src="{{$row->image}}" alt="" />
                                    <p>{{$row->desc}}</p>
                                    <ul class="list-inline">
                                        <li><a href="{{$row->url}}">{{$row->url}}</a></li>
                                        <li>{{$row->subcategory->subcategoryname}}</li>
                                       
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fas fa-times mr-1"></i>Close Project</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>
             
        @elseif($row->categoryname=='About')
        <!-- About-->

        
        <section class="page-section" id="about">
            <div class="container">
               
               
                    <?php $c=0;?>
                    @foreach($about as $row)
                    <ul class="timeline">
                    @if(($c%2)==0)  
                    <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div>
                        <div class="timeline-panel">
                        <div class="timeline-heading">
                               
                                <h4 class="subheading">{{$row->aboutdetails}}</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">{{$row->description}}</p></div>
                        </div>
                       
                    </li>
                    <?php $c++ ?>

                    @elseif(($c%2)==1) 
                    <li class="timeline-inverted">

                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div>
                        <div class="timeline-panel">
                        <div class="timeline-heading">
                               
                                <h4 class="subheading">{{$row->aboutdetails}}</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">{{$row->description}}</p></div>
                        </div>
                       
                    </li>
                    <?php $c++ ?>
                    @endif
                   @endforeach
                    
                   

                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>Be Part<br />Of Our<br />Story!</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        @elseif($row->categoryname=='Team')
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                
                <div class="row">
                @foreach($team as $row)
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="" />
                            <h4>{{$row->membersname}}</h4>
                            <p class="text-muted">{{$row->description}}</p>
                            <!-- <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a> -->
                        </div>
                        </div>
                        @endforeach
                </div>  
            </div>
        </section>
        <!-- Clients-->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/envato.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/designmodo.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/themeforest.jpg" alt="" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid d-block mx-auto" src="assets/img/logos/creative-market.jpg" alt="" /></a>
                    </div>
                </div>
            </div>
        </section>
        @elseif($row->categoryname=='Contact')
  
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container ">
                
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </section>
    
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © Your Website 2020</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a><a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right"><a class="mr-3" href="#!">Privacy Policy</a><a href="#!">Terms of Use</a></div>
                </div>
            </div>
        </footer>
        @endif  
        @endforeach
       
   
        <!-- Bootstrap core JS-->
       
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script> 
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="owl/vendors/highlight.js"></script>
    <script src="owl/js/app.js"></script>
    <script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                items: 4,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 1500,
                autoplayHoverPause: true
              });
              $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [1000])
              })
              $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
              })
            })
          </script>
    </body>
</html>