<template>
    <app-layout title="Create Meal">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create Meal
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div>
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Meal</h3>
                                <p class="mt-1 text-sm text-gray-600">
                                    Name of meal can include unit of size and multiple ingredients
                                </p>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <form @submit.prevent="createOrUpdate">
                                <div class="shadow sm:rounded-md sm:overflow-hidden">
                                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                        <div class="grid grid-cols-3 gap-6">
                                            <div class="col-span-6">
                                                <label class="block text-sm font-medium text-gray-700"
                                                       for="name">Name</label>
                                                <input id="name" v-model="form.name" autocomplete="name"
                                                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                       name="name"
                                                       type="text">
                                                <p id="name-error" class="mt-2 text-sm text-red-600">
                                                    {{ form.errors.name }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button
                                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            cy="cy-resource-save-button"
                                            type="submit">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import {defineComponent} from 'vue'
import AppLayout from "../../Layouts/AppLayout";
import {useForm} from '@inertiajs/inertia-vue3'
import Notification from "../../Components/Notification";

export default defineComponent({
    props: {
        meal: Object
    },
    setup(props) {
        let form = useForm({
            name: null,
        })
        if (props.meal) {
            form = useForm(props.meal)
        }
        return {form}
    },
    components: {
        AppLayout,
        Notification
    },
    methods: {
        createOrUpdate() {
            if (this.meal) {
                this.form.put('/meals/' + this.meal.id)
            } else {
                this.form.post('/meals')
            }
        }
    }


})
</script>
