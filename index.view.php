<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <link rel="stylesheet" href="style/style.css">
</head>

<body class="h-full">
    <nav class="bg-black">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="/" class="hover:bg-gray-700 rounded-md  px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white hover:text-black" aria-current="page">Home</a>
                            <a href="/about" class="hover:bg-gray-700 rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white hover:text-black">About</a>
                            <?php if ($_SESSION['user'] ?? false) : ?>
                                <a href="/notes" class="hover:bg-gray-700 rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white hover:text-black">Tasks</a>
                            <?php endif; ?>
                            <a href="/contact" class="hover:bg-gray-700 rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white hover:text-black">Contact</a>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <div class="relative ml-3">
                            <div>
                                <?php if ($_SESSION['user'] ?? false) : ?>
                                <?php else : ?>
                                    <a href="/register" class="hover:bg-gray-700 rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-sky-950 hover:text-white">Register</a>
                                    <a href="/login" class="hover:bg-gray-700 rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-sky-950 hover:text-white">Log In</a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php if ($_SESSION['user'] ?? false) : ?>
                            <div class="ml-3">
                                <form action="/session" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">

                                    <button class="text-white">Log Out</button>
                                </form>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <!-- Mobile menu button -->
                    <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!-- Menu open: "hidden", Menu closed: "block" -->
                        <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!-- Menu open: "block", Menu closed: "hidden" -->
                        <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="md:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Dashboard</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white hover:text-black">Team</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white hover:text-black">Updates</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white hover:text-black">Calendar</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white hover:text-black">Reports</a>
            </div>
            <div class="border-t border-white pt-4 pb-3">
                <div class="flex items-center">
                    <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
                        <?php if ($_SESSION['user'] ?? false) : ?>
                        <?php else : ?>
                            <a href="/register" class=" block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white hover:text-black">Register</a>
                            <a href="/login" class=" block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white hover:text-black">Log In</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</body>

</html>