@extends('layouts.main')

@section('content')
    <section id="speaker" class="animated fadeInUp">
        <div class="maxwidth">
            @if (empty($information_speaker))

                <h3 class="title--line animated fadeInLeft">Unknown speaker "{{ $title_speaker }}"</h3>
                <p>The speaker you are refering to does not exist or is not coming to TEDx Mechelen.</p>
                <p>Learn more about these speakers:</p>

                <div class="speakers">

                    @foreach ( $speakers as $key => $speaker )

                        <div class="carousel-item">
                            <div class="bg-img bg-img-x flex">
                                <img src="{{ asset($speaker["image"])}}"
                                     alt="Photo of {{ $speaker["name"] }}">
                            </div>
                            <a href="{{ $key }}"
                               class="btn btn-regular all-caps">{{ $speaker["name"] }}</a>
                            <div class="carousel-item-speaker">
                                <p class="quote"></p>
                                <p class="role">{{ $speaker["job"] }}</p>
                            </div>
                            <a class="link--red" href="{{ $key }}">More
                                about {{ $speaker["name"] }}<br><i class="fa fa-long-arrow-right"
                                                                   aria-hidden="true"></i></a>
                        </div>

                    @endforeach

                </div>

            @else

                <h3 class="title--line animated fadeInLeft">{{ $information_speaker['name'] }}</h3>

                <div class="single-speaker speakers">

                    <div class="carousel-item">
                        <div class="bg-img bg-img-x flex">
                            <img src="{{ asset($information_speaker["image"])}}"
                                 alt="Photo of {{ $information_speaker['name'] }}">
                        </div>
                    </div>

                    <div class="speaker-information">

                        <div class="small-information">

                            @if(!empty($information_speaker['linkedin']))
                                <div class="linkedin">

                                    <a target="_blank" href="{{ $information_speaker['linkedin'] }}">
                                        <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
                                    </a>

                                </div>
                            @endif

                            <div>
                                <p class="small-information-title btn ">{{ $information_speaker['job'] }}</p>
                            </div>

                        </div>

                        <div class="large-information">
                            {!! $information_speaker['description'] !!}
                        </div>

                    </div>


                </div>

                <div class="more-speakers"> <!-- only visible when picture and description are next to each other -->

                    <h4>More speakers</h4>

                    <div class="speakers">

                        @foreach($other_speakers as $key => $speaker)

                            <div class="carousel-item">
                                <a href="/event/speakers/{{ $key }}">
                                    <div class="bg-img bg-img-x flex">
                                        <img src="{{ asset($speaker["image"])}}"
                                             alt="Photo of {{ $speaker['name'] }}">
                                    </div>
                                </a>
                            </div>

                        @endforeach

                    </div>

                </div>

            @endif
        </div>
    </section>
@endsection