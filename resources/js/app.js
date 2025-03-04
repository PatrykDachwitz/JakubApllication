import './bootstrap';
import '/resources/scss/app.scss'
import * as bootstrap from 'bootstrap';
import {createApp} from "vue";
import dashboard from "@/views/dashboard.vue";
import {router} from "@/route.js";

createApp(dashboard)
    .use(router)
    .mount("#app");
