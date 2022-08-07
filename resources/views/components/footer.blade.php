<footer class="bg-gray-900">
    <div class="relative max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8 lg:pt-24">
        <div class="lg:flex lg:items-end lg:justify-between">
            <div>
                <div class="flex justify-center space-x-2 text-teal-300 lg:justify-start">
                    <x-jet-application-mark class="w-6 h-6" />

                    <span>
                        {{ config('app.name', 'Laravel') }}
                    </span>
                </div>

                <p class="max-w-md mx-auto mt-6 leading-relaxed text-center text-gray-400 lg:text-left">
                    This project will serve as a public database of Laracon talks and speakers for the Laravel community.
                </p>
            </div>

            <nav class="mt-12 lg:mt-0" aria-labelledby="footer-navigation">
                <h2 class="sr-only" id="footer-navigation">Footer navigation</h2>

                <ul class="flex flex-wrap justify-center gap-6 lg:justify-end md:gap-8 lg:gap-12">
                    <li>
                        <a class="text-white transition hover:text-white/75" href="https://laravel.com">
                            Laravel
                        </a>
                    </li>

                    <li>
                        <a class="text-white transition hover:text-white/75" href="https://laracon.net">
                            Laracon
                        </a>
                    </li>

                    <li>
                        <a class="text-white transition hover:text-white/75" href="https://github.com/belzaaron/laracons.net">
                            GitHub
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <p class="mt-12 text-sm text-center text-gray-400 lg:text-right">
            Not an official website of <a href="https://laravel.com" class="text-white underline decoration-wavy decoration-white hover:opacity-75">Laravel</a> or <a href="https://laracon.net" class="text-white underline decoration-wavy decoration-white hover:opacity-75">Laracon</a>.
        </p>
    </div>
</footer>
