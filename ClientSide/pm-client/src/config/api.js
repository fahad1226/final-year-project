import axios from "axios";

export default () =>
    axios.create({
        baseURL: `http://localhgost`,
        //baseURL: "http://localhost:8080/wp-json/api/v1",
    });
