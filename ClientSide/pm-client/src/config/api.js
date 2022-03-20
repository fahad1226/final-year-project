import axios from "axios";

export default () =>
    axios.create({
        baseURL: `http://project_management.test/api`,
        //baseURL: "http://localhost:8080/wp-json/api/v1",
        headers: {
            "Content-Type": "application/json",
            'Accept': 'application/json',
            Authorization: 'Bearer 27|U0xIsfqhjXpx1kRr6sDu1PzIJuCdWMby8fFdApu5'
        },
    });
