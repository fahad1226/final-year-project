<template>
    <Navbar />

    <div class="grid grid-cols-6">
        <div class="col-start-1 col-span-1">
            <Sidebar />
        </div>

        <div class="col-start-2 col-span-5 bg-gray-100">
            <div class="container mx-auto mt-2">
                <div class="sm:hidden relative w-11/12 mx-auto bg-gray-400 rounded">
                    <div class="absolute inset-0 m-auto mr-4 z-0 w-6 h-6">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-selector"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="#A0AEC0"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <polyline points="8 9 12 5 16 9" />
                            <polyline points="16 15 12 19 8 15" />
                        </svg>
                    </div>
                    <select
                        aria-label="Selected tab"
                        class="form-select block w-full p-3 border border-gray-300 rounded text-gray-600 appearance-none bg-transparent relative z-10"
                    >
                        <option class="text-sm text-gray-600">inactive</option>
                        <option class="text-sm text-gray-600">inactive</option>
                        <option selected class="text-sm text-gray-600">Active</option>
                        <option class="text-sm text-gray-600">inactive</option>
                        <option class="text-sm text-gray-600">inactive</option>
                    </select>
                </div>
                <div class="justify-between flex-wrap hidden sm:block bg-white shadow rounded">
                    <div class="xl:w-full xl:mx-0 -b pl-5 pr-5 h-12">
                        <ul class="flex items-center h-full">
                            <li
                                class="text-sm text-indigo-700 py-2 px-4 bg-gray-200 rounded mr-8 font-normal cursor-pointer"
                            >Active</li>
                            <li
                                class="text-sm text-gray-600 rounded py-2 px-4 mr-10 font-normal hover:text-indigo-700 cursor-pointer"
                            >inactive</li>
                            <li
                                class="text-sm text-gray-600 rounded py-2 px-4 mr-10 font-normal hover:text-indigo-700 cursor-pointer"
                            >inactive</li>
                            <li
                                class="text-sm text-gray-600 rounded py-2 px-4 mr-10 font-normal hover:text-indigo-700 cursor-pointer"
                            >inactive</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
import Navbar from '@/views/header/Navbar.vue'
import Sidebar from '@/views/header/Sidebar.vue'
export default {
    name: 'Dashboard',
    components: {
        Navbar,
        Sidebar,

    }
}
</script>