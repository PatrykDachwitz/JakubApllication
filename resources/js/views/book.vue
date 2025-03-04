<script setup>

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
        <div class="book__row d-flex justify-content-between align-items-center">
            <div class="book__button book__button--previous me-3 ms-1">
                <img src="/files/arrow.png" width="80" height="80">
            </div>
            <div class="book__content row g-3 align-items-start">
                <template v-for="i in 8">
                    <div class="col-3 book__value">
                        <div><img src="/files/template.jpeg" class="img-fluid"></div>
                        <h3 class="fs-4">Test test test sets et</h3>
                    </div>
                </template>
            </div>

            <div class="book__button ms-3 me-1">
                <img src="/files/arrow.png" width="80" height="80">
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
