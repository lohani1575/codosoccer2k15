<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Code-O-Soccer || KRSSG </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  </head>
  <body>
       <div class="container">
            <div class="row header clearfix">
				<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
					<img src="img/logo.png" class="img-responsive center-block"  alt="logo">
				</div>
				<div>
					<h1 class="col-lg-4 col-sm-6 col-md-5 col-xs-12" style="font-size:30px;">Code-O-Soccer <small>2k15</small><br> <small>IIT KHARAGPUR</small></h1>
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
				<div class="col-lg-5 info">
					<p>Code-O-Soccer is a coding competition conducted by Kharagpur RoboSoccer Students' Group in the month of October, the main aim of the event is to introduce the concept of autonomous soccer playing robots in students mind and motivating students to create a challenging strategy using our API on a three vs three robot match for which robots will be provided by us during the event. For this event, all you need is: 
                      <br> i. Interest in programming and the zeal to try out new APIs <br>ii. Enthusiasm about autonomous soccer playing robots
					</p>
                </div>
				
				<div class="col-lg-7">
					<h3>Updates</h3>
					<div class="updates">
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
  <td class="info">ahbacnc</td></tr>
				
			</table>
		</div>
		</div>
  </div>
  <div role="tabpanel" class="tab-pane fade" id="documentation"></div>
		
  
  
  
  <div role="tabpanel" class="tab-pane fade" id="faq">...</div>
  <div role="tabpanel" class="tab-pane fade" id="contact">...</div>
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
                          <form id="loginForm" method="POST" action="/login/" novalidate="novalidate">
                              <div class="form-group">
                                  <label for="username" class="control-label">Username</label>
                                  <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="example@gmail.com">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Password</label>
                                  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                  <span class="help-block"></span>
                              </div>
                              <div id="loginErrorMsg" class="alert alert-error hide">Wrong username og password</div>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="remember" id="remember"> Remember login
                                  </label>
                                  <p class="help-block">(if this is a private computer)</p>
                              </div>
                              <button type="submit" class="btn btn-success btn-block" data-loading-text="Submitting...">Login</button>
                              <button type="button" class="btn btn-failure   btn-block" data-dismiss="modal" data-toggle="modal" data-target="#register-button"> Forgot Password </button>
                          </form>
                      </div>
                  </div>
                  <div class="col-xs-6">
                      <p class="lead">Register now for <span class="text-success">Code-O-Soccer 2015</span></p>
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
            <form>
              <div class="form-group">
                <label for="teamname">Teamname</label>
                <input type="text" class="form-control" id="teamname" placeholder=" teamname/Username ">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" placeholder="Re-enter Password">
              </div>
              <div class="form-group">
                <label for="members">Number of members in your Team</label>
                <select class="form-control" id="members">
                 <option>1</option>
                 <option>2</option>
                 <option>3</option>
                 <option>4</option>
                </select>
              </div>

               <button type="submit" class="btn btn-success btn-block" data-dismiss="modal" data-toggle="modal" data-target="#register-next" data-dismiss="modal">Next</button>
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
                                                        <form role="form" id="member1">
                                                          <div class="row">
                                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                              <div class="form-group">
                                                                <input type="text" name="name1" id="name1" class="form-control input-sm" placeholder="Name">
                                                              </div>
                                                            </div>

                                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                              <div class="form-group">  
                                                              <div class="selectContainer">
                                                                  <select id="status1" name="status1" class="form-control input-sm" >
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
                                                                <input type="text" name="phone1" id="phone1" class="form-control input-sm" placeholder="Mobile Number">
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
                                                            <form role="form" id="member2">
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
                                                            <form role="form" id="member3">
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
                                                            <form role="form" id="member4">
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


    
	<script>
  $(function () {
    $('#myTab a:last').tab('show')
  })
</script>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>