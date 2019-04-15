
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueLightbox from 'vue-lightbox';
Vue.component("lightbox",VueLightbox);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example', require('./components/Example.vue'));
//Vue.component('order', require('./components/Order_form.vue'));

$(document).ready(function(){
    $('.slider').slider();
    $(".dropdown-button").dropdown({hover: true, belowOrigin: true, constrain_width: false, alignment: 'right'});
    $('.modal').modal();
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });

});
$(".dropdown-button").dropdown({hover: true, belowOrigin: true, constrain_width: false, alignment: 'right'});
$('#modal1').modal('open');
$(".button-collapse").sideNav();

const app = new Vue({
    el: '#app'
});
