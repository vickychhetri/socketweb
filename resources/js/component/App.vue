<template>
    <div>
        <h1> Socket </h1>
        <ul>
            <li v-for="message in messages" :key="message">{{ message }}</li>
        </ul>
    </div>
</template>

<script>
import './../bootstrap';
import io from 'socket.io-client';

console.log("Module Started....");
export default {
    name: 'App',
    data() {
        return {
            messages: []
        }
    },

    created()
    {
        console.log("Inside created()...");
        const channel = Echo.channel('public.chat.1');
        channel.listen('.chat', (data) => {
            // Push the received message to the messages array
            this.messages.push(data.message);
            console.log("listing event() occur...");
            console.log(data);
                //
                // axios.post('/chat-message', {
                //     message: this.newMessage
                // }).then(response => {
                //     console.log(response.data.status);
                // }).catch(error => {
                //     console.log(error);
                // });
                // this.newMessage = 'Hello Mr Socket API';
        });
    }
}
</script>
