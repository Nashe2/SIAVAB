/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
//import Vue from 'vue'
//import Vuex from 'vuex'
//Vue.use(Vuex);

require('./bootstrap');

window.Vue = require('vue');

const Vuex = require('vuex');

window.store = new Vuex.Store({
	state: {
		productosCount: 2
	},
	mutations:{
		increment(state){
			return state.productosCount++
		},
		set(state,value){
			return state.productosCount =value
		}
	}
})
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
Vue.component('productos-component', require('./components/productos/ProductosComponent.vue'));

//Vue.component('add-producto-btn', require('./components/productos/AddToCarComponent.vue'));
Vue.component('producto-counter-component', require('./components/shopping_cart/CounterComponent.vue'));
Vue.component('add-producto-btn', require('./components/productos/AddToCartComponent.vue'));
Vue.component('productos-shopping-component', require('./components/shopping_cart/ProductosShoppingCartComponent.vue'));

Vue.component('producto-card-component', require('./components/productos/ProductoCardComponent.vue'));
Vue.component('material-transition-group', require('./components/animations/MaterialCollectionComponent.vue'));

/**Vue.component('add-producto-btn', require('./components/productos/AddToCarComponent.vue'));
Vue.component('producto-counter-component', require('./components/shopping_cart/CounterComponent.vue'));

Vue.component('material-transition-group', require('./components/animations/MaterialCollectionComponent.vue'));
*/
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
