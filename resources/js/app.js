
/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
import axios from 'axios'
    Vue.use(VueRouter)

    import App from './components/App'
    import Welcome from './components/Welcome'
    import Login from './components/Login'
    import Register from './components/Register'

    const router = new VueRouter({
        mode: 'history',
        routes: [
            {
                path: '/',
                name: 'home',
                component: Welcome
            },
            {
                path: '/login',
                name: 'login',
                component: Login
            }
        ],
    });

    const app = new Vue({
        el: '#app',
        components: { App , Login, Register},
        router,
    });