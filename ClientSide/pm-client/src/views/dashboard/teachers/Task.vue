<template>
  <div class="container mx-auto my-2">
    <h1 class="text-3xl text-center text-yellow-700">Group Section</h1>
    <div class="grid grid-rows-1">
      <div class="grid grid-cols-3">
        <div class="col-start-1 col-span-2 mt-4 gap-4">
          <h2 class="text-3xl font-mono font-bold">Assign task</h2>
          <div class="flex mt-4 pb-4">
            <input
              class="
                shadow
                border
                rounded
                w-3/4
                py-2
                px-3
                mr-6
                text-grey-darker
              "
              placeholder="Task title"
            />
          </div>
          <div class="mt-4 mr-4">
            <textarea
              class="
                shadow
                appearance-none
                border
                rounded
                w-3/4
                py-2
                px-3
                text-grey-darker
              "
              placeholder="Describe the task to the students"
              cols="14"
              rows="4"
            ></textarea>
          </div>

           <button
            class="
              mt-2
              bg-transparent
              hover:bg-blue-500
              text-center text-blue-700
              font-semibold
              hover:text-white
              py-1
              px-4
              border border-blue-500
              hover:border-transparent
              rounded
            "
          >
            Submit
          </button> 

          <div class="pt-10">
            <div class="flex" v-for="n in 3" :key="n">
              <div class="w-full p-2 mx-auto bg-white rounded-2xl">
                <Disclosure v-slot="{ open }">
                  <DisclosureButton
                    class="
                      flex
                      justify-between
                      w-3/4
                      px-4
                      py-2
                      text-sm
                      font-medium
                      text-left text-purple-900
                      bg-purple-100
                      rounded-lg
                      hover:bg-purple-200
                      focus:outline-none
                      focus-visible:ring
                      focus-visible:ring-purple-500
                      focus-visible:ring-opacity-75
                    "
                  >
                    <span>Complete all product API's</span>
                    <ChevronUpIcon
                      :class="open ? 'transform rotate-180' : ''"
                      class="w-5 h-5 text-purple-500"
                    />
                  </DisclosureButton>
                  <DisclosurePanel class="px-4 pt-4 pb-2 w-9/12 text-sm text-gray-500">
                    If you're unhappy with your purchase for any reason, email
                    us within 90 days and we'll refund you in full, no questions
                    asked. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam illum natus beatae ullam deleniti pariatur odio assumenda error atque dignissimos?
                  </DisclosurePanel>
                </Disclosure>
              </div>
<!-- 
               <button
                class="
                 
                  p-2
                  ml-4
                  mr-2
                  rounded-lg
                  text-green
                  hover:bg-gray-50
                "
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
              </button>  -->
              <!-- <button
                class="flex-no-shrink p-2 ml-2 rounded-lg hover:bg-gray-50"
              >
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
              </button>  -->
            </div>
          </div>
        </div>
        <div>
          <div class="ml-8">
            <h1 class="text-2xl text-red-700 font-bold">Group Students</h1>

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
            <div class="pt-10">
              <h2 class="text-xl font-bold font-mono">
                Schedule a meeting with
                <span class="text-red-300">group students</span>
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
                  placeholder="Send information about the meeting to students"
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
            </div>
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
    </div>
  </div>
</template>


<script>
import { Disclosure, DisclosureButton, DisclosurePanel } from "@headlessui/vue";
import { ChevronUpIcon } from "@heroicons/vue/solid";
export default {
  name: "Task",
  components: {
    Disclosure,
    DisclosureButton,
    DisclosurePanel,
    ChevronUpIcon,
  },
};
</script>