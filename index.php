<!DOCTYPE html>
<html>
    <head>
        <title>Niks Health care center</title>
        <body>
            <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:wght@500;600&family=Otomanopee+One&family=Playfair+Display&display=swap" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&family=Playfair+Display&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="./css/original.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&display=swap" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&display=swap" rel="stylesheet">

           <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Tangerine">
            <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
            <bodyody>
                <!DOCTYPE html>
                <html>
                <head>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <style>
                * {box-sizing: border-box;}
                body {font-family: Verdana, sans-serif;}
                .mySlides {display: none;}
                
                
                /* Slideshow container */
                .slideshow-container {
                 height: 660px;
                  position: relative;
                  overflow: hidden;
                  
                }
                /* The dots/bullets/indicators */
                .dot {
                  height: 15px;
                  width: 15px;
                  margin: 0 2px;
                  background-color: #bbb;
                  border-radius: 50%;
                  display: inline-block;
                  transition: background-color 0.6s ease;
                }
                .newtext{
                  display:flex;
                  flex-direction: column;
                  position: absolute;
                  text-align: center;
                  top: 20%;
                  color: rgb(65, 65, 13);
                  text-shadow: 5px 5px 5px 5px black;
                }
                
                .active {
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
                  from {opacity: .4} 
                  to {opacity: 1}
                }
                
                @keyframes fade {
                  from {opacity: .4} 
                  to {opacity: 1}
                }
                
                
                /* On smaller screens, decrease text size */
                @media only screen and (max-width: 300px) {
                  .text {font-size: 11px}
                }
                </style>
                </head>
                <body>
                <div class="slideshow-container">
                
                <div class="mySlides fade">
                  <img src="./Images/nurse1.jpg" style="width:100%">
                <div class="newtext">
                  <h2>Reclaim The Outdoors</h2>
                  <p>Test your allergies to take a hike! with the<br>latest allergy testing technology.Niks care<br>is here to treat allergy symptoms that range<br>from mildly annoying to life threatnening</p>
                </div>
                </div>
                
                <div class="mySlides fade">
                  <img src="./Images/nurses2.jpg" style="width:100%">
                  <div class="text"></div>
                </div>
                
                <div class="mySlides fade">
                  <img src="./Images/health.jpg" style="width:100%">
                </div>
                
                </div>
                <br>
                
                <div style="text-align:center">
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                </div>
                
                <script>
                var slideIndex = 0;
                showSlides();
                
                function showSlides() {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("dot");
                  for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                  }
                  slideIndex++;
                  if (slideIndex > slides.length) {slideIndex = 1}    
                  for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex-1].style.display = "block";  
                  dots[slideIndex-1].className += " active";
                  setTimeout(showSlides, 4000); // Change image every 2 seconds
                }
                </script>
                
                </body>
                </bodyody>
                </html> 
            <div class="hero">
                <div class="nav-bar">
                    <div class="nav-logo">
                        <img src="./images/nurselogo.jpg" class="nav-logo">
                    </div>
                    <div class="nav-links">
                        <button type="buutton" class="btn"><a href="../HTML/neweb.html">SIGN UP</a></button>
                        <button type="buutton" class="btn"><a href="../HTML/neweb.html">LOG IN</a></button>
                        <ul>.
                            <a href="#"><li>HOME</li></a>
                            <a href="#"><li>ABOUT US</li></a>
                            <a href="#"><li>CONTACT US</li></a>
                        </ul>
                    </div>
                </div>
                
          <div class="banner-title">
              <h1>Health<span> is ultimate power<br></span> and wealth</h1>
              <button type="button" class="btn">Know more</button>
          </div>
            </div>
            <header>
                <section class="about">
                  
                <div class="About-us">          
                    <h1>ABOUT US</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quo libero autem iure<br> totam cumque, accusantium dignissimos, possimus quis <br>laboriosam cupiditate. Eos ratione tenetur vitae perferendis, reprehenderit<br> rerum non fugiat. Voluptatum provident quaerat recusandae eos! Tenetur incidunt, voluptates, qui velit<br> impedit asperiores expedita odit nam vitae totam et repudiandae<br> exercitationem. Perferendis est repellat, saepe aperiam ex dignissimos<br> soluta nihil quidem, voluptate eveniet eum odit. Dolore facilis doloremque fugiat soluta esse<br> aliquid velit nesciunt itaque labore omnis delectus minus<br> sapiente, quaerat necessitatibus, architecto dolorem corrupti.<br> Nemo doloribus provident ab possimus laboriosam neque, vero qui<br> atque molestias inventore recusandae alias consequatur voluptates.</p> 
                </div>
                <img src="./images/animation1.jpg" class="animation">
            </section>
            <div class="middle">
               <h1>Covid-19 Resources</h1>
            </div>
            <section class="covid19">
                <section class="covid-info">
                    <div class="covid-texts">
                        <h1>Covid-19<br>Testing</h1>
                        <p>Get tested for COVID-19 at any of our<br> urgent care clinics (via walk-in only)<br> or COVID-19 Testing Clinics (via<br> appointment only). Rapid swab tests<br> and antibody blood tests are<br> available.</p>
                        <button type="buutton" class="btens"><a href="">Choose Niks For Healthcare</a></button>
                    </div>
                    <div class="covid-texts">
                        <h1>COVID-19 <br>Vaccines</h1>
                        <p>Get tested for COVID-19 at any of our<br> urgent care clinics (via walk-in only)<br> or COVID-19 Testing Clinics (via<br> appointment only). Rapid swab tests<br> and antibody blood tests are<br> available.</p>
                        <button type="buutton" class="btens"><a href="">Choose Niks For Healthcare</a></button>
                    </div>
                    <div class="covid-texts">
                        <h1> Patients <br>Portal</h1>
                        <p>Get tested for COVID-19 at any of our<br> urgent care clinics (via walk-in only)<br> or COVID-19 Testing Clinics (via<br> appointment only). Rapid swab tests<br> and antibody blood tests are<br> available.</p>
                        <button type="buutton" class="btens"><a href="">Choose Niks For Healthcare</a></button>
                    </div>
                </section>
            </section>
            <section class="course">
               
                <h1>Services we Offer</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, commodi.</p>
            <div class="row">
                <div class="course-col">
                    <img src="./images/pointer 2.jpg">
                </div>
                <div class="course-col">
                    <h3>Intermediate</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium doloremque alias quibusdam voluptate molestiae perferendis, accusamus, officiis incidunt eius reiciendis repellat delectus! Excepturi dicta explicabo obcaecati vel tenetur similique deleniti.</p>
                </div>
                <div class="course-col">
                    <h3>Heatlth care</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum, nisi dolorum voluptates quos, consequatur ad dicta alias eius, dignissimos qui rerum voluptatibus animi quam laboriosam recusandae asperiores. Alias, qui suscipit!</p>
                </div>
                <div class="course-col">
                    <h3>clinic</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius, perferendis vero neque nobis quidem consectetur, quo perspiciatis blanditiis, ullam dolorum porro! Pariatur doloremque laborum rerum quas voluptatibus, consequatur natus in!</p>
                </div>
            </div>
            </section>
            <section class="we">
      
        <div class="imge">
            <h2>At Niks health center our core factor is to satisfy and help our patients</h2>
            <img src="./images/hospital3.jpg">
        </div>  
        <div class="form">
            <input type="text" class="hero-input" placeholder="Name">
            <input type="email" class="hero-input" placeholder="Email">
        </div>
    </section>
    <div class="form2">
        <input type="tel" class="hero-input" placeholder="Phone number">
        <input type="text" class="hero-input2" placeholder="Address">
        <input type="text" class="descript" placeholder="Health description">
        <a href="index.html"> <p>Submit Now</p></a>
    </div>
    <section class="bio">
        <h2>Why Choose Niks Healthcare Center?</h2>
    </section>
        <div class="bio1">
        <div class="bio2">
            <svg width="50" height="50" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M13.7 4.054c-.354.568-.982.946-1.7.946-1.104 0-2-.896-2-2s.896-2 2-2c.759 0 1.42.424 1.759 1.047 2.59.295 4.386 1.786 4.233 4.239-.185 2.859-3.294 7.619-6.001 9.69-.097 1.073-.709 2.232-1.794 2.908.993 1.609 2.536 2.285 4.218 2.087 1.629-.191 3.144-1.366 3.96-2.693-.836-.641-1.375-1.647-1.375-2.778 0-1.932 1.568-3.501 3.5-3.501 1.931 0 3.5 1.569 3.5 3.501 0 1.936-1.597 3.601-3.728 3.491-1.155 2.132-3.601 4.009-6.352 4.009-2.713 0-4.791-1.497-5.92-4.001-1.053-.631-1.829-1.937-1.985-3.029-2.775-2.138-6.015-7.171-6.015-9.963 0-2.382 1.875-3.682 4.24-3.957.338-.625 1-1.05 1.76-1.05 1.104 0 2 .896 2 2s-.896 2-2 2c-.715 0-1.343-.376-1.696-.941-2.05.299-2.552 1.287-2.19 2.732.633 2.567 3.605 6.868 5.908 8.121.757.416 1.193.421 1.96.002 2.726-1.483 5.981-6.697 6.018-8.858.022-1.288-1.029-1.821-2.3-2.002m6.8 12.946c-.828 0-1.5-.674-1.5-1.5 0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5c0 .826-.672 1.5-1.5 1.5"/></svg>
            <h3>More experience</h3>
<p>Every year, more than a million<br> people come to Niks healthcare center for care<br>Our highly specialized experts are<br> deeply experienced in treating rare and complex <br>conditions.</p>
        </div>
        <div class="bio2">
            <svg width="50" height="50" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M12 0c6.623 0 12 5.377 12 12s-5.377 12-12 12-12-5.377-12-12 5.377-12 12-12m0 2c5.52 0 10 4.481 10 10 0 5.52-4.48 10-10 10-5.519 0-10-4.48-10-10 0-5.519 4.481-10 10-10m0 1c4.967 0 9 4.033 9 9s-4.033 9-9 9-9-4.033-9-9 4.033-9 9-9m-.011 11.5c-.474.006-.765.448-.989.804-.483.767-1.005 1.58-1.455 2.264-.155.238-.325.43-.609.432-.285.002-.526-.343-.389-.632.366-.769 1.953-3.539 1.953-5.868 0-.806-.429-1-1-1h-2c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h9c.276 0 .5.224.5.5s-.224.5-.5.5h-2c-.57 0-1 .194-1 1 0 2.329 1.587 5.099 1.953 5.868.137.289-.103.634-.389.632-.284-.002-.454-.194-.609-.432-.45-.684-.973-1.497-1.455-2.264-.226-.359-.52-.806-1-.804h-.011zm.011-8.5c.828 0 1.5.672 1.5 1.5s-.672 1.5-1.5 1.5-1.5-.672-1.5-1.5.672-1.5 1.5-1.5"/></svg>
            <h3>More experience</h3>
<p>Every year, more than a million<br> people come to Niks healthcare center for care<br>Our highly specialized experts are<br> deeply experienced in treating rare and complex <br>conditions.</p>
        </div>
        <div class="bio2">
            <svg width="70" height="70" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M13.7 4.054c-.354.568-.982.946-1.7.946-1.104 0-2-.896-2-2s.896-2 2-2c.759 0 1.42.424 1.759 1.047 2.59.295 4.386 1.786 4.233 4.239-.185 2.859-3.294 7.619-6.001 9.69-.097 1.073-.709 2.232-1.794 2.908.993 1.609 2.536 2.285 4.218 2.087 1.629-.191 3.144-1.366 3.96-2.693-.836-.641-1.375-1.647-1.375-2.778 0-1.932 1.568-3.501 3.5-3.501 1.931 0 3.5 1.569 3.5 3.501 0 1.936-1.597 3.601-3.728 3.491-1.155 2.132-3.601 4.009-6.352 4.009-2.713 0-4.791-1.497-5.92-4.001-1.053-.631-1.829-1.937-1.985-3.029-2.775-2.138-6.015-7.171-6.015-9.963 0-2.382 1.875-3.682 4.24-3.957.338-.625 1-1.05 1.76-1.05 1.104 0 2 .896 2 2s-.896 2-2 2c-.715 0-1.343-.376-1.696-.941-2.05.299-2.552 1.287-2.19 2.732.633 2.567 3.605 6.868 5.908 8.121.757.416 1.193.421 1.96.002 2.726-1.483 5.981-6.697 6.018-8.858.022-1.288-1.029-1.821-2.3-2.002m6.8 12.946c-.828 0-1.5-.674-1.5-1.5 0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5c0 .826-.672 1.5-1.5 1.5"/></svg>
            <h3>More experience</h3>
<p>Every year, more than a million<br> people come to Niks healthcare center for care<br>Our highly specialized experts are<br> deeply experienced in treating rare and complex <br>conditions.</p>
</div>
        </div>
        <div class="button">
            <button type="buutton" class="btns"><a href="">Choose Niks For Healthcare</a></button>
        </div>
        <section class="location">
            <div class="head">
                <h1>Niks healthcenter locations</h1>
            </div>
            <div class="location-images">
                <div class="location-img">
                    <img src="./images/clinic 1.webp" class="locate-img" alt="">
                    <h2>Niks healthcenter at ottaway</h2>
                </div>
                <div class="location-img">
                    <img src="./images/clinic 2.webp" class="locate-img" alt="">
                    <h2>Niks healthcenter at Montana</h2>
                </div>
                <div class="location-img">
                    <img src="./images/clinic 3.webp" class="locate-img" alt="">
                    <h2>Niks healthcenter at Ojota</h2>
                </div>
                <div class="location-img">
                    <img src="./images/clinic 4.webp" class="locate-img" alt="">
                    <h2>Niks healthcenter at ikeja</h2>
                </div>
            </div>
        </section>
        </header>
        <footer>
            <section class="footer-1">
                <div class="footer-text">
                    <h2><span>Covid 19</span> Testing for infection or Exposure</h2><button type="buutton" class="butn"><a href="">Learn More</a></button>
                </div>
            </section>

            <section class="conclusionContainer">
                <section class="child1">
                    <div class="div1">
                        <img src="./images/nurselogo.jpg" alt="" class="logo-jpg" >
                        <p>Our Vision – We strive to be a leader of healthcare<br> innovation that delivers the highest quality care while<br> providing exceptional patient experiences in a modern<br> and inviting environment.  </p>
                   <img src="./images/Nurse logo2.png" alt="">
                    </div>
                    <div class="div2">
                        <h2>Services And Treatments</h2>
                   <a href="">Covid-19</a>
                   <a href="">Urgent care</a>
                   <a href="">Direct Primary care</a>
                   <a href="">Niks Care Kids</a>
                   <a href="">Allergy Testing And Treatments</a>
                    </div>
                    <div class="div3">
                        <h2>About Us</h2>
                        <a href="">Careers</a>
                        <a href="">Insurance</a>
                        <a href="">Contact</a>
                        <a href="">Employee Portal</a>
                    </div>
                    <div class="div4">
                        <h2>Newsletter</h2>
                        <p>Sign Up for medical news and updates</p>
                 <input type="text" placeholder="Search Here" class="inputed">
                     <h3>Follow us</h3>
                    </div>
                </section>
                <section class="child2">
                  <h3>  @copyright Philip Ottu a.k.a Optimistic Philip</h3>
                </section>
            </section>




        </footer>

        
        <!-- </footer> -->
        </body> 
    </head>
</html>
