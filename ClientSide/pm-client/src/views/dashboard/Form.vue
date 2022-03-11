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

      <div class="mt-10" @click.prevent="addIDField(input, studentID)">
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
            d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"
          />
        </svg>
      </div>

      <!-- <div class="mt-16" @click.prevent="removeField(input, inputs)">
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
            d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"
          />
        </svg>
      </div> -->
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

      <div class="mt-10" @click.prevent="addEmailField(input, studentEmail)">
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
            d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"
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
        class="mt-10"
        @click.prevent="addContactField(input, studentContact)"
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
            d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"
          />
        </svg>
      </div>
    </div>

    <div class="mt-4">
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