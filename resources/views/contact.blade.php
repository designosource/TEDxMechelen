@extends('layouts.main')

@section('content')
    <section id="contact" class="fadeInUp animated">
        <div class="maxwidth">

            <h3 class="title--line">Contact</h3>

            <div class="flex">

                <div class="maps flex-element">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1254.7664058244727!2d4.483687858224667!3d51.024779294889704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3e5cc91b66e43%3A0x61b5c485972acffc!2sThomas+More+Mechelen+-+Campus+Kruidtuin!5e0!3m2!1snl!2sbe!4v1516970617841"></iframe>
                </div>

                <div class="flex-element">
                    <form target="_blank" action="https://formspree.io/info@tedxmechelen.be" method="post">

                        <div class="flexrow">
                            <input type="text" id="subject" name="subject" placeholder="Subject">
                            <input type="text" id="name" name="name" placeholder="Name">
                        </div>

                        <div class="flexrow">
                            <input class="flexwidth" type="text" id="email" name="email" placeholder="Email">
                        </div>

                        <div class="flexrow">
                            <textarea class="flexwidth" type="text" id="Message" name="Message" placeholder="Message" rows="8"></textarea>
                        </div>

                        <!--<div class="g-recaptcha" data-sitekey="6Lcjf0IUAAAAACt1vu_bVH3BGt1R8Y3vs8vxaYZA"></div>-->

                        <input type="submit" class="all-caps btn btn-s" value="Send">

                    </form>
                </div>
            </div>

        </div>
    </section>
@endsection