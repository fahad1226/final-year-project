import Api from "../api";

export default {
    saveTemplate(data) {
        return Api().get("post_hs_user_templates", data);
    },
    getTemplate(id) {
        return Api().get(`get-user-template/${id}`);
    },
};
