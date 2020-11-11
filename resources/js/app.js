/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('select2/dist/js/select2.min.js');
require('dropify/dist/js/dropify.min.js');
require('bs-custom-file-input/dist/bs-custom-file-input');
require('simplebar/dist/simplebar');
require('lightgallery.js');

rangePlugin = require('flatpickr/dist/plugins/rangePlugin');
const flatpickr = require('flatpickr/dist/flatpickr.min.js');
const flatpickrEs = require('flatpickr/dist/l10n/es.js').default.es;
flatpickr.localize(flatpickrEs);

Parallax = require('parallax-js/dist/parallax');
SmoothScroll = require('smooth-scroll/dist/smooth-scroll');

require('../../resources/js/theme.min.js');

window.ClassicEditor = require('@ckeditor/ckeditor5-build-classic');

if (document.querySelector('#app')) {
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
}
