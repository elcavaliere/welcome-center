@section('app-hero-title')
    Register a new funding
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
                        <label for="type">type :</label>
                        <div class="input">
                            <input type="text" id="type" wire:model.defer="funding.type">
                        </div>
                        @error('funding.type')
                        <span class="form-error inline-block my-3 rounded-md bg-red-100 py-3 px-5 font-medium text-sm text-red-400">
                        {{ $message }}
                    </span>
                        @enderror
                    </div>
                    <div class="form-field">
                        <label for="sponsor_id">Sponsor :</label>
                        <div class="dropdown">
                            <select id="sponsor_id" wire:model.defer="funding.sponsor_id">
                                <option value="">Choose sponsor</option>
                                @foreach($sponsors as $sponsor)
                                    <option value="{{ $sponsor->id }}">{{ $sponsor->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('funding.sponsor_id')
                        <span class="form-error inline-block my-3 rounded-md bg-red-100 py-3 px-5 font-medium text-sm text-red-400">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="form-field h-auto">
                        <label for="amount">Amount :</label>
                        <div class="input">
                            <input type="number" id="amount" wire:model.defer="funding.amount" class="w-full inline-block min-h-24" >
                        </div>
                        @error('funding.amount')
                        <span class="form-error inline-block my-3 rounded-md bg-red-100 py-3 px-5 font-medium text-sm text-red-400">
                        {{ $message }}
                    </span>
                        @enderror
                    </div>
                    <div class="form-submit my-4">
                        <button class="bg-green-400 font-medium text-sm rounded-md px-4 py-2 text-white">
                            Save funding
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
