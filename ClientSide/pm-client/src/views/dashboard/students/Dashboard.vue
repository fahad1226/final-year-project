<template>
    <TransitionRoot as="template" :show="open" class="bg-gray-900 bg-opacity-50">
        <Dialog
            as="div"
            static
            class="fixed inset-0 overflow-hidden"
            @close="open = false"
            :open="open"
        >
            <div class="absolute inset-0 overflow-hidden">
                <DialogOverlay class="absolute inset-0" />

                <div class="fixed inset-y-0 top-6 bottom-14 right-0 max-w-full flex">
                    <TransitionChild
                        as="template"
                        enter="transform transition ease-in-out duration-500 sm:duration-700"
                        enter-from="translate-x-full"
                        enter-to="translate-x-0"
                        leave="transform transition ease-in-out duration-500 sm:duration-700"
                        leave-from="translate-x-0"
                        leave-to="translate-x-full"
                    >
                        <div class="w-screen max-w-lg z-100">
                            <form class="h-full flex flex-col rounded-lg bg-white shadow-xl">
                                <div class="flex-1">
                                    <NewIdea />
                                </div>
                            </form>
                        </div>
                    </TransitionChild>
                </div>
            </div>
        </Dialog>
    </TransitionRoot>
    <div class="container mx-auto">
        <h2 class="text-3xl text-center text-blue-700 font-bold pt-4">Student Dashboard</h2>

        <div class="float-right">
            <button
                @click="open = true"
                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
            >Submit a New Idea</button>
        </div>
    </div>

    <h2
        class="container mx-auto text-center pt-20 text-gray-500 font-semibold text-4xl"
    >List of ideas submited by students</h2>

    <div class="lg:flex items-center justify-cente lg:px-0 px-4">
        <div aria-label="group of cards" tabindex="0" class="focus:outline-none py-8 w-full">
            <div class="lg:flex items-center justify-center w-full">
                <div
                    tabindex="0"
                    aria-label="card 1"
                    class="focus:outline-none lg:w-4/12 lg:mr-7 lg:mb-0 mb-7 bg-white p-6 shadow rounded"
                >
                    <div class="flex items-center border-b border-gray-200 pb-6">
                        <img
                            src="https://cdn.tuk.dev/assets/components/misc/doge-coin.png"
                            alt="coin avatar"
                            class="w-12 h-12 rounded-full"
                        />
                        <div class="flex items-start justify-between w-full">
                            <div class="pl-3 w-full">
                                <p
                                    tabindex="0"
                                    class="focus:outline-none text-xl font-medium leading-5 text-gray-800"
                                >Dogecoin nerds</p>
                                <p
                                    tabindex="0"
                                    class="focus:outline-none text-sm font-semibold leading-normal pt-2 text-gray-500"
                                >31st batch, CSE</p>
                            </div>
                            <div role="img" aria-label="bookmark">Pending</div>
                        </div>
                    </div>
                    <div class="px-2">
                        <p
                            tabindex="0"
                            class="focus:outline-none text-sm leading-5 py-4 text-gray-600"
                        >A group of people interested in dogecoin, the currency and a bit of side for the meme and dof that we all know and love. These cases are perfectly simple and easy to distinguish.</p>
                        <div tabindex="0" class="focus:outline-none flex">
                            <div
                                class="py-2 px-4 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100"
                            >#software</div>
                            <div
                                class="py-2 px-4 ml-3 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100"
                            >#web</div>
                        </div>
                    </div>
                </div>
                <div
                    aria-label="card 2"
                    tabindex="0"
                    class="focus:outline-none lg:w-4/12 lg:mr-7 lg:mb-0 mb-7 bg-white p-6 shadow rounded"
                >
                    <div class="flex items-center border-b border-gray-200 pb-6">
                        <div class="w-12 h-12 bg-gray-300 rounded-full flex flex-shrink-0"></div>
                        <div class="flex items-start justify-between w-full">
                            <div class="pl-3 w-full">
                                <p
                                    tabindex="0"
                                    class="focus:outline-none text-xl font-medium leading-5 text-gray-800"
                                >Sale And Purchase</p>
                                <p
                                    tabindex="0"
                                    class="focus:outline-none text-sm font-semibold leading-normal pt-2 text-gray-500"
                                >31st batch, CSE</p>
                            </div>
                            <div aria-label="bookmark" role="img">
                                <div role="img" aria-label="bookmark">Pending</div>
                            </div>
                        </div>
                    </div>
                    <div class="px-2">
                        <p
                            tabindex="0"
                            class="focus:outline-none text-sm leading-5 py-4 text-gray-600"
                        >A group of people interested in dogecoin, the currency and a bit of side for the meme and dof that we all know and love. These cases are perfectly simple and easy to distinguish.</p>
                        <div tabindex="0" class="focus:outline-none flex">
                            <div
                                class="py-2 px-4 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100"
                            >#AI</div>
                            <div
                                class="py-2 px-4 ml-3 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100"
                            >#ML</div>
                            <div
                                class="py-2 px-4 ml-3 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100"
                            >#Data Sceince</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:flex items-center justify-center w-full mt-7">
                <div
                    aria-label="card 3"
                    tabindex="0"
                    class="focus:outline-none lg:w-4/12 lg:mr-7 lg:mb-0 mb-7 bg-white p-6 shadow rounded"
                >
                    <div class="flex items-center border-b border-gray-200 pb-6">
                        <div class="w-12 h-12 bg-gray-300 rounded-full flex flex-shrink-0"></div>
                        <div class="flex items-start justify-between w-full">
                            <div class="pl-3 w-full">
                                <p
                                    tabindex="0"
                                    class="focus:outline-none text-xl font-medium leading-5 text-gray-800"
                                >Family guy : A thread</p>
                                <p
                                    tabindex="0"
                                    class="focus:outline-none text-sm font-semibold leading-normal pt-2 text-gray-500"
                                >29th batch, CSE</p>
                            </div>
                            <div role="img" aria-label="bookmark">
                                <div role="img" aria-label="bookmark">Pending</div>
                            </div>
                        </div>
                    </div>
                    <div class="px-2">
                        <p
                            tabindex="0"
                            class="focus:outline-none text-sm leading-5 py-4 text-gray-600"
                        >A group of people interested in dogecoin, the currency and a bit of side for the meme and dof that we all know and love. These cases are perfectly simple and easy to distinguish.</p>
                        <div tabindex="0" class="focus:outline-none flex">
                            <div
                                class="py-2 px-4 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100"
                            >#dogecoin</div>
                            <div
                                class="py-2 px-4 ml-3 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100"
                            >#crypto</div>
                        </div>
                    </div>
                </div>
                <div
                    aria-label="card 4"
                    tabindex="0"
                    class="focus:outline-none lg:w-4/12 lg:mr-7 lg:mb-0 mb-7 bg-white p-6 shadow rounded"
                >
                    <div class="flex items-center border-b border-gray-200 pb-6">
                        <div class="w-12 h-12 bg-gray-300 rounded-full flex flex-shrink-0"></div>
                        <div class="flex items-start justify-between w-full">
                            <div class="pl-3 w-full">
                                <p
                                    tabindex="0"
                                    class="focus:outline-none text-xl font-medium leading-5 text-gray-800"
                                >DC vs Marvel</p>
                                <p
                                    tabindex="0"
                                    class="focus:outline-none text-sm font-semibold leading-normal pt-2 text-gray-500"
                                >31st batch, CSE</p>
                            </div>
                            <div role="img" aria-label="bookmark">
                                <div
                                    role="img"
                                    class="font-extrabold text-green-500"
                                    aria-label="bookmark"
                                >Approved</div>
                            </div>
                        </div>
                    </div>
                    <div class="px-2">
                        <p
                            tabindex="0"
                            class="focus:outline-none text-sm leading-5 py-4 text-gray-600"
                        >A group of people interested in dogecoin, the currency and a bit of side for the meme and dof that we all know and love. These cases are perfectly simple and easy to distinguish.</p>
                        <div tabindex="0" class="focus:outline-none flex">
                            <div
                                class="py-2 px-4 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100"
                            >#machinelearning</div>
                            <div
                                class="py-2 px-4 ml-3 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100"
                            >#crypto</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:flex items-center justify-center w-full mt-7">
                <div
                    aria-label="card 5"
                    tabindex="0"
                    class="focus:outline-none lg:w-4/12 lg:mr-7 lg:mb-0 mb-7 bg-white p-6 shadow rounded"
                >
                    <div class="flex items-center border-b border-gray-200 pb-6">
                        <div class="w-12 h-12 bg-gray-300 rounded-full flex flex-shrink-0"></div>
                        <div class="flex items-start justify-between w-full">
                            <div class="pl-3 w-full">
                                <p
                                    tabindex="0"
                                    class="focus:outline-none text-xl font-medium leading-5 text-gray-800"
                                >Rick & Morty</p>
                                <p
                                    tabindex="0"
                                    class="focus:outline-none text-sm font-semibold leading-normal pt-2 text-gray-500"
                                >33th batch, EEE</p>
                            </div>
                            <div role="img" aria-label="bookmark">
                                <div role="img" aria-label="bookmark">Pending</div>
                            </div>
                        </div>
                    </div>
                    <div class="px-2">
                        <p
                            tabindex="0"
                            class="focus:outline-none text-sm leading-5 py-4 text-gray-600"
                        >A group of people interested in dogecoin, the currency and a bit of side for the meme and dof that we all know and love. These cases are perfectly simple and easy to distinguish.</p>
                        <div tabindex="0" class="focus:outline-none flex">
                            <div
                                class="py-2 px-4 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100"
                            >#dogecoin</div>
                            <div
                                class="py-2 px-4 ml-3 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100"
                            >#crypto</div>
                        </div>
                    </div>
                </div>
                <div
                    aria-label="card 6"
                    tabindex="0"
                    class="focus:outline-none lg:w-4/12 lg:mr-7 lg:mb-0 mb-7 bg-white p-6 shadow rounded"
                >
                    <div class="flex items-center border-b border-gray-200 pb-6">
                        <div class="w-12 h-12 bg-gray-300 rounded-full flex flex-shrink-0"></div>
                        <div class="flex items-start justify-between w-full">
                            <div class="pl-3 w-full">
                                <p
                                    tabindex="0"
                                    class="focus:outline-none text-xl font-medium leading-5 text-gray-800"
                                >La Liga: A history</p>
                                <p
                                    tabindex="0"
                                    class="focus:outline-none text-sm font-semibold leading-normal pt-2 text-gray-500"
                                >34th batch, CSE</p>
                            </div>
                            <div role="img" aria-label="bookmark">
                                <div role="img" aria-label="bookmark">Pending</div>
                            </div>
                        </div>
                    </div>
                    <div class="px-2">
                        <p
                            tabindex="0"
                            class="focus:outline-none text-sm leading-5 py-4 text-gray-600"
                        >A group of people interested in dogecoin, the currency and a bit of side for the meme and dof that we all know and love. These cases are perfectly simple and easy to distinguish.</p>
                        <div tabindex="0" class="focus:outline-none flex">
                            <div
                                class="py-2 px-4 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100"
                            >#dogecoin</div>
                            <div
                                class="py-2 px-4 ml-3 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100"
                            >#crypto</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
import {
    Dialog,
    DialogOverlay,
    DialogTitle, Menu, MenuButton, MenuItem, MenuItems, TransitionChild,
    TransitionRoot
} from "@headlessui/vue";
import { ref } from 'vue';
import NewIdea from './NewIdea.vue';
export default {
    name: 'StudentDashboard',
    components: {
        Dialog,
        DialogOverlay,
        DialogTitle,
        TransitionChild,
        TransitionRoot,
        Menu,
        MenuButton,
        MenuItems,
        MenuItem,
        NewIdea
    },
    setup() {
        let open = ref(false);

        return {
            open
        }
    }
}
</script>


<style>
.checkbox:checked + .check-icon {
    display: flex;
}
</style>    
   
