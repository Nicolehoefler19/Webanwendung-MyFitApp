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
                            <a href=""><div class="bild-quader"><h2 class="subheadlines">Training</h2></div></a>
                        </div>
                        <div class="col">
                            <a href=""><div class="bild-quader"><h2 class="subheadlines">Nutrition</h2></div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
