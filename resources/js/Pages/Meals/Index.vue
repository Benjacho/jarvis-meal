<template>
    <app-layout title="Meals">
        <template #header>
            <resource-page-heading :create_button="route('meals.create')" title="Meals"></resource-page-heading>
        </template>

        <div class="py-12">
            <div class="max-w-full mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import {defineComponent} from 'vue'
import AppLayout from "../../Layouts/AppLayout";
import ResourcePageHeading from "../../Components/ResourcePageHeading";

export default defineComponent({
    components: {
        AppLayout,
        ResourcePageHeading
    },
    props: {}
})
</script>
