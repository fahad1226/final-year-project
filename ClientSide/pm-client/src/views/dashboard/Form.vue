<template>
    <div>
        <div class="bg-white rounded w-full lg:px-10 sm:px-6 sm:py-10 px-2 py-6">
            <p
                tabindex="0"
                class="focus:outline-none pb-8 text-2xl font-extrabold leading-6 text-gray-800"
            >Create new group</p>

            <div>
                <label
                    for="email"
                    class="text-sm font-medium leading-none text-gray-800"
                >Student 1 ID</label>
                <input
                    id="first_name"
                    aria-labelledby="email"
                    type="text"
                    class="bg-gray-200 border rounded text-xs font-medium leading-none placeholder-gray-800 text-gray-800 py-3 w-full pl-3 mt-2"
                    placeholder="1630113201..."
                />
            </div>

            <div>
                <label
                    for="email"
                    class="text-sm font-medium leading-none text-gray-800"
                >Student 2 ID</label>
                <input
                    id="last_name"
                    type="text"
                    class="bg-gray-200 border rounded text-xs font-medium leading-none placeholder-gray-800 text-gray-800 py-3 w-full pl-3 mt-2"
                    placeholder="1630113201..."
                />
            </div>

            <div>
                <label
                    for="email"
                    class="text-sm font-medium leading-none text-gray-800"
                >Student 3 ID</label>
                <input
                    id="last_name"
                    type="text"
                    class="bg-gray-200 border rounded text-xs font-medium leading-none placeholder-gray-800 text-gray-800 py-3 w-full pl-3 mt-2"
                    placeholder="1630113201..."
                />
            </div>

            <div>
                <label for="email" class="text-sm font-medium leading-none text-gray-800">Contact 1</label>
                <input
                    id="first_name"
                    aria-labelledby="email"
                    type="text"
                    class="bg-gray-200 border rounded text-xs font-medium leading-none placeholder-gray-800 text-gray-800 py-3 w-full pl-3 mt-2"
                    placeholder="1630113201..."
                />
            </div>

            <div>
                <label for="email" class="text-sm font-medium leading-none text-gray-800">Contact 2</label>
                <input
                    id="last_name"
                    type="text"
                    class="bg-gray-200 border rounded text-xs font-medium leading-none placeholder-gray-800 text-gray-800 py-3 w-full pl-3 mt-2"
                    placeholder="1630113201..."
                />
            </div>

            <div>
                <label for="email" class="text-sm font-medium leading-none text-gray-800">Tags</label>
                <input
                    id="last_name"
                    type="text"
                    class="bg-gray-200 border rounded text-xs font-medium leading-none placeholder-gray-800 text-gray-800 py-3 w-full pl-3 mt-2"
                    placeholder="Ml, AI, Software Engineering..."
                />
            </div>

            <div>
                <label
                    for="email"
                    class="text-sm font-medium leading-none text-gray-800"
                >Student email</label>
                <input
                    id="email"
                    aria-labelledby="email"
                    type="email"
                    class="bg-gray-200 border rounded text-xs font-medium leading-none placeholder-gray-800 text-gray-800 py-3 w-full pl-3 mt-2"
                    placeholder="e.g: john@gmail.com "
                />
            </div>

            <div class="mt-8">
                <button
                    role="button"
                    class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 text-sm font-semibold leading-none text-white focus:outline-none bg-indigo-700 border rounded hover:bg-indigo-600 py-4 w-full"
                >Submit</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'EntryForm'
}
</script>