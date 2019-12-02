
require('./bootstrap');

window.Vue = require('vue');


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('charlin-component', require('./components/charlinComponent.vue').default);


const app = new Vue({
    el: '#app',
});
