@extends('layouts.main')

@section('content')
    <section id="speaker" class="animated fadeInUp">
        <div class="maxwidth">
            <h3 class="title--line animated fadeInLeft">Speakers</h3>
            <div class="speakers">
                @foreach ( $speakers as $key => $speaker )

                    <div class="carousel-item">
                        <div class="bg-img bg-img-x flex">
                            <img src="{{ asset($speaker["image"])}}" alt="Photo of {{ $speaker["name"] }}">
                        </div>
                        <a href="speakers/{{ $key }}"
                           class="btn btn-regular all-caps">{{ $speaker["name"] }}</a>
                        <div class="carousel-item-speaker">
                            <p class="quote"></p>
                            <p class="role">{{ $speaker["job"] }}</p>
                        </div>
                        <a class="link--red" href="speakers/{{ $key }}">More
                            about {{ $speaker["firstName"] }}<br><i class="fa fa-long-arrow-right"
                                                                        aria-hidden="true"></i></a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection