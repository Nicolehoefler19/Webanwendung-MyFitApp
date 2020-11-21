@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Aktion erfolgreich</h1>
    </div>
    <div class="row justify-content-center">
    <a href="{{ URL::to('training') }}"><button class="btn btn-primary">Zurück zur Trainingsseite</button></a>
    </div>
</div>
@endsection
