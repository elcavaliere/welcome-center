@section('app-hero-title')
    Create a new company
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
                    <h3 class="header-title">Basic information</h3>
                    <p class="header-text">
                        This information will be displayed publicly so be careful what you share.
                    </p>
                </header>
            </aside>
            <div class="form-body">
                <form autocomplete="off" wire:submit.prevent="save">
                    <div class="form-field">
                        <label for="name">name :</label>
                        <div class="input">
                            <input type="text" id="name" wire:model.defer="company.name">
                        </div>
                        @error('company.name')
                        <span class="form-error inline-block my-3 rounded-md bg-red-100 py-3 px-5 font-medium text-sm text-red-400">
                        {{ $message }}
                    </span>
                        @enderror
                    </div>

                    <div class="form-field">
                        <label for="email">Email :</label>
                        <div class="input">
                            <input type="text" id="email" wire:model.defer="company.email">
                        </div>
                        @error('company.email')
                        <span class="form-error inline-block my-3 rounded-md bg-red-100 py-3 px-5 font-medium text-sm text-red-400">
                        {{ $message }}
                    </span>
                        @enderror
                    </div>
                    <div class="form-field h-auto">
                        <label for="description">Description :</label>
                        <div class="input">
                            <textarea type="text" id="description" wire:model.defer="company.description" class="w-full inline-block min-h-24" >
                            </textarea>
                        </div>
                        @error('company.description')
                        <span class="form-error inline-block my-3 rounded-md bg-red-100 py-3 px-5 font-medium text-sm text-red-400">
                        {{ $message }}
                    </span>
                        @enderror
                    </div>
                    <div class="form-submit my-4">
                        <button class="bg-green-400 font-medium text-sm rounded-md px-4 py-2 text-white">
                            Create company
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
