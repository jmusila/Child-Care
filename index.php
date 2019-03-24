<?php
include ("register.php");
?>
<?php
include ("login.php");
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="static/bootstrap/bootstrap.css">
        <link rel="stylesheet" href="static/bootstrap/metro-icons.css">
        <link rel="stylesheet" type="text/css" href="static/css/style.css">
        <title>Happy-Childcare</title>
        <nav class="navbar navbar-default navbar-fixed-top ">
                <div class="header">
                    <div class="header-logo"><a href="index.php">&#9776;Happy-Childcare</a></div>
                    <div class="header-list">
                        <ul>
                            <li><a href="index.php"><button type="button" class="btn btn-primary active">Home</button></a></li>
                            <li><a href="about.php"><button type="button" class="btn btn-primary">About</button></a></li>
                            <li><a href="contact.php"><button type="button" class="btn btn-primary">Contacts</button></a></li>
                            <li><a id="mypopup"><button onclick="return register()" type="button" class="btn btn-primary">Signup</button></a></li>
                            <li><a id="shwo"><button onclick="return login()" type="button" class="btn btn-primary">Signin</button></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
    </head>
    <body>
        <div class="container">
            <div class="col-sm-4">
                    <div class="card">
                            <img src="static/images/game.jpg" width="100%" height="200">
                            <h4>Kids and Games</h4>
                            <p>Bring your child to our place and your child will have
                                the best fun ever while playing the mordern games and
                                being taught how to play by our friendly teachers.
                            </p>
                        </div>
            </div>
            <div class="col-sm-4">
                    <div class="card">
                            <img src="static/images/baloon.jpg" width="100%" height="200">
                        <h4>Kids and Fun</h4>
                        <p>Fun is one of the best things each kid should have.
                            Our ready and trained teachers will make your kid feel
                            happy and have the best fun ever during the fun time.
                        </p>
                    </div>
                </div>
            <div class="col-sm-4">
                    <div class="card">
                            <img src="static/images/reading.jpg" width="100%" height="200">
                        <h4>Kids and Studies</h4>
                        <p>Educations is the key to success, yeah this is always
                            the key to the biiiig padlock of success. If you want your kid
                            to have the best base of education bring the child to us.
                        </p>
                    </div>
                </div>
        </div>
        <div class="separation">
            <h3>Our Friendly Team</h3>
        </div>
        <div class="container">
                <div class="col-sm-4">
                    <img src="static/images/Joyley.jpg" width="70%" height="200px">
                    <h4>Joyley, Chairperson</h4>
                <blockquote><p><i>The following example shows how to get a three equal-width columns starting at tablets 
                        and scaling to large desktops. 
                        On mobile phones, the columns will automatically stack.</i></p></blockquote>
                </div>
                <div class="col-sm-4">
                    <img src="static/images/Sinach.jpg" width="70%" height="200px">
                    <h4>Sinach, Vice Chairperson</h4>
                    <blockquote><p><i>The following example shows how to get a three equal-width columns starting at tablets 
                        and scaling to large desktops. 
                        On mobile phones, the columns will automatically stack.</i></p></blockquote>
                    </div>
                <div class="col-sm-4">
                    <img src="static/images/Gary.jpg" width="70%" height="200px">
                    <h4>Linda, Secretary</h4>
                    <blockquote><p><i>The following example shows how to get a three equal-width columns starting at tablets 
                        and scaling to large desktops. 
                        On mobile phones, the columns will automatically stack.</i></p></blockquote>
                    </div>
            </div>
            <div id="myform" class="signup-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
                <div class="signup-form-wrapper">
                <div class="container">
                    <div class="form-data">
                    <span class="close">&times;</span>
                    <form onsubmit="return validations()" method="post">
                            <div class="form-items">
                                <h4 class="form-title fluid">Create Account</h4>
                                <div class="form-field fluid">
                                    <input id="firstname" type="text" name="firstname" placeholder="First Name" required>
                                </div>
                                <div class="form-field fluid">
                                    <input id="lastname" type="text" name="lastname" placeholder="Last Name" required>
                                </div>
                                <div class="form-field fluid">
                                <input id="email" type="text" name="email" placeholder="Email Address" required></span>
                                </div>
                                <div class="form-field fluid">
                                    <input id="phone" type="phonenumber" name="phone" placeholder="Phonenumber" required>
                                </div>
                                <div class="form-field fluid">
                                    <input id="username" type="username" name="username" placeholder="Username" required>
                                </div>
                                <div class="form-field fluid">
                                    <input id="password" type="password" name="password" placeholder="Password" required>
                                </div>
                                <div class="form-field fluid">
                                    <input id="confirmpassword" type="password" name="confirmpassword" required placeholder="Confirm Password">
                                </div>
                                <div  style="color: red; "><?php echo $msg;?></div>
                                <p id="output"></p>
                                <div class="form-field fluid">
                                <input id="submit" onclcik="event.preventDefault();" name="save" class="btn btn-primary fluid primary" type="submit" value="Sign Up">
                                    <h4 class="text center">
                                            <a href="javascript: login();">Already a member? Sign in</a>
                                    </h4>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<button class="open-button" onclick="openForm()">Chat</button>

<div class="chat-popup" id="myForm">
  <form class="form-container" method="post">
    <h4>Chat With Us</h4>

    <label for="msg"><b>Message</b></label>
    <textarea id="message" placeholder="Type your message here...." name="message" required></textarea>

    <button type="submit" name="send" class="btn btn-primary">Send</button>
    <button type="button" class="btn btn-danger" onclick="closeForm()">Close</button>
  </form>
  </div>
  <div id="logup" class="signup-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
      <div class="signup-form-wrapper">
      <div class="container">
          <div class="form-data">
          <span class="finish">&times;</span>
                  <form method ="post">
                          <div class="form-items">
                              <h4 class="form-title fluid">Log In</h4>
                              <div class="form-field fluid">
                                  <input id="email" type = "email" name="email" placeholder="Email Address">
                              </div>
                              <div class="form-field fluid">
                                  <input id="password" type = "password" name="password" placeholder="Password">
                              </div>
                              <p id="outcome"></p>
                              <div class="form-field fluid">
                              <input type="submit" name="login" class="btn btn-primary fluid primary" value="Log In">
                                  <h4 class="text center">
                                      <a href="javascript: register();">Not a member? Sign up</a><br/><br/>
                                      <u><a href="#">Forgot Password?</a></u>
                                  </h4>
                              </div>
                          </div>
                      </form>
              </div>
          </div>
      </div>
  </div>
        <div class="footer">
            <div class="footer-list">
                <div class="container">
                    <div class="col-sm-4">
                        <h4>Happy Child</h4>
                        <h5>Experienced Trainers</h5>
                        <h5>Best Child Health Care Practices</h5>
                    </div>
                    <div class="col-sm-4">
                        <div></div>
                        <h5> Copyright &copy 2019: <a href="#" title="Happy-Childcare">happychildcare.com</a></h5>
                    </div>
                    <div class="col-sm-4">
                        <h4>Happy Child</h4>
                        <h5>Open on weekdays From 8AM - 5PM</h5>
                        <h5>Weekends From 10AM - 6PM</h5>
                    </div>
                </div>
            </div>
        </div>
<script src="static/js/register.js"></script>
<script src="static/js/login.js"></script>
<script type="text/javascript">
</body>
</html>
<?php
include ("messages.php");
?>
