<?php include_once 'controller/RegisterController.php'; 
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="loginRegister.css">
</head>
<body>
    <header>
        <div class="logo">
            <div class="mainlogo">
                <img id="r" src="images/logo@1X.png" alt="">
                <img id="ecover" src="images/ecover@1X.png" alt="">
            </div>
        </div>
        <div class="logoAsset">
            <img src="images/polygon@1X.png" alt="">
        </div>
        <div class="nav">
            <ul>
                <li><a href="http://localhost/Projekti/WEB-Project%20-%20Copy%20-%20Copy/home.php">HOME</a></li>
                <li><a href="#">COMPANY</a></li>
                <li><a href="projects.html">PROJECTS</a></li>
                <li><a href="#">SERVICES</a></li>
                <li><a href="#">PAGES</a></li>
                <li><a href="http://localhost/Projekti/WEB-Project%20-%20Copy%20-%20Copy/shop.php">SHOP</a></li>
                <li><a href="#">CONTACT US</a></li>
                <li><a href="#">[LOGIN]</a></li>
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

    <div class="body">
            <h2>LOGIN/REGISTER</h2>
            <h4>GET IN TOUCH</h4>
    </div>
   
    <main>
        <div class="main1 main2">
            <h2>LOG IN</h2>
            <img class="fotoLR" src="login-img/Sign In with Facebook.png" alt="">
            <img class="fotoLR" src="login-img/Sign In with Twitter.png" alt=""> <br> <br>
            <a class="color">Email Address or Username*</a> <br>
            
            <form action="loginValidate.php" method="post">
                <input type="text" name="username" id="username" placeholder="Your Email or Username" class="id1"> <br> 
                <label style="color: red;" id="usernameMsg"></label><br>
                <a class="color">Password*</a> <a  style="margin-left: 50%; color: rgb(243, 202, 21); margin-left: 42.2%;">FORGOTTEN PASSWORD?</a> <br>
                <input type="password" name="password" id="password" placeholder="Your password" class="id1">
                <br>
                <label style="color: red;" id="passwordMsg"></label><br>
                <br>
                <br>
                <input class="id2" type="submit" value="LOG IN" name="loginBtn" id="loginBtn"> <input id="bt1" class="s" type="button" name="" value="" onclick="RememberMe()"> 
                <a>Remember Me</a>
            </form>
         
        </div>

        <?php 
            require_once 'loginValidate.php';
        ?>


        
        
        <div class="main1" id="login">
            
            <h2>CREATE NEW ACCOUNT</h2>
            
            <form action="" class="" id="register" method="post">
                <a class="color">Email Address*</a> <br>
                <input type="text" name="email" id="email" placeholder="Your Email Address" class="id1"><br>   <label style="color: red;" id="emailMsg"></label><br>
            
                <input type="submit"  value="REGISTER" class="id3" id="registerBtn"> <br>
                <h3>Sign up today and you'll be able to: </h3>
                <input class="d" type="button" name="" value="✓"> <a class="a">Speed your way through the checkout;</a> <br>
                <input class="d" type="button" name="" value="✓"> <a class="a">Track your orders easily;</a> <br>
                <input class="d" type="button" name="" value="✓"> <a class="a">Keep a record of all your purchases</a>
            </form>


            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="forma  forma--hidden" id="signUp">
                 <a class="color">Name*</a> <br>
                <input type="text" name="name" id="name" placeholder="Name" class=""> <br>
                <br> 

                <a class="color">Surname*</a> <br>
                <input type="text" name="surname" id="surname" placeholder="Surname" class=""> <br>
                <br> 

                <a class="color">Email*</a> <br>
                <input type="text" name="email1" id="email1"  class="" value="" readonly><br><br>

                <a class="color">Username*</a> <br>
                <input type="text"  id="username1" placeholder="Username" name="username1" class=""> <br>
                <label style="color: red;" id="username1Msg"></label><br> 
                
                <a class="color">Password*</a> <br>
                <input type="password" name="password1" id="password1" placeholder="Your password" class="">
                <br>
                <label style="color: red;" id="password1Msg"></label>
                <br>
                <a class="color">Re-write password*</a> <br>
                <input type="password" name="" id="password2" placeholder="Re-write password" name="password" class="">
                <br>
                <label style="color: red;" id="password2Msg"></label>
                <br>
                <a class="color">Phone number*</a> <br>
                <input type="tel" name="phoneNumber" id="phoneNumber" placeholder="Your phone number" class="">
                <br>
                <label style="color: red;" id="phoneNumberMsg"></label><br> 
                <br>
                <input type="submit" value="REGISTER" class="id4" id="signUpButton" name="signUpButton" style="height: 7vh;"> <br>

                <p class="form__text">
                    <a class="form__link" href="./" id="linkLogin">Go Back</a>
                </p>
               
            </form>

          
        </div>
       
    </main>
    
    <footer>

        <div class="e">
            <div class="arber"><a class="a01">LOOKING FOR A QUALITY AND AFFORDABLE CONSTRUCTOR FOR YOUR <b>NEXT PROJECT?</b></a></div>
            <div class="ejupi"><a class="a01">REQUEST A QUOTE</a></div>
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
                         <img src="" width="200px" height="200px">
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
                         
                     </div>
 
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
    <script src="loginRegister.js"></script>

    
</body>
</html>