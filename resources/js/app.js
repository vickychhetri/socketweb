import { createApp } from 'vue';
import  './bootstrap';
import App from './component/App.vue';
// import App from './component/App.vue';
import * as events from "events";

//

//
// window.Echo.channel('public.chat.1')
//     .listen('chat', (e) => {
//         console.log(e);
//     });

// const channel = Echo.channel('public.chat.1');
//
// // Listen to an event on the channel
// channel.listen('chat', (data) => {
//     console.log(data);
// });


//
// // Leave the channel
// channel.leave();

// Echo.channel('')
//     .listen('.chat', (data) => {
//         console.log(data);
//     }).disconnect;

// const app = createApp(App);


createApp(App).mount('#app');
