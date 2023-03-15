<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-cover bg-no-repeat bg-fixed bg-[url('/images/bg1.png')]">
    <form class="bg-gray-200 p-4 mt-24 w-4/12 mx-auto rounded shadow text-center" action="#" method="POST">
        <h2 class="font-bold text-2xl my-2">Login</h2>
        <input type="text" placeholder="Username" class="block p-3 my-5 w-full rounded outlline-none" name="name">

        <input type="password" placeholder="password" class="block p-3 my-5 w-full rounded outlline-none" name="password">

        <input type="Submit" value="Login" class="p-3 my-5 bg-blue-600 text-white rounded outlline-none" name="Login">
        <a href="" class="p-3 my-5 bg-red-600 text-white rounded outlline-none"> Cancle </a>
    </form>
</body>

</html>