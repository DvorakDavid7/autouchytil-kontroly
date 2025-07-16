<nav class="bg-red-500 px-10 py-3">
    <div class="flex flex-col items-center justify-center md:flex-row md:justify-between">
        <!-- Logo (only visible on md and above) -->
        <div class="hidden md:flex items-center text-white">
            <a href="/" class="mt-2">
                <img src="{{ asset('images/logo/logo.svg') }}" alt="logo" width="170" height="170">
            </a>
        </div>

        <!-- Contact Info and Icons -->
        <div class="flex items-center justify-center gap-8 text-white mt-2 md:mt-0">
            <div class="flex items-center justify-center text-2xl text-white">
                <i class="bi bi-telephone-fill"></i>
                <span class="ml-5 text-sm not-italic">
                    <strong>(+420) 774 034 180</strong>
                </span>
            </div>
            <a
                href="https://www.facebook.com/profile.php?id=61560377717879"
                aria-label="Facebook"
                class="text-2xl text-white hover:text-gray-200"
            >
                <i class="bi bi-facebook"></i>
            </a>
        </div>
    </div>
</nav>
