'use strict';

require('./layout');

import Vue from 'vue';

import App from '../components/App.vue';

new Vue({
    el: '#app',
    components: { App }
}); //.$mount('#app')
