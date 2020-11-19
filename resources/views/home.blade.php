@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Willkommen')}} {{ Auth::user()->name }} </br> </br> {{ __('Woran möchtest du heute arbeiten?') }} </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col">
                            <a id="getArmContent"><div class="bild-quader"><h2 class="subheadlines">Arme</h2></div></a>
                        </div>
                        <div class="col">
                            <a id="getAusdauerContent"><div class="bild-quader"><h2 class="subheadlines">Ausdauer</h2></div></a>
                        </div>
                        <div class="col">
                            <a id="getBrustContent"><div class="bild-quader"><h2 class="subheadlines">Brust</h2></div></a>
                        </div>
                        <div class="col">
                            <a id="getRueckenContent"><div class="bild-quader"><h2 class="subheadlines">Rücken</h2></div></a>
                        </div>
                    </div>
                    <div class="includeContainer">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
