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
              <form class="h-full flex flex-col bg-white shadow-xl">
                <div class="flex-1">
                  <Notifications />
                </div>
              </form>
            </div>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
  <nav class="bg-white shadow">
    <div class="mx-auto container px-6 py-2 xl:py-0">
      <div class="flex items-center justify-between">
        <div class="inset-y-0 left-0 flex items-center xl:hidden">
          <div
            class="
              inline-flex
              items-center
              justify-center
              p-2
              rounded-md
              text-gray-700
              hover:text-gray-100
              focus:outline-none
              transition
              duration-150
              ease-in-out
            "
          >
            <div class="visible xl:hidden">
              <ul
                class="
                  p-2
                  border-r
                  bg-white
                  absolute
                  rounded
                  left-0
                  right-0
                  shadow
                  mt-8
                  md:mt-8
                  hidden
                "
              >
                <li
                  @click="this.$router.push({ name: 'studentDashboard' })"
                  class="
                    flex
                    xl:hidden
                    cursor-pointer
                    text-gray-600 text-sm
                    leading-3
                    tracking-normal
                    mt-2
                    py-2
                    hover:text-indigo-700
                    focus:text-indigo-700 focus:outline-none
                  "
                >
                  <div class="flex items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="icon icon-tabler icon-tabler-grid"
                      width="20"
                      height="20"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <path stroke="none" d="M0 0h24v24H0z" />
                      <rect x="4" y="4" width="6" height="6" rx="1" />
                      <rect x="14" y="4" width="6" height="6" rx="1" />
                      <rect x="4" y="14" width="6" height="6" rx="1" />
                      <rect x="14" y="14" width="6" height="6" rx="1" />
                    </svg>
                    <span class="ml-2 font-bold">Dashboard</span>
                  </div>
                </li>
                <li
                  @click="
                    this.$router.push({
                      name: 'studentSection',
                      params: { groupId: 123 },
                    })
                  "
                  class="
                    xl:hidden
                    flex-col
                    cursor-pointer
                    text-gray-600 text-sm
                    leading-3
                    tracking-normal
                    py-2
                    hover:text-indigo-700
                    focus:text-indigo-700 focus:outline-none
                    flex
                    justify-center
                  "
                >
                  <div class="flex items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="icon icon-tabler icon-tabler-puzzle"
                      width="20"
                      height="20"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <path stroke="none" d="M0 0h24v24H0z" />
                      <path
                        d="M4 7h3a1 1 0 0 0 1 -1v-1a2 2 0 0 1 4 0v1a1 1 0 0 0 1 1h3a1 1 0 0 1 1 1v3a1 1 0 0 0 1 1h1a2 2 0 0 1 0 4h-1a1 1 0 0 0 -1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-1a2 2 0 0 0 -4 0v1a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h1a2 2 0 0 0 0 -4h-1a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1"
                      />
                    </svg>
                    <span class="ml-2 font-bold">Your Section</span>
                  </div>
                </li>

                <li
                  class="
                    xl:hidden
                    flex-col
                    cursor-pointer
                    text-gray-600 text-sm
                    leading-3
                    tracking-normal
                    py-2
                    hover:text-indigo-700
                    focus:text-indigo-700 focus:outline-none
                    flex
                    justify-center
                  "
                >
                  <div class="flex items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-6 w-6"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
                      />
                    </svg>
                    <span class="ml-2 font-bold"></span>
                  </div>
                </li>

                <li
                  class="
                    cursor-pointer
                    text-gray-600 text-sm
                    leading-3
                    tracking-normal
                    mt-2
                    py-2
                    hover:text-indigo-700
                    flex
                    items-center
                    focus:text-indigo-700 focus:outline-none
                  "
                >
                  <div class="flex items-center">
                    <div
                      class="
                        w-12
                        cursor-pointer
                        flex
                        text-sm
                        border-2 border-transparent
                        rounded
                        focus:outline-none focus:border-white
                        transition
                        duration-150
                        ease-in-out
                      "
                    >
                      <img
                        class="rounded h-10 w-10 object-cover"
                        :src="profilePhoto"
                        alt="logo"
                      />
                    </div>
                    <p class="text-sm ml-2 cursor-pointer">Jane Doe</p>
                    <div class="sm:ml-2 text-white relative">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="
                          icon icon-tabler icon-tabler-chevron-down
                          cursor-pointer
                        "
                        width="20"
                        height="20"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      >
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <polyline points="6 9 12 15 18 9" />
                      </svg>
                    </div>
                  </div>
                </li>
                <li
                  class="
                    cursor-pointer
                    text-gray-600 text-sm
                    leading-3
                    tracking-normal
                    py-2
                    hover:text-indigo-700
                    focus:text-indigo-700 focus:outline-none
                  "
                >
                  <div class="flex items-center">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="icon icon-tabler icon-tabler-user"
                      width="20"
                      height="20"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <path stroke="none" d="M0 0h24v24H0z" />
                      <circle cx="12" cy="7" r="4" />
                      <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                    </svg>
                    <span class="ml-2">Profile</span>
                  </div>
                </li>
              </ul>
              <svg
                @click="MenuHandler($event, true)"
                aria-haspopup="true"
                aria-label="Main Menu"
                xmlns="http://www.w3.org/2000/svg"
                class="show-m-menu icon icon-tabler icon-tabler-menu"
                width="28"
                height="28"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <path stroke="none" d="M0 0h24v24H0z" />
                <line x1="4" y1="8" x2="20" y2="8" />
                <line x1="4" y1="16" x2="20" y2="16" />
              </svg>
              <div
                class="hidden close-m-menu text-gray-700"
                @click="MenuHandler($event, false)"
              >
                <svg
                  aria-label="Close"
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path stroke="none" d="M0 0h24v24H0z" />
                  <line x1="18" y1="6" x2="6" y2="18" />
                  <line x1="6" y1="6" x2="18" y2="18" />
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div
          @click="this.$router.push('/dashboard')"
          class="
            flex
            w-full
            sm:w-auto
            items-center
            sm:items-stretch
            justify-end
            sm:justify-start
            cursor-pointer
          "
        >
          <div class="flex items-center">
            <svg
              aria-label="Home"
              id="logo"
              enable-background="new 0 0 300 300"
              height="44"
              viewBox="0 0 300 300"
              width="43"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
            >
              <g>
                <path
                  fill="#4c51bf"
                  d="m234.735 35.532c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16zm0 24c-4.412 0-8-3.588-8-8s3.588-8 8-8 8 3.588 8 8-3.588 8-8 8zm-62.529-14c0-2.502 2.028-4.53 4.53-4.53s4.53 2.028 4.53 4.53c0 2.501-2.028 4.529-4.53 4.529s-4.53-2.027-4.53-4.529zm89.059 60c0 2.501-2.028 4.529-4.53 4.529s-4.53-2.028-4.53-4.529c0-2.502 2.028-4.53 4.53-4.53s4.53 2.029 4.53 4.53zm-40.522-5.459-88-51.064c-1.242-.723-2.773-.723-4.016 0l-88 51.064c-1.232.715-1.992 2.033-1.992 3.459v104c0 1.404.736 2.705 1.938 3.428l88 52.936c.635.381 1.35.572 2.062.572s1.428-.191 2.062-.572l88-52.936c1.201-.723 1.938-2.023 1.938-3.428v-104c0-1.426-.76-2.744-1.992-3.459zm-90.008-42.98 80.085 46.47-52.95 31.289-23.135-13.607v-21.713c0-2.209-1.791-4-4-4s-4 1.791-4 4v21.713l-26.027 15.309c-1.223.719-1.973 2.029-1.973 3.447v29.795l-52 30.727v-94.688zm0 198.707-80.189-48.237 51.467-30.412 24.723 14.539v19.842c0 2.209 1.791 4 4 4s4-1.791 4-4v-19.842l26.027-15.307c1.223-.719 1.973-2.029 1.973-3.447v-31.667l52-30.728v94.729z"
                />
              </g>
            </svg>
            <h2
              class="
                hidden
                sm:block
                text-base text-gray-700
                font-bold
                leading-normal
                pl-3
              "
            >
              Supervision
            </h2>
          </div>
        </div>
        <div class="flex">
          <div class="hidden xl:flex md:mr-6 xl:mr-16">
            <a
              @click="this.$router.push({ name: 'studentDashboard' })"
              class="
                flex
                cursor-pointer
                px-5
                items-center
                py-6
                text-sm
                leading-5
                text-gray-700
                hover:bg-gray-100
                focus:bg-gray-100 focus:outline-none
                transition
                duration-150
                ease-in-out
              "
            >
              <span class="mr-2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tabler icon-tabler-puzzle"
                  width="20"
                  height="20"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path stroke="none" d="M0 0h24v24H0z" />
                  <path
                    d="M4 7h3a1 1 0 0 0 1 -1v-1a2 2 0 0 1 4 0v1a1 1 0 0 0 1 1h3a1 1 0 0 1 1 1v3a1 1 0 0 0 1 1h1a2 2 0 0 1 0 4h-1a1 1 0 0 0 -1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-1a2 2 0 0 0 -4 0v1a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h1a2 2 0 0 0 0 -4h-1a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1"
                  />
                </svg>
              </span>
              Dashboard
            </a>
            <router-link
              :to="{ name: 'studentSection', params: { groupId: 123 } }"
              class="
                flex
                px-5
                items-center
                py-6
                text-sm
                leading-5
                text-gray-700
                hover:bg-gray-100
                focus:bg-gray-100 focus:outline-none
                transition
                duration-150
                ease-in-out
              "
            >
              <span class="mr-2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="icon icon-tabler icon-tabler-compass"
                  width="20"
                  height="20"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path stroke="none" d="M0 0h24v24H0z" />
                  <polyline points="8 16 10 10 16 8 14 14 8 16" />
                  <circle cx="12" cy="12" r="9" />
                </svg>
              </span>
              Your Section
            </router-link>
          </div>
          <div
            class="
              cursor-pointer
              flex
              space-x-2
              justify-center
              items-center
              mr-11
            "
            @click="open = true"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-6 w-6"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
              />
            </svg>
          </div>
          <div class="hidden xl:flex items-center">
            <div class="ml-6 relative">
              <div
                class="flex items-center relative"
                @click="dropdownHandler($event)"
              >
                <ul
                  class="
                    p-2
                    w-40
                    border-r
                    bg-white
                    absolute
                    rounded
                    right-0
                    shadow
                    top-0
                    mt-16
                    hidden
                  "
                >
                  <li
                    class="
                      cursor-pointer
                      text-gray-600 text-sm
                      leading-3
                      tracking-normal
                      py-2
                      hover:text-indigo-700
                      focus:text-indigo-700 focus:outline-none
                    "
                  >
                    <div class="flex items-center">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-user"
                        width="20"
                        height="20"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      >
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <circle cx="12" cy="7" r="4" />
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                      </svg>
                      <span class="ml-2">My Profile</span>
                    </div>
                  </li>

                  <li
                    class="
                      cursor-pointer
                      text-gray-600 text-sm
                      leading-3
                      tracking-normal
                      mt-2
                      py-2
                      hover:text-indigo-700
                      flex
                      items-center
                      focus:text-indigo-700 focus:outline-none
                    "
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="icon icon-tabler icon-tabler-settings"
                      width="20"
                      height="20"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <path stroke="none" d="M0 0h24v24H0z" />
                      <path
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                      />
                      <circle cx="12" cy="12" r="3" />
                    </svg>
                    <span class="ml-2">Account Settings</span>
                  </li>
                </ul>

      
                <div
                  class="
                    cursor-pointer
                    flex
                    text-sm
                    border-2 border-transparent
                    rounded-full
                    focus:outline-none focus:border-white
                    transition
                    duration-150
                    ease-in-out
                  "
                >
                  <img
                    class="rounded-full h-10 w-10 object-cover"
                    :src="profilePhoto"
                    alt="logo"
                  />
                </div>
                <div class="ml-2 text-gray-600">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="
                      icon icon-tabler icon-tabler-chevron-down
                      cursor-pointer
                    "
                    width="20"
                    height="20"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <polyline points="6 9 12 15 18 9" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
</template>

<script>
import Notifications from "../shared/Notifications.vue";
import {
  Dialog,
  DialogOverlay,
  DialogTitle,
  Menu,
  MenuButton,
  MenuItem,
  MenuItems,
  TransitionChild,
  TransitionRoot,
} from "@headlessui/vue";
export default {
  name: "LightWithButton",
  components: {
    Notifications,
    Dialog,
    DialogOverlay,
    DialogTitle,
    Menu,
    MenuButton,
    MenuItem,
    MenuItems,
    TransitionChild,
    TransitionRoot,
  },
  data() {
    return {
      open: false,
      show: null,
    };
  },
  computed: {
    profilePhoto() {
      return this.$store.getters.getUser.user.profile_photo_url;
    },
  },
  methods: {
    dropdownHandler(event) {
      let single = event.currentTarget.getElementsByTagName("ul")[0];
      single.classList.toggle("hidden");
    },
    MenuHandler(el, val) {
      let MainList =
        el.currentTarget.parentElement.getElementsByTagName("ul")[0];
      let closeIcon =
        el.currentTarget.parentElement.getElementsByClassName(
          "close-m-menu"
        )[0];
      let showIcon =
        el.currentTarget.parentElement.getElementsByClassName("show-m-menu")[0];
      if (val) {
        MainList.classList.remove("hidden");
        el.currentTarget.classList.add("hidden");
        closeIcon.classList.remove("hidden");
      } else {
        showIcon.classList.remove("hidden");
        MainList.classList.add("hidden");
        el.currentTarget.classList.add("hidden");
      }
    },
  },
};
</script>
