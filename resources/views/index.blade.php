@extends('layouts.main')

@section('content')
    <header class="bg-img">
        <div class="maxwidth flex">

            <div id="jumbotron" class="bg-img flex animated fadeInUp">
                <img src="{{ asset('/img/header.svg') }}" alt="TEDx Mechelen">
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

            <a class="link--red" href="{{ url('/about/tedx-and-ted') }}">Learn more about TEDx</a>


        </div> <!-- end maxwidth -->
    </section>

    <section id="subscribe">
        <div class="maxwidth">

            <h3>Join our email list &middot; Stay connected</h3>

            <p>Keep up with our latest news about TEDxMechelen</p>

            <form action="https://formspree.io/info@tedxmechelen.be"
                  method="POST" target="_blank" class="flex">

                <input type="email" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">

                <input class="btn btn-s all-caps" type="submit" value="Subscribe">

            </form>

        </div> <!-- end maxwidth -->
    </section>

    <section id="speakers">
        <div class="maxwidth">

            <h3 class="title--line">Speakers</h3>

            <div class="carousel">
                @foreach ( $speakers as $key => $speaker )

                    <div class="carousel-item">
                        <div class="bg-img bg-img-x flex">
                            <img src="{{ asset($speaker["image"])}}" alt="Photo of {{ $speaker["name"] }}">
                        </div>
                        <a href="{{ url('/event/speakers/').$key }}"
                           class="btn btn-regular all-caps">{{ $speaker["name"] }}</a>
                        <div class="carousel-item-speaker">
                            <p class="quote">{{$speaker["quote"]}}</p>
                            <p class="role">{{ $speaker["job"] }}</p>
                        </div>
                        <a class="link--red" href="{{ url('/event/speakers/').$key }}">More
                            about {{ $speaker["firstName"] }}<br><i class="fa fa-long-arrow-right"
                                                               aria-hidden="true"></i></a>
                    </div>
                @endforeach

            </div>

            <a href="{{ url('/event/speakers') }}" class="meetspeakers btn btn-s all-caps">Meet the speakers</a>


        </div> <!-- end maxwidth -->
    </section>
@endsection