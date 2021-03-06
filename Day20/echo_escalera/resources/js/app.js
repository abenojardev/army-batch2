"use strict";
import Echo from "laravel-echo"
window.Pusher = require('pusher-js');
var defaultlocation = window.location.hostname;
let token = document.querySelector('meta[name="csrf-token"]')
            .getAttribute('content');

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: '40e519fc66cf9c32abeb', 
    wsHost: 'localhost',
    wsPort: 6001, 
    wssPort: 6001,
    disableStats: false,
    encrypted: false,
    csrfToken: token, 
    enabledTransports: ['ws', 'wss'] 
});

