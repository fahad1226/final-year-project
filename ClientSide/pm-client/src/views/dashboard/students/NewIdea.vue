<template>
  <div>
    <div class="bg-white rounded w-full lg:px-10 sm:px-6 sm:py-10 px-2 py-6">
      <p
        tabindex="0"
        class="
          focus:outline-none
          pb-8
          text-2xl
          font-extrabold
          leading-6
          text-gray-800
        "
      >
        new project idea
      </p>

      <div>
        <label
          for="email"
          class="text-sm font-medium leading-none text-gray-800"
          >Project Title</label
        >
        <input
          id="last_name"
          type="text"
          class="
            bg-gray-200
            border
            rounded
            text-xs
            font-medium
            leading-none
            placeholder-gray-800
            text-gray-800
            py-3
            w-full
            pl-3
            mt-2
          "
          placeholder="project title"
        />
      </div>

      <div>
        <label
          for="email"
          class="text-sm font-medium leading-none text-gray-800"
          >Project avatar</label
        >
        <input
          id="last_name"
          type="file"
          class="
            bg-gray-200
            border
            rounded
            text-xs
            font-medium
            leading-none
            placeholder-gray-800
            text-gray-800
            py-3
            w-full
            pl-3
            mt-2
          "
          accept=".jpg, .jpeg, .png"
        />
      </div>

      <div>
        <label
          for="email"
          class="text-sm font-medium leading-none text-gray-800"
          >Project description</label
        >
        <textarea
          rows="10"
          cols="10"
          type="text"
          class="
            bg-gray-200
            border
            rounded
            text-xs
            font-medium
            leading-none
            placeholder-gray-800
            text-gray-800
            py-3
            w-full
            pl-3
            mt-2
          "
          placeholder="share the idea with as many words as you need"
        />
      </div>

      <div class="mt-2">
        <label for="tags" class="text-sm font-medium leading-none text-gray-800"
          >Tags</label
        >
        <input
          id="tags"
          type="text"
          class="
            bg-gray-50
            border
            rounded
            text-xs
            font-medium
            leading-none
            placeholder:text-gray-400
            text-gray-800
            py-3
            w-full
            pl-3
            mt-2
          "
          placeholder="Ml, AI, Software Engineering..."
        />
      </div>

      <div class="mt-8">
        <button
          role="button"
          class="
            focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700
            text-sm
            font-semibold
            leading-none
            text-white
            focus:outline-none
            bg-indigo-700
            border
            rounded
            hover:bg-indigo-600
            py-4
            w-full
          "
        >
          Submit
        </button>
      </div>
    </div>
  </div>
</template>

<script>
import {
  Listbox,
  ListboxButton,
  ListboxLabel,
  ListboxOption,
  ListboxOptions,
} from "@headlessui/vue";
import { CheckIcon, SelectorIcon } from "@heroicons/vue/solid";
export default {
  name: "NewIdea",
  components: {
    Listbox,
    ListboxLabel,
    ListboxButton,
    ListboxOptions,
    ListboxOption,
    CheckIcon,
    SelectorIcon,
  },
  setup() {},
};
</script>