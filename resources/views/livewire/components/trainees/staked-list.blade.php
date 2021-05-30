<section class="stacked-list ">
    {{-- <header
        class="p-5 space-y-4 border-b border-indigo-200 stacked-list-header"
    >
        <h2
            class="p-0 m-0 text-xl font-semibold text-indigo-900 uppercase stacked-list-header-title"
        >
            Registered trainees
        </h2>
        <div class="stacked-list-header-actions">
            <a
                href="#"
                class="inline-flex flex-row items-center space-x-3 bg-indigo-200 rounded-md "
            >
                <span
                    class="flex flex-col justify-center px-3 py-2 text-indigo-900 border-r border-indigo-200 icon"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-5 h-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"
                        />
                    </svg>
                </span>
                <span
                    class="flex-1 pr-3 text-base font-semibold text-center text-indigo-700 text"
                >
                    Add new trainee
                </span>
            </a>
        </div>
        <div
            class="flex flex-row items-stretch border border-indigo-200 rounded-md stacked-list-header-filters"
        >
            <div
                class="flex flex-row items-stretch flex-1 m-0 bg-white stacked-list-header-filters-search-fild rounded-l-md"
            >
                <span
                    class="flex flex-col justify-center px-3 py-2 text-indigo-900 border-r border-indigo-200 icon"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-6 h-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M8 16l2.879-2.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242zM21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                        />
                    </svg>
                </span>
                <input
                    type="text"
                    placeholder="Tape your search here !"
                    class="flex-1 px-3 bg-transparent border-none outline-none focus:outline-none hover:outline-none"
                />
            </div>
            <div class="m-0 stacked-list-header-filters-dropdown rounded-r-md">
                <label
                    for="sort-by"
                    class="flex flex-col h-full px-3 text-center border-l border-indigo-200 rounded-r-md"
                >
                    <select
                        id="sort-by"
                        class="h-full border-none outline-none focus:outline-none focus:border-none hover:outline-none rounded-r-md"
                    >
                        <option class="text-center">Sort by :</option>
                        <option>In ascending order</option>
                        <option>In descending order</option>
                        <option>Verified profile</option>
                        <option>Unverified profile</option>
                    </select>
                </label>
            </div>
        </div>
    </header> --}}
    <main class="stacked-list-main">
        <ul
            class="stacked-list-main-list"
        >
            @foreach($users as $user)
            <livewire:components.trainees.stacked-list-item
                :user="$user"
                :key="$user->id"
            />
            @endforeach
        </ul>
    </main>
</section>
