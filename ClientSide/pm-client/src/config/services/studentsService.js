import Api from "../api";

export default {
    getSiteInfo(data) {
        return Api().post("scraping", data);
    },
    setAvatar(data) {
        return Api().post("image", data);
    },
};
