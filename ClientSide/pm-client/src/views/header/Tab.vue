<template>
    <div class="container mx-auto mt-2">
        <TabGroup>
            <TabList class="flex p-1 space-x-1 bg-blue-900/20 rounded-xl">
                <Tab
                    v-for="category in Object.keys(tabs)"
                    as="template"
                    :key="category"
                    v-slot="{ selected }"
                >
                    <button
                        :class="[
                            'w-full py-2.5 text-sm leading-5 font-medium text-blue-700 rounded-lg',
                            'focus:outline-none focus:ring-2 ring-offset-2 ring-offset-blue-400 ring-white ring-opacity-60',
                            selected
                                ? 'bg-white shadow'
                                : 'text-blue-100 hover:bg-white/[0.12] hover:text-white',
                        ]"
                    >{{ category }}</button>
                </Tab>
            </TabList>

            <TabPanels class="mt-2">
                <TabPanel
                    v-for="(posts, idx) in Object.values(tabs)"
                    :key="idx"
                    :class="[
                        'bg-white rounded-xl p-3',
                        'focus:outline-none focus:ring-2 ring-offset-2 ring-offset-blue-400 ring-white ring-opacity-60',
                    ]"
                >
                    <ul>
                        <li
                            v-for="post in posts"
                            :key="post.id"
                            class="relative p-3 rounded-md hover:bg-coolGray-100"
                        >
                            <h3
                                class="text-sm font-medium leading-5 text-indigo-700"
                            >{{ post.title }}</h3>

                            <ul
                                class="flex mt-1 space-x-1 text-xs font-normal leading-4 text-coolGray-500"
                            >
                                <li class="text-blue-400">{{ post.date }}</li>
                                <li>&middot;</li>
                                <li>{{ post.commentCount }} comments</li>
                                <li>&middot;</li>
                                <li>{{ post.shareCount }} shares</li>
                            </ul>

                            <a
                                href="#"
                                :class="[
                                    'absolute inset-0 rounded-md',
                                    'focus:z-10 focus:outline-none focus:ring-2 ring-blue-400',
                                ]"
                            />
                        </li>
                    </ul>
                </TabPanel>
            </TabPanels>
        </TabGroup>
    </div>
</template>

<script>
import { Tab, TabGroup, TabList, TabPanel, TabPanels } from '@headlessui/vue'
import { ref } from 'vue'

export default {
    components: {
        TabGroup,
        TabList,
        Tab,
        TabPanels,
        TabPanel,
    },
    setup() {
        let tabs = ref({
            Activity: [
                {
                    id: 1,
                    title: 'Does drinking coffee make you smarter?',
                    date: '5h ago',
                    commentCount: 5,
                    shareCount: 2,
                },
                {
                    id: 2,
                    title: "So you've bought coffee... now what?",
                    date: '2h ago',
                    commentCount: 3,
                    shareCount: 2,
                },
            ],
            Todo: [
                {
                    id: 1,
                    title: 'Is tech making coffee better or worse?',
                    date: 'Jan 7',
                    commentCount: 29,
                    shareCount: 16,
                },
                {
                    id: 2,
                    title: 'The most innovative things happening in coffee',
                    date: 'Mar 19',
                    commentCount: 24,
                    shareCount: 12,
                },
            ],
            Discussion: [
                {
                    id: 1,
                    title: 'Ask Me Anything: 10 answers to your questions about coffee',
                    date: '2d ago',
                    commentCount: 9,
                    shareCount: 5,
                },
                {
                    id: 2,
                    title: "The worst advice we've ever heard about coffee",
                    date: '4d ago',
                    commentCount: 1,
                    shareCount: 2,
                },
            ],
            Updates: [
                {
                    id: 10,
                    title: 'Ask Me Anything: 10 answers to your questions about coffee',
                    date: '2d ago',
                    commentCount: 9,
                    shareCount: 5,
                },
                {
                    id: 2,
                    title: "The worst advice we've ever heard about coffee",
                    date: '4d ago',
                    commentCount: 1,
                    shareCount: 2,
                },
            ],
            Files: [
                {
                    id: 67,
                    title: 'Ask Me Anything: 10 answers to your questions about coffee',
                    date: '2d ago',
                    commentCount: 9,
                    shareCount: 5,
                },
                {
                    id: 2,
                    title: "The worst advice we've ever heard about coffee",
                    date: '4d ago',
                    commentCount: 1,
                    shareCount: 2,
                },
            ],
            Peoples: [
                {
                    id: 5,
                    title: 'Ask Me Anything: 10 answers to your questions about coffee',
                    date: '2d ago',
                    commentCount: 9,
                    shareCount: 5,
                },
                {
                    id: 2,
                    title: "The worst advice we've ever heard about coffee",
                    date: '4d ago',
                    commentCount: 1,
                    shareCount: 2,
                },
            ],
        })

        return { tabs }
    },
}
</script>