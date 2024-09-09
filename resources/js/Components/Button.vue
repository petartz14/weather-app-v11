<script setup>
defineProps({
    name: String,
});
</script>

<template>
    <button class="border px-4 py-2 rounded-md bg-blue-900 text-white">
        <slot />
    </button>
</template>
