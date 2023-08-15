import './bootstrap';
import '../css/app.css';


import {createApp} from "vue/dist/vue.esm-bundler.js";
import Login from "./components/auth/LoginComponent.vue";
import Register from "./components/auth/RegisterComponent.vue";
import MainPage from "./components/main-page/MainPageComponent.vue";

const app = createApp({});


app.component("login", Login)
    .component("register", Register)
    .component("main-page", MainPage);

app.mount("#app");
