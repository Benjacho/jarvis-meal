<template>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th v-for="heading in headings"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                scope="col">
                                {{ heading }}
                            </th>
                            <th class="relative px-6 py-3" scope="col">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="(value, key) in data" :key="value.id"
                            :class="key % 2 === 0 ? 'bg-white' : 'bg-gray-50'">
                            <td v-for="heading in headings"
                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ value[heading] }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <Link :key="value.id" :cy="'cy-resource-edit-' + value.id"
                                      :href="route(rootRoute + '.edit', value.id)"
                                      class="text-indigo-600 hover:text-indigo-900">Edit
                                </Link>
                                <button :key="value.id" :cy="'cy-resource-delete-' + value.id"
                                        class="ml-4 text-red-600 hover:text-red-900"
                                        @click="deleteMeal(value.id)">Delete
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3';

export default {
    components: {
        Link
    },
    props: {
        headings: {
            required: true,
            type: Array
        },
        data: {
            required: true,
            type: Object
        },
        rootRoute: {
            required: true,
            type: String,
        }
    },
    methods: {
        deleteMeal(meal) {
            this.$inertia.delete(this.route(this.rootRoute + '.destroy', meal))
        }
    }
}
</script>
