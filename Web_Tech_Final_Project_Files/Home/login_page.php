<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- bootstrap4 cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />

    <link rel="stylesheet" href="Home_page.css" />


    <style>
    /*  all .all-browsers for form login and sign up  */
    .all-browsers {
        margin: 0 auto;
        padding: 5px;
        justify-content: center;
        background-color: rgb(0, 0, 0);
        width: 90%;
    }

    .button-select .signin-button {
        width: 45%;
        /* float: left; */
        margin-left: 5px;
        background-color: black;
        outline: none;
        border: none;
        color: aliceblue;
        font-size: 30px;
        font-weight: bold;
        text-decoration: underline;
    }

    .button-select .signup-button {
        width: 45%;
        /* float: right; */
        margin-right: 5px;
        background-color: black;
        outline: none;
        border: none;
        color: aliceblue;
        font-size: 30px;
        font-weight: bold;
    }

    .button-select {
        margin: 5px auto;
        padding: 10px 10px;

        /* justify-content: center; */
        background-color: rgba(0, 0, 0, 0);
        width: 60%;
    }

    .sign-in-div {
        margin: 5px auto;
        padding: 10px 10px;

        /* justify-content: center; */
        background-color: rgba(0, 0, 0, 0);
        width: 60%;
    }

    .sign-up-div {
        display: none;
        margin: 5px auto;
        padding: 10px 10px;

        /* justify-content: center; */
        background-color: rgb(0, 0, 0);
        width: 60%;
    }

    .sign-up-form {
        background-color: rgb(0, 0, 0);
        margin: auto;
        width: 100%;
        /* padding: 10px 20px; */
        line-height: 0px;

        /* justify-content: center; */
    }

    .sign-up-form label {
        color: rgb(165, 141, 7);
        padding: 15px 5px;
        font-size: 20px;
        font-weight: bold;
    }

    .sign-up-form input {
        border-radius: 25px;
        padding: 10px 10px;
        width: 90%;
        font-size: 20px;
        background-color: black;
        color: rgb(199, 197, 197);
    }

    .sign-up-form input:focus {
        border: none;
        outline: none;
        background-color: rgb(44, 43, 43);
    }

    .sign-up-form .button-class {
        text-align: center;

    }

    .sign-up-form .submit-button {
        background-color: blue;
        width: 200px;
        height: 40px;
        margin: 0px auto;
        text-align: center;
    }

    .sign-up-form .submit-button:hover {
        color: rgb(233, 62, 62);
        font-weight: bold;
        box-shadow: 0 8px 8px -4px lightblue;
    }
    </style>






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#signin-button").click(function() {
            $("#sign-in-div").css("display", "block");
            $("#sign-up-div").css("display", "none");
            $("#signup-button").css("text-decoration", "none");
            $("#signin-button").css("text-decoration", "underline");
        });
    });
    $(document).ready(function() {
        $("#signup-button").click(function() {
            $("#sign-in-div").css("display", "none");
            $("#sign-up-div").css("display", "block");

            $("#signup-button").css("text-decoration", "underline");
            $("#signin-button").css("text-decoration", "none");
        });
    });
    </script>

    <!-- mags -->


</head>

<body>
    <div class="all" style="background-color: blanchedalmond;width: 95%;">


        <header class="bg-primary">
            <nav class="
            navbar navbar-expand-sm
            nevbar-backgound-color
            navbar-dark
            fixed-top
          ">
                <a href="#" class="navbar-brand" id="iconid">
                    <img src="logo.png" style="width: 40px;height: 40xp; border-radius: 50px; margin-left: 40%"
                        alt="img" />
                </a>


                <p id="websiteLogoName"
                    style="color: aliceblue;margin: 20px 10px;font-size: 30px;font-weight: bold; cursor: pointer;">
                    RATAS</p>


                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">


                    <ul class="navbar-nav ml-auto">



                        <li class="nav-item">
                            <a class="nav-link" href="">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#" id="m">Members</a>

                            <!-- <div class="dropdown-content">

                                <a id="aman">Md. amanullha</a>

                                <a href="#">Tarikul Isam</a>
                                <a href="#">Md. Rahimuzzaman</a>
                                <a href="#">Sumit Charaborty</a>
                                <a href="#">Amatun Noor</a>
                            </div> -->


                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="login_page.php">Login</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </header>
    </div>











    <main class="body-section" id="mainbody">

        <div class="FontBody d-block d-lg-fled ">
            <div class="all-browsers">
                <!-- button head html start   -->

                <div class="button-select">
                    <button class="signin-button" id="signin-button" name="signin-button">
                        <span id="singin_button_span">Sign In</span>
                    </button>
                    <button class="signup-button" id="signup-button" name="signup-button">
                        <span id="singup_button_span">Sign Up</span>
                    </button>
                </div>
                <!-- button head html end   -->
                <!-- sign in form start   -->
                <div class="sign-in-div" id="sign-in-div">
                    <form class="sign-up-form" action="login.php" method="post">
                        <div class="form-group">
                            <label>Email</label>
                            <br />
                            <input type="email" name="email" class="email-input" placeholder="Enter a email" required />
                        </div>
                        <br />
                        <div class="form-group">
                            <label>Password</label>
                            <br />
                            <input type="password" name="password" class="password-input"
                                placeholder="Create a password" required />
                        </div>

                        <br />
                        <div class="button-class">
                            <input type="submit" class="submit-button" name="submit" value="SIGN IN" />
                        </div>

                        <br />
                        <div class="hr" style="width: 90%; margin: 0px auto">
                            <hr />
                        </div>
                        <div class="foot" style="text-align: center">
                            <label for="tab-1" id="forgotpass" onMouseOver="this.style.color='#0F0'"
                                onMouseOut="this.style.color='#A68D07'" style="cursor:pointer">Forgot
                                Password?</label>
                        </div>
                    </form>
                </div>
                <!-- sign in form end  -->
                <!--sign up form start   -->
                <div class="sign-up-div" id="sign-up-div">
                    <form class="sign-up-form" name="signupform" action=" insert.php" method="post"
                        onsubmit="return validation()">
                        <div class="form-group">
                            <label>First Name</label>
                            <br />
                            <input type="text" name="firstName" class="fname-input" placeholder="Enter first"
                                required />
                        </div>
                        <br />
                        <div class="form-group">
                            <label>Last Name</label>
                            <br />
                            <input type="text" name="lastName" class="lname-input" placeholder="Enter last" required />
                        </div>
                        <br />
                        <div class="form-group">
                            <label>Email</label>
                            <br />
                            <input type="email" name="email" class="email-input" placeholder="Enter a email" required />
                        </div>
                        <br />
                        <div class="form-group">
                            <label>Pssword</label><span id='message2'></span>
                            <br />
                            <input type="password" id="password" name="password" class="password-input"
                                placeholder="Create a password" required />
                        </div>
                        <br />
                        <div class="form-group">
                            <label>Re-pssword</label><span id='message'></span>
                            <br />
                            <input type="password" id="repassword" name="password" class="password-input"
                                placeholder="Re-password" required />


                        </div>



                        <script>
                        $('#password, #repassword').on('keyup', function() {
                            if ($('#password').val() == $('#repassword').val()) {
                                $('#message').html('Matching').css('color', 'green');
                            } else
                                $('#message').html('Not Matching').css('color', 'red');
                        });
                        $('#password, #repassword').on('keyup', function() {
                            if ($('#password').val().length > 4) {
                                $('#message2').html('').css('color', 'green');
                            } else
                                $('#message2').html('Length must be 5 or more').css('color', 'red');
                        });
                        </script>






                        <br />
                        <div class="button-class">
                            <input type="submit" class="submit-button" name="submit" value="SIGN UP" />
                        </div>

                        <br />
                        <div class="hr" style="width: 90%; margin: 0px auto">
                            <hr />
                        </div>
                        <div class="foot" style="text-align: center">
                            <label for="tab-1">Already a Member?</label>
                        </div>
                    </form>
                </div>
                <!-- sign up form end   -->
            </div>
        </div>




        <div class="leftcolumn d-block d-lg-fled">
            <div class="card d-block d-lg-fled">
                <h2>WELCOME</h2>
                <h5>To The Web Technology Project</h5>
                <div class="fakeimg">
                    <img src="web_pic.jpg" alt="an image" style="width: 100%;">
                </div>
                <p>Course code : CSE 480</p>

                <p>
                    Sunt in culpa qui officia deserunt mollit anim id est laborum
                    consectetur
                </p>
            </div>

            <div class="card d-block d-lg-fled">
                <h2 style="text-align: center">Projects</h2>
                <br />
                <!-- features starts  -->
                <section id="features" class="text-center">
                    <div class="row">
                        <div class="col-lg-4 d-block d-lg-flex">
                            <div class="features-col">
                                <i class="
                        fas
                        fa-hand-holding-usd fa-3x
                        icon-style
                        rounded-circle
                      "></i>
                                <h5 class="font-weight-bold">Contack Management System</h5>
                                <p class="small">
                                    In this system all User contact will keep safe and manageable. User will be able to
                                    create new contack info and also cant add new contact to his/her contact and ....
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 d-block d-lg-flex">
                            <div class="features-col">
                                <i class="
                        fas
                        fa-hand-holding-usd fa-3x
                        icon-style
                        rounded-circle
                      "></i>
                                <h5 class="font-weight-bold">Mini Messenger</h5>
                                <p class="small">
                                    In this project we had design the data base with Messenger information. and then we
                                    create some table based on the data set and implement and test with some run
                                    query....
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 d-block d-lg-flex">
                            <div class="features-col">
                                <i class="
                        fas
                        fa-hand-holding-usd fa-3x
                        icon-style
                        rounded-circle
                      "></i>
                                <h5 class="font-weight-bold">IoT based waste management system</h5>
                                <p class="small">
                                    This system is mainly developed for Dhaka city. It always seems that wastages cannot
                                    manage properly in Dhaka city...
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- features ends  -->
                <br />
                <!-- features starts  -->
                <section id="features" class="text-center">
                    <div class="row">
                        <div class="col-lg-4 d-block d-lg-flex">
                            <div class="features-col">
                                <i class="
                        fas
                        fa-hand-holding-usd fa-3x
                        icon-style
                        rounded-circle
                      "></i>
                                <h5 class="font-weight-bold">Online bus ticket reservation system</h5>
                                <p class="small">
                                    This is an online database system where travellers can easily purchase their ticket.
                                    It will help them to avoid unnecessary hassle to purchase ticket by standing..
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 d-block d-lg-flex">
                            <div class="features-col">
                                <i class="
                        fas
                        fa-hand-holding-usd fa-3x
                        icon-style
                        rounded-circle
                      "></i>
                                <h5 class="font-weight-bold">Pharmacy Management System In Visual Studio</h5>
                                <p class="small">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Ratione veritatis deserunt commodi, blanditiis deleniti
                                    atque.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 d-block d-lg-flex">
                            <div class="features-col">
                                <i class="
                        fas
                        fa-hand-holding-usd fa-3x
                        icon-style
                        rounded-circle
                      "></i>
                                <h5 class="font-weight-bold">Bookaholic Circle</h5>
                                <p class="small">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Ratione veritatis.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- features ends  -->
            </div>
        </div>

        <div class="rightcolumn d-block d-lg-fled">
            <div class="card d-block d-lg-fled">
                <h2>About This Site</h2>
                <div class="fakeimg" style="height: 100px">
                    <img src="html-css.webp" alt="an image" style="width: 100%;height: 100%;">
                </div>
                <p>
                    This site completed with some languages. such as HTML, CSS, BOOTSTRAP, J_QUERY, JAVASCRIPT,PHP and
                    MYSQL.
                </p>
            </div>

            <div class="card d-block d-lg-fled">
                <h3>Members Galary</h3>
                <div class="fakeimg">
                    <img src="photo/aman.JPG" alt="aman's photo" style="width: 45%;height:100px;">
                    <img src="photo/mukut.jpg" alt="aman's photo" style="width: 45%;height:100px;">
                    <img src="photo/tarikul.jpg" alt="aman's photo" style="width: 45%;height:100px;">
                    <img src="photo/amatunnoor.jpg" alt="aman's photo" style="width: 45%;height:100px;">
                    <img src="photo/sumit.jpg" alt="aman's photo" style="width: 45%;height:100px;">

                </div>

            </div>

            <div class="card d-block d-lg-fled">
                <h3>Write Your Feedback</h3>

                <div class="feedback-form">
                    <form action="login_page.php">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="Enter Your Email" requird />

                        <label for="subject">Subject</label>
                        <textarea id="subject" name="subject" placeholder="Write something.." style="height: 200px"
                            requird></textarea>

                        <input type="submit" value="Submit" />
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- <footer class="footer">
        <h2>Footer</h2>
      </footer> -->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>We</h4>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">our services</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">returns</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">

                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 50px;">
                <h6 style="color: rgb(125, 126, 128);">All Right Reserved by &copy;RATAS 2021</h3>
            </div>
        </div>
    </footer>
    </div>







    <!-- bootstrap js, jquery, popper -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>







    <!-- <script>
    function validation() {
        var ps1 = document.signupform.form - group.password.value;
        var ps2 = document.signupform.form - group.repassword.value;
        if (ps1.length == "") {
            alert("Password fields are empty");
            return false;
        }
        if (ps2.length == "") {
            alert("Password fields are empty");
            return false;
        }
        if (ps1 != ps2) {
            alert("Both password are not same!");
            return false;
        }
    }
    </script> -->









</body>

</html>