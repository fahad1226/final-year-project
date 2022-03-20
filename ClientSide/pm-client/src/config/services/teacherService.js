import Api from "../api";

export default {
    postNewGroup(payload) {
        return Api().post("team", payload); 
    }
};
