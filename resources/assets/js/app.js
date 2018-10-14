import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './components/App'
import PotentialClients from './components/pages/PotentialClients'
import ActiveClients from './components/pages/ActiveClients'
import Stat from './components/pages/Statistics'
import Stock from './components/pages/Stock'
import Employ from './components/pages/Empoyes'



const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/potential',
            name: 'potential',
            component: PotentialClients
        },
        {
            path: '/active',
            name: 'active',
            component: ActiveClients
        },
        {
            path: '/stat',
            name: 'stat',
            component: Stat
        },
        {
            path: '/stock',
            name: 'stock',
            component: Stock
        },{
            path: '/employ',
            name: 'employ',
            component: Employ
        },
    ],
});

const app = new Vue({
    el: '#app',
    components: {App},
    router,
});