@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Aktion erfolgreich</h1>
    </div>
    <div class="row justify-content-center">
    <a href="{{ URL::to('profil') }}"><button class="btn btn-primary">Zurück zum Profil</button></a>
    </div>
</div>
@endsection
