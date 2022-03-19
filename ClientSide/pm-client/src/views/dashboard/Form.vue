<template>
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
      Create new group
    </p>

    <div class="flex mt-5" v-for="(input, index) in studentID" :key="index">
      <div>
        <label
          for="email"
          class="text-sm font-medium leading-none text-gray-800"
          >Student ID</label
        >
        <input
          id="first_name"
          aria-labelledby="email"
          type="text"
          placeholder="Student ID"
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
            w-96
            pl-3
            mt-2
          "
        />
      </div>

      <div class="mt-10 pl-2" @click.prevent="addIDField(input, studentID)">
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
      </div>

      <div class="mt-10 ml-4" @click.prevent="removeIDField(index, studentID)">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-5 w-5"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
          stroke-width="2"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"
          />
        </svg>
      </div>
    </div>

    <div class="flex mt-5" v-for="(input, index) in studentEmail" :key="index">
      <div>
        <label
          for="email"
          class="text-sm font-medium leading-none text-gray-800"
          >Student Email</label
        >
        <input
          id="first_name"
          aria-labelledby="email"
          type="email"
          placeholder="Student Email"
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
            w-96
            pl-3
            mt-2
          "
        />
      </div>

      <div
        class="mt-10 pl-2"
        @click.prevent="addEmailField(input, studentEmail)"
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
      </div>

      <div
        class="mt-10 ml-4"
        @click.prevent="removeIDField(index, studentEmail)"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-5 w-5"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
          stroke-width="2"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"
          />
        </svg>
      </div>
    </div>

    <div
      class="flex mt-5"
      v-for="(input, index) in studentContact"
      :key="index"
    >
      <div>
        <label
          for="email"
          class="text-sm font-medium leading-none text-gray-800"
          >Student Contact</label
        >
        <input
          id="first_name"
          aria-labelledby="email"
          type="text"
          placeholder="Students Contact Number"
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
            w-96
            pl-3
            mt-2
          "
        />
      </div>

      <div
        class="mt-10 pl-2"
        @click.prevent="addContactField(input, studentContact)"
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
      </div>

      <div
        class="mt-10 ml-4"
        @click.prevent="removeIDField(index, studentContact)"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-5 w-5"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
          stroke-width="2"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"
          />
        </svg>
      </div>
    </div>

    <div class="pt-4">
      <label for="email" class="text-sm font-medium leading-none text-gray-800"
        >Student Batch</label
      >
      <input
        id="first_name"
        aria-labelledby="email"
        type="text"
        placeholder="Batch No."
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
          w-96
          pl-3
          mt-2
        "
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
</template>

<script>
export default {
  name: "EntryForm",
  data() {
    return {
      studentID: [{ id: "" }],
      studentEmail: [{ email: "" }],
      studentContact: [{ contact: "" }],
    };
  },
  methods: {
    addIDField(value, fieldType) {
      fieldType.push({ value: "" });
    },
    removeIDField(index, fieldType) {
      console.log(index, fieldType);
      fieldType.splice(index, 1);
    },
    addEmailField(value, fieldType) {
      fieldType.push({ value: "" });
    },
    addContactField(value, fieldType) {
      fieldType.push({ value: "" });
    },
  },
};
</script>