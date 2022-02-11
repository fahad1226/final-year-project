<template>
    <div class="container mx-auto">
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
            <div class="float-right pt-10">
                <button
                    @click="open = true"
                    class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
                >Submit a New Idea</button>
            </div>
        </div>
        <h2 class="text-center text-4xl text-amber-400 font-mono pt-2">personal group section</h2>
        <p
            class="text-center font-thin text-red-700"
        >this is the private section of each indiviudal group</p>
        <div class="grid grid-rows-1 pt-4">
            <div class="grid grid-cols-3 gap-5">
                <div class="col-start-1 col-span-2">
                    <h3 class="font-serif pl-6 text-3xl">
                        Submitted
                        <span class="text-red-400">projects</span>
                        list
                    </h3>
                    <div class="w-full px-4 pt-6">
                        <div class="w-full p-2 float-left mx-auto bg-white rounded-2xl">
                            <Disclosure v-slot="{ open }">
                                <DisclosureButton
                                    class="flex justify-between w-full px-4 py-2 text-sm font-medium text-left text-purple-900 bg-gray-200 rounded-lg hover:bg-gray-300 focus:outline-none focus-visible:ring focus-visible:ring-purple-500 focus-visible:ring-opacity-75"
                                >
                                    <h2 class="text-xl text-red-800 font-serif font-semibold">
                                        Inventory Management System
                                        <span
                                            class="font-thin text-blue-500 text-sm"
                                        >pending</span>
                                    </h2>

                                    <ChevronUpIcon
                                        :class="open ? 'transform rotate-180' : ''"
                                        class="w-5 h-5 text-gray-500"
                                    />
                                </DisclosureButton>
                                <DisclosurePanel
                                    class="px-4 pt-4 text-lg pb-2 font-medium text-gray-500"
                                >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, laborum! Libero quis est expedita eligendi blanditiis. Deleniti aliquam modi ad similique incidunt quis nam aut itaque, officiis nulla. Officiis culpa voluptatibus ducimus molestiae? Odit neque numquam, quia obcaecati quos assumenda?</DisclosurePanel>
                            </Disclosure>
                            <Disclosure as="div" class="mt-2" v-slot="{ open }">
                                <DisclosureButton
                                    class="flex justify-between w-full px-4 py-2 text-sm font-medium text-left text-purple-900 bg-gray-200 rounded-lg hover:bg-gray-300 focus:outline-none focus-visible:ring focus-visible:ring-purple-500 focus-visible:ring-opacity-75"
                                >
                                    <h2 class="text-xl text-red-800 font-serif font-semibold">
                                        Face detection
                                        <span
                                            class="font-thin text-blue-500 text-sm"
                                        >pending</span>
                                    </h2>

                                    <ChevronUpIcon
                                        :class="open ? 'transform rotate-180' : ''"
                                        class="w-5 h-5 text-gray-500"
                                    />
                                </DisclosureButton>
                                <DisclosurePanel
                                    class="px-4 pt-4 pb-2 text-lg font-medium text-gray-500"
                                >
                                    One of the best ideas to start experimenting you hands-on computer science projects for students is face detection software. This project focuses on building a face detection software using the OpenCV library. The face detection program will be modelled in a way that it can detect faces in live stream videos from webcam or video files stored in a PC’s local storage. The software uses pre-trained XML classifiers to detect faces in real-time and track them. You can also use different classifiers to identify various objects through this detection program.
                                    To run this program, you need to install the OpenCV library on your local machine. Also, it would be best if you created appropriate paths for the XML classifier files before executing the program.
                                </DisclosurePanel>
                            </Disclosure>
                            <Disclosure as="div" class="mt-2" v-slot="{ open }">
                                <DisclosureButton
                                    class="flex justify-between w-full px-4 py-2 text-sm font-medium text-left text-purple-900 bg-gray-200 rounded-lg hover:bg-gray-300 focus:outline-none focus-visible:ring focus-visible:ring-purple-500 focus-visible:ring-opacity-75"
                                >
                                    <h2 class="text-xl text-red-800 font-serif font-semibold">
                                        Online auction system
                                        <span
                                            class="font-thin text-green-500 text-sm"
                                        >approved</span>
                                    </h2>

                                    <ChevronUpIcon
                                        :class="open ? 'transform rotate-180' : ''"
                                        class="w-5 h-5 text-gray-500"
                                    />
                                </DisclosureButton>
                                <DisclosurePanel
                                    class="px-4 pt-4 pb-2 text-lg font-medium text-gray-500"
                                >
                                    In an online auction, buyers and sellers engage in transactional business, wherein buyers purchase items through price bidding. Here, the bids have a starting price and an ending time. Potential buyers who place the highest bidding price for an item are declared the winners and owners of particular items.
                                    In this project, you will create a secure online auction system using the fraud detection method with binary classification. If a user wants to buy a product through an online auction, they must provide their identification details like PAN number, email address, license number, etc. The system will then screen the users, authenticate, and authorize them. Only authorized users can bid in the auction. The system will be designed to predict fraudulent users in the early stages, thereby eliminating the risk of online fraud and scams. This beginner-level computer science projects will help build a strong foundation for fundamental programming concepts..
                                </DisclosurePanel>
                            </Disclosure>
                        </div>
                    </div>
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
                    <div class="pt-10">
                        <h2 class="text-xl font-bold font-mono">
                            Schedule a meeting with
                            <span class="text-red-300">supervisor</span>
                        </h2>

                        <div class="mt-4 flex flex-col w-full">
                            <textarea
                                id="about"
                                name="about"
                                required
                                class="bg-transparent border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded text-sm focus:outline-none focus:border-indigo-700 resize-none placeholder-gray-500 text-gray-500 dark:text-gray-400"
                                placeholder="Send information about the meeting to the supervisor"
                                rows="5"
                            ></textarea>
                            <p
                                class="w-full text-right text-xs pt-1 text-gray-500 dark:text-gray-400"
                            >Character Limit: 200</p>
                        </div>
                        <div class="mt-4 flex flex-col w-full">
                            <input
                                type="date"
                                id="date"
                                required
                                class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded text-sm focus:outline-none focus:border-indigo-700 bg-transparent placeholder-gray-500 text-gray-500 dark:text-gray-400"
                                placeholder="@example"
                            />
                        </div>
                        <button
                            class="mt-4 justify-center bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
                        >Send</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="grid grid-rows-1">
            <div class="grid grid-cols-3">
               
            </div>
        </div>-->
    </div>
</template>

<script>
import {
    Dialog,
    DialogOverlay,
    DialogTitle, Disclosure,
    DisclosureButton, DisclosurePanel, Menu, MenuButton, MenuItem, MenuItems, TransitionChild,
    TransitionRoot
} from '@headlessui/vue';
import { ChevronUpIcon } from '@heroicons/vue/solid';
import { ref } from 'vue';
import NewIdea from './NewIdea.vue';
export default {
    name: 'section-template',
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
        NewIdea, Disclosure, DisclosureButton, DisclosurePanel, ChevronUpIcon
    },
    setup() {
        let open = ref(false);

        return {
            open
        }
    }
}
</script>