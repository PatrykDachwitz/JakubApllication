<script setup>
import {ref} from "vue";

const testLosValue = ref([
    "",
    "",
    "",
    "",
])
const losValue = ref([
    "A",
    "B",
    "C",
    "D",
])
function losItem() {
    if (losValue.value[0] === "") {
        losValue.value = [
            "A",
            "B",
            "C",
            "D",
        ]
        testLosValue.value = [
            "",
            "",
            "",
            "",
        ]
    } else {
        losValue.value = [
            "",
            "",
            "",
            "",
        ]
        testLosValue.value = [
            "C",
            "D",
            "A",
            "B",
        ]
    }
}
</script>

<template>
    <div class="container-fluid book d-flex flex-column">

        <div class="book__nav d-flex align-items-center shadow-sm py-3">
            <router-link class="book__button--back text-center px-4">
                <img src="/files/return.png" width="90" height="90">

                <h3>Powrót</h3>
            </router-link>
            <div class="d-flex align-items-center">
                <div class="book__button book__button--previous me-3 ms-1">
                    <img src="/files/arrow.png" width="80" height="80">
                </div>
                <div class="row g-3 align-items-start">
                    <template v-for="i in 4">
                        <div class="col-3">
                            <div>
                                <img src="/files/template.jpeg" class="img-fluid">
                            </div>
                        </div>
                    </template>
                </div>

                <div class="book__button ms-3 me-1">
                    <img src="/files/arrow.png" width="80" height="80">
                </div>
            </div>
        </div>
        <div class="d-flex flex-column" style="flex: 1">
            <div class="d-flex justify-content-center my-4">
                <button class="btn btn-success fs-4 bold" @click="losItem">Losuj</button>
            </div>
            <div class="d-flex justify-content-between p-0 m-0" style="flex: 1">
                <div class="row m-0 p-0" style="flex: 47% 0;">
                    <template v-for="item in losValue">
                        <div class="col-6 bg-gray-100 d-flex align-items-center justify-content-center">
                            <div class="rounded-4 text-center" style="font-size: 10em; height: 80%; width: 80%; border: 8px solid black">{{ item }}</div>
                        </div>
                    </template>
                </div>
                <div class="row m-0 p-0" style="flex: 47% 0;">
                    <template v-for="item in testLosValue">
                        <div class="col-6 bg-gray-100 d-flex align-items-center justify-content-center">
                            <div class="rounded-4 text-center" style="font-size: 10em; height: 80%; width: 80%; border: 8px solid black">{{ item }}</div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
