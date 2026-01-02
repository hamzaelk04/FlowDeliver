<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>FlowDeliver Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#1152d4",
                        "background-light": "#f6f6f8",
                        "background-dark": "#101622",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
    <link rel="stylesheet" href="Assets/style.css">
</head>

<body
    class="bg-background-light dark:bg-background-dark font-display min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <!-- Logo -->
        <div class="flex flex-col items-center justify-center mb-6">
            <div class="h-12 w-12 rounded-lg bg-primary/10 flex items-center justify-center mb-3">
                <span class="material-symbols-outlined text-primary text-3xl">local_shipping</span>
            </div>
            <h2 class="text-center text-3xl font-bold tracking-tight text-gray-900 dark:text-white">FlowDeliver</h2>
        </div>
        <!-- Login Card -->
        <div
            class="bg-white dark:bg-[#1A202C] py-8 px-4 shadow-xl shadow-gray-200/50 dark:shadow-none rounded-xl sm:px-10 border border-gray-100 dark:border-gray-700 mx-4 sm:mx-0">
            <div class="mb-6 text-center">
                <h1 class="text-xl font-bold text-gray-900 dark:text-white">Welcome Back</h1>
                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">Log in to your dashboard to manage deliveries
                </p>
            </div>
            <form action="#" class="space-y-6" method="POST">
                <!-- Email Field -->
                <div>
                    <label class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-200"
                        for="email">Email address</label>
                    <div class="mt-2">
                        <input autocomplete="email"
                            class="block w-full rounded-lg border-0 py-3 text-gray-900 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary dark:bg-gray-800 dark:focus:ring-primary sm:text-sm sm:leading-6"
                            id="email" name="email" placeholder="name@company.com" required="" type="email" />
                    </div>
                </div>
                <!-- Password Field -->
                <div>
                    <div class="flex items-center justify-between">
                        <label class="block text-sm font-medium leading-6 text-gray-900 dark:text-gray-200"
                            for="password">Password</label>
                        <div class="text-sm">
                            <a class="font-medium text-primary hover:text-blue-500" href="#">Forgot password?</a>
                        </div>
                    </div>
                    <div class="relative mt-2 rounded-lg shadow-sm">
                        <input autocomplete="current-password"
                            class="block w-full rounded-lg border-0 py-3 pr-10 text-gray-900 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary dark:bg-gray-800 dark:focus:ring-primary sm:text-sm sm:leading-6"
                            id="password" name="password" placeholder="••••••••" required="" type="password" />
                        <button type="button" id="password-toggle" class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer hover:opacity-70 transition-opacity">
                            <span id="password-toggle-icon" class="material-symbols-outlined text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 transition-colors"
                                style="font-size: 20px;">visibility</span>
                        </button>
                    </div>
                </div>
                <!-- Submit Button -->
                <div>
                    <button
                        class="flex w-full justify-center rounded-lg bg-primary px-3 py-3 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary transition-colors"
                        type="button">
                        Sign in
                    </button>
                </div>
            </form>
            <!-- Divider -->
            <div class="relative mt-8">
                <div aria-hidden="true" class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-200 dark:border-gray-700"></div>
                </div>
                <div class="relative flex justify-center text-sm font-medium leading-6">
                    <span class="bg-white dark:bg-[#1A202C] px-4 text-gray-500 dark:text-gray-400">Or continue
                        with</span>
                </div>
            </div>
            <!-- Social Logins -->
            <div class="mt-6 grid grid-cols-2 gap-4">
                <a class="flex w-full items-center justify-center gap-3 rounded-lg bg-white dark:bg-gray-800 px-3 py-2.5 text-sm font-semibold text-gray-900 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 focus-visible:ring-transparent transition-colors"
                    href="#">
                    <svg aria-hidden="true" class="h-5 w-5" viewbox="0 0 24 24">
                        <path
                            d="M12.0003 20.45c4.6667 0 8.45-3.7833 8.45-8.45 0-4.6667-3.7833-8.45-8.45-8.45-4.6667 0-8.45 3.7833-8.45 8.45 0 4.6667 3.7833 8.45 8.45 8.45Z"
                            fill="#fff" fill-opacity="0" stroke="none"></path>
                        <path
                            d="M20.45 12c0-.6625-.0542-1.3042-.1583-1.925H12v3.7417h4.825c-.2292 1.1542-.8708 2.1125-1.8042 2.7333v2.2167h2.8708c1.6875-1.5542 2.6583-3.8375 2.6583-6.5292Z"
                            fill="#4285F4"></path>
                        <path
                            d="M12 20.45c2.3792 0 4.375-.7875 5.8333-2.1333l-2.8708-2.2167c-.7708.5333-1.7875.8667-2.9625.8667-2.3417 0-4.3208-1.5542-5.0292-3.6583H4.075v2.3C5.5417 18.525 8.5708 20.45 12 20.45Z"
                            fill="#34A853"></path>
                        <path
                            d="M6.9708 13.3083c-.1833-.55-.2833-1.1375-.2833-1.75s.1-1.2.2833-1.75V7.5083H4.075C3.4708 8.7083 3.125 10.0625 3.125 11.5c0 1.4375.3458 2.7917.95 4H6.9792v-2.1917Z"
                            fill="#FBBC05"></path>
                        <path
                            d="M12 6.3833c1.3333 0 2.5292.4625 3.4667 1.3417l2.5583-2.5583C16.3708 3.7292 14.3708 2.8 12 2.8 8.5708 2.8 5.5417 4.725 4.075 7.5083l2.8958 2.2917C7.6792 7.9375 9.6583 6.3833 12 6.3833Z"
                            fill="#EA4335"></path>
                    </svg>
                    <span class="text-sm">Google</span>
                </a>
                <a class="flex w-full items-center justify-center gap-3 rounded-lg bg-white dark:bg-gray-800 px-3 py-2.5 text-sm font-semibold text-gray-900 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 focus-visible:ring-transparent transition-colors"
                    href="#">
                    <svg aria-hidden="true" class="h-5 w-5 text-gray-900 dark:text-white" fill="currentColor"
                        viewbox="0 0 24 24">
                        <path
                            d="M16.365 1.43c0 1.14-.493 2.27-1.177 3.08-.684.816-1.822 1.502-2.938 1.502-.03 0-.053 0-.075 0-.02-.84.398-1.915 1.09-2.73.692-.815 1.93-1.452 2.922-1.852.057 0 .102 0 .18 0zM12.435 5.592c-1.425 0-2.433.808-3.083.808-.65 0-1.615-.79-2.66-.79-2.71 0-5.16 2.115-5.16 5.86 0 2.26.88 4.39 1.708 5.67.765 1.18 1.956 2.945 3.195 2.945.98 0 1.343-.655 2.825-.655 1.474 0 1.83.655 2.812.655 1.184 0 2.15-1.576 2.964-2.92.89-1.468 1.258-2.64 1.258-2.7-.022-.008-2.458-.948-2.458-3.784 0-2.88 2.37-3.95 2.45-3.984-.962-1.35-2.5-2.008-3.75-2.105z">
                        </path>
                    </svg>
                    <span class="text-sm">Apple</span>
                </a>
            </div>
            <p class="mt-8 text-center text-sm text-gray-500 dark:text-gray-400">
                Don't have an account?
                <a class="font-semibold leading-6 text-primary hover:text-blue-500" href="register.php">Sign up</a>
            </p>
        </div>
        <!-- Background decorative element for SaaS feel -->
        <div aria-hidden="true"
            class="fixed top-0 left-0 -z-10 w-full h-1/2 bg-gradient-to-b from-primary/5 to-transparent dark:from-primary/10 pointer-events-none"
            data-alt="Subtle gradient background decoration"></div>
    </div>
    <script src="Assets/login.js"></script>
</body>

</html>