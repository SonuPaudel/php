@if(Session::has('success'))
<div class="fixed top-5 right-5">
    <p class="px-2 py-2 bg-green-400 text-white font-bold text-xl" id="message">
        {{session('success')}}

    </p>
    <script>
        setTimeout(() => {
            $('#message').fadeOut(1000);
        }, 1000);
    </script>

</div>
@endif