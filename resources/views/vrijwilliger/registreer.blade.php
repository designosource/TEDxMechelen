@extends('layouts.main')

@section('content')
    <section id="registreer" class="fadeInUp animated">
        <div class="maxwidth">

            <h3 class="title--line">Register Volunteers</h3>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('success'))
                <h1>Bedankt voor uw registratie</h1>
            @endif
            <form action="{{ url('vrijwilliger/registreer') }}" style="height: auto;" method="POST">
                {{ csrf_field() }}
                <div class="register">
                    <input type="text" name="organisator" placeholder="Via organisator*">
                </div>
                <div class="register">
                    <input type="text" name="naam" placeholder="Naam*">
                </div>
                <div class="register">
                    <input type="text" name="voornaam" placeholder="Voornaam*">
                </div>
                <div class="register">
                    <input type="text" name="straat" placeholder="Straat + nummer*">
                </div>
                <div class="register">
                    <input type="text" name="postcode" placeholder="Postcode*">
                </div>
                <div class="register">
                    <input type="text" name="gemeente" placeholder="Gemeente*">
                </div>
                <div class="register">
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div class="register">
                    <input type="text" name="telefoon" placeholder="Telefoon nummer">
                </div>
                <div class="register">
                    <input type="checkbox" name="terms1" value="1"> De vrijwilliger ontvangt geen beloningvoor de door hem verrichte werkzaamheden.*
                </div>
                <div class="register">
                    <input type="checkbox" name="terms2" value="1"> Uitkeringsgerechtigdevroegen schriftelijk toestemmingaan bij het werkloosheidsbureauvan de Rijksdienst voor arbeidsvoorziening (RVA) voor het uitvoeren vanvrijwilligerswerk.
                </div>
                <div class="register">
                    <input type="checkbox" name="terms3" value="1"> De organisatie heeft ten behoeve van de vrijwilliger de verzekering“Lichamelijke ongevallen”afgesloten. Deze zorgt voor tussenkomstin geval van lichamelijk letsel ten gevolge van een ongeval dat de vrijwilliger tijdens de werkzaamheden is overkomen.
                </div>
                * = Verplichte velden / Gelezen en goedgekeurd
                {!! app('captcha')->display() !!}
                <input type="submit" value="Submit" class="btn btn-regular btn-l register">
            </form>
        </div>
    </section>
@endsection