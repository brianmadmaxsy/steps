<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <title>STEPS Administrator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <script type="text/javascript" src="admin/LoginRegister/js/jquery-2.1.4.min.js"></script>
        
        <link rel="shortcut icon" href="../favicon.ico"> 

        <link rel="stylesheet" type="text/css" href="admin/LoginRegister/css/master.css" />
        <link rel="stylesheet" type="text/css" href="admin/LoginRegister/css/content.css" />
		<link rel="stylesheet" type="text/css" href="admin/LoginRegister/css/animate-custom.css" />
        
        <style type="text/css">
            .birthfield,.semester-class{
                
                height: 34px;
                padding: 6px 12px;
                font-size: 14px;
                line-height: 1.42857143;
                color: #555;
                background-color: #fff;
                background-image: none;
                border: 1px solid #ccc;
                border-radius: 4px;
                  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
                          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
                  -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
                       -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
                          transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            }
        </style>

        <script type="text/javascript">
        $(document).ready(function()
        {    
            $("#uname").keyup(function()
            {       
                var name = $(this).val();   
                
                if(name.length > 1)
                {       
                    $("#result").html('checking...');
                    
                    /*$.post("username-check.php", $("#reg-form").serialize())
                        .done(function(data){
                        $("#result").html(data);
                    });*/
                    
                    $.ajax({
                        
                        type : 'POST',
                        url  : 'checkadminusername.php',
                        data : $(this).serialize(),
                        success : function(data)
                                  {
                                     $("#result").html(data);
                                  }
                        });
                        return false;
                    
                }
                else
                {
                    $("#result").html('');
                }
            });
            
        });
        </script>
        
    </head>
    <body>
        <?php
        $display_message="";
        $message=Session::get('adminmessage');
        if($message!="" AND $message=="user not found")
        {
            $display_message="<font color='red'>"."Login Error: Administrator account not found!"."</font>";
        }
        else if($message!="" AND $message=="registration successful")
        {
            $display_message="<font color='green'>"."Admin Registration Successful!"."</font>";
        }
        else if($message!="" AND $message=="username already existed")
        {
            $display_message="<font color='red'>"."Username already existed!"."</font>";
        }
        else if($message!="" AND $message=="thank you for using steps")
        {
            $display_message="<font color='green'>"."Thank You for using STEPS!"."</font>";
        }
        else
        {
            $display_message="<font color='green'>"."Welcome to STEPS Administrator!"."</font>";
        }
        Session::forget('adminmessage');
        ?>
        <div class="container">
            
            <section>				
                <div id="container_demo" >
                    
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form method="post" action="/adminloginpost"> 
                                <div id="login_logo"><img src="Admin/LoginRegister/images/STEPS_logo.png" /></div> 
                                <p>
                                    {{ $display_message }}
                                </p>
                                <p> 
                                    <label for="username" class="uname" data-icon="u" style="color:#85363c;" >Username</label>
                                    <input id="username" name="username" required="required" type="text" placeholder="eg. JohnDoe123" style="border:1px solid #d7aeb2;" />
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p" style="color:#85363c;"> Password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" style="border:1px solid #d7aeb2;" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" name="submit" value="Login" /> 
								</p>
                                <p class="change_link">  
									<font color="#85363c">Register as University Administrator</font>
									<a href="#toregister" class="to_register" style="color:#85363c;">Sign Up</a>
								</p>
                            </form>
                        </div> <!-- End of Login form -->

                        <div id="register" class="animate form">
                            <form method="post" action="/adminregister"> 
                                <div id="login_logo"><img src="Admin/LoginRegister/images/STEPS_logo.png" /></div> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u" style="color:#85363c;" >First Name</label>
                                    <input id="usernamesignup" name="firstname" required="required" type="text" placeholder="ex. John" />
                                </p>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u" style="color:#85363c;" >Middle Name</label>
                                    <input id="usernamesignup" name="middlename" required="required" type="text" placeholder="ex. Moe" />
                                </p>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u" style="color:#85363c;" >Last Name</label>
                                    <input id="usernamesignup" name="lastname" required="required" type="text" placeholder="ex. Doe" />

                                </p>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u" style="color:#85363c;" >Username</label>
                                    <input id="uname" name="username" required="required" type="text" placeholder="mysuperusername690" />
                                    <span id="result"></span>
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p" style="color:#85363c;" >Password </label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p" style="color:#85363c;" >Confirm Password </label>
                                    <input id="passwordsignup" name="confirmpassword" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p>
                                    <label for="emailsignup" class="youmail" style="color:#85363c;" >Birthday</label>
                                        <select name="birth-month" class="birthfield" required="">
                                            <option> - Month - </option>
                                            <option value="January">January</option>
                                            <option value="Febuary">Febuary</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="November">November</option>
                                            <option value="December">December</option>
                                        </select>
                                        <select name="birth-day" class="birthfield" required="">
                                            <option> - Day - </option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>

                                    <input type="text" name="birth-year" class="birthfield" placeholder="ex. 1968" style=" width:100px;padding:0px 0px 0px 10px;" required="">
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" style="color:#85363c;" >Email</label>
                                    <input id="emailsignup" name="email" required="required" type="text" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="u" style="color:#85363c;" >Contact </label>
                                    <input id="emailsignup" name="contact" required="required" type="text" placeholder="12345678901"/> 
                                </p>
                                <p>
                                    <label for="emailsignup" class="youmail" style="color:#85363c;" >Department</label>
                                    <select name="department" class="semester-class" required="">
                                        <option value="College of Computer Science">College of Computer Science</option>
                                        <option value="College of Engineering">College of Engineering</option>
                                        <option value="College of Nursing">College of Nursing</option>
                                        <option value="Student Affairs Office">Student Affairs Office</option>
                                        <option value="Office of Academic Scholarship">Office of Academic Scholarship</option>
                                        <option value="Guidance Office">Guidance Office</option>
                                        <option value="ETO">ETO</option>
                                        <option value="STEPS">STEPS</option>
                                    </select>
                                </p>
                                <p>
                                    <label for="emailsignup" class="youmail" style="color:#85363c;" >Position</label>
                                    <select name="position" class="semester-class" required="">
                                        <option value="Department Head">Department Head</option>
                                        <option value="Department Assistant">Department Assistant</option>
                                        <option value="Department Secretary">Department Secretary</option>
                                        <option value="College Dean">College Dean</option>
                                        <option value="College Chairperson">College Chairperson</option>
                                        <option value="Faculty">Faculty</option>
                                        <option value="Working Staff">Working Staff</option>
                                        <option value="Master Administrator">Master Administrator</option>
                                    </select>
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="u" style="color:#85363c;" >Past University/College</label>
                                    <input id="emailsignup" name="pastuniversity" required="required" type="text" placeholder="ex. CIT University, USJR, USC, ACT, etc"/> 
                                    <small><font color="#85363c">(If many, please separate using comma ",")</font></small>
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="u" style="color:#85363c;" >Education Attained</label>
                                    <input id="emailsignup" name="education" required="required" type="text" placeholder="ex. MIT, BSIT, MBA, BSBA" /> 
                                    <small><font color="#85363c">(If many, please separate using comma ",")</font></small>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register" style="color: #87313b;"> Go and log in </a>
								</p>
                            </form>
                        </div> <!-- End of Register form -->
					</div><!-- End of Wrapper -->
                </div> <!--End of container_demo -->
            </section>
        </div> <!-- End of container -->
    </body>
</html>