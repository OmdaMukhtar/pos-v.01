require('./bootstrap');
 
window.Vue = require('vue');
import VueRouter from 'vue-router';

import Vuetify from "vuetify";
import "vuetify/dist/vuetify.min.css";
import 'material-design-icons-iconfont/dist/material-design-icons.css' 

import NoteApp from './components/login.vue';

import routes from './router/index';

Vue.config.productionTip = false;

window.Vue.use(VueRouter,{
    iconfont: 'mdi'
});

Vue.use(VueRouter);

const router = new VueRouter({
    // mode: 'history',
    routes,
    
});

Vue.use(Vuetify);
 new Vue({
    el: '#app',
    render: h => h(NoteApp),
    router,
});


