<script setup>
defineProps({
    placeholder: String,
    type: String,
    modelValue: String,
    error: String,
});
</script>

<template>
    <div>
        <div class="relative mt-2 rounded-md shadow-sm">
            <input
                :type="type"
                name="price"
                id="price"
                class="block w-full rounded-md border-0 py-1.5 px-3 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                :placeholder="placeholder"
                :value="modelValue"
                @input="$emit('update:modelValue', $event.target.value)"
            />
        </div>
        <span class="text-xs text-red-600" v-if="error">{{ error }}</span>
    </div>
</template>
