<template>
    <app-layout title="Meals">
        <template #header>
            <resource-page-heading :create_button="route('meals.create')" title="Meals"></resource-page-heading>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <custom-table :data="meals" :headings="headings" root-route="meals"></custom-table>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import {defineComponent} from 'vue'
import AppLayout from "../../Layouts/AppLayout";
import ResourcePageHeading from "../../Components/ResourcePageHeading";
import CustomTable from "../../Components/CustomTable";

export default defineComponent({
    components: {
        AppLayout,
        ResourcePageHeading,
        CustomTable
    },
    props: {
        meals: Object
    },
    setup() {
        const headings = [
            'name'
        ]

        return {headings}
    }
})
</script>
