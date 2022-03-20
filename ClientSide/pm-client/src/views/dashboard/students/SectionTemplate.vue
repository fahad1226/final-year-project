<template>
  <div class="container mx-auto">
    <TransitionRoot
      as="template"
      :show="open"
      class="bg-gray-900 bg-opacity-50"
    >
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
                <form
                  class="h-full flex flex-col overflow-y-auto rounded-lg bg-white shadow-xl"
                >
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
    <div class="flex pl-8">
      <div class="top-0 right-0 pt-10 md:mr-24">
        <button
          @click="open = true"
          class="
            bg-transparent
            hover:bg-blue-500
            text-blue-700
            font-semibold
            hover:text-white
            py-2
            px-4
            border border-blue-500
            hover:border-transparent
            rounded
          "
        >
          Submit a New Idea
        </button>
        <button
          @click="this.$router.push('/submitted-ideas')"
          class="
            ml-6
            bg-green-500
            hover:bg-green-600
            text-white
            font-semibold
            hover:text-white
            py-2
            px-4
            border border-gray-500
            hover:border-transparent
            rounded
          "
        >
          Submitted Ideas
        </button>
      </div>
    </div>
    <h2 class="text-center text-4xl text-amber-400 font-mono pt-2">
      personal group section
    </h2>
    <p class="text-center font-thin text-red-700">
      this is the private section of each indiviudal group
    </p>
    <div class="grid grid-rows-1 pt-4">
      <div class="grid grid-cols-3 gap-5">
        <div class="col-start-1 col-span-2">
          <div>
            <h2 class="text-center text-2xl">Task Assigned</h2>
            <Task />
          </div>
        </div>
        <div class="col-span-1 ml-28">
          <h1 class="text-2xl text-red-700 font-bold">Your Team</h1>

          <ul class="mt-6">
            <li class="flex list-disc">
              <img
                src="https://cdn.tuk.dev/assets/photo-1564061170517-d3907caa96ea.jfif"
                alt
                class="rounded-full object-cover h-10 w-10 shadow-md"
              />
              <h2 class="text-3xl text-gray-700 pl-3 font-thin">
                Fahad Bin Munir
              </h2>
            </li>
            <li class="flex pt-5">
              <img
                src="https://cdn.tuk.dev/assets/photo-1566753323558-f4e0952af115.jfif"
                alt
                class="rounded-full object-cover h-10 w-10 shadow-md"
              />
              <h2 class="text-3xl text-gray-700 pl-3 font-thin">
                Ishmam Bin Azim
              </h2>
            </li>
            <li class="flex pt-5">
              <img
                src="https://cdn.tuk.dev/assets/photo-1530577197743-7adf14294584.jfif"
                alt
                class="rounded-full object-cover h-10 w-10 shadow-md"
              />
              <h2 class="text-3xl text-gray-700 pl-3 font-thin">
                Sefat Tanzim
              </h2>
            </li>
          </ul>
          <!-- <div class="pt-10">
            <h2 class="text-xl font-bold font-mono">
              Schedule a meeting with
              <span class="text-red-300">supervisor</span>
            </h2>

            <div class="mt-4 flex flex-col w-full">
              <textarea
                id="about"
                name="about"
                required
                class="
                  bg-transparent
                  border border-gray-300
                  dark:border-gray-700
                  pl-3
                  py-3
                  shadow-sm
                  rounded
                  text-sm
                  focus:outline-none focus:border-indigo-700
                  resize-none
                  placeholder-gray-500
                  text-gray-500
                  dark:text-gray-400
                "
                placeholder="Send information about the meeting to the supervisor"
                rows="5"
              ></textarea>
              <p
                class="
                  w-full
                  text-right text-xs
                  pt-1
                  text-gray-500
                  dark:text-gray-400
                "
              >
                Character Limit: 200
              </p>
            </div>
            <div class="mt-4 flex flex-col w-full">
              <input
                type="date"
                id="date"
                required
                class="
                  border border-gray-300
                  dark:border-gray-700
                  pl-3
                  py-3
                  shadow-sm
                  rounded
                  text-sm
                  focus:outline-none focus:border-indigo-700
                  bg-transparent
                  placeholder-gray-500
                  text-gray-500
                  dark:text-gray-400
                "
                placeholder="@example"
              />
            </div>
            <button
              class="
                mt-4
                justify-center
                bg-transparent
                hover:bg-blue-500
                text-blue-700
                font-semibold
                hover:text-white
                py-2
                px-4
                border border-blue-500
                hover:border-transparent
                rounded
              "
            >
              Send
            </button>
          </div> -->
          <div class="pt-6">
            <h2 class="text-lg font-semibold font-serif text-green-500">
              Meeting history
            </h2>
            <p>
              Date:
              <span class="font-bold">11th February 2022</span>
            </p>
            <p>
              Date:
              <span class="font-bold">19th January 2022</span>
            </p>
            <p>
              Date:
              <span class="font-bold">11th December 2021</span>
            </p>
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
  DialogTitle,
  Disclosure,
  DisclosureButton,
  DisclosurePanel,
  Menu,
  MenuButton,
  MenuItem,
  MenuItems,
  TransitionChild,
  TransitionRoot,
} from "@headlessui/vue";
import { ChevronUpIcon } from "@heroicons/vue/solid";
import { ref } from "vue";
import Task from "./Task.vue";
import NewIdea from "./NewIdea.vue";
export default {
  name: "section-template",
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
    NewIdea,
    Disclosure,
    DisclosureButton,
    DisclosurePanel,
    ChevronUpIcon,
    Task,
  },
  setup() {
    let open = ref(false);
    return {
      open,
    };
  },
};
</script>
