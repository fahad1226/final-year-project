import studentService from "@/config/services/studentService.js";
import router from '@/router/index';
import { createStore } from "vuex";
import createPersistedState from "vuex-persistedstate";
import studentsModule from "./modules/students";
import teachersModule from "./modules/teachers";

export default createStore({
    state: { 
        access_token: '',
        user: {}
    },
    mutations: {
        UPDATE_LOGIN(state,payload) {
            state.user = payload
            state.access_token = payload.token
        }
    },
    actions: {
        async login({commit}, payload) {
            const response = await studentService.login(payload);
            commit('UPDATE_LOGIN', response.data)
            if (response.status === 201) {
                const user = response.data?.user;
                if (user.role === 1) {
                    setTimeout(() => {
                        router.push({ name: 'teachersSection', params: { teacherId: user.id  } })
                    }, 800);
                }
            }
        }
    },
    getters: {
        getUser: (state) => state.user 
    },
    modules: {
        studentsModule,
        teachersModule,
    },
    plugins: [createPersistedState()],
});
