<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
{{--    <script src="{{ asset('js/app.js') }}"></script>--}}

{{--    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>--}}
{{--    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>--}}
</head>
<body>
<form id="form">
    <label for="input-message"> Message: </label>
    <input id="input-message" type="text" class="form-control">
</form>

{{--<script>--}}
{{--    window.Echo = new Echo({--}}
{{--        broadcaster: 'pusher',--}}
{{--        key: 'socketapp_key',--}}
{{--        cluster: 'mt1',--}}
{{--        forceTLS: true--}}
{{--    });--}}

{{--    window.Echo.channel('public.chat.1')--}}
{{--        .listen('.chat', (data) => {--}}
{{--            console.log(data.message);--}}
{{--            // Add code here to display the message in the view--}}
{{--        });--}}
{{--</script>--}}




{{--<script>--}}
{{--    // const form= document.getElementById('form');--}}
{{--    // console.log(form);--}}
{{--    // const inputMessage= document.getElementById('input-message');--}}
{{--    //--}}
{{--    // form.addEventListener('submit',function (event){--}}
{{--    //     event.preventDefault();--}}
{{--    //     console.log("hello");--}}
{{--    //     const userInput=inputMessage.value;--}}
{{--    //     alert(userInput);--}}
{{--    //     axios.post('/chat-message', {--}}
{{--    //         message: userInput--}}
{{--    //     })--}}
{{--    //         .then(response => {--}}
{{--    //             console.log(response);--}}
{{--    //         })--}}
{{--    //         .catch(error => {--}}
{{--    //             console.log(error);--}}
{{--    //         });--}}
{{--    // });--}}




{{--</script>--}}
{{--<script src="https://js.pusher.com/7.0/pusher.min.js"></script>--}}
{{--<script>--}}
{{--    window.Echo = new Echo({--}}
{{--        broadcaster: 'pusher',--}}
{{--        key: 'socketapp_key',--}}
{{--        cluster: 'mt1',--}}
{{--        forceTLS: true--}}
{{--    });--}}

{{--    //--}}
{{--    // PUSHER_APP_ID=socketapp--}}
{{--    // PUSHER_APP_KEY=--}}
{{--    // PUSHER_APP_SECRET=socketapp_key_secret--}}
{{--    // PUSHER_HOST=127.0.0.1--}}
{{--    // PUSHER_PORT=6001--}}
{{--    // PUSHER_SCHEME=http--}}
{{--    // PUSHER_APP_CLUSTER=mt1--}}


{{--    window.Echo.channel('public.chat.1')--}}
{{--        .listen('.chat', (data) => {--}}
{{--            console.log(data.message);--}}
{{--            // Add code here to display the message in the view--}}
{{--        });--}}
{{--</script>--}}
<div id="app"></div>

</body>
</html>
