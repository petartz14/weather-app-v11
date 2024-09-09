<script setup>
defineProps({
    items: Array,
});
</script>

<template>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        <div v-for="item in items">
            <div class="p-4 border rounded-lg text-xs">
                <div class="text-base font-semibold tracking-wide pb-2">
                    Main
                </div>
                <div class="flex flex-wrap">
                    <div class="pr-3">
                        Feels:
                        <span class="font-semibold">{{
                            item.main.feels_like
                        }}</span>
                    </div>
                    <div class="pr-3">
                        Gounde level:
                        <span class="font-semibold">{{
                            item.main.grnd_level
                        }}</span>
                    </div>
                    <div class="pr-3">
                        Humidity:
                        <span class="font-semibold">{{
                            item.main.humidity
                        }}</span>
                    </div>
                    <div class="pr-3">
                        Pressure:
                        <span class="font-semibold">{{
                            item.main.pressure
                        }}</span>
                    </div>
                    <div class="pr-3">
                        Sea level:
                        <span class="font-semibold">{{
                            item.main.sea_level
                        }}</span>
                    </div>
                    <div class="pr-3">
                        Temperature:
                        <span class="font-semibold">{{ item.main.temp }}</span>
                    </div>
                    <div class="pr-3">
                        Temperature kf:
                        <span class="font-semibold">{{
                            item.main.temp_kf
                        }}</span>
                    </div>
                    <div class="pr-3">
                        Temperature min:
                        <span class="font-semibold">{{
                            item.main.temp_max
                        }}</span>
                    </div>
                    <div class="pr-3">
                        Temperature max:
                        <span class="font-semibold">{{
                            item.main.temp_min
                        }}</span>
                    </div>
                </div>
                <div class="text-base font-semibold tracking-wide py-2">
                    Wind
                </div>
                <div class="flex flex-wrap">
                    <div class="pr-3">
                        Deg:
                        <span class="font-semibold">{{ item.wind.deg }}</span>
                    </div>
                    <div class="pr-3">
                        Gust:
                        <span class="font-semibold">{{ item.wind.gust }}</span>
                    </div>
                    <div class="pr-3">
                        Speed:
                        <span class="font-semibold">{{ item.wind.speed }}</span>
                    </div>
                </div>
                <div class="text-base py-2">
                    Clouds:
                    <span class="font-semibold">{{ item.clouds.all }}</span>
                </div>
                <div class="text-base font-semibold tracking-wide py-2">
                    Weather
                </div>
                <div v-for="weather in item.weather">
                    <div class="flex flex-wrap">
                        <div class="pr-3">
                            ID:
                            <span class="font-semibold">{{ weather.id }}</span>
                        </div>
                        <div class="pr-3">
                            Main:
                            <span class="font-semibold">{{
                                weather.main
                            }}</span>
                        </div>
                        <div class="pr-3">
                            description:
                            <span class="font-semibold">{{
                                weather.description
                            }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
