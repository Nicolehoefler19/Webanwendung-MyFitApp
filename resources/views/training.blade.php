@extends('layouts.app')

@section('content')
<div class="container-fluid trainingcontainer">
    <div class="row justify-content-center bannerpic">
        <h3 class="themeheadline">Training</h3>
    </div>
    <div class="row justify-content-center">
        <h2 class="category">Trainingskategorien</h2>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-9">
            <div id="arme-background">
                <button class="workout-sec" id="arme-button">
                    <h4>Arme</h4>
                    <p>Workouts für starke Arme</p>
                    <i id="arme-cross" class="flipcontent-icon fas fa-angle-double-down"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="row justify-content-center flipdowncontent">
        <div class="col-md-9">
            <div id="arme-kasten">
                <h5>Armworkout-Video Nr. 1</h5>
                <iframe width="80%" height="600px" src="https://www.youtube.com/embed/j64BBgBGNIU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="remember-row justify-content-center">
                    <div class="row remember-tool">
                        <a href="{{ URL::to('/insertvid1') }}">
                            <button id="remember_video1" class="merkliste-button">
                                <i id="star-video1" class="far fa-star"></i>
                                <p>Video auf die Merkliste setzen</p>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-9">
            <div id="ausdauer-background">
                <button class="workout-sec" id="ausdauer-button">
                    <h4>Ausdauer</h4>
                    <p>Für einen langen Atem</p>
                    <i id="ausdauer-cross" class="flipcontent-icon fas fa-angle-double-down"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="row justify-content-center flipdowncontent">
        <div class="col-md-9">
            <div id="ausdauer-kasten">
                <h5>Ausdauer-Video Nr. 1</h5>
                <iframe width="80%" height="600px" src="https://www.youtube.com/embed/1skBf6h2ksI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="remember-row justify-content-center">
                    <div class="row remember-tool">
                    <a href="{{ URL::to('/insertvid2') }}">
                        <button id="remember_video3" class="merkliste-button">
                            <i id="star-video2" class="far fa-star"></i>
                            <p>Video auf die Merkliste setzen</p>
                        </button>
                    </a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="comment-block">
                        <ul>
                            <li>
                                <img class="table_profilbilder" src="{{ asset('imgs/'.Auth::id().'.jpg') }}">
                                <p>{{ Auth::user()->name }}</p>
                            </li>
                            <li>
                                <p>{{ Auth::user()->commenttwo }}</p>
                            </li>
                            <li>
                                <a href="{{ URL::to('/deletectwo')}}" class="edit_forms" ><i class="editgroup fas fa-trash-alt">Kommentar löschen</i></a>
                            </li>
                        </ul>
                    </div>
                    <form class="comment-form" action="insertcom2" method="POST" name="comment">
                        <input id="comment-field" type="textfield" name="comment-input" value="Schreibe deine Meinung">
                        <button class="btn btn-primary">Kommentar posten</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-md-9">
            <div id="brust-background">
                <button class="workout-sec" id="brust-button">
                    <h4>Brust</h4>
                    <p>Viele Workouts für die Brust</p>
                    <i id="brust-cross" class="flipcontent-icon fas fa-angle-double-down"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="row justify-content-center flipdowncontent">
        <div class="col-md-9">
            <div id="brust-kasten">
                <h5>Brustworkout-Video Nr. 1</h5>
                <iframe width="80%" height="600px" src="https://www.youtube.com/embed/qwx1VV9vV1A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="remember-row justify-content-center">
                    <div class="row remember-tool">
                        <a href="{{ URL::to('/insertvid3') }}">
                            <button id="remember_video5" class="merkliste-button">
                                <i id="star-video3" class="far fa-star"></i>
                                <p>Video auf die Merkliste setzen</p>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="comment-block">
                        <ul>
                            <li>
                                <img class="table_profilbilder" src="{{ asset('imgs/'.Auth::id().'.jpg') }}">
                                <p>{{ Auth::user()->name }}</p>
                            </li>
                            <li>
                                <p>{{ Auth::user()->commentthree }}</p>
                            </li>
                            <li>
                                <a href="{{ URL::to('/deletecthree')}}" class="edit_forms" ><i class="editgroup fas fa-trash-alt">Kommentar löschen</i></a>
                            </li>
                        </ul>
                    </div>
                    <form class="comment-form" action="insertcom3" method="POST" name="comment">
                        <input id="comment-field" type="textfield" name="comment-input" value="Schreibe deine Meinung">
                        <button class="btn btn-primary">Kommentar posten</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-md-9">
            <div id="back-background">
                <button class="workout-sec" id="ruecken-button">
                    <h4>Rücken</h4>
                    <p>Für einen starken Rücken</p>
                    <i id="ruecken-cross" class="flipcontent-icon fas fa-angle-double-down"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="row justify-content-center flipdowncontent">
        <div class="col-md-9">
            <div id="ruecken-kasten">
                <h5>Rückenworkout-Video Nr. 1</h5>
                <iframe width="80%" height="600px" src="https://www.youtube.com/embed/b2sdVtXNecs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="remember-row justify-content-center">
                    <div class="row remember-tool">
                        <a href="{{ URL::to('/insertvid4') }}">
                            <button id="remember_video7" class="merkliste-button">
                                <i id="star-video4" class="far fa-star"></i>
                                <p>Video auf die Merkliste setzen</p>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="comment-block">
                        <ul>
                            <li>
                                <img class="table_profilbilder" src="{{ asset('imgs/'.Auth::id().'.jpg') }}">
                                <p>{{ Auth::user()->name }}</p>
                            </li>
                            <li>
                                <p>{{ Auth::user()->commentfour }}</p>
                            </li>
                            <li>
                                <a href="{{ URL::to('/deletecfour')}}" class="edit_forms" ><i class="editgroup fas fa-trash-alt">Kommentar löschen</i></a>
                            </li>
                        </ul>
                    </div>
                    <form class="comment-form" action="postCommentone" method="POST" name="comment">
                        <input id="comment-field" type="textfield" name="comment-input" value="Schreibe deine Meinung">
                        <button class="btn btn-primary">Kommentar posten</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center"></div>
</div>

@endsection
