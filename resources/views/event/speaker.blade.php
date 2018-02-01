@extends('layouts.main')

@section('content')
    <section id="speaker" class="animated fadeInUp">
        <div class="maxwidth">
        @if (empty($information_speaker))

            <h3 class="title--line animated fadeInLeft">Unknown speaker "{{ $title_speaker }}"</h3>

            <p>The speaker you are refering to does not exist or is nog coming to TEDx Mechelen.</p>

            <p>Learn more about these speakers:</p>

            <div class="speakers">

                <?php foreach ( $speakers as $speaker ): ?>

                <div class="carousel-item">
                    <div class="bg-img bg-img-x flex">
                        <img src="/<?php echo $speaker["image"]; ?>" alt="Photo of <?php echo $speaker["name"]; ?>">
                    </div>
                    <a href="/event/speaker/<?php echo $speaker["q"]; ?>"
                       class="btn btn-regular all-caps"><?php echo $speaker["name"]; ?></a>
                    <div class="carousel-item-speaker">
                        <p class="quote"></p>
                        <p class="role"><?php echo $speaker["job"]; ?></p>
                    </div>
                    <a class="link--red" href="speakers.php?q=<?php echo $speaker["q"]; ?>">More
                        about <?php echo $speaker["name"]; ?><br><i class="fa fa-long-arrow-right"
                                                                    aria-hidden="true"></i></a>
                </div>

                <?php endforeach; ?>

            </div>

            @else

            <h3 class="title--line animated fadeInLeft"><?php echo $information_speaker['name']; ?></h3>

            <div class="single-speaker speakers">

                <div class="carousel-item">
                    <div class="bg-img bg-img-x flex">
                        <img src="/<?php echo $information_speaker["image"]; ?>"
                             alt="Photo of <?php echo $information_speaker["name"]; ?>">
                    </div>
                </div>

                <div class="speaker-information">

                    <div class="small-information">

                        <?php if( isset($information_speaker['linkedin']) ): ?>
                        <div class="linkedin">

                            <a target="_blank" href="<?php echo $information_speaker["linkedin"] ?>">
                                <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
                            </a>


                        </div>
                        <?php endif; ?>

                        <div>
                            <p class="small-information-title btn "><?php echo $information_speaker["job"]; ?></p>
                        </div>

                    </div>

                    <div class="large-information">
                        <?php echo $information_speaker["description"]; ?>
                    </div>

                </div>


            </div>

            <div class="more-speakers"> <!-- only visible when picture and description are next to each other -->

                <h4>More speakers</h4>

                <div class="speakers">

                    <?php foreach ( $other_speakers as $speaker ): ?>

                    <div class="carousel-item">
                        <a href="/event/speaker/<?php echo $speaker["q"]; ?>">
                            <div class="bg-img bg-img-x flex">
                                <img src="../<?php echo $speaker["image"]; ?>"
                                     alt="Photo of <?php echo $speaker["name"]; ?>">
                            </div>
                        </a>
                    </div>

                    <?php endforeach; ?>

                </div>

            </div>

            <?php endif; ?>


        </div>
    </section>
@endsection