<script setup>
import TextInput from "@/Components/TextInput.vue";
import Button from "@/Components/Button.vue";

import { ref } from "vue";
import { router } from "@inertiajs/vue3";

defineProps({
    errors: Object,
});

let keyword = ref("");
let choose = ref("openWeather");
let fourSquare = ref({
    query: "",
    near: "",
    ll: "",
    radius: "",
    categoryId: "",
    url: "",
});

const search = () => {
    if (choose.value === "openWeather") {
        router.get(
            "/open-weather/search",
            {
                keyword: keyword.value,
            },
            {
                preserveState: true,
            }
        );
    }
    if (choose.value === "fourSquare") {
        router.get("/four-square/search", fourSquare.value, {
            preserveState: true,
        });
    }
};
</script>

<template>
    <div class="flex space-x-5">
        <div class="w-56 border">
            <div class="tracking-wider text-lg p-3 border-b">API</div>
            <div
                class="p-3 hover:bg-blue-600 hover:text-white cursor-pointer"
                :class="{ 'bg-blue-600 text-white': choose === 'openWeather' }"
                @click="choose = 'openWeather'"
            >
                Open Weather Map
            </div>
            <div
                class="p-3 hover:bg-blue-600 hover:text-white cursor-pointer"
                :class="{ 'bg-blue-600 text-white': choose === 'fourSquare' }"
                @click="choose = 'fourSquare'"
            >
                Four Square
            </div>
        </div>
        <div class="relative w-full border p-6">
            <div
                class="px-2 bg-white absolute left-0 ml-4 -top-4 tracking-wide text-lg"
            >
                Search Filter
            </div>
            <div v-if="choose === 'openWeather'">
                <TextInput
                    v-model="keyword"
                    type="text"
                    placeholder="Search City add comma seperation for country code"
                    :error="errors['keyword']"
                />
            </div>
            <div
                v-if="choose === 'fourSquare'"
                class="grid md:grid-cols-2 md:gap-2"
            >
                <div>
                    <label for="query" class="text-sm">Keyword</label>
                    <TextInput
                        v-model="fourSquare.query"
                        type="text"
                        placeholder="Input keywords"
                    />
                </div>
                <div>
                    <label for="ll" class="text-sm"
                        >Location (Longitude and Latitude)</label
                    >
                    <TextInput
                        v-model="fourSquare.ll"
                        type="text"
                        placeholder="Input longitude and latitude seperate by comma"
                    />
                </div>
                <div>
                    <label for="near" class="text-sm">Near</label>
                    <TextInput
                        v-model="fourSquare.near"
                        type="text"
                        placeholder="Search City add comma seperation for country code"
                        :error="errors['near']"
                    />
                </div>
                <div>
                    <label for="radius" class="text-sm">Radius</label>
                    <TextInput
                        v-model="fourSquare.radius"
                        type="text"
                        placeholder="Input radius"
                    />
                </div>
                <div>
                    <label for="categoryId" class="text-sm">Category Id</label>
                    <TextInput
                        v-model="fourSquare.categoryId"
                        type="text"
                        placeholder="Input category Id"
                    />
                </div>
                <div>
                    <label for="url" class="text-sm">URL</label>
                    <TextInput
                        v-model="fourSquare.url"
                        type="text"
                        placeholder="Input url"
                    />
                </div>
            </div>
            <div class="pt-4 flex">
                <Button class="ml-auto" @click.prevent="search">Search</Button>
            </div>
        </div>
    </div>
</template>
