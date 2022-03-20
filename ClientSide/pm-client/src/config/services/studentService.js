import Api from "../api";

export default {
    login(payload) {
        return Api().post("login", payload);
    },

    postIdea(payload) {
        return Api().post('project', payload)
    }
   
};
