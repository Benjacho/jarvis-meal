<template>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                scope="col">
                                Schedule
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                scope="col">
                                Monday
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                scope="col">
                                Tuesday
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                scope="col">
                                Wednesday
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                scope="col">
                                Thursday
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                scope="col">
                                Friday
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                scope="col">
                                Saturday
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                scope="col">
                                Sunday
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- Odd row -->
                        <tr v-for="schedule in scheduleMeals" class="bg-white">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ schedule.name }}
                                <span class="block">
                                    ({{ parseTime(schedule.hour) }})
                                </span>
                            </td>
                        </tr>
                        <!--                        <tr class="bg-white">-->
                        <!--                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">-->
                        <!--                                Desayuno (7:30 AM)-->
                        <!--                            </td>-->
                        <!--                            <td class="px-6 py-4 whitespace-normal text-sm text-gray-500">-->
                        <!--                                1 taza de avena con arandanos sin azucar + 1 tostada o 1 pan de molde integral +-->
                        <!--                                omelette 2 claas de huevo 1 yema-->
                        <!--                            </td>-->
                        <!--                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">-->
                        <!--                                jane.cooper@example.com-->
                        <!--                            </td>-->
                        <!--                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">-->
                        <!--                                Admin-->
                        <!--                            </td>-->
                        <!--                            <td class="px-6 py-4 whitespace-normal text-sm text-gray-500">-->
                        <!--                                1 taza de avena con arandanos sin azucar + 1 tostada o 1 pan de molde integral +-->
                        <!--                                omelette 2 claas de huevo 1 yema-->
                        <!--                            </td>-->
                        <!--                            <td class="px-6 py-4 whitespace-normal text-sm text-gray-500">-->
                        <!--                                1 taza de avena con arandanos sin azucar + 1 tostada o 1 pan de molde integral +-->
                        <!--                                omelette 2 claas de huevo 1 yema-->
                        <!--                            </td>-->
                        <!--                            <td class="px-6 py-4 whitespace-normal text-sm text-gray-500">-->
                        <!--                                1 taza de avena con arandanos sin azucar + 1 tostada o 1 pan de molde integral +-->
                        <!--                                omelette 2 claas de huevo 1 yema-->
                        <!--                            </td>-->
                        <!--                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">-->
                        <!--                                <a class="text-indigo-600 hover:text-indigo-900" href="#">Edit</a>-->
                        <!--                            </td>-->
                        <!--                        </tr>-->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import moment from 'moment'

export default {
    name: "Calendar",
    props: {
        scheduleMeals: Object
    },
    methods: {
        parseTime(time) {
            return moment(time, "hh:mm:ss").format("hh:mm a");
        }
    }

}
</script>

<style scoped>

</style>
