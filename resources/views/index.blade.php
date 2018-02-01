@extends('layouts.main')

@section('content')
    <header class="bg-img">
        <div class="maxwidth flex">

            <div id="jumbotron" class="bg-img flex animated fadeInUp">
                <img src="img/header.svg" alt="TEDx Mechelen">
                <h1 class="h1--underline all-caps">Revolution</h1>
                <h1>23 maart 2018</h1>

                <a target="_blank"
                   href="https://www.eventbrite.be/e/tedxmechelen-tickets-41555840638?aff=ebdssbcitybrowse"
                   class="btn btn-l all-caps">Order tickets</a>
            </div>

        </div> <!-- end maxwidth -->
    </header>

    <section id="what">
        <div class="maxwidth">

            <h3 class="title--line">What is TEDx?</h3>

            <p>In the spirit of ideas worth spreading, TED has created a program called TEDx. TEDx is a program of
                self-organized events that bring people together to share a TED-like experience. At TEDxMechelen, live
                speakers will spark deep discussion and connection. The TED Conference provides general guidance for the
                TEDx program, but individual TEDx events are self-organised.</p>

            <a class="link--red" href="about/tedxandted.html">Learn more about TEDx</a>


        </div> <!-- end maxwidth -->
    </section>

    <section id="subscribe">
        <div class="maxwidth">

            <h3>Join our email list &middot; Stay connected</h3>

            <p>Keep up with our latest news about TEDxMechelen</p>

            <form action="https://formspree.io/info@tedxmechelen.be"
                  method="POST" target="_blank" class="flex">

                <input type="email" name="email" placeholder="Email">

                <input class="btn btn-s all-caps" type="submit" value="Subscribe">

            </form>

        </div> <!-- end maxwidth -->
    </section>

    <section id="speakers">
        <div class="maxwidth">

            <h3 class="title--line">Speakers + hosts</h3>

            <div class="carousel">

                <div class="carousel-item">
                    <div class="bg-img bg-img-x flex">
                        <img src="img/hosts/Bram.png" alt="Photo of Bram Vanderborght">
                    </div>
                    <a href="event/speakers.php?q=bram" class="btn btn-regular all-caps btn-size">Bram Vanderborght</a>
                    <div class="carousel-item-speaker">
                        <p class="quote"></p>
                        <p class="role">Professor robotics @ VUB</p>
                    </div>
                    <a class="link--red" href="event/speakers.php?q=bram">More about Bram<br><i
                                class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>

                <div class="carousel-item">
                    <div class="bg-img bg-img-x">
                        <img src="img/hosts/Rik.png" alt="Photo of Rik Vera">
                    </div>
                    <a href="event/speakers.php?q=rik" class="btn btn-regular all-caps btn-size">Rik Vera</a>
                    <div class="carousel-item-speaker">
                        <p class="quote"></p>
                        <p class="role">CEO @ Nexxworks</p>
                    </div>
                    <a class="link--red" href="event/speakers.php?q=rik">More about Rik<br><i
                                class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>

                <div class="carousel-item">
                    <div class="bg-img bg-img-x">
                        <img src="img/hosts/Nico.png" alt="Photo of Nico Huybrechts">
                    </div>
                    <a href="event/speakers.php?q=nico" class="btn btn-regular all-caps btn-size">Nico Huybrechts</a>
                    <div class="carousel-item-speaker">
                        <p class="quote"></p>
                        <p class="role">CEO @ dataSHIFT</p>
                    </div>
                    <a class="link--red" href="event/speakers.php?q=nico">More about Nico<br><i
                                class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>

                <div class="carousel-item">
                    <div class="bg-img bg-img-x">
                        <img src="img/hosts/Lidewij.png" alt="Photo of Lidewij Nuitten">
                    </div>
                    <a href="event/speakers.php?q=lidewij" class="btn btn-regular all-caps btn-size">Lidewij Nuitten</a>
                    <div class="carousel-item-speaker">
                        <p class="quote"></p>
                        <p class="role">Televisiemaakster @ VRT</p>
                    </div>
                    <a class="link--red" href="event/speakers.php?q=lidewij">More about Lidewij<br><i
                                class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>

                <div class="carousel-item">
                    <div class="bg-img bg-img-x">
                        <img src="img/hosts/Geert.png" alt="Photo of Geert Van Wonterghem">
                    </div>
                    <a href="event/speakers.php?q=geert" class="btn btn-regular all-caps btn-size">Geert Van
                        Wonterghem</a>
                    <div class="carousel-item-speaker">
                        <p class="quote"></p>
                        <p class="role">Founding Partner @ MeetMatch</p>
                    </div>
                    <a class="link--red" href="event/speakers.php?q=geert">More about Geert<br><i
                                class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>

                <div class="carousel-item">
                    <div class="bg-img bg-img-x">
                        <img src="img/hosts/Nilesh.png" alt="Photo of Nilesh Madhu">
                    </div>
                    <a href="event/speakers.php?q=nilesh" class="btn btn-regular all-caps btn-size">Nilesh Madhu</a>
                    <div class="carousel-item-speaker">
                        <p class="quote"></p>
                        <p class="role">Professor @ University Ghent</p>
                    </div>
                    <a class="link--red" href="event/speakers.php?q=nilesh">More about Nilesh<br><i
                                class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>

            </div>

            <a href="event/speakers.php" class="meetspeakers btn btn-s all-caps">Meet the speakers</a>


        </div> <!-- end maxwidth -->
    </section>
@endsection