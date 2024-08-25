<?php
@include "header.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="shortcut icon" href="blood.png" type="image/x-icon">
  <title>Hamro Blood Bank</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <link rel="stylesheet" href="./Style.css" />
  <link rel="stylesheet" href="./mobile-style.css">
</head>

<body>
  <header>
    
    <div class="container text-center">
      <div class="row">
        <div class="col-md-7 col-sm-12  text-white">
          <h6>WELCOME TO</h6>
          <h1>SMART BLOOD BANK</h1>
          <p>
            Be someone's lifeline; Donate blood.
            Donate blood responsibly, not on roads but at blood donation camps.
          </p>
          <a href="event.php"><button class="btn btn-light px-5 py-2 primary-btn">
            Get Involved
          </button></a>
          <a href="recipent.php"><button class="btn btn-light px-5 py-2 primary-btn">
            Request for receive
          </button></a>
        </div>
        <div class="col-md-5 col-sm-12  h-25">
          <img src="./assets/header-img.png" alt="Book" />
        </div>
      </div>
    </div>
  </header>
  <main>
    <section class="section-1">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-6 col-12">
            <div class="pray">
              <img src="./assets/index3.jpg" alt="Pray" class="" />
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="panel text-left">
              <h1>OUR MISSION</h1>
              <p class="pt-4">
              Our mission is to champion patient well-being and healthcare excellence through comprehensive Blood Management.
                
              </p>
              <p>
              We are committed to ensuring the safe, judicious 
               and efficient use of blood and blood products, tailored to individual patient needs. 
               By fostering a culture of education, innovation, and continuous improvement, we aim to enhance patient outcomes, minimize risks, and optimize resource utilization. Through collaborative partnerships and evidence-based practices, we strive to set new standards in transfusion medicine, 
               ultimately advancing the quality and safety of patient care.
              </p>
              <h1>WHO CAN DONATE?</h1>
              <p>You need to be 18-60 years old,weight 45kg or more and be fit and healthy</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <h1 style="text-align:center;font-size:46px;color:#ff512f;">Available Blood In Our Province Division </h1><br><br>
      <div class="map">
        <map name="av">
          <area shape="poly" coords="906 440 1109 447 1089 657 959 633 971 611 880 584" href="bloodgrp.php"/> 
          <!-- koshi -->
          
          
          <area shape='poly' coords='667 520 681 502 824 546 893 587 968 614 955 641 677 564 ' href='bloodgrp.php' alt='basket_icon' /> 
          <!-- madesh -->
          
          
          
          <area shape='poly' coords='738 387 907 438 882 572 635 487' href='bloodgrp.php' alt='basket_icon' />
          <!-- bagmati -->
          
          
                
                <area shape='poly' coords='566 276 748 342 595 496 661 450 476 361' href='bloodgrp.php' alt='basket_icon' /> 
                <!-- gandaki -->
                <area shape='poly' coords='283 349 417 402 456 310 510 335 470 395 559 418 595 510 420 480 257 371' href='bloodgrp.php' alt='basket_icon' />
                <!-- lumbini -->
                <area shape='poly' coords='286 143 306 86 379 109 444 168 566 270 523 311 4448 313 405 402 293 345 343 177 ' href='bloodgrp.php' alt='basket_icon' />
                <!-- karnali -->
                <area shape='poly' coords='343 177 297 315 254 379 132 315 234 135 201 87' href='bloodgrp.php' alt='basket_icon' />
                </map>
                <img id="map" src="map.png" usemap="#av" />
              </div>
              </section>
              <section class="section-2 container-fluid p-0">
      <div class="cover">
        <div class="overlay"></div>
        <div class="content text-center">
          <h1>Some Features That Made Us Unique</h1>
          <p>
            The Real Countdown
          </p>
        </div>
      </div>
      <div class="container-fluid text-center">
        <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">
          <div class="rect">
            <h1>12345</h1>
            <p>Register Their Name</p>
          </div>
          <div class="rect">
            <h1>11784</h1>
            <p>Donate Blood</p>
          </div>
          <div class="rect">
            <h1>1056</h1>
            <p>Total Event</p>
          </div>
          <div class="rect">
            <h1>9152</h1>
            <p>Life Saved By Us</p>
          </div>
        </div>
      </div>


 
      
       
    

    <!-- Section 4 -->
    <section class="section-4">
      <div class="container text-center">
        <h1 class="text-dark">Meet our Top Donors</h1>
        <p class="text-secondary">Who Are Refer as The Real Heros </p>
      </div>
      <div class="team row ">
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                  <img src="./assets/UI-face-3.jpg" class="img-fluid border-radius p-4" alt="">
                </div>
                <div class="card-body">
                  <h3 class="card-title">Saugat Shah</h3>
                  <p class="card-text">
                   I have donated blood more than 7 times. I always like to help people. Donating blood is an opportunity for 
                   you to help those who are in need of blood. One donation can save many lives!!!!
                  </p>
                  <a href="#" class="text-secondary text-decoration-none">8-Time Blood Donor</a>
                  <p class="text-black-50">Imadol,Lalitpur</p>
                </div>
              </div>
        </div>
        <div class="col-md-4 col-12">
            <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                <div class="carousel-inner text-center">
                  <div class="carousel-item active">
                    <div class="card mr-2 d-inline-block shadow">
                      <div class="card-img-top">
                        <img src="./assets/UI-face-1.jpg" class="img-fluid rounded-circle w-50 p-4" alt="">
                      </div>
                      <div class="card-body">
                        <h3 class="card-title">Ram Karki</h3>
                        <p class="card-text">
                         Blood donation will cost you nothing but it will save life!! Donate blood and be a hero of someone's life.
                        </p>
                        <a href="#" class="text-secondary text-decoration-none">11-Time Blood Donor</a>
                        <p class="text-black-50">Kalanki,Kathmandu</p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card  d-inline-block mr-2 shadow">
                      <div class="card-img-top">
                        <img src="./assets/UI-face-2.jpg" class="img-fluid rounded-circle w-50 p-4" alt="">
                      </div>
                      <div class="card-body">
                        <h3 class="card-title">Shayam Rai</h3>
                        <p class="card-text">
                        Blood donation will cost you nothing but it will save life!! Donate blood and be a hero of someone's life.
                          
                        </p>
                        <a href="#" class="text-secondary text-decoration-none">10-Time Blood Donor</a>
                        <p class="text-black-50">Gongabu,Kathmandu</p>
                      </div>
                    </div>
                  </div>
              </div>
        </div>
        </div>
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                  <img src="./assets/UI-face-4.jpg" class="img-fluid border-radius p-4" alt="">
                </div>
                <div class="card-body">
                  <h3 class="card-title">Prabha Shrestha</h3>
                  <p class="card-text">
                     
                  Blood donation has helped me maintain my physical and mental health. There aare many people undergoing surgery everyday 
                  who require blood tranfusion in appropriate time.
                  </p>
                  <a href="#" class="text-secondary text-decoration-none">20-Time Blood Donor</a>
                  <p class="text-black-50">Thimi,Bhaktapur</p>
                </div>
              </div>
        </div>
      </div>
    </section>


    <section class="section-4">
      <div class="container text-center">
        <h1 class="text-dark">PATIENT STORIES</h1>
        
      </div>
      <div class="team row ">
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                  <img src="./assets/kamal.jfif" class="img-fluid border-radius p-4" alt="">
                </div>
                <div class="card-body">
                  <h3 class="card-title">Kamal Ghale</h3>
                  <p class="card-text">
                    I am very thankful for the donor as well as the people who are into saving people's lives.
                    I kindly, wanna request you all be a part of such a great journey to save the lives of people by 
                    donating blood on a regular basis.
                  </p>
                  
                </div>
              </div>
        </div>
        <div class="col-md-4 col-12">
            <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                <div class="carousel-inner text-center">
                  <div class="carousel-item active">
                    <div class="card mr-2 d-inline-block shadow">
                      <div class="card-img-top">
                        <img src="./assets/rajiv.jfif" class="img-fluid rounded-circle w-50 p-4" alt="">
                      </div>
                      <div class="card-body">
                        <h3 class="card-title">Rajiv Mandal</h3>
                        <p class="card-text">
                          It was the first time, I'd ever needed the blood. I used to believe that blood was easily available at blood bank.
                          But I was wrong and I am thankful to Rakta Sewa for finding me the blood.
                        </p>
                      
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card  d-inline-block mr-2 shadow">
                      <div class="card-img-top">
                        <img src="./assets/bhurtel.jfif" class="img-fluid rounded-circle w-50 p-4" alt="">
                      </div>
                      <div class="card-body">
                        <h3 class="card-title">Abhiyan Bhurtel</h3>
                        <p class="card-text">
                         I am very thankful to Rakta Sewa and donors who are into saving people's lives. I went to five different blood banks 
                         and i was unable to find any. Thank you for saving our lives and bringing smiles.
                        </p>
                       
                      </div>
                    </div>
                  </div>
              </div>
        </div>
        </div>
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                  <img src="./assets/binayak.jfif" class="img-fluid border-radius p-4" alt="">
                </div>
                <div class="card-body">
                  <h3 class="card-title">Binayak Maharjan</h3>
                  <p class="card-text">
                  I am very thankful to Rakta Sewa and donors who are into saving people's lives. I went to five different blood banks 
                  and i was unable to find any. Thank you for saving our lives and bringing smiles.
                  </p>
                 
                </div>
              </div>
        </div>
      </div>
    </section>
  </main>
  <footer>
    <div class="container-fluid p-0">
      <div class="row text-left">
        <div class="col-md-5 col-sm-5">
          <h4 class="text-light">About us</h4>
          <p class="text-muted"> We are dedicated to ensure the efficient management of blood
                      donations and distributions.</p>
          <p class="pt-4 text-muted"> ©Raktasewa 2024 All rights reserved
          </p>
        </div>
        <div class="col-md-5 col-sm-12">
          <h4 class="text-light">Newsletter</h4>
          <p class="text-muted">Stay Updated</p>
          <form class="form-inline">
            <div class="col pl-0">
              <div class="input-group pr-5">
                <input type="text" class="form-control bg-dark text-white" id="inlineFormInputGroupUsername2" placeholder="Email">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-2 col-sm-12">
          <h4 class="text-light">Follow Us</h4>
          <p class="text-muted">Let us be social</p>
          <div class="column text-light">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-youtube"></i>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="./main.js"></script>
</body>

</html>