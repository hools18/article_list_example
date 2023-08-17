import './bootstrap';
import '../css/app.css';

window.toastr = toastr;

import {createApp} from "vue/dist/vue.esm-bundler.js";
import Login from "./components/auth/LoginComponent.vue";
import Register from "./components/auth/RegisterComponent.vue";
import MainPage from "./components/main-page/MainPageComponent.vue";
import ArticlePage from "./components/articles/IndexComponent.vue";

const app = createApp({})


app.component("login", Login)
    .component("register", Register)
    .component("article-page", ArticlePage)
    .component("main-page", MainPage);

app.mount("#app");
