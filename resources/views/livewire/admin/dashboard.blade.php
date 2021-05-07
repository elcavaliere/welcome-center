<div>
    <h2 class="font-extrabold text-2xl text-gray-900 mx-auto w-11/12 py-4">
        Dashboard
    </h2>
    <div class="w-11/12 mx-auto">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button class="bg-indigo-500 font-medium text-sm rounded-md px-4 py-2 text-white">
                Logout
            </button>
        </form>
    </div>
</div>
