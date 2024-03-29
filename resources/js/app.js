
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

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});

$('.next-tab').click(function(){
    $('.list-group > .active').next('a').trigger('click');
});

const flatpickr = require("flatpickr");

$(".date_input").flatpickr({
    dateFormat: 'm/d/Y'
});

require('select2');

$('.select2').select2();

$('.select2').on('select2:select', function (e) {
    $('#client_type').val('Manufacturer');
    $('#client_location').val('Mumbai, India');
    $('#client_contact').val('Amit Shah');
    $('#client_contact_number').val('+91 9898989898');
});