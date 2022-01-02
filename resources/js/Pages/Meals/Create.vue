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
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Profile</h3>
                                <p class="mt-1 text-sm text-gray-600">
                                    This information will be displayed publicly so be careful what you share.
                                </p>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <form action="#" method="POST">
                                <div class="shadow sm:rounded-md sm:overflow-hidden">
                                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                        <div class="grid grid-cols-3 gap-6">
                                            <div class="col-span-3 sm:col-span-2">
                                                <label class="block text-sm font-medium text-gray-700"
                                                       for="company-website">
                                                    Website
                                                </label>
                                                <div class="mt-1 flex rounded-md shadow-sm">
                  <span
                      class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                    http://
                  </span>
                                                    <input id="company-website"
                                                           class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                                           name="company-website"
                                                           placeholder="www.example.com"
                                                           type="text">
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <label class="block text-sm font-medium text-gray-700" for="about">
                                                About
                                            </label>
                                            <div class="mt-1">
                                                <textarea id="about"
                                                          class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                                                          name="about"
                                                          placeholder="you@example.com"
                                                          rows="3"></textarea>
                                            </div>
                                            <p class="mt-2 text-sm text-gray-500">
                                                Brief description for your profile. URLs are hyperlinked.
                                            </p>
                                        </div>

                                        <div>
                                            <label class="block text-sm font-medium text-gray-700">
                                                Photo
                                            </label>
                                            <div class="mt-1 flex items-center">
                <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                  <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z"/>
                  </svg>
                </span>
                                                <button
                                                    class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                    type="button">
                                                    Change
                                                </button>
                                            </div>
                                        </div>

                                        <div>
                                            <label class="block text-sm font-medium text-gray-700">
                                                Cover photo
                                            </label>
                                            <div
                                                class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                                <div class="space-y-1 text-center">
                                                    <svg aria-hidden="true" class="mx-auto h-12 w-12 text-gray-400"
                                                         fill="none" stroke="currentColor" viewBox="0 0 48 48">
                                                        <path
                                                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"/>
                                                    </svg>
                                                    <div class="flex text-sm text-gray-600">
                                                        <label
                                                            class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500"
                                                            for="file-upload">
                                                            <span>Upload a file</span>
                                                            <input id="file-upload" class="sr-only" name="file-upload"
                                                                   type="file">
                                                        </label>
                                                        <p class="pl-1">or drag and drop</p>
                                                    </div>
                                                    <p class="text-xs text-gray-500">
                                                        PNG, JPG, GIF up to 10MB
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button
                                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            type="submit">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div aria-hidden="true" class="hidden sm:block">
                    <div class="py-5">
                        <div class="border-t border-gray-200"></div>
                    </div>
                </div>

                <div class="mt-10 sm:mt-0">
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                                <p class="mt-1 text-sm text-gray-600">
                                    Use a permanent address where you can receive mail.
                                </p>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <form action="#" method="POST">
                                <div class="shadow overflow-hidden sm:rounded-md">
                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label class="block text-sm font-medium text-gray-700" for="first-name">First
                                                    name</label>
                                                <input id="first-name" autocomplete="given-name"
                                                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                       name="first-name"
                                                       type="text">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label class="block text-sm font-medium text-gray-700" for="last-name">Last
                                                    name</label>
                                                <input id="last-name" autocomplete="family-name"
                                                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                       name="last-name"
                                                       type="text">
                                            </div>

                                            <div class="col-span-6 sm:col-span-4">
                                                <label class="block text-sm font-medium text-gray-700"
                                                       for="email-address">Email
                                                    address</label>
                                                <input id="email-address" autocomplete="email"
                                                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                       name="email-address"
                                                       type="text">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label class="block text-sm font-medium text-gray-700" for="country">Country</label>
                                                <select id="country" autocomplete="country-name"
                                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                                        name="country">
                                                    <option>United States</option>
                                                    <option>Canada</option>
                                                    <option>Mexico</option>
                                                </select>
                                            </div>

                                            <div class="col-span-6">
                                                <label class="block text-sm font-medium text-gray-700"
                                                       for="street-address">Street
                                                    address</label>
                                                <input id="street-address" autocomplete="street-address"
                                                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                       name="street-address"
                                                       type="text">
                                            </div>

                                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                <label class="block text-sm font-medium text-gray-700"
                                                       for="city">City</label>
                                                <input id="city" autocomplete="address-level2"
                                                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                       name="city"
                                                       type="text">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                                <label class="block text-sm font-medium text-gray-700" for="region">State
                                                    / Province</label>
                                                <input id="region" autocomplete="address-level1"
                                                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                       name="region"
                                                       type="text">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                                <label class="block text-sm font-medium text-gray-700"
                                                       for="postal-code">ZIP / Postal
                                                    code</label>
                                                <input id="postal-code" autocomplete="postal-code"
                                                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                       name="postal-code"
                                                       type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button
                                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            type="submit">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div aria-hidden="true" class="hidden sm:block">
                    <div class="py-5">
                        <div class="border-t border-gray-200"></div>
                    </div>
                </div>

                <div class="mt-10 sm:mt-0">
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Notifications</h3>
                                <p class="mt-1 text-sm text-gray-600">
                                    Decide which communications you'd like to receive and how.
                                </p>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <form action="#" method="POST">
                                <div class="shadow overflow-hidden sm:rounded-md">
                                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                        <fieldset>
                                            <legend class="text-base font-medium text-gray-900">By Email</legend>
                                            <div class="mt-4 space-y-4">
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="comments"
                                                               class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"
                                                               name="comments"
                                                               type="checkbox">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label class="font-medium text-gray-700"
                                                               for="comments">Comments</label>
                                                        <p class="text-gray-500">Get notified when someones posts a
                                                            comment on a posting.</p>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="candidates"
                                                               class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"
                                                               name="candidates"
                                                               type="checkbox">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label class="font-medium text-gray-700" for="candidates">Candidates</label>
                                                        <p class="text-gray-500">Get notified when a candidate applies
                                                            for a job.</p>
                                                    </div>
                                                </div>
                                                <div class="flex items-start">
                                                    <div class="flex items-center h-5">
                                                        <input id="offers"
                                                               class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded"
                                                               name="offers"
                                                               type="checkbox">
                                                    </div>
                                                    <div class="ml-3 text-sm">
                                                        <label class="font-medium text-gray-700"
                                                               for="offers">Offers</label>
                                                        <p class="text-gray-500">Get notified when a candidate accepts
                                                            or rejects an offer.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div>
                                                <legend class="text-base font-medium text-gray-900">Push Notifications
                                                </legend>
                                                <p class="text-sm text-gray-500">These are delivered via SMS to your
                                                    mobile phone.</p>
                                            </div>
                                            <div class="mt-4 space-y-4">
                                                <div class="flex items-center">
                                                    <input id="push-everything"
                                                           class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                           name="push-notifications"
                                                           type="radio">
                                                    <label class="ml-3 block text-sm font-medium text-gray-700"
                                                           for="push-everything">
                                                        Everything
                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="push-email"
                                                           class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                           name="push-notifications"
                                                           type="radio">
                                                    <label class="ml-3 block text-sm font-medium text-gray-700"
                                                           for="push-email">
                                                        Same as email
                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="push-nothing"
                                                           class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                           name="push-notifications"
                                                           type="radio">
                                                    <label class="ml-3 block text-sm font-medium text-gray-700"
                                                           for="push-nothing">
                                                        No push notifications
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button
                                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
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

export default defineComponent({
    components: {
        AppLayout,
    },
    props: {
        scheduleMeals: Object
    }
})
</script>
