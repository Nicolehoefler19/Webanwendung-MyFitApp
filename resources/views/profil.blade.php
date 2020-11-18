@extends('layouts.app')

@section('content')
<div class="container-fluid trainingcontainer">
    <div class="row justify-content-center">
        <h1>Mein Profil</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4"><img class="profilpicture" src="{{ asset('imgs/myprofil.jpg') }}"></div>
        <div class="col-md-4">
            <ul class="informationlist">
                <li>
                    <div class="row">
                         <form class="profilform" action="savebirth" method="POST" name="birthday">
                             @csrf
                            <label>Geburtstag</label>
                            <input type="date" name="date" value="{{ Auth::user()->birthdate }}">
                            <button type="submit" class="btn btn-link"><i class="editgroup far fa-save"></i></button>
                            <i class="editgroup fas fa-edit"></i>
                            <a href="{{ URL::to('/deletebirth')}}"><i class="editgroup fas fa-trash-alt"></i></a>

                        </form>
                    </div>
                </li>
                <li>
                    <div class="row">
                            <form class="profilform" action="savecountry" method="POST" name="country">
                                @csrf
                                    <label> Land:</label>
                                   <input type="textfield" name="country" value="{{ Auth::user()->country }}">
                                       <button type="submit" class="btn btn-link"><i class="editgroup far fa-save"></i></button>
                                       <i class="editgroup fas fa-edit"></i>
                                       <a href="{{ URL::to('/deletecountry')}}"><i class="editgroup fas fa-trash-alt"></i></a>
                           </form>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col">Angemeldet seit:</div>
                        <div class="col">{{ Auth::user()->created_at }}</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="row justify-content-center">
        <h5 class="verwalten">Profilbild verwalten</h5>
    </div>
    <div class="row justify-content-center">
        <form action="upload" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="photo"/>
            <button class="upload-button" type="submit">Bild hochladen</button>
        </form> 
    </div>
    <div class="row justify-content-center">
            <form action="edit" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="photo"/>
                <button class="btn btn-success" type="submit">Edit</button>
            </form>  
    </div>
    <div class="row justify-content-center">
        <a href="{{ URL::to('/delete') }}"><button class="btn btn-danger">Löschen</button></a>         
    </div>

    {{-- <div class="row justify-content-center">
        <div class="col-md-3">        
            <h2 id="erfolge">Meine Erfolge</h2>
        </div>
    </div>

    <div class="row justify-content-center">

    </div> --}}
    <div class="row justify-content-center">
        <div class="col-md-3">
            <button class="merkliste-buttons">
                Meine Video-Merkliste
            </button>
        </div>
        <div class="col-md-3">
            <button class="merkliste-buttons">
                Meine Rezepte-Merkliste
            </button>
        </div>
    </div>


    
</div>

@endsection

