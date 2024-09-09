<script setup>
import TextInput from "@/Components/TextInput.vue";
import Button from "@/Components/Button.vue";

import { ref } from "vue";
import { router } from "@inertiajs/vue3";

let keyword = ref("");

const search = () => {
    router.post(route("home.search"), {
        keyword: keyword.value,
    });
};
</script>

<template>
    <div>
        <TextInput v-model="keyword" type="text" placeholder="Search City" />
        <div class="pt-2">
            <Button @click.prevent="search">Search</Button>
        </div>
    </div>
</template>
