<template>
    <div class="container mx-auto">
        <h2 class="text-center text-4xl text-amber-400 font-mono pt-2">personal group section</h2>
        <p
            class="text-center font-thin text-red-700"
        >this is the private section of each indiviudal group</p>
        <div class="grid grid-rows-1 pt-4">
            <div class="grid grid-cols-4">
                <div class="col-start-1 col-span-3">
                    <h3 class="font-serif pl-6 text-3xl">Task assigned by the <span class="text-red-400">supervisor</span></h3>
                    <div class="w-full px-4 pt-6">
                        <div class="w-2/3 max-w-md p-2 float-left mx-auto bg-white rounded-2xl">
                            <Disclosure v-slot="{ open }">
                                <DisclosureButton
                                    class="flex justify-between w-full px-4 py-2 text-sm font-medium text-left text-purple-900 bg-purple-100 rounded-lg hover:bg-purple-200 focus:outline-none focus-visible:ring focus-visible:ring-purple-500 focus-visible:ring-opacity-75"
                                >
                                    <span>Authentication and Authorizations</span>
                                    <ChevronUpIcon
                                        :class="open ? 'transform rotate-180' : ''"
                                        class="w-5 h-5 text-purple-500"
                                    />
                                </DisclosureButton>
                                <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-gray-500">
                                    If you're unhappy with your purchase for any reason, email us within
                                    90 days and we'll refund you in full, no questions asked.
                                </DisclosurePanel>
                            </Disclosure>
                            <Disclosure as="div" class="mt-2" v-slot="{ open }">
                                <DisclosureButton
                                    class="flex justify-between w-full px-4 py-2 text-sm font-medium text-left text-purple-900 bg-purple-100 rounded-lg hover:bg-purple-200 focus:outline-none focus-visible:ring focus-visible:ring-purple-500 focus-visible:ring-opacity-75"
                                >
                                    <span>Validation In Server side.</span>
                                    <ChevronUpIcon
                                        :class="open ? 'transform rotate-180' : ''"
                                        class="w-5 h-5 text-purple-500"
                                    />
                                </DisclosureButton>
                                <DisclosurePanel
                                    class="px-4 pt-4 pb-2 text-sm text-gray-500"
                                >You have to complete validaion task in server side using PHP and Laravel, try to do it on server side for now, I'll assign client side validation task soon.</DisclosurePanel>
                            </Disclosure>
                            <Disclosure as="div" class="mt-2" v-slot="{ open }">
                                <DisclosureButton
                                    class="flex justify-between w-full px-4 py-2 text-sm font-medium text-left text-purple-900 bg-purple-100 rounded-lg hover:bg-purple-200 focus:outline-none focus-visible:ring focus-visible:ring-purple-500 focus-visible:ring-opacity-75"
                                >
                                    <span>Make one simple rest api</span>
                                    <ChevronUpIcon
                                        :class="open ? 'transform rotate-180' : ''"
                                        class="w-5 h-5 text-purple-500"
                                    />
                                </DisclosureButton>
                                <DisclosurePanel
                                    class="px-4 pt-4 pb-2 text-sm text-gray-500"
                                >Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, aliquam! Facilis cupiditate vitae necessitatibus beatae repudiandae quis deserunt ullam corrupti.</DisclosurePanel>
                            </Disclosure>
                        </div>
                    </div>

                    <!-- <div class="font-sans">
                        <div class="bg-white rounded shadow p-6 m-4 w-full lg:w-2/3">
                            <div>
                                <div class="flex mb-4">
                                    <p
                                        class="text-grey-darkest"
                                    >Add another component to Tailwind Components</p>
                                </div>
                                <div class="flex mb-4">
                                    <input class="py-3" type="checkbox" />
                                    <p
                                        class="w-full pl-3 line-through text-green"
                                    >Submit Todo App Component to Tailwind Components</p>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
                <div class="col-span-1">
                    <h1 class="text-2xl text-red-700 font-bold">Your Team</h1>

                    <ul class="pt-2">
                        <li class="flex list-disc">
                            <img
                                src="https://cdn.tuk.dev/assets/photo-1564061170517-d3907caa96ea.jfif"
                                alt
                                class="rounded-full object-cover h-10 w-10 shadow-md"
                            />
                            <h2 class="text-3xl text-gray-700 pl-3 font-thin">Fahad Bin Munir</h2>
                        </li>
                        <li class="flex pt-5">
                            <img
                                src="https://cdn.tuk.dev/assets/photo-1566753323558-f4e0952af115.jfif"
                                alt
                                class="rounded-full object-cover h-10 w-10 shadow-md"
                            />
                            <h2 class="text-3xl text-gray-700 pl-3 font-thin">Ishmam Bin Azim</h2>
                        </li>
                        <li class="flex pt-5">
                            <img
                                src="https://cdn.tuk.dev/assets/photo-1530577197743-7adf14294584.jfif"
                                alt
                                class="rounded-full object-cover h-10 w-10 shadow-md"
                            />
                            <h2 class="text-3xl text-gray-700 pl-3 font-thin">Sefat Tanzim</h2>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { ChevronUpIcon } from '@heroicons/vue/solid'
export default {
    name: 'section-template',
    components: {
        Disclosure, DisclosureButton, DisclosurePanel, ChevronUpIcon
    }
}
</script>