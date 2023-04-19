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
console.log("dsdd");
export default {
    name: 'App',
    data() {
        return {
            messages: []
        }
    },
    created() {
        console.log("created()");
        const channel = Echo.channel('public.chat.1');

        channel.listen('.chat', (data) => {
            // Push the received message to the messages array
            this.messages.push(data.message);
            // alert(data.heya);
            console.log(data);
        });
    }
}
</script>
