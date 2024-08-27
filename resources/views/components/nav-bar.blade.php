<nav class="w-full h-16 relative px-5">
    <div x-data="{ isOpen:true }" class="container max-w-7xl mx-auto flex lg:justify-between justify-center items-center h-full">
        <div class="lg:flex gap-16 hidden">
            <div class="text-xl">NALENDEV.CLOUD</div>
            <ul class="flex gap-8">
                <a href="/"><li class="text-sm font-semibold">Home</li></a>
                <a href="articles"><li class="text-sm hover:text-gray-600">Article</li></a>
                <a href="projects"><li class="text-sm hover:text-gray-600">Project</li></a>
                <li class="text-sm">Contact</li>
            </ul>
        </div>

        <div class="">
            <p class="text-xs text-gray-500"> Denpasar, Indonesia</p>
            <p class="text-center lg:text-start text-sm font-medium">6:31:31 pm</p>
            <svg @click="isOpen = !isOpen" class="block lg:hidden h-6 w-6 absolute right-10 top-4 hover:cursor-pointer" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </div>
        <div x-show="isOpen" class="hidden">
            
        </div>
    </div>
</nav>