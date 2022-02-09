<template>
    <div class="container mx-auto my-2">
        <h1 class="text-3xl text-center text-yellow-700">Group Section</h1>
        <div class="grid grid-rows-1">
            <div class="grid grid-cols-3">
                <div class="cols col-span-2 mt-4">
                    <h2 class="text-3xl font-mono font-bold">Assign task</h2>
                    <div class="flex mt-4 pb-6">
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker"
                            placeholder="Add Task"
                        />

                        <button
                            class="flex-no-shrink p-2 border-2 rounded text-teal border-teal hover:bg-teal"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </button>
                    </div>
                    <div class="pt-4" v-for="n in 5" :key="n">
                        <div class="flex mb-4 items-center bg-indigo-100 rounded-2xl">
                            <p
                                class="w-full text-grey-darkest font-semibold text-2xl pl-4"
                            >Add another component to Tailwind Components</p>
                            <button
                                class="flex-no-shrink p-2 ml-4 mr-2 rounded-lg text-green border-green hover:bg-green-200"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"
                                    />
                                    <path
                                        fill-rule="evenodd"
                                        d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                            </button>
                            <button class="flex-no-shrink p-2 ml-2 rounded-lg hover:bg-red-300">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
export default {
    name: 'Task'
}
</script>