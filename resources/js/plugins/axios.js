import axios from "axios";

let config = {
    //baseURL: "https://cors-anywhere.herokuapp.com/https://jopay-laravel-user-crud.herokuapp.com/api/v1/",
    baseURL: "/api/v1/",
    timeout: 60 * 1000, // Timeout
    withCredentials: true, // Check cross-site Access-Control
    headers: { 'Authorization': 'Bearer ' + localStorage.getItem('auth_token'), "X-Requested-With": "XMLHttpRequest" }
};

const _axios = axios.create(config);

//module.exports = axiosInstance;
export default _axios;