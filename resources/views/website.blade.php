<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dr. Ringia Hotel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <link rel = "icon" href = "images/hotel.jpg" type = "image/png">

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
                      <button class="btn btn-outline-light " id="servicesBtn" type="button">SERVICES</button>
                      <button class="btn btn-outline-light " id="facilitiesBtn" type="button">FACILITIES</button>
                      <button class="btn btn-outline-light " id="aboutusBtn" type="button">ABOUT US</button>



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
                <!-- <button id="bookBtn" class="btn btn-outline-light " type="button">BOOK NOW</button> -->
               <button id="bookBtn" class="btn btn-outline-light " type="button">BOOK NOW</button>


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
                        <h2>Food Service</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias blanditiis tempore officia accusamus asperiores. Illum maxime eligendi necessitatibus laudantium iste nisi pariatur doloremque ut illo similique voluptatum enim distinctio perferendis, ad ipsam aspernatur omnis rem autem ex, reiciendis corporis suscipit!</p>
                        <!-- <button type = "button" class = "btn">Know More</button> -->
                        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Know More
                          </button>

                          <!-- know more modal -->
                          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="staticBackdropLabel">Food Service</h5>
                                  <button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio iusto magni fuga a vitae labore voluptatibus autem perspiciatis ratione quasi suscipit, fugit ipsa accusantium dolores. Quo facilis ratione dolor commodi?
                                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus ad quisquam sequi natus minima expedita libero quam ratione accusantium cumque? Quo eligendi labore vitae quia voluptate, perferendis optio cupiditate nihil exercitationem aut fuga dicta aperiam dolores id quasi soluta adipisci facilis rem assumenda minima deserunt pariatur blanditiis eaque. Iusto et odio deserunt totam hic! Quasi excepturi ipsum unde officia laudantium corporis atque eveniet impedit alias necessitatibus, inventore eos esse animi a provident, est natus nihil! Hic mollitia rerum delectus! Error unde minus neque omnis ipsa nisi distinctio, ex obcaecati? Harum iure consectetur repudiandae eveniet omnis veniam facere, illo facilis numquam.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias possimus, corporis rem ea et nam facilis reiciendis odit asperiores, dolorem quae saepe ut dolores ex ad cumque, ipsa sapiente fugiat esse aspernatur nihil quidem accusantium beatae quam. Ipsam assumenda mollitia, obcaecati, expedita adipisci ullam modi excepturi nobis minus, voluptate molestiae accusantium in iure soluta enim velit consequatur culpa aperiam quidem qui doloribus aliquid itaque odio veritatis? Aut praesentium at reiciendis. Porro cupiditate dolore nobis quos reiciendis dolores magnam quas doloribus repellat necessitatibus voluptatum nemo, iure asperiores, error at earum. Esse maxime illo ea numquam veniam fuga officia porro saepe, eaque accusamus odio a, doloremque quis vitae optio totam possimus molestias quo accusantium quia sint? Ex, ad veniam voluptatem animi placeat necessitatibus cum suscipit quis! Deleniti at repellendus, facere aliquid excepturi voluptate eveniet blanditiis, fugiat molestias assumenda, qui unde accusantium? Optio exercitationem adipisci eum, nesciunt vitae dolorem sequi quos minus saepe mollitia, qui corrupti aliquam amet, dicta magni nemo ipsa error. Placeat, eligendi iusto, doloribus, eius consequatur ipsam et harum ipsum error eaque delectus quis commodi fugit modi dolores rerum laboriosam. Quasi aliquid quis ipsam perferendis repellat beatae ad saepe suscipit maxime expedita ipsum quaerat architecto labore, ab at omnis sunt commodi aut velit, alias ipsa. Odio quia minima necessitatibus facere. Hic, ex soluta! Facilis, quos magni praesentium nam placeat modi consequuntur. Officia dolorum temporibus velit, nulla sed quia aperiam repellendus delectus cumque minima molestias vitae animi ut voluptatibus voluptas omnis, tempora atque corrupti ex eaque sequi. Similique explicabo magnam repellendus voluptate nulla soluta delectus expedita magni quae repudiandae nihil, mollitia, vero maxime at autem nostrum. Ducimus perspiciatis quaerat laudantium cum earum corporis consequuntur porro. A eius nostrum adipisci error, esse id aperiam aliquam magni delectus explicabo rerum, quisquam ut magnam porro officia itaque ipsum sapiente doloremque! Aperiam minima sunt, minus cupiditate sint id harum est quasi voluptas modi provident illum officiis amet quisquam laudantium dignissimos eligendi vitae similique perspiciatis repudiandae ullam? Omnis maxime quos, sit voluptates eveniet accusantium quasi? Quia quaerat veritatis suscipit perferendis itaque necessitatibus, commodi autem ex omnis aliquid, fugiat blanditiis iure ut nemo repellat ipsa officiis voluptate pariatur asperiores veniam voluptatem sapiente. Ab possimus at provident laboriosam assumenda? Voluptatem sequi in beatae corrupti. Neque repudiandae explicabo iste eaque est fugit, necessitatibus harum perferendis modi voluptas itaque debitis, qui tempora alias beatae quasi perspiciatis voluptatem praesentium blanditiis voluptatum earum! Asperiores in reprehenderit accusantium ex, ad necessitatibus odio omnis!

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-primary">Save</button>
                                </div>
                              </div>
                            </div>
                    </div>

                    <!-- Button trigger modal -->

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
                        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Know More
                          </button>

                          <!-- know more modal -->
                          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="staticBackdropLabel">Housekeeping</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio iusto magni fuga a vitae labore voluptatibus autem perspiciatis ratione quasi suscipit, fugit ipsa accusantium dolores. Quo facilis ratione dolor commodi?
                                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus ad quisquam sequi natus minima expedita libero quam ratione accusantium cumque? Quo eligendi labore vitae quia voluptate, perferendis optio cupiditate nihil exercitationem aut fuga dicta aperiam dolores id quasi soluta adipisci facilis rem assumenda minima deserunt pariatur blanditiis eaque. Iusto et odio deserunt totam hic! Quasi excepturi ipsum unde officia laudantium corporis atque eveniet impedit alias necessitatibus, inventore eos esse animi a provident, est natus nihil! Hic mollitia rerum delectus! Error unde minus neque omnis ipsa nisi distinctio, ex obcaecati? Harum iure consectetur repudiandae eveniet omnis veniam facere, illo facilis numquam.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias possimus, corporis rem ea et nam facilis reiciendis odit asperiores, dolorem quae saepe ut dolores ex ad cumque, ipsa sapiente fugiat esse aspernatur nihil quidem accusantium beatae quam. Ipsam assumenda mollitia, obcaecati, expedita adipisci ullam modi excepturi nobis minus, voluptate molestiae accusantium in iure soluta enim velit consequatur culpa aperiam quidem qui doloribus aliquid itaque odio veritatis? Aut praesentium at reiciendis. Porro cupiditate dolore nobis quos reiciendis dolores magnam quas doloribus repellat necessitatibus voluptatum nemo, iure asperiores, error at earum. Esse maxime illo ea numquam veniam fuga officia porro saepe, eaque accusamus odio a, doloremque quis vitae optio totam possimus molestias quo accusantium quia sint? Ex, ad veniam voluptatem animi placeat necessitatibus cum suscipit quis! Deleniti at repellendus, facere aliquid excepturi voluptate eveniet blanditiis, fugiat molestias assumenda, qui unde accusantium? Optio exercitationem adipisci eum, nesciunt vitae dolorem sequi quos minus saepe mollitia, qui corrupti aliquam amet, dicta magni nemo ipsa error. Placeat, eligendi iusto, doloribus, eius consequatur ipsam et harum ipsum error eaque delectus quis commodi fugit modi dolores rerum laboriosam. Quasi aliquid quis ipsam perferendis repellat beatae ad saepe suscipit maxime expedita ipsum quaerat architecto labore, ab at omnis sunt commodi aut velit, alias ipsa. Odio quia minima necessitatibus facere. Hic, ex soluta! Facilis, quos magni praesentium nam placeat modi consequuntur. Officia dolorum temporibus velit, nulla sed quia aperiam repellendus delectus cumque minima molestias vitae animi ut voluptatibus voluptas omnis, tempora atque corrupti ex eaque sequi. Similique explicabo magnam repellendus voluptate nulla soluta delectus expedita magni quae repudiandae nihil, mollitia, vero maxime at autem nostrum. Ducimus perspiciatis quaerat laudantium cum earum corporis consequuntur porro. A eius nostrum adipisci error, esse id aperiam aliquam magni delectus explicabo rerum, quisquam ut magnam porro officia itaque ipsum sapiente doloremque! Aperiam minima sunt, minus cupiditate sint id harum est quasi voluptas modi provident illum officiis amet quisquam laudantium dignissimos eligendi vitae similique perspiciatis repudiandae ullam? Omnis maxime quos, sit voluptates eveniet accusantium quasi? Quia quaerat veritatis suscipit perferendis itaque necessitatibus, commodi autem ex omnis aliquid, fugiat blanditiis iure ut nemo repellat ipsa officiis voluptate pariatur asperiores veniam voluptatem sapiente. Ab possimus at provident laboriosam assumenda? Voluptatem sequi in beatae corrupti. Neque repudiandae explicabo iste eaque est fugit, necessitatibus harum perferendis modi voluptas itaque debitis, qui tempora alias beatae quasi perspiciatis voluptatem praesentium blanditiis voluptatum earum! Asperiores in reprehenderit accusantium ex, ad necessitatibus odio omnis!

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-primary">Save</button>
                                </div>
                              </div>
                            </div>
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
                    <input type = "date" id = "theDate"  min="{new Date().toISOString().split('T')[0]}" >
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
                    <input type = "number" min = "0" value = "1" id = "children">
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
    <div class = "footer-container  m1">
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

            <a href = "#">Contact Us</a>

        </div>



        <div>
            <h2>Have A Question</h2>
            <div class = "contact-item">
                <span>
                    <i class = "fas fa-map-marker-alt"></i>
                </span>
                <span>
                    <a href="https://www.google.com/maps/place/Mindanao+State+University+%E2%80%93+Maigo+School+of+Arts+and+Trades/@8.1616612,123.9580786,17z/data=!3m1!4b1!4m5!3m4!1s0x3255af4c40add5a3:0xdeea30d97c53dad6!8m2!3d8.1616559!4d123.9602673"  target="_blank">Poblacion,  Maigo, Lanao del Norte Mindanao Philippines 9206</a>
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
    <script>
         //automatic current date input
      var date = new Date();
      var day = date.getDate();
      var month = date.getMonth() + 1;
      var year = date.getFullYear();

      if (month < 10) month = "0" + month;
      if (day < 10) day = "0" + day;

      var today = year + "-" + month + "-" + day;
      document.getElementById("theDate").value = today;
    </script>

    <script>
        // navigation

  //services button to services
  $("#servicesBtn").click(function() {
    $('html,body').animate({
        scrollTop: $(".sec-width").offset().top},
        'slow');
});
  //facilities button to rooms and function hall
$("#facilitiesBtn").click(function() {
    $('html,body').animate({
        scrollTop: $(".rooms").offset().top},
        'slow');
});
 //about us button to footer
 $("#aboutusBtn").click(function() {
  $('html,body').animate({
      scrollTop: $(".footer").offset().top},
      'slow');
});

  //book now button to booking form
  $("#bookBtn").click(function() {
    $('html,body').animate({
        scrollTop: $(".service-content button").offset().top},
        'slow');
});

//restriction of past dates in booking form
$(function(){
  var dtToday = new Date();

  var month = dtToday.getMonth() + 1;
  var day = dtToday.getDate();
  var year = dtToday.getFullYear();
  if(month < 10)
      month = '0' + month.toString();
  if(day < 10)
      day = '0' + day.toString();

  var minDate= year + '-' + month + '-' + day;

  $('#theDate').attr('min', minDate);
  $('#chekout-date').attr('min', minDate);

});
    </script>
</html>
