<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- bootstrap4 cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />


    <link rel="stylesheet" href="Home_page.css" />




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#aman").click(function() {
            $("#iaman").css("display", "block");
            $("#mainbody").css("display", "none");
            $("#imukut").css("display", "none");
            $("#iamtunnoor").css("display", "none");
            $("#itarikul").css("display", "none");
            $("#isumit").css("display", "none");

        });


    });
    $(document).ready(function() {
        $("#mukut").click(function() {
            $("#imukut").css("display", "block");
            $("#mainbody").css("display", "none");
            $("#iaman").css("display", "none");
            $("#iamtunnoor").css("display", "none");
            $("#itarikul").css("display", "none");
            $("#isumit").css("display", "none");

        });


    });
    $(document).ready(function() {
        $("#amatunnoor").click(function() {
            $("#iamtunnoor").css("display", "block");
            $("#mainbody").css("display", "none");
            $("#iaman").css("display", "none");
            $("#imukut").css("display", "none");
            $("#itarikul").css("display", "none");
            $("#isumit").css("display", "none");

        });


    });
    $(document).ready(function() {
        $("#tarikul").click(function() {
            $("#itarikul").css("display", "block");
            $("#mainbody").css("display", "none");
            $("#iaman").css("display", "none");
            $("#iamtunnoor").css("display", "none");
            $("#imukut").css("display", "none");
            $("#isumit").css("display", "none");

        });


    });
    $(document).ready(function() {
        $("#sumit").click(function() {
            $("#isumit").css("display", "block");
            $("#itarikul").css("display", "none");
            $("#mainbody").css("display", "none");
            $("#iaman").css("display", "none");
            $("#iamtunnoor").css("display", "none");
            $("#imukut").css("display", "none");


        });


    });

    // contact script start

    $(document).ready(function() {
        $("#csumit").click(function() {
            $("#icsumit").css("display", "block");
            $("#ictarikul").css("display", "none");
            $("#icaman").css("display", "none");
            $("#icamtunnoor").css("display", "none");
            $("#icmukut").css("display", "none");
            $("#mainbody").css("display", "none");
            hideiframe();

        });


    });
    $(document).ready(function() {
        $("#caman").click(function() {
            $("#icaman").css("display", "block");
            $("#icsumit").css("display", "none");
            $("#ictarikul").css("display", "none");
            $("#icamtunnoor").css("display", "none");
            $("#icmukut").css("display", "none");
            $("#mainbody").css("display", "none");
            hideiframe();

        });


    });
    $(document).ready(function() {
        $("#camatunnoor").click(function() {
            $("#icamatunnoor").css("display", "block");
            $("#icaman").css("display", "none");
            $("#icmukut").css("display", "none");
            $("#ictarikul").css("display", "none");
            $("#icsumit").css("display", "none");

            $("#mainbody").css("display", "none");

            hideiframe();
        });


    });
    $(document).ready(function() {
        $("#ctarikul").click(function() {
            $("#ictarikul").css("display", "block");
            $("#icaman").css("display", "none");
            $("#icsumit").css("display", "none");
            $("#icamtunnoor").css("display", "none");
            $("#icmukut").css("display", "none");
            $("#mainbody").css("display", "none");
            hideiframe();

        });


    });
    $(document).ready(function() {
        $("#cmukut").click(function() {
            $("#icmukut").css("display", "block");
            $("#icsumit").css("display", "none");
            $("#icaman").css("display", "none");
            $("#ictarikul").css("display", "none");
            $("#icamtunnoor").css("display", "none");

            $("#mainbody").css("display", "none");
            hideiframe();

        });


    });
    </script>




    <script>
    function hideiframe() {
        $("#isumit").css("display", "none");
        $("#itarikul").css("display", "none");
        $("#iaman").css("display", "none");
        $("#iamtunnoor").css("display", "none");
        $("#imukut").css("display", "none");
    }
    </script>





    <script>
    $(window).click((event) => {
        if (!$(event.target).closest('#element').length) {
            console.log("clicked");
        }
    });
    </script>

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
                <a href="Home_Page.php" class="navbar-brand" id="iconid">
                    <img src="logo.png" style="width: 40px;height: 40xp; border-radius: 50px; margin-left: 40%"
                        alt="img" />
                </a>


                <p id="websiteLogoName"
                    style="color: aliceblue;margin: 20px 10px;font-size: 30px;font-weight: bold;cursor:pointer"
                    onclick="window.location.href='Home_Page.php'">
                    RATAS</p>


                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">


                    <ul class="navbar-nav ml-auto">



                        <li class="nav-item">
                            <a class="nav-link" href="Home_Page.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#" id="m">Members</a>

                            <div class="dropdown-content">

                                <!-- <a href="aman's_portfolio/Portfolio.html" id="aman">Md. amanullha</a> -->
                                <a id="aman">Md. amanullha</a>
                                <a id="tarikul" href="#">Tarikul Isam</a>
                                <a id="mukut" href="#">Md. Rahimuzzaman</a>
                                <a id="sumit" href="#">Sumit Charaborty</a>
                                <a id="amatunnoor" href="#">Amatun Noor</a>
                            </div>


                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                            <div class="dropdown-content">

                                <!-- <a href="aman's_portfolio/Portfolio.html" id="aman">Md. amanullha</a> -->
                                <a id="caman">Md. amanullha</a>
                                <a id="ctarikul" href="#">Tarikul Isam</a>
                                <a id="cmukut" href="#">Md. Rahimuzzaman</a>
                                <a id="csumit" href="#">Sumit Charaborty</a>
                                <a id="camatunnoor" href="#">Amatun Noor</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login_page.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </header>
    </div>

    <!-- portfolio iframe  -->
    <iframe id="iaman"
        style="display: none; overflow: hidden;    display: none; padding-top: 200px;margin: 0px auto;outline: none;border:none"
        src="aman's_portfolio/Portfolio.html" width="95%" height="1200px"></iframe>
    <iframe id="imukut"
        style="display: none; overflow: hidden;    display: none; padding-top: 200px;margin: 0px auto;outline: none;border:none"
        src="mukut's_portfolio/portfolio.html" width="95%" height="1200px"></iframe>
    <iframe id="iamtunnoor"
        style="display: none; overflow: hidden;    display: none; padding-top: 200px;margin: 0px auto;outline: none;border:none"
        src="amatunnoorr's_portfolio/portfolio.php" width="95%" height="1200px"></iframe>
    <iframe id="itarikul"
        style="display: none; overflow: hidden;    display: none; padding-top: 200px;margin: 0px auto;outline: none;border:none"
        src="tarikul's_portfolio/portfolio.html" width="95%" height="1200px"></iframe>
    <iframe id="isumit"
        style="display: none; overflow: hidden;    display: none; padding-top: 200px;margin: 0px auto;outline: none;border:none"
        src="sumit's_portfolio/portfolio.html" width="95%" height="1200px"></iframe>


    <!-- Contact iframe  -->
    <iframe id="icaman"
        style="display: none; overflow: hidden;    display: none; padding-top: 200px;margin: 0px auto;outline: none;border:none"
        src="Contact/ContactAmanullah.php" width="95%" height="1200px"></iframe>
    <iframe id="icmukut"
        style="display: none; overflow: hidden;    display: none; padding-top: 200px;margin: 0px auto;outline: none;border:none"
        src="Contact/ContactRahimuzzaman.html" width="95%" height="1200px"></iframe>
    <iframe id="icamatunnoor"
        style="display: none; overflow: hidden;    display: none; padding-top: 200px;margin: 0px auto;outline: none;border:none"
        src="Contact/ContactAmatun.html" width="95%" height="1200px"></iframe>
    <iframe id="ictarikul"
        style="display: none; overflow: hidden;    display: none; padding-top: 200px;margin: 0px auto;outline: none;border:none"
        src="Contact/ContactTarikul.html" width="95%" height="1200px"></iframe>
    <iframe id="icsumit"
        style="display: none; overflow: hidden;    display: none; padding-top: 200px;margin: 0px auto;outline: none;border:none"
        src="Contact/ContactSumit.html" width="95%" height="1200px"></iframe>












    <main class="body-section" id="mainbody">

        <div class="FontBody d-block d-lg-fled ">
            <h2 id="WELLCOME">WELCOME</h2>
            <h5 id="WELLCOME2">To The Web Technology Project</h5>

            <p id="WELLCOME3">Course code : CSE 480</p>

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
                    <form action="url">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="Enter Your Email" requird />

                        <label for="subject">Subject</label>
                        <textarea id="subject" name="subject" placeholder="Write something.." style="height: 200px"
                            requird></textarea>

                        <input onclick="document.location=''" type="submit" value="Submit" />
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

                        <a title="Facebook" href="#"><i class="fab fa-facebook-f "></i></a>
                        <a title="Twitter" href="#"><i class="fab fa-twitter"></i></a>
                        <a title="Instagram" href="#"><i class="fab fa-instagram"></i></a>
                        <a title="Linkedin" href="#"><i class="fab fa-linkedin-in"></i></a>
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









</body>

</html>