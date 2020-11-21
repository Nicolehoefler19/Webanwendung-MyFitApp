@extends('layouts.app')

@section('content')
<div class="container-fluid trainingcontainer">
    <div class="row justify-content-center">
        <h1>Mein Profil</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="bildbeschraenker">
                <img class="profilpicture" src="{{ asset('imgs/'.Auth::id().'.jpg') }}">
            </div>
        </div>
        <div class="col-md-4">
            <ul class="informationlist">
                <li>
                    <div class="row">
                         <form class="profilform" action="savebirth" method="POST" name="birthday">
                             @csrf
                            <label>Geburtstag</label>
                            <input id="birth-field" type="date" name="date" value="{{ Auth::user()->birthdate }}">
                            <button type="submit" class="btn btn-link edit_forms"><i class="editgroup far fa-save"></i></button>
                            <a href="{{ URL::to('/deletebirth')}}" class="edit_forms"><i class="editgroup fas fa-trash-alt"></i></a>

                        </form>

                    </div>
                </li>
                
                <li>
                    <div class="row">
                            <form class="profilform" action="savecountry" method="POST" name="country">
                                @csrf
                                    <label> Land:</label>
                                   <input id="land-field" type="textfield" name="country" value="{{ Auth::user()->country }}">
                                       <button type="submit" class="btn btn-link edit_forms"><i class="editgroup far fa-save"></i></button>
                                       <a href="{{ URL::to('/deletecountry')}}" class="edit_forms" ><i class="editgroup fas fa-trash-alt"></i></a>
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
    <div class="row justify-content-center"><button class="btn btn-primary" id="profil_bearbeiten" >Profil bearbeiten</button></div>
    <div class="row justify-content-center profilbild_verwalten_form">
        <h5 class="verwalten">Profilbild verwalten</h5>
    </div>
    <div class="row justify-content-center profilbild_verwalten_form" >
        <form action="upload" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="photo"/>
            <button class="upload-button" type="submit">Bild hochladen</button>
        </form> 
    </div>
    <div class="row justify-content-center profilbild_verwalten_form">
            <form action="edit" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="photo"/>
                <button class="btn btn-success" type="submit">Edit</button>
            </form>  
    </div>
    <div class="row justify-content-center profilbild_verwalten_form">
        <a href="{{ URL::to('/delete') }}"><button class="btn btn-danger">Löschen</button></a>         
    </div>

    {{-- <div class="row justify-content-center">
        <div class="col-md-3">        
            <h2 id="erfolge">Meine Erfolge</h2>
        </div>
    </div>

    <div class="row justify-content-center">

    </div> --}}
    <div class="row justify-content-center"><h5>Trainingsmerkliste</h5></div>
    <div class="row justify-content-center">
        <div class="col-md-3">
            <button class="merkliste-buttons">
                Meine Video-Merkliste
            </button>
        </div>
    </div>
    <div class="video-merkliste" style="display: none">
        <div class="videocontainer">
            <iframe width="80%" height="600px" src="https://www.youtube.com/embed/{{ Auth::user()->vid1 }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="videocontainer2">
            <iframe width="80%" height="600px" src="https://www.youtube.com/embed/{{ Auth::user()->vid2 }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="videocontainer3">
            <iframe width="80%" height="600px" src="https://www.youtube.com/embed/{{ Auth::user()->vid3 }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="videocontainer4">
            <iframe width="80%" height="600px" src="https://www.youtube.com/embed/{{ Auth::user()->vid4 }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    


    
</div>

@endsection

