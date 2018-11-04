
import Home from '../components/home.vue'
import Login from '../components/login.vue'

const routes = [
    { path:"/vue/homepage",component: Home, name:'my-app' },
    { path:"/vue/login",component: Login, name:'lo' },
];

    // To make url without # notation
    // mode: ['history']
    

export default routes