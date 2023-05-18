/* axios v0.21.4 
https://github.com/axios/axios
Config
*/

// const axios = require('axios').default;
axios.defaults.baseURL = url;
console.log(axios.defaults.baseURL);
// Important: If axios is used with multiple domains, the AUTH_TOKEN will be sent to all of them.
// See below for an example using Custom instance defaults instead.
const AUTH_TOKEN = "php-mvc";
axios.defaults.headers.common['Authorization'] = AUTH_TOKEN;
axios.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded';

// REQUEST FUNCTIONS
async function postAsync(url, data) {
    try {
        const response = await axios.post(url, data);
        console.log(response);
        return response;
    } catch (error) {
        console.error(error);
        return error;
    }
}

async function getAsync(url) {
    try {
        const response = await axios.get(url);
        console.log(response);
        return response;
    } catch (error) {
        console.error(error);
        return error;
    }
}

function post(url, data) {
    try {
        const response = axios.post(url, data);
        console.log(response);
        return response;
    } catch (error) {
        console.error(error);
        return error;
    }
}

function get(url) {
    try {
        const response = axios.get(url);
        console.log(response);
        return response;
    } catch (error) {
        console.error(error);
        return error;
    }
}
