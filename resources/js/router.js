import VueRouter from 'vue-router'

import Projects from './pages/Projects'
import ImportedProjects from './pages/ImportedProjects'
import Register from './pages/Register'
import Login from './pages/Login'

const routes = [
    {
        path: '/',
        name: 'projects',
        component: Projects,
        meta: {
            auth: undefined
        }
    },
    {
        path: '/imported',
        name: 'imported',
        component: ImportedProjects,
        meta: {
            auth: undefined
        }
    },
    {
        path: '/register',
        name: 'register',
        component: Register,
        meta: {
            auth: false
        }
    },
    {
        path: '/login',
        name: 'login',
        component: Login,
        meta: {
            auth: false
        }
    },
];

const router = new VueRouter({
    history: true,
    mode: 'history',
    routes,
});

export default router