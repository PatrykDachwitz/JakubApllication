import book from "@/views/book.vue";
import LosItem from "@/views/losItem.vue";
import {createRouter, createWebHistory} from "vue-router";

const routes = [
    {
        path: "/",
        name: "default",
        component: book
    },{
        path: "/1",
        name: "book",
        component: LosItem
    },
];

export const router = createRouter({
    history: createWebHistory(),
    routes
});
