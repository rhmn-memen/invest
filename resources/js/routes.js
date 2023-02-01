const Welcome = () => import('./components/welcome.vue')

export const routes = [
    {
        name: 'home',
        path: '/',
        component: Welcome
    }
]
