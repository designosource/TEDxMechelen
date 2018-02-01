@extends('layouts.main')

@section('content')
    <section id="registreer" class="fadeInUp animated">
        <div class="maxwidth">
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
                Bedankt voor uw registratie
            @endif
            <form action="{{ url('vrijwilliger/registreer') }}" style="height: auto;" method="POST">
                {{ csrf_field() }}
                <div>
                    <input type="text" name="organisator" placeholder="Via organisator*">
                </div>
                <div>
                    <input type="text" name="naam" placeholder="Naam*">
                </div>
                <div>
                    <input type="text" name="voornaam" placeholder="Voornaam*">
                </div>
                <div>
                    <input type="text" name="straat" placeholder="Straat + nummer*">
                </div>
                <div>
                    <input type="text" name="postcode" placeholder="Postcode*">
                </div>
                <div>
                    <input type="text" name="gemeente" placeholder="Gemeente*">
                </div>
                <div>
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div>
                    <input type="text" name="telefoon" placeholder="Telefoon nummer">
                </div>
                <div>
                    <input type="checkbox" name="terms1" value="1"> Ik accepteer 1*
                </div>
                <div>
                    <input type="checkbox" name="terms2" value="1"> Ik accepteer 2*
                </div>
                <div>
                    <input type="checkbox" name="terms3" value="1"> Ik accepteer 3*
                </div>
                * = Verplichte velden
                {!! app('captcha')->display() !!}
                <input type="submit" value="Submit">
            </form>
        </div>
    </section>
@endsection