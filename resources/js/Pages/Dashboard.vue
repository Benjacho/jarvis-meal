<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-full mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <calendar :schedule-meals="scheduleMeals"></calendar>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import {defineComponent} from 'vue'
import AppLayout from "../Layouts/AppLayout";
import Calendar from "./Calendar";

export default defineComponent({
    components: {
        AppLayout,
        Calendar
    },
    props: {
        scheduleMeals: Object
    }
})
</script>
