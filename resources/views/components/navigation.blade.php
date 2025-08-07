<nav class="bg-red-500 px-10">
    <div class="flex flex-col my-2 md:m-0 items-center justify-center md:flex-row md:justify-between">
        <!-- Logo (only visible on md and above) -->
        <div class="hidden md:flex items-center text-white">
            <a href="/">
                <img src="{{ asset('images/logo.svg') }}" alt="logo" width="170" height="170">
            </a>
        </div>

        <!-- Contact Info and Icons -->
        <div class="flex items-center justify-center gap-8 text-white md:mt-0">
            <div class="flex items-center justify-center text-2xl text-white">
                <i class="bi bi-telephone-fill"></i>
                <a class="ml-5 text-sm not-italic hover:underline" href="tel:+420774034180">
                    <strong>(+420) 774 034 180</strong>
                </a>
            </div>
            <a href="https://www.facebook.com/profile.php?id=61560377717879" aria-label="Facebook"
                class="text-2xl text-white hover:text-gray-200">
                {{-- <i class="bi bi-facebook"></i> --}}
            </a>
        </div>
    </div>
</nav>
