/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

// Vue moment
import moment from 'moment';
Vue.filter('formatDate', function(value) {
    if (value) {
        return moment(String(value)).format('MM/DD/YYYY hh:mm')
    }
});

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
Vue.component('cryptonews-component', require('./components/accueil/CryptonewsComponent.vue').default);
Vue.component('crypto-component', require('./components/accueil/CryptoComponent.vue').default);
Vue.component('all-crypto-component', require('./components/accueil/AllCryptoComponent.vue').default);
Vue.component('latestnews-component', require('./components/accueil/LatestnewsComponent.vue').default);
Vue.component('latestcourses-component', require('./components/accueil/LatestcoursesComponent.vue').default);
Vue.component('piscategories-component', require('./components/accueil/PiscategoriesComponent.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
