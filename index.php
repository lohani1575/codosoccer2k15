<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Code-O-Soccer || KRSSG </title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/main.css" /> <!-- This is a css file for this page, you can remove it-->
  <style>
        span.logo a{
        color:grey;
        text-decoration: none;
          /*font-family: "Lucida Sans Typewriter", "Lucida Console", Monaco, "Bitstream Vera Sans Mono", monospace;*/
        }

        .containermarquee {
        margin: 1em auto;
        overflow: hidden;
        position: relative;
        box-sizing: border-box;
        }

        .marquee {
        top: 6em;
        position: relative;
        box-sizing: border-box;
        animation: marquee 15s linear infinite;
        }

        .marquee:hover {
        animation-play-state: paused;
        }

        /* Make it move! */
        @keyframes marquee {
        0%   { top:   8em }
        100% { top: -11em }
        }

        /* Make it look pretty */
        .microsoft .marquee {
        margin: 0;
        padding: 0 1em;
        line-height: 1.5em;
        font: 1em 'Segoe UI', Tahoma, Helvetica, Sans-Serif;
        }

        .microsoft:before, .microsoft::before,
        .microsoft:after,  .microsoft::after {
        left: 0;
        z-index: 1;
        content: '';
        position: absolute;
        pointer-events: none;
        width: 100%; height: 2em;
        background-image: linear-gradient(top, #FFF, rgba(255,255,255,0));
        }

        .microsoft:after, .microsoft::after {
        bottom: 0;
        transform: rotate(180deg);
        }

        .microsoft:before, .microsoft::before {
        top: 0;
        }

        /* Style the links */
        .vanity {
        color: #333;
        text-align: center;
        font: .75em 'Segoe UI', Tahoma, Helvetica, Sans-Serif;
        }

        .vanity a, .microsoft a {
        color: #1570A6;
        transition: color .5s;
        text-decoration: none;
        }

        .vanity a:hover, .microsoft a:hover {
        color: #F65314;
        }
  </style>
  </head>
  <body onload="ClearForm()"  class="demo">


      <!--Preload Design -->
      <div id="demo-content">

        <header class="entry-header">

          <div id="loader-wrapper">
          <div id="loader"></div>

          <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>

        </div>
        <div id="content">
       <!-- Preload design ends -->



       <div class="containermarquee">
       <div class="row header clearfix">
			 <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
					<img src="img/logo.png" class="img-responsive center-block"  alt="logo">
		  	</div>
				<div>
          <section id="main_section">
          <div align="center">
              <h2><span class="logo" id="caption"></span><span class="logo" style="font-size:2em; font-weight:900;" id="cursor">_</span></h2>
          </div>
        </section>
				</div>
			</div>
      </div>
    <div class="jumbotron">
	<div class="container main">




	<div role="tabpanel" class="tabs">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active" class="col-lg-2"><a href="#home" aria-controls="home" role="tab" data-toggle="tab" >Home</a></li>
      <li role="presentation"><a href="#dashboard" aria-controls="dashboard" role="tab" data-toggle="tab">Dashboard</a></li>
	    <li role="presentation"><a href="#documentation" aria-controls="documentation" role="tab" data-toggle="tab">Documentation</a></li>
	    <li role="presentation"><a href="#faq" aria-controls="faq" role="tab" data-toggle="tab">FAQs</a></li>
      <li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">Contact Us</a></li>

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#register-button">Register</button>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login-button">Login</button>
	<a class="btn btn-primary" href="#" role="button">Logout</a>
  </ul>
	</div>



  <!-- Tab panes -->
  <div class="tab-content">

  <div role="tabpanel" class="tab-pane fade in active" id="home">
		<div class="container">
			<div class="row clearfix">
        <div class="col-lg-7 ">
					<p class="text-justify">Code-O-Soccer is a coding competition conducted by Kharagpur RoboSoccer Students' Group (KRSSG). This is a<strong> first of its kind </strong>
            competition wherein soccer strategies brewing within one's mind are implemented on robots using techniques of Artificial Intelligence.
             The main aim of the event is to introduce the concept of autonomous soccer playing robots in students' mind and motivating
             students to create a challenging strategy using our API on a five vs five robot match for which robots will be provided by
             us during the event. The participants will also be provided with a simulator with game environments (playground, robots,
             score board, etc.) to test there codes. For this event, all you need is:
            <br> i. Interest in programming and the zeal to try out new APIs
            <br>ii. Enthusiasm about autonomous soccer playing robots
            <br> This time it is being conducted nation-wide as a online coding competition with online workshops for the event.

        </div>
        <div class="col-lg-5 info" >

					<h3>Updates</h3>
					<div class="updates">
            <div class="microsoft containermarquee">
            <p class="marquee">Windows 8 and Windows RT are focused on your life—your friends and family, your apps, and your stuff. With new things like the <a href="http://windows.microsoft.com/en-US/windows-8/start-screen">Start screen</a>, <a href="http://windows.microsoft.com/en-US/windows-8/charms">charms</a>, and a <a href="http://windows.microsoft.com/en-US/windows-8/microsoft-account">
              Microsoft account</a>, you can spend less time searching and more time doing.</p>
            </div>

          </div>
				</div>
			</div>
		</div>
  </div>


  <div role="tabpanel" class="tab-pane fade" id="dashboard">
		<div class="row">
		<div class="panel panel-default col-lg-6">
  <!-- Default panel contents -->
			<div class="panel-heading">Team Information</div>
			<div class="panel-body">
				Team Spartan
			</div>
  <!-- Table -->
			<table class="table">
				<tr class="active"><td class="active"></td>
            <td class="success">kackbakbck</td>
            <td class="warning">ajckeka</td>
            <td class="danger">akckaebk</td>
            <td class="info">ahbacnc</td>
        </tr>
			</table>
		</div>
		</div>
  </div>
  <div role="tabpanel" class="tab-pane fade" id="documentation"></div>




  <div role="tabpanel" class="tab-pane fade" id="faq">
      <div class="container">
        <div class="row clearfix">
                  <div class="panel-group" id="accordion">
                      <div class="faqHeader"></div>
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <h4 class="panel-title">
                                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Will there be workshops for this event?</a>
                              </h4>
                          </div>
                          <div id="collapseOne" class="panel-collapse collapse in">
                              <div class="panel-body">
                                  Since this event is first of its kind being conducted in India, ONLINE workshops through Skype or Google Hangouts will be conducted
                                  to introduce the event and explain its technical details. The details of the workshops will be updated on the website and mailed to
                                  the participants.
                              </div>
                          </div>
                      </div>
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <h4 class="panel-title">
                                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Are coding skills necessary for participating in this event?</a>
                              </h4>
                          </div>
                          <div id="collapseTwo" class="panel-collapse collapse">
                              <div class="panel-body">
                                  Absolutely NOT, the event is about planning Soccer strategies and framing them in your codes. You can team up with people
                                  having coding skills. Through this event you can not only improve your coding skills but also develop teamwork.
                              </div>
                          </div>
                      </div>
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <h4 class="panel-title">
                                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Should the team members particularly belong to the same college?</a>
                              </h4>
                          </div>
                          <div id="collapseThree" class="panel-collapse collapse">
                              <div class="panel-body">
                                  No, you can make a team with people from various feilds and institutes. All you need to have is a common zeal for competative coding.
                                  Each member can contribute to the code from there room via some open source platform like GITHUB.
                              </div>
                          </div>
                      </div>
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <h4 class="panel-title">
                                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Are there any certifications for this event?</a>
                              </h4>
                          </div>
                          <div id="collapseFive" class="panel-collapse collapse">
                              <div class="panel-body">
                                  Yes, every participant will be awarded an online participation certificate under KRSSG research group, IIT Kharagpur.
                                  Top 20 teams will be awarded special certificate for out standing performance which will be dropped at their addresses.
                                  Top 8 Teams will get an opportunity to come to IIT Kharagpur and compete against other teams on actual bots and also compete
                                  against the team that participated in FIRA Malasia'13 and Beijing'15.
                                  <br>
                              </div>
                          </div>
                      </div>
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <h4 class="panel-title">
                                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Which coding language will be involved in the competition?</a>
                              </h4>
                          </div>
                          <div id="collapseSix" class="panel-collapse collapse">
                              <div class="panel-body">
                                  For this events all the codes have to be written in C/C++. Participants will be provided with APIs to code and Documentation
                                  explaining them.
                              </div>
                          </div>
                      </div>

                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <h4 class="panel-title">
                                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">I'm having trouble in working out on the codes, installing the API and the Simulator. What do I do?</a>
                              </h4>
                          </div>
                          <div id="collapseSeven" class="panel-collapse collapse">
                              <div class="panel-body">
                                  All queries regarding this should be asked on the forum page for the benefit of other participants.
                              </div>
                          </div>
                      </div>

                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <h4 class="panel-title">
                                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">How will our codes be Evaluated?</a>
                              </h4>
                          </div>
                          <div id="collapseEight" class="panel-collapse collapse">
                              <div class="panel-body">
                                  The codes will be eveluated on the same Simulator that will be provided to you pitting your code against other teams in a League Tournament.
                              </div>
                          </div>
                      </div>
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <h4 class="panel-title">
                                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">How to make submissions?</a>
                              </h4>
                          </div>
                          <div id="collapseNine" class="panel-collapse collapse">
                              <div class="panel-body">
                                  Login you teams' account and GoTo Dashboard -> File Upload. Make a zip Folder of your codes and upload it. Before the last Submission
                                  you can upload your codes as many times as you want. Everytime your prev codes will be over-written in that case
                              </div>
                          </div>
                      </div>




                    </div>
                </div>
        </div>
  </div>
  <div role="tabpanel" class="tab-pane fade" id="contact">






                      <div class="container">
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="well well-sm">
                                      <form class="form-horizontal" method="post">
                                          <fieldset>
                                              <legend class="text-center header">Contact us</legend>
                                              <div class="form-group">
                                                  <div class="col-md-10 col-md-offset-1">
                                                      <input id="email" name="email" type="text" placeholder="TO : contact-us@krssg.in" class="form-control" readonly>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <div class="col-md-10 col-md-offset-1">
                                                      <input id="fname" name="name" type="text" placeholder="First Name" class="form-control">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <div class="col-md-10 col-md-offset-1">
                                                      <input id="lname" name="name" type="text" placeholder="Last Name" class="form-control">
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <div class="col-md-10 col-md-offset-1">
                                                      <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <div class="col-md-10 col-md-offset-1">
                                                      <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <div class="col-md-10 col-md-offset-1">
                                                      <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <div class="col-md-12 text-center">
                                                      <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                                  </div>
                                              </div>
                                          </fieldset>
                                      </form>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div>
                                      <div class="panel panel-default">
                                          <div class="text-center header">Our Lab</div>
                                          <div class="panel-body text-center">
                                              <h4>Address:</h4>
                                              <div>
                                                KRSSG Lab, Technology Students' Gymkhana<br />
                                              IIT Kharagpur<br />
                                              West Be<br />
                                              service@company.com<br />
                                              </div>
                                              <hr />
                                              <div id="map-container"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.9235467484923!2d87.30252999999999!3d22.318730999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1d4407422c1675%3A0xa2d9d15d09ca4c4!2sTechnology+Student+Gymkhana!5e0!3m2!1sen!2sin!4v1433314583855" width="500" height="400" frameborder="0" style="border:0"></iframe></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>









  </div>
  </div>
  </div>
  </div>




<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

  <div class="modal fade" id="login-button" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">LOGIN</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-6">
                      <div class="well">
                          <form name="loginform" id="loginForm" method="POST" action="/login/" novalidate="novalidate" onsubmit="return validateText()">
                              <div class="form-group">
                                  <label for="username" class="control-label">Username</label>
                                  <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="Teamname/Username">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Password</label>
                                  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                  <span class="help-block"></span>
                              </div>

                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="remember" id="remember"> Remember login
                                  </label>
                                  <p class="help-block">(if this is a private computer)
                              </div>
                              <button type="submit" class="btn btn-success btn-block" data-loading-text="Submitting...">Login</button>
                              <button type="button" class="btn btn-failure   btn-block" data-dismiss="modal" data-toggle="modal" data-target="#register-button"> Forgot Password </button>
                          </form>
                      </div>
                  </div>
                  <div class="col-xs-6">
                      <p class="lead">Register now for <span class="text-success">Code-O-Soccer 2015</span>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> Show Your Coding Skills </li>
                          <li><span class="fa fa-check text-success"></span> Compete against people over the Country</li>
                          <li><span class="fa fa-check text-success"></span> First of its kind Coding Competition </li>
                          <li><span class="fa fa-check text-success"></span> Get Certificates and Win Exciting Prizes </li>
                          <li><a href="/read-more/"><u>Read more</u></a></li>
                      </ul>
                      <button type="button" class="btn btn-info btn-block" data-dismiss="modal" data-toggle="modal" data-target="#register-button"> Register Here </button>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>























  <div class="modal fade" id="register-button" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Register</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
         <div class="row">
          <div>
            <form name="registration">
              <div class="form-group">
                <label for="teamname">Teamname</label>
                <input type="text" class="form-control" id="teamname" name="teamname" placeholder="Username(6-11 Characters) ">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password(6-20 Characters)" onfocus="return validateTeamname()">
              </div>
              <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Re-enter Password" onfocus="return validatePassword()">
              </div>
              <div class="form-group">
                <label for="members">Number of members in your Team</label>
                <select class="form-control" id="members"  onfocus="return validateCPassword()">
                 <option>1</option>
                 <option>2</option>
                 <option>3</option>
                 <option selected>4</option>
                </select>
              </div>
               <button type="submit" id="step1" class="btn btn-success btn-block" data-dismiss="modal" data-toggle="modal" data-target="#register-next" data-dismiss="modal">Next</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-failure btn" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-info btn" data-dismiss="modal" data-toggle="modal" data-target="#login-button">Login</button>
      </div>
    </div>
  </div>
</div>

  <div class="container">
            <div class="row footer clearfix">
        <div class="">
        </div>
        <div>

        </div>
      </div>
       </div>




















<div class="modal fade" id="register-next" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="overflow-y: scroll; max-height:85%;  margin-top: 50px; margin-bottom:50px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Team Details</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
         <div class="row">
          <div>


                      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Member 1 Details
                                </a>
                              </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                              <div class="panel-body">

                                                      <div class="panel-body">
                                                        <form role="form" id="member1" name="member1">
                                                          <div class="row">
                                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                              <div class="form-group">
                                                                <input type="text" name="name1" id="name1" class="form-control input-sm" placeholder="Name" >
                                                              </div>
                                                            </div>

                                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                              <div class="form-group">
                                                              <div class="selectContainer">
                                                                  <select id="status1" name="status1" class="form-control input-sm" onfocus="return validatename('member1','name1')">
                                                                      <option> High School(Upto 12th) </option>
                                                                      <option> UnderGraduate 1st year </option>
                                                                      <option> UnderGraduate 2nd year </option>
                                                                      <option> UnderGraduate 3rd year </option>
                                                                      <option> UnderGraduate 4th year </option>
                                                                      <option> UnderGraduate 5th year </option>
                                                                      <option> PostGraduate </option>
                                                                      <option> Research Scholar </option>
                                                                      <option> Others </option>
                                                                  </select>
                                                              </div>
                                                          </div>
                                                            </div>
                                                          </div>

                                                          <div class="row">
                                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                              <div class="form-group">
                                                                <input type="text" name="email1" id="email1" class="form-control input-sm" placeholder="Email">
                                                              </div>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                              <div class="form-group">
                                                                <input type="text" name="phone1" id="phone1" class="form-control input-sm" placeholder="Mobile Number" >
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="row">
                                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                              <div class="form-group">
                                                                <input type="text" name="institute1" id="institute1" class="form-control input-sm" placeholder="College/University">
                                                              </div>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                              <div class="form-group">
                                                                <div class="selectContainer">
                                                                  <select id="state1" name="state1"  class="form-control input-sm">
                                                                      <option value="0" onfocus="return validatetext('member1','institute1')">Select State</option>
                                                                                              <option value="1">
                                                                        Andaman & Nicobar                      </option>
                                                                                              <option value="2">
                                                                        Andhra Pradesh                      </option>
                                                                                              <option value="3">
                                                                        Arunachal Pradesh                      </option>
                                                                                              <option value="4">
                                                                        Assam                      </option>
                                                                                              <option value="5">
                                                                        Bihar                      </option>
                                                                                              <option value="6">
                                                                        Chandigarh                      </option>
                                                                                              <option value="7">
                                                                        Chattisgarh                      </option>
                                                                                              <option value="8">
                                                                        Dadra & Nagar                      </option>
                                                                                              <option value="9">
                                                                        Daman & Diu                      </option>
                                                                                              <option value="10">
                                                                        Delhi                      </option>
                                                                                              <option value="11">
                                                                        Goa                      </option>
                                                                                              <option value="12">
                                                                        Gujrat                      </option>
                                                                                              <option value="13">
                                                                        Haryana                      </option>
                                                                                              <option value="14">
                                                                        Himachal Pradesh                     </option>
                                                                                              <option value="15">
                                                                        Jammu & Kashmir                      </option>
                                                                                              <option value="16">
                                                                        Jharkhand                      </option>
                                                                                              <option value="17">
                                                                        Karnataka                      </option>
                                                                                              <option value="18">
                                                                        Kerala                      </option>
                                                                                              <option value="19">
                                                                        Lakshdweep                      </option>
                                                                                              <option value="20">
                                                                        Madhya Pradesh                      </option>
                                                                                              <option value="21">
                                                                        Maharashtra                      </option>
                                                                                              <option value="22">
                                                                        Manipur                      </option>
                                                                                              <option value="23">
                                                                        Meghalaya                      </option>
                                                                                              <option value="24">
                                                                        Mizoram                      </option>
                                                                                              <option value="25">
                                                                        Nagaland                      </option>
                                                                                              <option value="26">
                                                                        Orissa                      </option>
                                                                                              <option value="27">
                                                                        Pondichery                      </option>
                                                                                              <option value="28">
                                                                        Punjab                      </option>
                                                                                              <option value="30">
                                                                        Rajasthan                      </option>
                                                                                              <option value="31">
                                                                        Sikkim                      </option>
                                                                                              <option value="32">
                                                                        Tamil Nadu                      </option>
                                                                                              <option value="33">
                                                                        Tripura                      </option>
                                                                                              <option value="34">
                                                                        Uttar Pradesh                      </option>
                                                                                              <option value="35">
                                                                        Uttaranchal                      </option>
                                                                                              <option value="36">
                                                                        West Bengal                      </option>
                                                                                          </select>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </form>


                              </div>
                            </div>
                          </div>

















                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                              <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  Member 2 Details
                                </a>
                              </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                              <div class="panel-body">

                                                      <div class="panel-body">
                                                        <form role="form" id="member2" name="member2">
                                                          <div class="row">
                                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                              <div class="form-group">
                                                                <input type="text" name="name2" id="name2" class="form-control input-sm" placeholder="Name">
                                                              </div>
                                                            </div>

                                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                              <div class="form-group">
                                                              <div class="selectContainer">
                                                                  <select id="status2" name="status2" class="form-control input-sm" >
                                                                      <option> High School(Upto 12th) </option>
                                                                      <option> UnderGraduate 1st year </option>
                                                                      <option> UnderGraduate 2nd year </option>
                                                                      <option> UnderGraduate 3rd year </option>
                                                                      <option> UnderGraduate 4th year </option>
                                                                      <option> UnderGraduate 5th year </option>
                                                                      <option> PostGraduate </option>
                                                                      <option> Research Scholar </option>
                                                                      <option> Others </option>
                                                                  </select>
                                                              </div>
                                                          </div>
                                                            </div>
                                                          </div>

                                                          <div class="row">
                                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                              <div class="form-group">
                                                                <input type="text" name="email2" id="email2" class="form-control input-sm" placeholder="Email">
                                                              </div>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                              <div class="form-group">
                                                                <input type="text" name="phone2" id="phone2" class="form-control input-sm" placeholder="Mobile Number">
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="row">
                                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                              <div class="form-group">
                                                                <input type="text" name="institute2" id="institute2" class="form-control input-sm" placeholder="College/University">
                                                              </div>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                              <div class="form-group">
                                                                <div class="selectContainer">
                                                                  <select id="state2" name="state2"  class="form-control input-sm">
                                                                      <option value="0">Select State</option>
                                                                                              <option value="1">
                                                                        Andaman & Nicobar                      </option>
                                                                                              <option value="2">
                                                                        Andhra Pradesh                      </option>
                                                                                              <option value="3">
                                                                        Arunachal Pradesh                      </option>
                                                                                              <option value="4">
                                                                        Assam                      </option>
                                                                                              <option value="5">
                                                                        Bihar                      </option>
                                                                                              <option value="6">
                                                                        Chandigarh                      </option>
                                                                                              <option value="7">
                                                                        Chattisgarh                      </option>
                                                                                              <option value="8">
                                                                        Dadra & Nagar                      </option>
                                                                                              <option value="9">
                                                                        Daman & Diu                      </option>
                                                                                              <option value="10">
                                                                        Delhi                      </option>
                                                                                              <option value="11">
                                                                        Goa                      </option>
                                                                                              <option value="12">
                                                                        Gujrat                      </option>
                                                                                              <option value="13">
                                                                        Haryana                      </option>
                                                                                              <option value="14">
                                                                        Himachal Pradesh                     </option>
                                                                                              <option value="15">
                                                                        Jammu & Kashmir                      </option>
                                                                                              <option value="16">
                                                                        Jharkhand                      </option>
                                                                                              <option value="17">
                                                                        Karnataka                      </option>
                                                                                              <option value="18">
                                                                        Kerala                      </option>
                                                                                              <option value="19">
                                                                        Lakshdweep                      </option>
                                                                                              <option value="20">
                                                                        Madhya Pradesh                      </option>
                                                                                              <option value="21">
                                                                        Maharashtra                      </option>
                                                                                              <option value="22">
                                                                        Manipur                      </option>
                                                                                              <option value="23">
                                                                        Meghalaya                      </option>
                                                                                              <option value="24">
                                                                        Mizoram                      </option>
                                                                                              <option value="25">
                                                                        Nagaland                      </option>
                                                                                              <option value="26">
                                                                        Orissa                      </option>
                                                                                              <option value="27">
                                                                        Pondichery                      </option>
                                                                                              <option value="28">
                                                                        Punjab                      </option>
                                                                                              <option value="30">
                                                                        Rajasthan                      </option>
                                                                                              <option value="31">
                                                                        Sikkim                      </option>
                                                                                              <option value="32">
                                                                        Tamil Nadu                      </option>
                                                                                              <option value="33">
                                                                        Tripura                      </option>
                                                                                              <option value="34">
                                                                        Uttar Pradesh                      </option>
                                                                                              <option value="35">
                                                                        Uttaranchal                      </option>
                                                                                              <option value="36">
                                                                        West Bengal                      </option>
                                                                                          </select>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </form>

                              </div>
                            </div>
                          </div>















                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                              <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  Member 3 Details
                                </a>
                              </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                              <div class="panel-body">
                                                      <div class="panel-body">
                                                        <form role="form" id="member3" name="member3">
                                                          <div class="row">
                                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                              <div class="form-group">
                                                                <input type="text" name="name3" id="name3" class="form-control input-sm" placeholder="Name">
                                                              </div>
                                                            </div>

                                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                              <div class="form-group">
                                                              <div class="selectContainer">
                                                                  <select id="status3" name="status3" class="form-control input-sm" >
                                                                      <option> High School(Upto 12th) </option>
                                                                      <option> UnderGraduate 1st year </option>
                                                                      <option> UnderGraduate 2nd year </option>
                                                                      <option> UnderGraduate 3rd year </option>
                                                                      <option> UnderGraduate 4th year </option>
                                                                      <option> UnderGraduate 5th year </option>
                                                                      <option> PostGraduate </option>
                                                                      <option> Research Scholar </option>
                                                                      <option> Others </option>
                                                                  </select>
                                                              </div>
                                                          </div>
                                                            </div>
                                                          </div>

                                                          <div class="row">
                                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                              <div class="form-group">
                                                                <input type="text" name="email3" id="email3" class="form-control input-sm" placeholder="Email">
                                                              </div>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                              <div class="form-group">
                                                                <input type="text" name="phone3" id="phone3" class="form-control input-sm" placeholder="Mobile Number">
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="row">
                                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                              <div class="form-group">
                                                                <input type="text" name="institute3" id="institute3" class="form-control input-sm" placeholder="College/University">
                                                              </div>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                              <div class="form-group">
                                                                <div class="selectContainer">
                                                                  <select id="state3" name="state3"  class="form-control input-sm">
                                                                      <option value="0">Select State</option>
                                                                                              <option value="1">
                                                                        Andaman & Nicobar                      </option>
                                                                                              <option value="2">
                                                                        Andhra Pradesh                      </option>
                                                                                              <option value="3">
                                                                        Arunachal Pradesh                      </option>
                                                                                              <option value="4">
                                                                        Assam                      </option>
                                                                                              <option value="5">
                                                                        Bihar                      </option>
                                                                                              <option value="6">
                                                                        Chandigarh                      </option>
                                                                                              <option value="7">
                                                                        Chattisgarh                      </option>
                                                                                              <option value="8">
                                                                        Dadra & Nagar                      </option>
                                                                                              <option value="9">
                                                                        Daman & Diu                      </option>
                                                                                              <option value="10">
                                                                        Delhi                      </option>
                                                                                              <option value="11">
                                                                        Goa                      </option>
                                                                                              <option value="12">
                                                                        Gujrat                      </option>
                                                                                              <option value="13">
                                                                        Haryana                      </option>
                                                                                              <option value="14">
                                                                        Himachal Pradesh                     </option>
                                                                                              <option value="15">
                                                                        Jammu & Kashmir                      </option>
                                                                                              <option value="16">
                                                                        Jharkhand                      </option>
                                                                                              <option value="17">
                                                                        Karnataka                      </option>
                                                                                              <option value="18">
                                                                        Kerala                      </option>
                                                                                              <option value="19">
                                                                        Lakshdweep                      </option>
                                                                                              <option value="20">
                                                                        Madhya Pradesh                      </option>
                                                                                              <option value="21">
                                                                        Maharashtra                      </option>
                                                                                              <option value="22">
                                                                        Manipur                      </option>
                                                                                              <option value="23">
                                                                        Meghalaya                      </option>
                                                                                              <option value="24">
                                                                        Mizoram                      </option>
                                                                                              <option value="25">
                                                                        Nagaland                      </option>
                                                                                              <option value="26">
                                                                        Orissa                      </option>
                                                                                              <option value="27">
                                                                        Pondichery                      </option>
                                                                                              <option value="28">
                                                                        Punjab                      </option>
                                                                                              <option value="30">
                                                                        Rajasthan                      </option>
                                                                                              <option value="31">
                                                                        Sikkim                      </option>
                                                                                              <option value="32">
                                                                        Tamil Nadu                      </option>
                                                                                              <option value="33">
                                                                        Tripura                      </option>
                                                                                              <option value="34">
                                                                        Uttar Pradesh                      </option>
                                                                                              <option value="35">
                                                                        Uttaranchal                      </option>
                                                                                              <option value="36">
                                                                        West Bengal                      </option>
                                                                                          </select>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </form>

                              </div>
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                              <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                  Member 4 Details
                                </a>
                              </h4>
                            </div>















                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                              <div class="panel-body">
                                                      <div class="panel-body">
                                                        <form role="form" id="member4" name="member4">
                                                          <div class="row">
                                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                              <div class="form-group">
                                                                <input type="text" name="name4" id="name4" class="form-control input-sm" placeholder="Name">
                                                              </div>
                                                            </div>

                                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                              <div class="form-group">
                                                              <div class="selectContainer">
                                                                  <select id="status4" name="status4" class="form-control input-sm" >
                                                                      <option> High School(Upto 12th) </option>
                                                                      <option> UnderGraduate 1st year </option>
                                                                      <option> UnderGraduate 2nd year </option>
                                                                      <option> UnderGraduate 3rd year </option>
                                                                      <option> UnderGraduate 4th year </option>
                                                                      <option> UnderGraduate 5th year </option>
                                                                      <option> PostGraduate </option>
                                                                      <option> Research Scholar </option>
                                                                      <option> Others </option>
                                                                  </select>
                                                              </div>
                                                          </div>
                                                            </div>
                                                          </div>

                                                          <div class="row">
                                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                              <div class="form-group">
                                                                <input type="text" name="email4" id="email4" class="form-control input-sm" placeholder="Email">
                                                              </div>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                              <div class="form-group">
                                                                <input type="text" name="phone4" id="phone4" class="form-control input-sm" placeholder="Mobile Number">
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="row">
                                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                              <div class="form-group">
                                                                <input type="text" name="institute4" id="institute4" class="form-control input-sm" placeholder="College/University">
                                                              </div>
                                                            </div>
                                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                              <div class="form-group">
                                                                <div class="selectContainer">
                                                                  <select id="state4" name="state4"  class="form-control input-sm">
                                                                      <option value="0">Select State</option>
                                                                                              <option value="1">
                                                                        Andaman & Nicobar                      </option>
                                                                                              <option value="2">
                                                                        Andhra Pradesh                      </option>
                                                                                              <option value="3">
                                                                        Arunachal Pradesh                      </option>
                                                                                              <option value="4">
                                                                        Assam                      </option>
                                                                                              <option value="5">
                                                                        Bihar                      </option>
                                                                                              <option value="6">
                                                                        Chandigarh                      </option>
                                                                                              <option value="7">
                                                                        Chattisgarh                      </option>
                                                                                              <option value="8">
                                                                        Dadra & Nagar                      </option>
                                                                                              <option value="9">
                                                                        Daman & Diu                      </option>
                                                                                              <option value="10">
                                                                        Delhi                      </option>
                                                                                              <option value="11">
                                                                        Goa                      </option>
                                                                                              <option value="12">
                                                                        Gujrat                      </option>
                                                                                              <option value="13">
                                                                        Haryana                      </option>
                                                                                              <option value="14">
                                                                        Himachal Pradesh                     </option>
                                                                                              <option value="15">
                                                                        Jammu & Kashmir                      </option>
                                                                                              <option value="16">
                                                                        Jharkhand                      </option>
                                                                                              <option value="17">
                                                                        Karnataka                      </option>
                                                                                              <option value="18">
                                                                        Kerala                      </option>
                                                                                              <option value="19">
                                                                        Lakshdweep                      </option>
                                                                                              <option value="20">
                                                                        Madhya Pradesh                      </option>
                                                                                              <option value="21">
                                                                        Maharashtra                      </option>
                                                                                              <option value="22">
                                                                        Manipur                      </option>
                                                                                              <option value="23">
                                                                        Meghalaya                      </option>
                                                                                              <option value="24">
                                                                        Mizoram                      </option>
                                                                                              <option value="25">
                                                                        Nagaland                      </option>
                                                                                              <option value="26">
                                                                        Orissa                      </option>
                                                                                              <option value="27">
                                                                        Pondichery                      </option>
                                                                                              <option value="28">
                                                                        Punjab                      </option>
                                                                                              <option value="30">
                                                                        Rajasthan                      </option>
                                                                                              <option value="31">
                                                                        Sikkim                      </option>
                                                                                              <option value="32">
                                                                        Tamil Nadu                      </option>
                                                                                              <option value="33">
                                                                        Tripura                      </option>
                                                                                              <option value="34">
                                                                        Uttar Pradesh                      </option>
                                                                                              <option value="35">
                                                                        Uttaranchal                      </option>
                                                                                              <option value="36">
                                                                        West Bengal                      </option>
                                                                                          </select>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>

                              </div>

                            </div>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-block" data-dismiss="modal" data-toggle="modal" data-target="#register-next" data-dismiss="modal">Submit</button>
                        </form>
          </div>
        </div>
      </div>
    </div>
</div>




















<!-- ALL SCRIPTS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


		<script >
		var captionLength = 0;
		var caption = "Code-O-Soccer 2015 @ <a href='htp://krssg.in/' target='none'>Kharagpur RoboSoccer Students' Group</a>";
		$(document).ready(function() {
		    setInterval ('cursorAnimation()', 200);
		    captionEl = $('#caption');
		    type();
		});
		function type() {
		    captionEl.html(caption.substr(0, captionLength++));
		    if(captionLength < caption.length+1) {
		        setTimeout('type()', 50);
		    } else {
		        //setTimeout('erase()', 500);
		    }
		}

		function cursorAnimation() {
		    $('#cursor').animate({
		        opacity: 0
		    }, 'fast', 'swing').animate({
		        opacity: 1
		    }, 'fast', 'swing');
		}


		</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<script src="js/main.js"></script>
	<script>
  $(function () {
    $('#myTab a:last').tab('show')
  })
</script>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/myscript.js"></script>
  </body>
</html>
