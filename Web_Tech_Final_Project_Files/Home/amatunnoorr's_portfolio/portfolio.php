<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
      * {
        box-sizing: border-box;
      }
      body {
        font-family: "Lato", sans-serif;
      }

      /* Style the tab */
      .tab {
        float: left;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
        width: 30%;
        height: 300px;
      }

      /* Style the buttons inside the tab */
      .tab button {
        display: block;
        background-color: inherit;
        color: white;
        padding: 22px 16px;
        width: 100%;
        border: none;
        outline: none;
        text-align: left;
        cursor: pointer;
        transition: 0.3s;
        font-size: 17px;
      }

      /* Change background color of buttons on hover */
      .tab button:hover {
        background-color: #ddd;
      }

      /* Create an active/current "tab button" class */
      .tab button.active {
        background-color: #ccc;
      }

      /* Style the tab content */
      .tabcontent {
        float: left;
        padding: 0px 12px;
        width: 70%;
        border-left: none;
        height: 300px;
      }

      ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #111111;
      }

      li {
        float: Right;
      }

      li a {
        display: block;
        color: white;
        text-align: center;
        padding: 16px;
        text-decoration: none;
      }

      li a:hover {
        background-color: Orange;
      }

      .sidebar {
        height: 100%;
        width: 160px;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        padding-top: 50px;
      }

      .sidebar a {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 20px;
        color: #818181;
        display: block;
      }

      .sidebar a:hover {
        color: Orange;
      }

      .navbar {
        overflow: hidden;
        background-color: #333;
        position: fixed;
      }

      .navbar a {
        float: right;
        font-size: 16px;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }

      .dropdown {
        float: right;
        overflow: hidden;
      }

      .dropdown .dropbtn {
        font-size: 16px;
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
      }

      .navbar a:hover,
      .dropdown:hover .dropbtn {
        background-color: orange;
      }

      .dropdown-content {
        display: none;
        position: absolute;
        background-color: orange;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
      }

      .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
      }

      .dropdown-content a:hover {
        background-color: white;
      }

      .dropdown:hover .dropdown-content {
        display: block;
      }

      .grid {
        display: grid;
        width: 114em;
        grid-gap: 6rem;
        grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
        align-items: start;
        background-color: white;
        font-family: "Poppins", sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        box-sizing: border-box;
        font-size: 62.5%;
      }
      .grid-item {
        background-color: #fff;
        border-radius: 0.4rem;
        overflow: hidden;
        box-shadow: 0 3rem 6rem rgba(0, 0, 0, 0.1);
        cursor: pointer;
        transition: 0.2s;
      }
      .grid-item:hover {
        transition: translateY(-0.5%);
        box-shadow: 0 4rem 8rem rgba(0, 0, 0, 0.5);
      }
      .card-img {
        display: block;
        width: 100%;
        height: 20rem;
        object-fit: cover;
      }

      .card-content {
        padding: 3rem;
      }

      .card-header {
        font-size: 3rem;
        font-weight: 500;
        color: #0d0d0d;
        margin-bottom: 1.5rem;
      }
      .card-text {
        font-size: 1.6rem;
        letter-spacing: 0.1rem;
        line-height: 1.7;
        color: #3d3d3d;
        margin-bottom: 2.5rem;
      }
      @media ONLY screen and(max-width:60em) {
        body {
          padding: 3rem;
        }

        .grid {
          grid-gap: 3rem;
        }
      }

      /* Slideshow container */
      .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
      }

      /* Next & previous buttons */
      .prev,
      .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
      }

      /* Position the "next button" to the right */
      .next {
        right: 0;
        border-radius: 3px 0 0 3px;
      }

      /* On hover, add a black background color with a little bit see-through */
      .prev:hover,
      .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
      }

      /* Caption text */
      .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
      }

      /* Number text (1/3 etc) */
      .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
      }

      /* The dots/bullets/indicators */
      .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
      }

      .active,
      .dot:hover {
        background-color: #717171;
      }

      /* Fading animation */
      .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
      }

      @-webkit-keyframes fade {
        from {
          opacity: 0.4;
        }
        to {
          opacity: 1;
        }
      }

      @keyframes fade {
        from {
          opacity: 0.4;
        }
        to {
          opacity: 1;
        }
      }

      /* On smaller screens, decrease text size */
      @media only screen and (max-width: 300px) {
        .prev,
        .next,
        .text {
          font-size: 11px;
        }
      }

      .IMG {
        vertical-align: middle;
        height: 200px;
        width: 200px;
      }
    </style>
  </head>
  <body style="background-color: black">
    <div class="portfolio" style="width: 98%">
      <div>
        <div id="Profile" class="tabcontent" style="padding-left: 200px">
          <p
            style="
              border: 2px solid Orange;
              border-radius: 8px;
              background-color: black;
              padding: 15px;
              color: Orange;
            "
          >
            Profile
          </p>
          <img
            style="
              height: 17rem;
              width: 17rem;
              border-radius: 50%;
              object-fit: cover;
              margin-bottom: 1rem;
              border: 0.7rem solid var(--yellow);
            "
            src="a.jpg"
          />
          <h3 style="color: Orange">Hi, I am Amatun Noor</h3>
          <p style="color: white">
            I am final year CSE student. Beside doing programming and studying,
            I love to do crafting and drawing.
          </p>
          <br />

          <a
            href="https://www.facebook.com/people/Amatun-Noor/100008774616376/"
          >
            <img src="facebook.png" />
          </a>

          <a href="https://www.instagram.com/princess.amatun/">
            <img src="instagram.png" />
          </a>

          <a href="https://github.com/Amatun-Noor">
            <img src="github.png" />
          </a>

          <a href="mailto:amatun.noor.cse@ulab.edu.bd">
            <img src="email.png" />
          </a>

          <p
            id="pj"
            style="
              border: 2px solid Orange;
              border-radius: 8px;
              background-color: black;
              padding: 15px;
              color: Orange;
              margin-right: 20px;
            "
          >
            Projects
          </p>

          <div style="margin: 0; padding: 0" class="grid">
            <div class="grid-item">
              <div class="card">
                <table>
                  <tr>
                    <td>
                      <img
                        src="p1.jpg"
                        alt="Pharmacy Management Project"
                        style="width: 700px; height: 500px"
                        ;
                      />
                    </td>
                    <td>
                      <p></p>
                    </td>
                  </tr>
                </table>

                <div class="card-content">
                  <h1 class="card-header">
                    Pharmacy Management System In Visual Studio
                  </h1>
                </div>
              </div>
            </div>

            <br />
            <div class="grid-item">
              <div class="card">
                <table>
                  <tr>
                    <td>
                      <img
                        src="p2.jpg"
                        alt="Pharmacy Management Project"
                        style="width: 700px; height: 500px"
                        ;
                      />
                    </td>
                    <td></td>
                  </tr>
                </table>
                <div class="card-content">
                  <h1 class="card-header">Bookaholic Circle</h1>
                </div>
              </div>
            </div>
          </div>

          <p
            id="vd"
            style="
              border: 2px solid Orange;
              border-radius: 8px;
              background-color: black;
              padding: 15px;
              color: Orange;
              margin-right: 20px;
            "
          >
            Video
          </p>

          <h3 style="color: Orange">Video</h3>
          <p style="color: Orange">Kakashi Hatake</p>
          <video
            src="kakashi.mp4"
            width="620px"
            height="540px"
            controls
          ></video>

          <p
            id="sl"
            style="
              border: 2px solid Orange;
              border-radius: 8px;
              background-color: black;
              padding: 15px;
              color: Orange;
              margin-right: 20px;
            "
          >
            Slide Show
          </p>

          <div class="slideshow-container">
            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img id="IMG" src="1.jpg" style="width: 100%" />
              <div class="text">Midland Power House</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <img id="IMG" src="2.jpg" style="width: 100%" />
              <div class="text">Kaptai</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img id="IMG" src="3.jpg" style="width: 100%" />
              <div class="text">Kaptai</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>
          <br />

          <div style="text-align: center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
          </div>
        </div>
      </div>

      <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides((slideIndex += n));
        }

        function currentSlide(n) {
          showSlides((slideIndex = n));
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {
            slideIndex = 1;
          }
          if (n < 1) {
            slideIndex = slides.length;
          }
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex - 1].style.display = "block";
          dots[slideIndex - 1].className += " active";
        }
      </script>
    </div>
  </body>
</html>
