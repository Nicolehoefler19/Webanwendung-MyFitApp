/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

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
    $("#star-video1").toggleClass( "fas" ); 
});

$("#remember_video2").on( "click", function(){
    $("#star-video2").toggleClass( "fas" ); 
});

$("#remember_video3").on( "click", function(){
    $("#star-video3").toggleClass( "fas" ); 
});

$("#remember_video4").on( "click", function(){
    $("#star-video4").toggleClass( "fas" ); 
});

$("#remember_video5").on( "click", function(){
    $("#star-video5").toggleClass( "fas" ); 
});

$("#remember_video6").on( "click", function(){
    $("#star-video6").toggleClass( "fas" ); 
});

$("#remember_video7").on( "click", function(){
    $("#star-video7").toggleClass( "fas" ); 
});

$("#remember_video8").on( "click", function(){
    $("#star-video8").toggleClass( "fas" ); 
});

$("#remember_video3").on( "click", function(){
    $("#star-video3").toggleClass( "fas" ); 
});

var merkliste_videos_array = new Array();
var star_array = [star_remember_video1, star_remember_video2, star_remember_video3, star_remember_video4, star_remember_video5, star_remember_video6, star_remember_video7, star_remember_video8];
var videos_array = document.querySelectorAll("iframes");

var star_remember_video1 = document.getElementById("star-video1");
var star_remember_video2 = document.getElementById("star-video2");
var star_remember_video3 = document.getElementById("star-video3");
var star_remember_video4 = document.getElementById("star-video4");
var star_remember_video5 = document.getElementById("star-video5");
var star_remember_video6 = document.getElementById("star-video6");
var star_remember_video7 = document.getElementById("star-video7");
var star_remember_video8 = document.getElementById("star-video8");

var matchKeys = {};

var i;
for (i=0; i < star_array.length; i++) {
    matchKeys[star_array[i]] = videos_array[i];
}
