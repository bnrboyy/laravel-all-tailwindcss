<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    @vite('resources/css/home.scss')
    <title>Login</title>
</head>

<body>
    <section class="section-register-form">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">

            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1
                        class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Login
                    </h1>
                    <form class="form-register" action="#">

                        <div>
                            <label for="email" class="label">Email</label>
                            <input type="email" name="email" id="email" class="input"
                                placeholder="@example.com" required="">
                        </div>
                        <div>
                            <label for="password" class="label">Password</label>
                            <input type="password" name="password" id="password" placeholder="" class="input"
                                required="">
                        </div>
                        <button type="button" class="btn" onclick="onLogin()">Login</button>

                        <p>
                            Do you want create account ? <a href="/register"
                                class="font-medium text-primary-600 hover:underline dark:text-primary-500">Create account
                                </a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>














    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.4/axios.min.js" integrity="sha512-Th6RhKVKcUO1NdowoioG5HrNgi4JzStsjpwheSR+nWcDIVO4Wv6E6D14o/46EqqDsLSca/rcMD1a3OLyPkexAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./js/auth.js"></script>
</body>

</html>
