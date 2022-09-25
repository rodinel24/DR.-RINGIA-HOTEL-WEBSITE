<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dr. Ringia Hotel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel = "icon" href = "images/logo.png" type = "image/png">

        <!-- button up plugin -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



        <!-- BOOTSTRAP PLUG IN -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <script src="{{ asset('js/script.js')}}"></script>
    </head>
    <body>

        <!-- header -->
        <header class = "header" id = "header">

            <div>

                <!-- navigation features -->
                <nav class="navbar ">
                    <form class="container-fluid">
                      <button class="btn btn-outline-light " type="button">HOME</button>
                      <button class="btn btn-outline-light " type="button">SERVICES</button>
                      <button class="btn btn-outline-light " type="button">FACILITIES</button>


                    </form>
                  </nav>
                </div>


            <div class = "head-top">




            </div>

            <!-- MAIN CONTENT IN HOME PAGE -->
            <div class = "head-bottom flex">
                <h2>WELCOME</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto est quos veniam impedit numquam itaque voluptatum, dicta asperiores accusamus, eligendi neque ut incidunt, modi harum molestiae atque natus officia minima.</p>
                <!-- BOOK NOW BUTTON -->
                <button class="btn btn-outline-light " type="button">BOOK NOW</button>

            </div>

            <button id="topBtn"><i class="fas fa-angle-double-up"></i></button>


        </header>
        <!-- end of header -->



        <!-- fullscreen modal -->
        <div id = "modal"></div>
        <!-- end of fullscreen modal -->

        <!-- body content  -->

        <!-- SERVICES FEATURE -->
        <section class = "services sec-width" id = "services">
            <div class = "title">
                <h1>Services</h1>
            </div>
            <div class = "services-container">
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <!-- ICON -->
                            <i class = "fas fa-utensils"></i>
                        </span>
                    </div>

                    <!-- SERVICE CONTENT -->
                    <div class = "service-content">
                        <h2>Food Service/ Food Runner</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias blanditiis tempore officia accusamus asperiores. Illum maxime eligendi necessitatibus laudantium iste nisi pariatur doloremque ut illo similique voluptatum enim distinctio perferendis, ad ipsam aspernatur omnis rem autem ex, reiciendis corporis suscipit!</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->

                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-broom"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Housekeeping</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias blanditiis tempore officia accusamus asperiores. Illum maxime eligendi necessitatibus laudantium iste nisi pariatur doloremque ut illo similique voluptatum enim distinctio perferendis, ad ipsam aspernatur omnis rem autem ex, reiciendis corporis suscipit!</p>
                        <button type = "button" class = "btn">Know More</button>
                    </div>
                </article>
                <!-- end of single service -->

            </div>
        </section>


        <!-- booking form -->
        <div class = "book">
            <form class = "book-form">
                <div class = "form-item">
                    <label for = "checkin-date">Check In Date: </label>
                    <input type = "date" id = "chekin-date">
                </div>
                <div class = "form-item">
                    <label for = "checkout-date">Check Out Date: </label>
                    <input type = "date" id = "chekout-date">
                </div>
                <div class = "form-item">
                    <label for = "adult">Adults: </label>
                    <input type = "number" min = "1" value = "1" id = "adult">
                </div>
                <div class = "form-item">
                    <label for = "children">Children: </label>
                    <input type = "number" min = "1" value = "1" id = "children">
                </div>
                <div class = "form-item">
                    <label for = "rooms">Rooms: </label>
                    <input type = "number" min = "1" value = "1" id = "rooms">
                </div>
                <div class = "form-item">
                    <input type = "submit" class = "btn" value = "Book Now">
                </div>
            </form>
        </div>



        <!-- ROOM FEATURE -->
        <section class = "rooms sec-width" id = "rooms">
            <div class = "title">
                <h1>Rooms</h1>
            </div>
            <div class = "rooms-container">
                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "images/room1.jpg" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>Luxury Rooms</h3>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Lorem ipsum dolor sit amet.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Lorem ipsum dolor sit amet.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Lorem ipsum dolor sit amet.
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus exercitationem repellendus maxime ullam tempore architecto provident unde expedita quam beatae, dolore eligendi molestias sint tenetur incidunt voluptas. Unde corporis qui iusto vitae. Aut nesciunt id iste, cum esse commodi nemo?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla corporis quasi officiis cumque, fugiat nostrum sunt, tempora animi dicta laborum beatae ratione doloremque. Delectus odio sit eius labore, atque quo?</p>
                        <p class = "rate">
                            <span>₱00.00 /</span> Per Night
                        </p>
                        <button type = "button" class = "btn">book now</button>
                    </div>
                </article>
                <!-- end of single room -->

                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "images/room1.jpg" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>Luxury Rooms</h3>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Lorem ipsum dolor sit amet.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Lorem ipsum dolor sit amet.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Lorem ipsum dolor sit amet.
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus exercitationem repellendus maxime ullam tempore architecto provident unde expedita quam beatae, dolore eligendi molestias sint tenetur incidunt voluptas. Unde corporis qui iusto vitae. Aut nesciunt id iste, cum esse commodi nemo?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla corporis quasi officiis cumque, fugiat nostrum sunt, tempora animi dicta laborum beatae ratione doloremque. Delectus odio sit eius labore, atque quo?</p>
                        <p class = "rate">
                            <span>₱00.00/</span> Per Night
                        </p>
                        <button type = "button" class = "btn">book now</button>
                    </div>
                </article>
                <!-- end of single room -->
                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "images/room1.jpg" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>Luxury Rooms</h3>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Lorem ipsum dolor sit amet.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Lorem ipsum dolor sit amet.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Lorem ipsum dolor sit amet.
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus exercitationem repellendus maxime ullam tempore architecto provident unde expedita quam beatae, dolore eligendi molestias sint tenetur incidunt voluptas. Unde corporis qui iusto vitae. Aut nesciunt id iste, cum esse commodi nemo?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla corporis quasi officiis cumque, fugiat nostrum sunt, tempora animi dicta laborum beatae ratione doloremque. Delectus odio sit eius labore, atque quo?</p>
                        <p class = "rate">
                            <span>₱00.00 /</span> Per Night
                        </p>
                        <button type = "button" class = "btn">book now</button>
                    </div>
                </article>
                <!-- end of single room -->
            </div>
        </section>

        <!-- FUNCTION HALL FEATURE -->
        <section class = "rooms sec-width" id = "rooms">
            <div class = "title">
                <h1>Function Hall</h1>
            </div>
            <div class = "rooms-container">
                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "images/room2.jpg" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>Luxury Rooms</h3>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Lorem ipsum dolor sit amet.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Lorem ipsum dolor sit amet.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Lorem ipsum dolor sit amet.
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus exercitationem repellendus maxime ullam tempore architecto provident unde expedita quam beatae, dolore eligendi molestias sint tenetur incidunt voluptas. Unde corporis qui iusto vitae. Aut nesciunt id iste, cum esse commodi nemo?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla corporis quasi officiis cumque, fugiat nostrum sunt, tempora animi dicta laborum beatae ratione doloremque. Delectus odio sit eius labore, atque quo?</p>
                        <p class = "rate">
                            <span>₱00.00 /</span> Per Night
                        </p>
                        <button type = "button" class = "btn">book now</button>
                    </div>
                </article>
                <!-- end of single room -->

                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "images/room2.jpg" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>Luxury Rooms</h3>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Lorem ipsum dolor sit amet.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Lorem ipsum dolor sit amet.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Lorem ipsum dolor sit amet.
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus exercitationem repellendus maxime ullam tempore architecto provident unde expedita quam beatae, dolore eligendi molestias sint tenetur incidunt voluptas. Unde corporis qui iusto vitae. Aut nesciunt id iste, cum esse commodi nemo?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla corporis quasi officiis cumque, fugiat nostrum sunt, tempora animi dicta laborum beatae ratione doloremque. Delectus odio sit eius labore, atque quo?</p>
                        <p class = "rate">
                            <span>₱00.00 /</span> Per Night
                        </p>
                        <button type = "button" class = "btn">book now</button>
                    </div>
                </article>
                <!-- end of single room -->

                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "images/room2.jpg" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>Luxury Rooms</h3>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Lorem ipsum dolor sit amet.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Lorem ipsum dolor sit amet.
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Lorem ipsum dolor sit amet.
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus exercitationem repellendus maxime ullam tempore architecto provident unde expedita quam beatae, dolore eligendi molestias sint tenetur incidunt voluptas. Unde corporis qui iusto vitae. Aut nesciunt id iste, cum esse commodi nemo?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla corporis quasi officiis cumque, fugiat nostrum sunt, tempora animi dicta laborum beatae ratione doloremque. Delectus odio sit eius labore, atque quo?</p>
                        <p class = "rate">
                            <span>₱00.00 /</span> Per Night
                        </p>
                        <button type = "button" class = "btn">book now</button>
                    </div>
                </article>
                <!-- end of single room -->
            </div>
        </section>
        <!-- end of body content -->

        <!-- footer -->
        <footer class = "footer">
            <div class = "footer-container  m2">
                <div>
                     <ul class = "social-icons">
                        <li class = "flex">

                            <!-- twitter account -->
                            <i class = "fa fa-twitter fa-2x"></i>
                        </li>
                        <li class = "flex">

                            <!-- facebook account -->
                            <i class = "fa fa-facebook fa-2x"></i>
                        </li>
                        <li class = "flex">

                            <!-- instagram account -->
                            <i class = "fa fa-instagram fa-2x"></i>
                        </li>
                    </ul>
                </div>

                <div>
                    <h2>Useful Link</h2>

                    <a href = "#">PMS</a>

                </div>

                <div>
                    <h2>Privacy</h2>

                    <a href = "#">About Us</a>
                    <a href = "#">Contact Us</a>

                </div>



                <div>
                    <h2>Have A Question</h2>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-map-marker-alt"></i>
                        </span>
                        <span>
                            (Address)
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-phone-alt"></i>
                        </span>
                        <span>
                            (Contact Number)
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-envelope"></i>
                        </span>
                        <span>
                            (business email)
                        </span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of footer -->

    </body>

     {{-- top Button --}}
    <script>

            $(document).ready(function(){

            $(window).scroll(function(){
            if($(this).scrollTop() > 40){
                $('#topBtn').fadeIn();
            } else{
                $('#topBtn').fadeOut();
            }
            });

            $("#topBtn").click(function(){
            $('html ,body').animate({scrollTop : 0},800);
            });
            });
    </script>
</html>
