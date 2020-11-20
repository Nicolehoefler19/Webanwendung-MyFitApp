/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

const { method } = require('lodash');

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

$(document).ready(function(){
    $("#arme-button").click(function(){
        $("#arme-kasten").fadeToggle();
        $('#arme-cross').toggleClass('fa-times');
    })
});

$(document).ready(function(){
    $("#ausdauer-button").click(function(){
        $("#ausdauer-kasten").fadeToggle();
        $('#ausdauer-cross').toggleClass('fa-times');
    })
});

$(document).ready(function(){
    $("#ruecken-button").click(function(){
        $("#ruecken-kasten").fadeToggle();
        $('#ruecken-cross').toggleClass('fa-times');
    })
});

$(document).ready(function(){
    $("#brust-button").click(function(){
        $("#brust-kasten").fadeToggle();
        $('#brust-cross').toggleClass('fa-times');
    })
});


$("#remember_video1").on( "click", function(){
    $("#star-video1").addClass( "fas" );
    localStorage['starclass1'] = 'fas';
    $(".videocontainer").toggleClass("showit");
    localStorage['videoclass'] = 'showit' ;

});

$("#remember_video3").on( "click", function(){
    $("#star-video2").addClass( "fas" );
    localStorage['starclass2'] = 'fas';
    $(".videocontainer2").toggleClass("showit2");
    localStorage['videoclass2'] = 'showit2' ;

});

$("#remember_video5").on( "click", function(){
    $("#star-video3").addClass( "fas" ); 
    localStorage['starclass3'] = 'fas';
    $(".videocontainer3").toggleClass("showit3");
    localStorage['videoclass3'] = 'showit3' ;
});

$("#remember_video7").on( "click", function(){
    $("#star-video4").addClass( "fas" ); 
    localStorage['starclass4'] = 'fas';
    $(".videocontainer4").toggleClass("showit4");
    localStorage['videoclass4'] = 'showit4' ;
});


$(document).ready(function() {
    storageStarClass1 = localStorage['starclass1'];
    storageStarClass2 = localStorage['starclass2'];
    storageStarClass3 = localStorage['starclass3'];
    storageStarClass4 = localStorage['starclass4'];

    $('#star-video1').addClass(storageStarClass1);
    $('#star-video2').addClass(storageStarClass2);
    $('#star-video3').addClass(storageStarClass3);
    $('#star-video4').addClass(storageStarClass4);

    storageVideoClass = localStorage['videoclass'];
    storageVideoClass2 = localStorage['videoclass2'];
    storageVideoClass3 = localStorage['videoclass3'];
    storageVideoClass4 = localStorage['videoclass4'];

    $('.videocontainer').toggleClass(storageVideoClass);
    $('.videocontainer2').toggleClass(storageVideoClass);
    $('.videocontainer3').toggleClass(storageVideoClass);
    $('.videocontainer4').toggleClass(storageVideoClass);
});

$(document).ready(function() {
    $("#getArmContent").click(function() {
        $.ajax({
            type: 'GET', 
            url : "/arme", 
            success : function (data) {
                $(".includeContainer").html(data);
            }
        });
    });
    $("#getAusdauerContent").click(function() {
        $.ajax({
            type: 'GET', 
            url : "/ausdauer", 
            success : function (data) {
                $(".includeContainer").html(data);
            }
        });
    });
    $("#getBrustContent").click(function() {
        $.ajax({
            type: 'GET', 
            url : "/brust", 
            success : function (data) {
                $(".includeContainer").html(data);
            }
        });
    });
    $("#getRueckenContent").click(function() {
        $.ajax({
            type: 'GET', 
            url : "/ruecken", 
            success : function (data) {
                $(".includeContainer").html(data);
            }
        });
    });
}); 

$(document).ready(function(){
    $(".merkliste-buttons").click(function(){
      $(".video-merkliste").slideToggle("slow");
    });
  });

  var birth_field = document.getElementById('birth-field');
  var land = document.getElementById('land-field');
  

  function makeEditListjustReadable(){
    birth_field.readOnly = true;
    land.readOnly = true;
  }

  makeEditListjustReadable();

  function editBirth(){
    birth_field.readOnly = false;
  }

  function editLand(){
    land.readOnly = false;
  }

  function btndisable(){
      document.getElementById('profil_bearbeiten').disabled = 'disabled';
  }

  $(document).ready(function(){
    $("#profil_bearbeiten").click(function(){
       $('.edit_forms').toggleClass('showforms');
       $('.profilbild_verwalten_form').toggleClass('showforms_alt');
      editBirth();
      editLand();
      btndisable();
    });
  });


