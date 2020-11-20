@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Sieh dir an, wer hier noch trainiert:</h1>
        <button class="btn btn-primary">Zeige mir alle Fintess-Profile</button>
    </div>
    <div class="user-container justify-content-center">
        @include('table')
    </div>
</div>
@endsection
