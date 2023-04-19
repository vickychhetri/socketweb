/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from "laravel-echo"
//
// import pusher_js from "pusher-js";
//
// window.Pusher = pusher_js;
//
// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'socketapp_key',
//     host: '127.0.0.1',
//     wsPort: 6001,
//     cluster: 'socketapp_key_secret',
//     forceTLS: false,
//     disableStats: true,
// });


import Echo from "laravel-echo"

import pusher_js from "pusher-js";

window.Pusher = pusher_js;


window.Echo = new Echo({
    // broadcaster: 'pusher',

    // key: '30c75453585ce4a68ca3',
    // wsHost: window.location.hostname,
    // wsPort: 6001,
    // forceTLS: false,
    // disableStats: true,
    broadcaster: 'pusher',
    key: 'socketapp_key',
    wsHost: window.location.hostname,
    wsPort: 6001,
    cluster:'mt1',
    forceTLS: false,
    disableStats: true,
    transports: ["websocket"]
    // enabledTransports: ['ws', 'wss'] // <- added this param
});



