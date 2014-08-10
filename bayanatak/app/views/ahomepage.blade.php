<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>bayanatak</title>
    <link rel="stylesheet" href="css/foundation.css" />

     <link rel="stylesheet" href="css/style.css" />
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/modernizr.js"></script>
    <script src="js/lolo.js"></script>

  </head>
      <body>

      <div class="navbar navbar-fixed-top" data-activeslide="1">
            <div class="container">

                <nav class="top-bar" data-topbar>
  <ul class="title-area">
    <li class="name">
      <img src="img/logo.png" class="image">
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section" >
    <!-- Right Nav Section -->
    <ul class="right" >
      <li class="borderTopRight" ><a href="#" ><t class="topButton">Why-us?</t></a></li>
      <li class="borderTopRight" ><a href="#" ><t class="topButton">How it works</t></a></li>
      <li class="borderTopRight"><a href="#" ><t class="topButton">Login</t></a></li>
      <li  ><a href="#" ><t class="topButton tosignup">Sign Up</t></a></li>
      <li  ><img src="img/arabic.png" class="arabicButton"></li>
      <li ><a href="#" class="changeLanguage">change <br>language</a></li>
   
    </ul>


    
  </section>
</nav>
  </div>
    </div>


      <div class="first">
                <p class="firstArabic">
                  The First Arabic Speaking CV Maker!
                </p>
                        <p class="secondArabic">
                          Start <t style = "color:red">now </t>& have your CV ready in minutes!
                        </p>
                      <div class="row">
                               <div class="small-12 large-4 columns illustrations">
                                   <img src="img/illu2.png" >
                                       <div class="circle"><span>1</span></div>
                                          <h4>CHOOSE<br> A DESIGN</h4>
                                      <p>Choose from a wide range of layouts that suit your profession</p>
                                </div>



                          <div class="small-12 large-4 columns illustrations">
                                <img src="img/illu1.png" >
                                  <div class="circle"><span>2</span></div>
                                    <h4>FILLOUT<br>YOUR INFO</h4>
                                    <a name="section1"></a>
                                       <p>Fill out your information with help & guidance from professionals</p>
                          </div>


                          <div class="small-12 large-4 columns illustrations">
                              <img src="img/illu2.png" >
                                  <div class="circle"><span>3</span></div>
                                      <h4>FINALIZE<br>AND PRINT</h4>
                                   <p>Save your CV for later editing & start printing in no time!</p>
                            </div>
 
                    </div>
      </div>  <!-- end of First Section -->


                   <div class="second">
                          <div class="signUpContainer">
                                <img src="img/pin.png" class="scrollmina">

                             <p class="signUpFirst">
                                 Sign Up Now!
                                  </p>

                                  <p class="signUpSecond">
                It's easy, it's free, it's helpful!
                                  </p>

                                      <div class="rowclass signUpButton">
                      <div class="large-4 columns"><a href="{{ route('loginfacebook') }}">Sign up Via <span>Facebook</span></a></div>
                      <div class="large-4 columns"><a href="{{ route('loginlinkedin') }}">Sign up Via <span>LinkedIn</span></a></div>
                      <div class="large-4 columns"><a href="{{ route('logingoogle') }}">Sign up Via <span>Google</span></a></div>
                                      </div>

                              <p class="signUpThird">
                                Or sign Up with e-mail
                              </p>

                                    <div class="signUpForms"> 
                                      {{Form::open(['route'=>'Users.store','class'=>'home_form'])}}
                                      {{ Form::text('email', Input::old('Your E-mail'),  array('placeholder'=>'Your E-mail','class' => 'required')) }}
                                      {{ Form::password('password',  array('placeholder'=>'Password', 'class' => 'required')) }}
                                      {{ Form::submit('Create My Resume', array('class' => 'createMyResume')) }}
                                      {{Form::close()}}

                                      </div>

                                     
                                </div>
                      </div>



                 

      <div class="third">

                                      <p class="firstArabic">
                  WHY BAYANATAK?
                </p>
                        <p class="secondArabic">
                          Bayanatak is more than your average CV maker
                        </p>
                      <div class="row">
                               <div class="small-12 large-4 columns illustrations">
                                   <img src="img/illu2.png" >
                                       <div class="circle"><span>1</span></div>
                                          <h4>INNOVATIVE<br>DESIGN</h4>
                                      <p>Bayanatak offers a wide selection of designs tailored for you</p>
                                </div>



                          <div class="small-12 large-4 columns illustrations">
                                <img src="img/illu1.png" >
                                  <div class="circle"><span>2</span></div>
                                    <h4>BILINGUAL<br>SUPPORT</h4>
                                       <p>You create your CV in Arabic or English according to your preference</p>
                          </div>


                          <div class="small-12 large-4 columns illustrations">
                              <img src="img/illu2.png" >
                                  <div class="circle"><span>3</span></div>
                                      <h4>PROFESSIONAL<br>GUIDANCE</h4>
                                   <p>We provide you with advice from professionals to help you make your CV</p>
                            </div>

                    </div>
        
      </div>

      <div class="fourth">
        <div class="contactContainer">
          <img src="img/pin.png" class ="fourthpin">
          <p class="firstArabic">
                  CONTACT
          </p>
          <p class="secondArabic">
                          Where to find Bayanatak
          </p>   
                <div class="row">
                                     <div class="small-12 large-4 columns ">
                                         <img src="img/phone1.png"  class="fourthimg"  >
                                         <p class="contactfont">
                                         (+)0100120303 
                                         (+)0102344535 </br>
                                         (+)223453
                                         </p>
                                     </div>


                                      <div class="small-12 large-4 columns ">
                                         <img src="img/home1.png" class="fourthimg" >
                                         <p class="contactfont">
                                         25 Abo Bakr El Seddik St, Dokki
                                           </br>
                                          Giza, Egypt
                                         </p>
                                      </div>

                                      <div class="small-12 large-4 columns ">
                                          <img src="img/@1.png" class="fourthimg" >
                                         <p class="contactfont">
                                            info@bayanatak.com 
                                           </br>
                                          bayanatak.com
                                         </p>
                                      </div>

                </div>    
           
        </div>
      </div>
<div class="footer">
      
       
                  Everything on this page belongs to Bayanatak.com&trade;
                <div class="row">
                                    
                </div>    
           
        
      </div>





      </body>
</html>
