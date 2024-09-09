<script setup>
import Card from "@/Components/Card.vue";

defineProps({
    data: Object,
});
</script>

<template>
    <div>
        <div class="relative border rounded-md p-4 mb-3">
            <div
                class="absolute left-0 -top-4 px-2 bg-white text-lg tracking-wider ml-5"
            >
                Details
            </div>
            <div class="grid md:grid-cols-2">
                <div>
                    <div>
                        Name:
                        <span class="font-semibold">{{ data.city.name }}</span>
                    </div>
                    <div>
                        Population:
                        <span class="font-semibold">
                            {{ data.city.population }}
                        </span>
                    </div>
                    <div>
                        Timezone:
                        <span class="font-semibold">
                            {{ data.city.timezone }}
                        </span>
                    </div>
                </div>
                <div>
                    <div>
                        Country:
                        <span class="font-semibold">
                            {{ data.city.country }}
                        </span>
                    </div>
                    <div>
                        Latitude:
                        <span class="font-semibold">
                            {{ data.city.coord.lat }}
                        </span>
                    </div>
                    <div>
                        Longitude:
                        <span class="font-semibold">
                            {{ data.city.coord.lon }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <Card :items="data.list" />
        <div class="mt-6">
            <a href="/">
                <span class="bg-red-500 text-white px-4 py-3 rounded-md">
                    Back
                </span>
            </a>
        </div>
    </div>
</template>
