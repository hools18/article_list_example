import './bootstrap';
import '../css/app.css';


import {createApp} from "vue/dist/vue.esm-bundler.js";

const app = createApp({});

import Login from "./components/auth/LoginComponent.vue";
import Register from "./components/auth/RegisterComponent.vue";


app.component("login", Login)
    .component("register", Register);

app.mount("#app");
