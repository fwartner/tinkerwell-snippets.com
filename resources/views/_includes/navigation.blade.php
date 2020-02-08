<div id="menu" class="bg-gray-900">
    <div class="flex items-center justify-between px-4 py-2 text-white h-12">
        <div class="flex items-center">
            <div class="w-10">
                <a href="/">
                    <img src="{{ asset('images/tinkerwell_snippets_logo.svg') }}" alt="Tinkerwell Snippets Logo" class="w-100">
                </a>
            </div>
            <div class="ml-2 hidden sm:block">
                <a href="/" class="hover:text-gray-500">Tinkerwell {snippets}</a>
            </div>
        </div>
        <div class="flex items-center justify-between py-2 text-white h-12">
            <div class="lg:flex-grow mr-4 flex justify-end text-sm md:text-base">
                <a href="/#latest-snippets" class="hover:text-gray-500 mr-4">Latest Snippets</a>
                <a href="https://github.com/fwartner/laravel-tinkerwell-snippets" class="hover:text-gray-500 mr-4">Helper Package</a>
            </div>
            <div>
                @guest
                    <a class="hover:text-gray-500 mr-4" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                        <a class="hover:text-gray-500 mr-4" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                    <span class="text-gray-300 text-sm pr-4">{{ Auth::user()->name }}</span>

                    <a href="{{ route('logout') }}"
                       class="hover:text-gray-500 mr-4"
                       onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                @endguest
            </div>
        </div>
    </div>
</div>
