@section('app-hero-title')
    Update profile
@endsection
<div class="mx-auto">
    @if (session()->has('message'))
        <div class="alert alert-success my-6 p-4 rounded-md inline-block bg-green-600 text-sm font-medium text-white">
            {{ session('message') }}
        </div>
    @endif
    <div>
        <div class="form-container">
            <aside class="form-aside">
                <header class="form-aside-header">
                    <h3 class="header-title">Profile</h3>
                    <p class="header-text">
                        This information will be displayed publicly so be careful what you share.
                    </p>
                </header>
            </aside>
            <div class="form-body">
                <form autocomplete="off" wire:submit.prevent="save">
                    <div class="form-field">
                        <label for="first_name">First name :</label>
                        <div class="input">
                            <input type="text" id="first_name" wire:model.defer="profile.user.first_name">
                        </div>
                        @error('profile.user.first_name')
                        <span class="form-error inline-block my-3 rounded-md bg-red-100 py-3 px-5 font-medium text-sm text-red-400">
                        {{ $message }}
                    </span>
                        @enderror
                    </div>
                    <div class="form-field">
                        <label for="last_name">Last name :</label>
                        <div class="input">
                            <input type="text" id="last_name" wire:model.defer="profile.user.last_name">
                        </div>
                        @error('profile.user.last_name')
                        <span class="form-error inline-block my-3 rounded-md bg-red-100 py-3 px-5 font-medium text-sm text-red-400">
                        {{ $message }}
                    </span>
                        @enderror
                    </div>
                    <div class="form-field">
                        <label for="email">Email :</label>
                        <div class="input">
                            <input type="text" id="email" wire:model.defer="profile.user.email">
                        </div>
                        @error('profile.user.email')
                        <span class="form-error inline-block my-3 rounded-md bg-red-100 py-3 px-5 font-medium text-sm text-red-400">
                        {{ $message }}
                    </span>
                        @enderror
                    </div>
                    <div class="form-field">
                        <label for="surname">Surname :</label>
                        <div class="input">
                            <input type="text" id="surname" wire:model.defer="profile.surname">
                        </div>
                        @error('profile.user.surname')
                        <span class="form-error inline-block my-3 rounded-md bg-red-100 py-3 px-5 font-medium text-sm text-red-400">
                        {{ $message }}
                    </span>
                        @enderror
                    </div>
                    <div class="form-field">
                        <label for="birth_date">Birth date :</label>
                        <div class="input">
                            <input type="date" id="birth_date" wire:model.defer="profile.birth_date" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
                        </div>
                        @error('profile.user.birth_date')
                        <span class="form-error inline-block my-3 rounded-md bg-red-100 py-3 px-5 font-medium text-sm text-red-400">
                        {{ $message }}
                    </span>
                        @enderror
                    </div>
                    <div class="form-field">
                        <label for="sex">Sex :</label>
                        <div class="dropdown">
                            <select id="sex" wire:model.defer="profile.sex">
                                <option value="">Choose</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        @error('profile.user.sex')
                        <span class="form-error inline-block my-3 rounded-md bg-red-100 py-3 px-5 font-medium text-sm text-red-400">
                        {{ $message }}
                    </span>
                        @enderror
                    </div>
                    @if(Auth::user()->hasRole('admin'))
                        <div class="form-field">
                            <label for="category">Category :</label>
                            <div class="dropdown">
                                <select id="category" wire:model.defer="profile.category">
                                    <option value="">The user is ?</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('profile.category')
                            <span class="form-error inline-block my-3 rounded-md bg-red-100 py-3 px-5 font-medium text-sm text-red-400">
                        {{ $message }}
                    </span>
                            @enderror
                        </div>
                    @endif
                    <div class="form-submit my-4">
                        <button class="bg-green-400 font-medium text-sm rounded-md px-4 py-2 text-white">
                            Create profile.user
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
