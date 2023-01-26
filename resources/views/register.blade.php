<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/home.scss')
    <title>Register</title>
</head>

<body>
    <section class="section-register-form">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">

            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1>
                        Create account
                    </h1>
                    <form class="form-register" action="#">
                        <div>
                            <label for="username"
                                class="label">Username</label>
                            <input type="text" name="username" id="username"
                                class="input"
                                required="">
                        </div>
                        <div>
                            <label for="email"
                                class="label">Email</label>
                            <input type="email" name="email" id="email"
                                class="input"
                                placeholder="@example.com" required="">
                        </div>
                        <div>
                            <label for="password"
                                class="label">Password</label>
                            <input type="password" name="password" id="password" placeholder=""
                                class="input"
                                required="">
                        </div>
                        <div>
                            <label for="confirm-password"
                                class="label">Confirm
                                password</label>
                            <input type="password" name="confirm-password" id="confirm-password" placeholder=""
                                class="input"
                                required="">
                        </div>
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" aria-describedby="terms" type="checkbox"
                                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-orange-400 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-orange-400 dark:ring-offset-gray-800"
                                    required="">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the
                                    <a class="font-medium text-primary-600 hover:underline dark:text-primary-500"
                                        href="#">Terms and Conditions</a></label>
                            </div>
                        </div>
                        <button type="button" onclick="registerHandler()"
                            class="btn">Create
                            an account</button>
                        <p>
                            Already have an account? <a href="/login"
                                class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login
                                here</a>
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
