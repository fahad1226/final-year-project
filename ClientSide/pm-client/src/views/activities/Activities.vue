<template>
    <div class="bg-gray-50 min-h-screen">
        <div class="flex justify-center py-12 px-6">
        
            <div class="w-5/6 rounded">
                <h1 class="text-4xl pb-8">{{ title }}</h1>
                <table class="w-full pt-20">
                    <tbody class="bg-white dark:bg-gray-800">
                        <tr
                            class="border-b border-gray-200 dark:border-gray-900"
                            v-for="n in 6"
                            :key="n"
                        >
                            <td class="py-4 sm:pl-6 pl-4">
                                <div class="flex items-center">
                                    <div
                                        class="w-8 h-8 bg-gray-100 rounded flex items-center justify-center"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="22"
                                            height="19"
                                            viewBox="0 0 22 19"
                                            fill="none"
                                        >
                                            <g opacity="0.2">
                                                <path
                                                    d="M22 16.8462C22 18.0356 21.0149 19 19.8 19H2.2C0.98505 19 0 18.0356 0 16.8462V7.15385C0 5.96438 0.98505 5 2.2 5H19.8C21.0149 5 22 5.96438 22 7.15385V16.8462Z"
                                                    fill="#231F20"
                                                />
                                            </g>
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M13.8 2.14286V12.8571H7.2V2.14286H13.8ZM13.8 0H7.2C5.98505 0 5 0.959464 5 2.14286V12.8571C5 14.0405 5.98505 15 7.2 15H13.8C15.0149 15 16 14.0405 16 12.8571V2.14286C16 0.959464 15.0149 0 13.8 0Z"
                                                fill="#4B4B4B"
                                            />
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M0 8V15.6471C0 16.9465 0.98505 18 2.2 18H19.8C21.0149 18 22 16.9465 22 15.6471V8H0Z"
                                                fill="#F96E6F"
                                            />
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M13.5 8.54545V10.4545H8.5V8.54545H13.5ZM13.5 6H8.5C7.11937 6 6 7.13973 6 8.54545V10.4545C6 11.8603 7.11937 13 8.5 13H13.5C14.8806 13 16 11.8603 16 10.4545V8.54545C16 7.13973 14.8806 6 13.5 6Z"
                                                fill="white"
                                            />
                                            <g opacity="0.2">
                                                <path
                                                    d="M22 8.22222C22 6.995 21.0149 6 19.8 6H2.2C0.98505 6 0 6.995 0 8.22222V11H22V8.22222Z"
                                                    fill="#231F20"
                                                />
                                            </g>
                                            <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M22 6.22222C22 4.995 21.0149 4 19.8 4H2.2C0.98505 4 0 4.995 0 6.22222V9H22V6.22222Z"
                                                fill="#F96E6F"
                                            />
                                        </svg>
                                    </div>
                                    <div class="pl-5">
                                        <p
                                            class="text-sm font-semibold leading-none text-gray-800 dark:text-gray-100 pb-2"
                                        >Dixons</p>
                                        <p
                                            class="text-xs leading-3 text-gray-500 dark:text-gray-400"
                                        >meguc@ruj.io</p>
                                    </div>
                                </div>
                            </td>

                            <td class="py-4 sm:pl-6 pl-4">
                                <p
                                    class="text-sm leading-none text-gray-800 dark:text-gray-100"
                                >$891.2</p>
                            </td>
                            <td class="py-4 sm:pl-6 pl-4">
                                <p
                                    class="text-sm leading-none text-gray-800 dark:text-gray-100"
                                >$891.2</p>
                            </td>
                            <td class="py-4 sm:px-6 px-4">
                                <div class="flex items-center">
                                    <p
                                        class="text-sm font-semibold pr-3 leading-none text-gray-800 dark:text-gray-100"
                                    >68%</p>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        viewBox="0 0 16 16"
                                        fill="none"
                                    >
                                        <path
                                            d="M16 12.0002C16 12.0668 16 12.2002 15.9333 12.2668C15.8667 12.4002 15.7333 12.5335 15.6 12.6002C15.5333 12.6668 15.4 12.6668 15.3333 12.6668H11.3333C10.9333 12.6668 10.6667 12.4002 10.6667 12.0002C10.6667 11.6002 10.9333 11.3335 11.3333 11.3335H13.7333L9 6.60016L6.13333 9.46683C5.86667 9.7335 5.46667 9.7335 5.2 9.46683L0.2 4.46683C-0.0666667 4.20016 -0.0666667 3.80016 0.2 3.5335C0.466667 3.26683 0.866667 3.26683 1.13333 3.5335L5.66667 8.06683L8.53333 5.20016C8.8 4.9335 9.2 4.9335 9.46667 5.20016L14.6667 10.4002V8.00016C14.6667 7.60016 14.9333 7.3335 15.3333 7.3335C15.7333 7.3335 16 7.60016 16 8.00016V12.0002Z"
                                            fill="#EA5455"
                                        />
                                    </svg>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Activities",
    props: ['title']

};
</script>

