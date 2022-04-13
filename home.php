
<?php
include_once 'loginValidate.php';
include_once 'database/connection.php';
$hide="";
$mshefe="";
session_start();
   
    
if(!isset($_SESSION['user'])){
    header("location:loginRegister.php");
}else{
    $mshefe="mshefe";
    $hid="";
   if($_SESSION['roli'] == "admin"){
       $hide = "";
   }else{
      $hide = "hide";
   }
       
?>




<!DOCTYPE html>
    <body>
        <title>HOME</title>
        <link rel="stylesheet" href="home.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    </body>
    <head>
    <style>
        .mshefe{
            display: none;
        }
        .hide{
            display:none;
            
        }
        .hid{
            display:none;
        }
        .header_session{
            margin-left: 4%;            
        }
        ul{
            width: 1000px;
        }
    </style>
        <header>
            <div class="logo">
                <div class="mainlogo">
                    <img id="r" src="images/logo@1X (1).png" alt="">
                    <img id="ecover" src="images/ecover@1X.png" alt="">
                </div>
            </div>
            <div class="logoAsset">
                <img src="images/polygon@1X.png" alt="">
            </div>
            <div class="nav">
                <ul>
                    <li><a href="#">[ HOME ]</a></li>
                    <li id="navSecond"><a href="#">COMPANY</a></li>
                    <li id="navThird"><a href="#">PROJECTS</a></li>
                    <li id="navFourth"><a href="#">SERVICES</a></li>
                    <li id="navFifth"><a href="#">PAGES</a></li>
                    <li id="navSixth"><a href="shop.html">SHOP</a></li>
                    <li id="navSeventh"><a href="#">CONTACT US</a></li>
                    <li id="navEighth" class="<?php echo $mshefe?>"><a href="http://127.0.0.1:5500/loginRegister.php">LOGIN</a></li>
                    <li  class="header_session"><a href="view/dashboard.php" class="<?php echo $hide ?>">Dashboard</a></li>
                    <li  class="header_session"><a href="logOut.php" class="<?php echo $hid ?>" >Logout</a></li>
                </ul>
                
            </div>
            <div class="icons">
                <div class="firstIcon">
                    <img src="images/icon-cart.png" alt="">
                </div>
                <div class="secondIcon">
                    <img src="images/Search.png" alt="">
                </div>
            </div>
        </header>
        <main>
            <div class="mainFirst">
                <div class="mainImage">
                    <img src="images/homeMain1.png" alt="">
                    <div class="mainText">
                        <div class="mainTextFisrt">
                            <p>[</p>
                        </div>
                        <div class="mainTextAll">
                            <p id="first">We Build</p>
                            <p id="second">Your Dreams</p>
                            <p id="third"> Modern Building Company</p>
                        </div>
                        <div class="mainTextSecond">
                            <p>]</p>
                        </div>
                    </div>
                    <div class="mainText2">
                        <h4>GET STARTED</h4>
                        <hr>
                    </div>
                    <div class="notMainText">
                        <p>LOOKING FOR A QUALITY AND <br> AFFORDABLE CONSTRUCTOR <br> FOR YOUR NEXT PROJECT?</p>
                    </div>
                </div>
            </div>
            <div class="mainSecond">
                <div class="mainSecondImage">
                    <img src="images/map@1X.png" alt="">
                </div>
                <div class="mainSecondText">
                    <div class="mainSecondText1">
                        <div class="mainSecondText1-1">
                            <h2>Completed Projects</h2>
                        </div>
                        <div class="mainSecondText1-2">
                            <p>Claritas est etiam processus dynamicus, qui sequitur mutatianern <br> consuetudium lectarum</p>
                        </div>
                    </div>
                    <div class="mainSecondText2">
                        <p>REQUEST A QUOTE</p>
                        <img src="images/polygon@2X.png" alt="">
                    </div>
                </div>
            </div>
            <div class="mainThird">
                <div class="mainThirdFirst">
                    <div class="mainThirdFirstImg">
                        <img src="images/photo@1X.png" alt="">
                    </div>
                    <div class="mainThirdFirstText">
                        <div class="mainThirdFirstText-1">
                            <img src="images/angle@1X.png" alt="">
                            <p>We do the dirty <br> work for you</p>
                        </div>
                        <div class="mainThirdFirstText-2">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, <br>
                            sed diam nonummy nibh euismod tincidunt ut laoreet <br>
                            dolore magna aliquam erat volutpat. Claritas est etiam pro- <br>
                            cessus dynamicus sequitur mazim.</p>
                        </div>
                        <div class="mainThirdFirstText-3">
                            <p><a href="#">OUR SERVICES</a></p>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="mainThirdSecond">
                    <div class="mainThirdSecond-1">
                        <div class="mainThirdSecondImg">
                            <img src="images/icon@1X.png" alt="">
                        </div>
                        <div class="mainThirdSecondText">
                            <div class="mainThirdSecondText-1">
                                <p>Design &</p>
                                <p id="mainThird1">Build Package</p>
                            </div>
                            <div class="mainThirdSecondText-2">
                                <p>Lorem ipsum dolor sit amet consectetur,<br> adipisicing elit.</p>
                            </div>
                            <div class="mainThirdSecondText-3">
                                <hr>
                            </div>
                        </div>
                    </div>

                    <div class="mainThirdSecond-1" id="mainThirdSecond-1-2">
                        <div class="mainThirdSecondImg">
                            <img src="images/icon@2X.png" alt="">
                        </div>
                        <div class="mainThirdSecondText">
                            <div class="mainThirdSecondText-1">
                                <p>Building</p>
                                <p id="mainThird1">Renovation</p>
                            </div>
                            <div class="mainThirdSecondText-2">
                                <p>Lorem ipsum dolor sit amet consectetur,<br> adipisicing elit.</p>
                            </div>
                            <div class="mainThirdSecondText-3">
                                <hr>
                            </div>
                        </div>
                    </div>

                    <div class="mainThirdSecond-1" id="mainThirdSecond-1-3">
                        <div class="mainThirdSecondImg">
                            <img src="images/icon@3X.png" alt="">
                        </div>
                        <div class="mainThirdSecondText">
                            <div class="mainThirdSecondText-1">
                                <p>Project</p>
                                <p id="mainThird1">Managment</p>
                            </div>
                            <div class="mainThirdSecondText-2">
                                <p>Lorem ipsum dolor sit amet consectetur,<br> adipisicing elit.</p>
                            </div>
                            <div class="mainThirdSecondText-3">
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mainContainer">
                <div class="mainContainerText">
                    <img src="images/angle@1X.png" alt="">
                    <p>Recent Projects</p>
                </div>
                <div class="mainContainerSlider">
                    <div class="mainContainerSliderFirst">
                        <ul>
                            <li> <a href="#">ALL</a></li>
                            <li><a href="sliderFirst">INTERIOR</a></li>
                            <li><a href="sliderSecond">BUILDINGS</a></li>
                            <li><a href="sliderThird">FAMILY HOUSE</a></li>
                            <li><a href="sliderFourth">GREEN BUILDING</a></li>
                            <li><a href="#">OFFICE</a></li>
                        </ul>
                    </div>
                    <div class="mainContainerSliderSecond">
                        <hr>
                    </div>
                    <div class="homeSlider">
                        <img id="sliderFirst" src="images/photo@1X (1).png" alt="">
                        <img id="sliderSecond" src="images/photo@1X (2).png" alt="">
                        <img id="sliderThird" src="images/photo@1X (3).png" alt="">
                        <img id="sliderFourth" src="images/photo@1X (4).png" alt="">
                    </div>
                </div>
                <div class="allactive">
                    <h4 onclick="window.location='projects.html'">ALL PROJECTS</h4>
                    <hr>
                </div>
            </div>
            <div class="companyCertifications">
                <div class="companyCertificationsText">
                    <img src="images/angle@1X.png" alt="">
                    <p id="CCtext1">Company Certifications</p>
                    <p id="CCtext2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tinci- <br> dunt ut laoreet dolore magna aliquam erat volutpat.</p>
                </div>
                <div class="companyCertificationsMain">
                    <div class="companyCertificationsMain1">
                        <div class="companyCertificationsMain1-1">
                            <img src="images/icon-hospital@1X.png" alt="">
                        </div>
                        <div class="companyCertificationsMain1-2">
                            <p>Healthcare <br> Buildings</p>
                        </div>
                        <div class="companyCertificationsMain1-3">
                            <p>Lorem ipsum dolor sit amet, <br> consectetuer adipiscing elit.</p>
                        </div>
                        <div class="companyCertificationsMain1-4">
                            <hr>
                        </div>
                    </div>

                    <div class="companyCertificationsMain1" id="CCM2">
                        <div class="companyCertificationsMain1-1" >
                            <img src="images/icon-school@1X.png" alt="">
                        </div>
                        <div class="companyCertificationsMain1-2">
                            <p>Education <br> Buildings</p>
                        </div>
                        <div class="companyCertificationsMain1-3">
                            <p>Lorem ipsum dolor sit amet, <br> consectetuer adipiscing elit.</p>
                        </div>
                        <div class="companyCertificationsMain1-4">
                            <hr>
                        </div>
                    </div>

                    <div class="companyCertificationsMain1">
                        <div class="companyCertificationsMain1-1">
                            <img src="images/icon-goverment@1X.png" alt="">
                        </div>
                        <div class="companyCertificationsMain1-2">
                            <p>Goverment <br> Buildings</p>
                        </div>
                        <div class="companyCertificationsMain1-3">
                            <p>Lorem ipsum dolor sit amet, <br> consectetuer adipiscing elit.</p>
                        </div>
                        <div class="companyCertificationsMain1-4">
                            <hr>
                        </div>
                    </div>

                    <div class="companyCertificationsMain1">
                        <div class="companyCertificationsMain1-1">
                            <img src="images/icon-commercial@1X.png" alt="">
                        </div>
                        <div class="companyCertificationsMain1-2">
                            <p>Commercial <br> Buildings</p>
                        </div>
                        <div class="companyCertificationsMain1-3">
                            <p>Lorem ipsum dolor sit amet, <br> consectetuer adipiscing elit.</p>
                        </div>
                        <div class="companyCertificationsMain1-4">
                            <hr>
                        </div>
                    </div>

                    <div class="companyCertificationsMain1">
                        <div class="companyCertificationsMain1-1">
                            <img src="images/icon-house@1X.png" alt="">
                        </div>
                        <div class="companyCertificationsMain1-2">
                            <p>Residential <br> Buildings</p>
                        </div>
                        <div class="companyCertificationsMain1-3">
                            <p>Lorem ipsum dolor sit amet, <br> consectetuer adipiscing elit.</p>
                        </div>
                        <div class="companyCertificationsMain1-4">
                            <hr>
                        </div>
                    </div>

                    <div class="companyCertificationsMain1">
                        <div class="companyCertificationsMain1-1">
                            <img src="images/Forma 1@1X.png" alt="">
                        </div>
                        <div class="companyCertificationsMain1-2">
                            <p>Restaurant <br> Facilities</p>
                        </div>
                        <div class="companyCertificationsMain1-3">
                            <p>Lorem ipsum dolor sit amet, <br> consectetuer adipiscing elit.</p>
                        </div>
                        <div class="companyCertificationsMain1-4">
                            <hr>
                        </div>
                    </div>
 
                </div>
            </div>
            <div class="testimonials">
                <img src="images/bgTestimonals@1X.png" alt="">
                <div class="testimonalsAssets">
                    <div class="testimonalsAssets-1">
                        <img src="images/icon-feather@1X.png" alt="">
                    </div>
                    <div class="testimonalsAssets-2">
                        <p>Mirum est notare quam littera gothica,<br>
                             quam nunc putamus parum claram, antepo- <br>
                              suerit litterarum formas humanitatis per <br>
                               seacula quarta decima!</p>
                    </div>
                    <div class="testimonalsAssets-3">
                        <p>BRITNEY SIMPSONS</p>
                    </div>
                </div>
            </div>
            <div class="homePartners">
                <div class="homePartnersText">
                    <div class="homePartnersText-1">
                        <img src="images/angle@1X.png" alt="">
                        <p>We work with <br> the best partners</p>
                    </div>
                    <div class="homePartnersText-2">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, <br> sed diam nonummy nibh 
                            euismod tincidunt ut laoreet <br> dolore magna aliquam erat volutpat. Claritas est etiam pro- <br> cessus 
                            dynamicus sequitur mazim. </p>
                    </div>
                    <div class="homePartnersText-3">
                        <h3> <b>ALL PARTNERS</b> </h3>
                        <hr>
                    </div>
                </div>
                <div class="homePartnersImg">
                    <div class="homePartnersImg1">
                        <img src="images/logo-01@1X.png" alt="">
                    </div>
                    <div class="homePartnersImg1">
                        <img src="images/logo-02@1X.png" alt="">
                    </div>
                    <div class="homePartnersImg1">
                        <img src="images/logo-03@1X.png" alt="">
                    </div>
                    <div class="homePartnersImg1">
                        <img src="images/logo-04@1X.png" alt="">
                    </div>
                </div>
            </div>
        </main>










        <footer>



            <div class="footerFirst">
                <div class="footerFirstPart">
                    <div class="footerFirstPart-1">
                        <img src="images/icon-phone@1X.png" alt="">
                    </div>
                    <div class="footerFirstPart-2">
                        <p>+123 456 7890</p>
                    </div>
                    <div class="footerFirstPart-3">
                        <hr>
                    </div>
                </div>

                <div id="footerSecond" class="footerFirstPart">
                    <div class="footerFirstPart-1">
                        <img src="images/icon-location@1X.png" alt="">
                    </div>
                    <div class="footerFirstPart-2">
                        <p>PRISHTINE</p>
                    </div>
                    <div class="footerFirstPart-3">
                        <hr>
                    </div>
                </div>

                <div id="footerThird" class="footerFirstPart">
                    <div class="footerFirstPart-1">
                        <img src="images/icon-plane@1X.png" alt="">
                    </div>
                    <div class="footerFirstPart-2">
                        <p>example@example.com</p>
                    </div>
                    <div class="footerFirstPart-3">
                        <hr>
                    </div>
                </div>
                
            </div>





            <div class="FD1">
               <div class="ff01">
                    <div class="footer1">
                        <h2>Recover</h2>
                        <h4>Modern Building Company</h4>
                    </div>
    
                    <div class="footer2">
                        <div class="A01">
                            <a>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Voluptatem at quaerat est facilis vero! Nam alias qui iure aut assumenda sapiente nemo pariatur, 
                            quia odit fugiat tempora placeat laboriosam optio?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus rem ea perspiciatis culpa minima sapiente tempore, 
                            fugiat nulla natus ab eos accusantium facere doloremque asperiores porro, nobis, repellat eveniet neque?
                            </a>
                        </div>
                    </div>
                </div>
    
                <div class="ff01">
                    <div class="footer22">
                        <h2>Recent News</h2>
                       
                    </div> 
                    <div class="for">
                        <div class="footer02">
                            <img src="images/footerPhoto@1X.png" width="200px" height="200px">
                        </div>
                    
                        <div class="footer01">
                            <a>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                A sed natus, nostrum odio dolorum ipsum veritatis velit necessitatibus praesentium maiores maxime, doloribus 
                                inventore provident hic. Voluptatum possimus autem voluptate pariatur!</a>
                        </div>
                    </div>
                </div>
            </div>
    
            
    
            <div class="FD2">
                <div class="F2">
                    <h3 class="h31">Useful links</h3>
                    <hr>
                    <div class="F3">
                        <div class="ff">
                            <a >Home</a>
                            <a >About Us</a>
                            <a >Company News</a>
                            <a >Projects</a>
                            <a >Careers</a>
                        </div>
    
                        <div class="ff">
                            <a >Our Services</a>
                            <a >Terms & Conditions</a>
                            <a >Shop</a>
                            <a >Contact Us</a>
        
                        </div>
                    </div>
                </div>
    
                <div class="F2">
                    <h3 class="h31">Buisness Hours</h3>
                    <hr>
                    <div class="F3">
                        <div class="c">
                            <a >Monday-Friday</a>
                            <a >Saturday</a>
                            <a >Sunday</a>
                        </div>
    
                        <div class="c">
                            <a >9:00 am - 6:00 pm</a>
                            <a >9:00 am - 4:00 pm</a>
                            <a >Closed</a>
                        </div>
                        
                    </div>
                    <div class="a0"><a >We work all the holidays!</a></div>
                </div>
                <div class="F2">
                    <h3 class="h31">Email Newsletter</h3>
                    <hr>
                    <div class="F03">
    
                        <div class="f0">
                            <a>Sign up for new RECOVER Construcion Copmany, <br> content, updates, survays & offers</a>
                        </div>
                    </div>
                </div>
            </div>
    
        
            <div class="FD3">
                <div class="FD301">
                    <a>2021 Recover Consrution Company </a> 
                    <a> Designed by: Arlinda Haxha & Arbër Ejupi </a> 
                    <a>Developed by: Arlinda Haxha & Arbër Ejupi</a> </div>
    
    
                <div id="FD301">
                    <a >PayPal </a> 
                    <a class="visa"> Visa </a> 
                    <a >MasterCard</a>
                    <a >Ukash</a>
                </div>
            </div>
        </footer>
    </head>
</html>
<?php
}
?>