import './bootstrap';
import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';
import axios from 'axios';

// Configuración del token CSRF
axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').content;

// Importa tus componentes
import FormComponent from './components/task/form.vue';
import ListsComponent from './components/task/lists.vue';


// Configura las rutas
const routes = [
    {
        path: '/form',
        component: FormComponent,
    },
    {
        path: '/lists',
        component: ListsComponent,
    },
    {
        path: '/register',
        redirect: '/login', 
    },
    {
        path: '/login',
        redirect: '/taskslist', 
    },
];

// Crea el router
const router = createRouter({
    history: createWebHistory(),
    routes,
});

// Crea la instancia de Vue
const app = createApp({});

// Usa el router en la aplicación
app.use(router);

// Monta la aplicación
app.mount('#app');
