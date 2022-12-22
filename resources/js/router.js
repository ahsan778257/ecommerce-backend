import { createRouter, createWebHashHistory } from "vue-router";
import FrontComponent from './components/FrontComponent.vue'


const routes = [
    {
        path: '/login',
        name:'Front.Component',
        component: FrontComponent
    }
]


export default createRouter ({
    history:createWebHashHistory(),
    routes
});