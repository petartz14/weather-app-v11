<script setup>
defineProps({
    data: Object,
});
</script>

<template>
    <div>
        <div class="relative border rounded-md p-4">
            <div
                class="bg-white absolute left-0 ml-5 -top-4 tracking-wide text-lg"
            >
                Details
            </div>
            <div>
                Name:
                <span class="font-semibold">{{
                    data.response.geocode.feature.name
                }}</span>
            </div>
            <div>
                Display name:
                <span class="font-semibold">{{
                    data.response.geocode.feature.displayName
                }}</span>
            </div>
            <div>
                Country code:
                <span class="font-semibold">{{
                    data.response.geocode.feature.cc
                }}</span>
            </div>
        </div>
        <div class="mt-6">
            <div
                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 text-xs"
            >
                <div
                    v-for="venue in data.response.venues"
                    class="border rounded-md p-4"
                >
                    <div>
                        Name:
                        <span class="font-semibold">{{ venue.name }}</span>
                    </div>
                    <div>
                        Location:
                        <span class="font-semibold">
                            {{ venue.location.country }}
                        </span>
                    </div>
                    <div>
                        Latitude:
                        <span class="font-semibold">
                            {{ venue.location.lat }}
                        </span>
                    </div>
                    <div>
                        Longitude:
                        <span class="font-semibold">
                            {{ venue.location.lng }}
                        </span>
                    </div>
                    <div>Categories:</div>
                    <div class="flex flex-wrap pt-1">
                        <span
                            v-for="category in venue.categories"
                            class="bg-blue-700 text-white rounded-full py-0.5 px-2"
                        >
                            {{ category.name }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
