/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import VueRouter from 'vue-router';

window.Vue.use(VueRouter);

import Grid from './components/Grid.vue';
import EmployeesIndex from './components/EmployeesIndex.vue';
import DepartmentsIndex from './components/DepartmentsIndex.vue';

const routes = [
    {
        path: '/',
        name: 'Grid',
        component: Grid
    },
    {
        path: '/employees',
        name: 'EmployeesIndex',
        component: EmployeesIndex
    },
    {
        path: '/departments',
        name: 'DepartmentsIndex',
        component: DepartmentsIndex
    },
]

const router = new VueRouter({
    mode: 'history',
    routes
})

new Vue({ router }).$mount('#app')
