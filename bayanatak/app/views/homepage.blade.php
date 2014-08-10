<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
    
         <link rel="stylesheet" href="css/style.css" />
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  
  jQuery(document).ready(function($) {
    $("#datepicker" ).datepicker();
  });
  </script>
  
  </head>
  <body>
    
    <div class="row first">
     <div id="panel1" class="content active">
          <dl class="tabs" data-tab>
            <dd class="active icon"><a href="#panel2-1"><img src="img/perosnal.png"></a></dd>
            <dd class="icon"><a href="#panel2-2"><img src="img/obj.png"></a></dd>
            <dd class="icon"><a href="#panel2-3"><img src="img/edu.png"></a></dd>
            <dd class="icon"><a href="#panel2-4"><img src="img/exp.png"></a></dd>
            <dd class="icon"><a href="#panel2-5"><img src="img/skills.png"></a></dd>
            <dd class="icon"><a href="#panel2-6"><img src="img/language.png"></a></dd>
            <dd class="icon"><a href="#panel2-7"><img src="img/awards.png"></a></dd>
<!-- 


  {{ Form::submit('Create My Resume', array('class' => 'createMyResume')) }}
                                      {{Form::close()}}

 -->


          </dl>
          <div class="tabs-content">
            <div class="content active" id="panel2-1">
                                <div class="row">
                              <div class="large-4 medium-4 columns">
                            Name &#10033; 
                               <div class="signUpForms"> 
                                      {{Form::open(['route'=>'cvs.store','class'=>'home_form'])}}
                                      {{ Form::text('first_name', Input::old('first_name'),  array('placeholder'=>'First Name','class' => 'required')) }}
                                      {{ Form::text('surname',  Input::old('surname'), array('placeholder'=>'Surname', 'class' => 'required')) }}
                                      </div>
                                                      </div>
                              <div class="large-4 medium-4 columns">
                              Date of Birth
                                   <div class="signUpForms"> 
                                      {{Form::text('date_of_birth', Input::old('date_of_birth'), array('class'=>'form-control', 'placeholder'=>'Date of Birth','id'=>"datepicker", 'autocomplete' => 'off'))}}
                                      
                                      </div>
                              </div>
                              <div class="large-4 medium-4 columns">
                                <p><a href="http://twitter.com/foundationzurb">@foundationzurb</a><br />Ping us on Twitter if you have questions. If you build something with this we'd love to see it (and send you a totally boss sticker).</p>
                              </div>        
                            </div>
                            <div class="row">
                              <div class="large-4 medium-4 columns">
                            <p><a href="http://foundation.zurb.com/docs">Foundation Documentation</a><br />Everything you need to know about using the framework.</p>
                          </div>
                              <div class="large-4 medium-4 columns">
                                <p><a href="http://github.com/zurb/foundation">Foundation on Github</a><br />Latest code, issue reports, feature requests and more.</p>
                              </div>
                              <div class="large-4 medium-4 columns">
                                <p><a href="http://twitter.com/foundationzurb">@foundationzurb</a><br />Ping us on Twitter if you have questions. If you build something with this we'd love to see it (and send you a totally boss sticker).</p>
                              </div>        
                            </div>
            </div>
            <div class="content" id="panel2-2">
              <p>Second panel content goes here...</p>
            </div>
            <div class="content" id="panel2-3">
              <p>Third panel content goes here...</p>
            </div>
            <div class="content" id="panel2-4">
              <p>Fourth panel content goes here...</p>
            </div>
            <div class="content" id="panel2-5">
              <p>First panel content goes here...</p>
            </div>
            <div class="content" id="panel2-6">
              <p>First panel content goes here...</p>
            </div>
            <div class="content" id="panel2-7">
              <p>First panel content goes here...</p>
            </div>
          </div>
        </div>
    </div>
<script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
