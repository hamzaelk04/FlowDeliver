<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>FlowDeliver Register</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
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
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display antialiased">
    <div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
        <div class="flex items-center justify-center p-6 pb-2">
            <div class="flex items-center gap-2">
                <div class="flex items-center justify-center size-10 rounded-xl bg-primary text-white">
                    <span class="material-symbols-outlined text-2xl">local_shipping</span>
                </div>
                <h2 class="text-slate-900 dark:text-white text-xl font-bold leading-tight tracking-tight">FlowDeliver
                </h2>
            </div>
        </div>
        <div class="flex flex-1 flex-col items-center justify-center px-4 py-4 sm:px-6">
            <div
                class="w-full max-w-md bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-slate-100 dark:border-gray-700 overflow-hidden p-6 sm:p-8">
                <div class="text-center mb-8">
                    <h1
                        class="text-slate-900 dark:text-white tracking-tight text-2xl sm:text-3xl font-bold leading-tight mb-2">
                        Create your account</h1>
                    <p class="text-slate-500 dark:text-slate-400 text-sm sm:text-base font-normal leading-normal">
                        Seamless Logistics Management</p>
                </div>
                
                <form action="Controllers/AuthController.php" method="post">
                    <div class="flex mb-6">
                        <div
                            class="flex h-12 flex-1 items-center justify-center rounded-xl bg-slate-100 dark:bg-slate-700 p-1">
                            <label
                                class="group flex cursor-pointer h-full grow items-center justify-center overflow-hidden rounded-lg px-2 has-[:checked]:bg-white dark:has-[:checked]:bg-gray-600 has-[:checked]:shadow-sm has-[:checked]:text-primary dark:has-[:checked]:text-white text-slate-500 dark:text-slate-400 text-sm font-medium transition-all duration-200">
                                <span
                                    class="material-symbols-outlined mr-2 text-[20px] group-has-[:checked]:fill-1">domain</span>
                                <span class="truncate"></span>
                                <input checked="" id="role-client" class="invisible w-0 h-0" name="role_selector"
                                    type="radio" value="Client" />Client
                            </label>
                            <label
                                class="group flex cursor-pointer h-full grow items-center justify-center overflow-hidden rounded-lg px-2 has-[:checked]:bg-white dark:has-[:checked]:bg-gray-600 has-[:checked]:shadow-sm has-[:checked]:text-primary dark:has-[:checked]:text-white text-slate-500 dark:text-slate-400 text-sm font-medium transition-all duration-200">
                                <span
                                    class="material-symbols-outlined mr-2 text-[20px] group-has-[:checked]:fill-1">local_shipping</span>
                                <span class="truncate"></span>
                                <input id="role-delivery" class="invisible w-0 h-0" name="role_selector" type="radio"
                                    value="Delivery Partner" />Delivery
                            </label>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <label class="flex flex-col w-full">
                            <p class="text-slate-900 dark:text-white text-sm font-medium leading-normal pb-2">First Name
                            </p>
                            <div class="relative">
                                <input
                                    class="form-input flex w-full rounded-xl text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/20 border border-slate-200 dark:border-gray-600 bg-white dark:bg-gray-800 focus:border-primary h-12 placeholder:text-slate-400 p-4 text-base font-normal leading-normal transition-colors"
                                    placeholder="John" type="text" name="firstname"/>
                            </div>
                        </label>
                        <label class="flex flex-col w-full">
                            <p class="text-slate-900 dark:text-white text-sm font-medium leading-normal pb-2">Last Name
                            </p>
                            <div class="relative">
                                <input
                                    class="form-input flex w-full rounded-xl text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/20 border border-slate-200 dark:border-gray-600 bg-white dark:bg-gray-800 focus:border-primary h-12 placeholder:text-slate-400 p-4 text-base font-normal leading-normal transition-colors"
                                    placeholder="Doe" type="text" />
                            </div>
                        </label>
                        <label class="flex flex-col w-full">
                            <p class="text-slate-900 dark:text-white text-sm font-medium leading-normal pb-2">Email</p>
                            <div class="relative">
                                <input
                                    class="form-input flex w-full rounded-xl text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/20 border border-slate-200 dark:border-gray-600 bg-white dark:bg-gray-800 focus:border-primary h-12 placeholder:text-slate-400 p-4 text-base font-normal leading-normal transition-colors"
                                    placeholder="john@example.com" type="email" />
                            </div>
                        </label>
                        <label class="flex flex-col w-full">
                            <p class="text-slate-900 dark:text-white text-sm font-medium leading-normal pb-2">Password
                            </p>
                            <div class="relative">
                                <input
                                    class="form-input flex w-full rounded-xl text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/20 border border-slate-200 dark:border-gray-600 bg-white dark:bg-gray-800 focus:border-primary h-12 placeholder:text-slate-400 p-4 pr-12 text-base font-normal leading-normal transition-colors"
                                    id="password" placeholder="••••••••" type="password" />
                                <button type="button" id="password-toggle"
                                    class="absolute right-4 top-1/2 -translate-y-1/2 cursor-pointer hover:opacity-70 transition-opacity">
                                    <span id="password-toggle-icon"
                                        class="material-symbols-outlined text-[20px] text-slate-400 hover:text-slate-600 dark:hover:text-slate-200 transition-colors">visibility</span>
                                </button>
                            </div>
                        </label>
                        <label class="flex flex-col w-full">
                            <p class="text-slate-900 dark:text-white text-sm font-medium leading-normal pb-2">City</p>
                            <div class="relative">
                                <input
                                    class="form-input flex w-full rounded-xl text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/20 border border-slate-200 dark:border-gray-600 bg-white dark:bg-gray-800 focus:border-primary h-12 placeholder:text-slate-400 p-4 text-base font-normal leading-normal transition-colors"
                                    placeholder="New York" type="text" />
                            </div>
                        </label>
                        <div id="vehicle-field" class="flex flex-col w-full" style="display: none;">
                            <p class="text-slate-900 dark:text-white text-sm font-medium leading-normal pb-2">Vehicle
                            </p>
                            <div class="relative">
                                <select
                                    class="form-input flex w-full rounded-xl text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/20 border border-slate-200 dark:border-gray-600 bg-white dark:bg-gray-800 focus:border-primary h-12 px-4 text-base font-normal leading-normal transition-colors"
                                    id="vehicle" name="vehicle">
                                    <option value="">Select a vehicle</option>
                                    <option value="bicycle">Bicycle</option>
                                    <option value="moto">Moto</option>
                                    <option value="car">Car</option>
                                    <option value="truck">Truck</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <button value="register" name="submit"
                            class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-xl h-12 px-5 bg-primary hover:bg-blue-700 text-white text-base font-bold leading-normal tracking-[0.015em] transition-colors shadow-md shadow-blue-500/20">
                            <span class="truncate">Create Account</span>
                        </button>
                    </div>
                </form>
                <div class="mt-6 text-center">
                    <p class="text-slate-500 dark:text-slate-400 text-sm">
                        Already have an account?
                        <a class="text-primary font-medium hover:underline" href="login.php">Log in</a>
                    </p>
                    <div class="mt-8 pt-6 border-t border-slate-100 dark:border-gray-700">
                        <p class="text-xs text-slate-400 dark:text-slate-500 text-center max-w-xs mx-auto">
                            By registering, you agree to our <a
                                class="underline hover:text-slate-500 dark:hover:text-slate-400" href="#">Terms of
                                Service</a> and <a class="underline hover:text-slate-500 dark:hover:text-slate-400"
                                href="#">Privacy Policy</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="Assets/register.js"></script>
</body>

</html>