<template>
    <div class="md:flex md:items-center md:justify-between">
        <div class="flex-1 min-w-0">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ title }}
            </h2>
        </div>
        <div class="flex md:mt-0 md:ml-4">
            <Link :href="create_button" cy="cy-resource-create-button">
                <button
                    class="ml-3 inline-flex items-center px-4 py-1 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Create
                </button>
            </Link>
        </div>
    </div>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3';

export default {
    name: "ResourcePageHeading",
    components: {
        Link
    },
    props: {
        title: {
            required: true
        },
        create_button: {
            required: true
        }
    }
}
</script>

<style scoped>

</style>
