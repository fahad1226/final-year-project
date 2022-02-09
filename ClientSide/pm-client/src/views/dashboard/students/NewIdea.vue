<template>
    <div>
        <div class="bg-white rounded w-full lg:px-10 sm:px-6 sm:py-10 px-2 py-6">
            <p
                tabindex="0"
                class="focus:outline-none pb-8 text-2xl font-extrabold leading-6 text-gray-800"
            >new project idea</p>

            <div>
                <label
                    for="email"
                    class="text-sm font-medium leading-none text-gray-800"
                >Project Title</label>
                <input
                    id="last_name"
                    type="text"
                    class="bg-gray-200 border rounded text-xs font-medium leading-none placeholder-gray-800 text-gray-800 py-3 w-full pl-3 mt-2"
                    placeholder="project title"
                />
            </div>

            <div>
                <label
                    for="email"
                    class="text-sm font-medium leading-none text-gray-800"
                >Project avatar</label>
                <input
                    id="last_name"
                    type="file"
                    class="bg-gray-200 border rounded text-xs font-medium leading-none placeholder-gray-800 text-gray-800 py-3 w-full pl-3 mt-2"
                    accept=".jpg, .jpeg, .png"
                />
            </div>

            <div>
                <label
                    for="email"
                    class="text-sm font-medium leading-none text-gray-800"
                >Project description</label>
                <textarea
                    rows="10"
                    cols="10"
                    type="text"
                    class="bg-gray-200 border rounded text-xs font-medium leading-none placeholder-gray-800 text-gray-800 py-3 w-full pl-3 mt-2"
                    placeholder="share the idea with as many words as you need"
                />
            </div>

            <div>
                <label
                    for="email"
                    class="pt-2 text-sm font-medium leading-none text-gray-800"
                >Select your supervisor</label>
                <Listbox v-model="selectedPerson">
                    <div class="relative mt-1">
                        <ListboxButton
                            class="relative w-full py-2 pl-3 pr-10 text-left bg-white rounded-lg shadow-md cursor-default focus:outline-none focus-visible:ring-2 focus-visible:ring-opacity-75 focus-visible:ring-white focus-visible:ring-offset-orange-300 focus-visible:ring-offset-2 focus-visible:border-indigo-500 sm:text-sm"
                        >
                            <span class="block truncate">{{ selectedPerson.name }}</span>
                            <span
                                class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none"
                            >
                                <SelectorIcon class="w-5 h-5 text-gray-400" aria-hidden="true" />
                            </span>
                        </ListboxButton>

                        <transition
                            leave-active-class="transition duration-100 ease-in"
                            leave-from-class="opacity-100"
                            leave-to-class="opacity-0"
                        >
                            <ListboxOptions
                                class="absolute w-full py-1 mt-1 overflow-auto text-base bg-white rounded-md shadow-lg max-h-60 ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
                            >
                                <ListboxOption
                                    v-slot="{ active, selected }"
                                    v-for="person in people"
                                    :key="person.name"
                                    :value="person"
                                    as="template"
                                >
                                    <li
                                        :class="[
                                            active ? 'text-amber-900 bg-amber-100' : 'text-gray-900',
                                            'cursor-default select-none relative py-2 pl-10 pr-4',
                                        ]"
                                    >
                                        <span
                                            :class="[
                                                selected ? 'font-medium' : 'font-normal',
                                                'block truncate',
                                            ]"
                                        >{{ person.name }}</span>
                                        <span
                                            v-if="selected"
                                            class="absolute inset-y-0 left-0 flex items-center pl-3 text-amber-600"
                                        >
                                            <CheckIcon class="w-5 h-5" aria-hidden="true" />
                                        </span>
                                    </li>
                                </ListboxOption>
                            </ListboxOptions>
                        </transition>
                    </div>
                </Listbox>
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
import {
    Listbox, ListboxButton, ListboxLabel, ListboxOption, ListboxOptions
} from '@headlessui/vue';
import { CheckIcon, SelectorIcon } from '@heroicons/vue/solid';
import { ref } from 'vue';
export default {
    name: 'NewIdea',
    components: {
        Listbox,
        ListboxLabel,
        ListboxButton,
        ListboxOptions,
        ListboxOption,
        CheckIcon, SelectorIcon
    },
    setup() {
        const people = [
            { name: 'Wade Cooper' },
            { name: 'Arlene Mccoy' },
            { name: 'Devon Webb' },
            { name: 'Tom Cook' },
            { name: 'Tanya Fox' },
            { name: 'Hellen Schmidt' },
        ];
        const selectedPerson = ref(people[0]);
        return {
            people,
            selectedPerson,
        }
    }
}
</script>