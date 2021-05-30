<section class="app-top-bar">
    <section class="wrapper">
        <div class="app-logo">
            Welcome Center
        </div>

        @auth
            <livewire:layouts.partials.header-navbar />
            <livewire:layouts.partials.header-right-navbar>
            @endauth
            @guest
                <div class="app-auth-buttons">
                    <a class="px-4 py-2 text-sm font-medium text-white bg-green-400 rounded-md"
                        href="{{ route('login') }}">
                        I'm a member
                    </a>
                </div>
            @endguest
    </section>
</section>
