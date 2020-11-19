@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <input type="text" name="search" id="search" class="form-control" placeholder="Nach Profilen suchen"/>
        <h1><span id="gesamtprofile"></span> Ergebnisse</h1>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <li></li>
            </div>
        </div>
    </div>
</div>
@endsection
