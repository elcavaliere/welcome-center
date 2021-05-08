@section('app-hero-title')
    Create trainee
@endsection
<div class="w-1/2 mx-auto">
    @if (session()->has('message'))
        <div class="alert alert-success my-6 p-4 rounded-md inline-block bg-green-600 text-sm font-medium text-white">
            {{ session('message') }}
        </div>
    @endif
    <form wire:submit.prevent="save">
        <div class="form-field">
            <label for="first_name">First name :</label>
            <div class="input">
                <input type="text" id="first_name" wire:model.defer="trainee.first_name">
            </div>
            @error('trainee.first_name')
                <span class="form-error inline-block my-3 rounded-md bg-red-100 py-3 px-5 font-medium text-sm text-red-400">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="form-field">
            <label for="last_name">Last name :</label>
            <div class="input">
                <input type="text" id="last_name" wire:model.defer="trainee.last_name">
            </div>
            @error('trainee.last_name')
            <span class="form-error inline-block my-3 rounded-md bg-red-100 py-3 px-5 font-medium text-sm text-red-400">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="form-field">
            <label for="email">Email :</label>
            <div class="input">
                <input type="text" id="email" wire:model.defer="trainee.email">
            </div>
            @error('trainee.email')
            <span class="form-error inline-block my-3 rounded-md bg-red-100 py-3 px-5 font-medium text-sm text-red-400">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="form-field">
            <label for="surname">Surname :</label>
            <div class="input">
                <input type="text" id="surname" wire:model.defer="trainee.surname">
            </div>
            @error('trainee.surname')
            <span class="form-error inline-block my-3 rounded-md bg-red-100 py-3 px-5 font-medium text-sm text-red-400">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="form-field">
            <label for="birth_date">Birth date :</label>
            <div class="input">
                <input type="date" id="birth_date" wire:model.defer="trainee.birth_date" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
            </div>
            @error('trainee.birth_date')
            <span class="form-error inline-block my-3 rounded-md bg-red-100 py-3 px-5 font-medium text-sm text-red-400">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="form-field">
            <label for="sex">Sex :</label>
            <div class="dropdown">
                <select id="sex" wire:model.defer="trainee.sex">
                    <option value="">Choose</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            @error('trainee.sex')
            <span class="form-error inline-block my-3 rounded-md bg-red-100 py-3 px-5 font-medium text-sm text-red-400">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="form-field">
            <label for="category">Category :</label>
            <div class="dropdown">
                <select id="category" wire:model.defer="trainee.category">
                    <option value="">The trainee is ?</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            @error('trainee.category')
            <span class="form-error inline-block my-3 rounded-md bg-red-100 py-3 px-5 font-medium text-sm text-red-400">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="form-submit my-4">
            <button class="bg-green-400 font-medium text-sm rounded-md px-4 py-2 text-white">
                Create trainee
            </button>
        </div>
    </form>
</div>
