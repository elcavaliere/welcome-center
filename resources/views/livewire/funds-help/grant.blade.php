@section('app-hero-title')
    Grant help to a trainee
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
                        <label for="user_id">Trainee :</label>
                        <div class="dropdown">
                            <select id="user_id" wire:model.defer="helpFundUser.user_id">
                                <option value="">Choose trainee</option>
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->full_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('helpFundUser.user_id')
                        <span class="form-error inline-block my-3 rounded-md bg-red-100 py-3 px-5 font-medium text-sm text-red-400">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="form-field">
                        <label for="help_fund_id">Fund help type :</label>
                        <div class="dropdown">
                            <select id="help_fund_id" wire:model.defer="helpFundUser.help_fund_id">
                                <option value="">Choose help fund type</option>
                                @foreach($fundsHelp as $help_fund)
                                    <option value="{{ $help_fund->id }}">{{ $help_fund->type }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('helpFundUser.help_fund_id')
                        <span class="form-error inline-block my-3 rounded-md bg-red-100 py-3 px-5 font-medium text-sm text-red-400">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="form-field">
                        <label for="amount">Amount :</label>
                        <div class="input">
                            <input type="number" id="amount" wire:model.defer="helpFundUser.amount" class="w-full inline-block min-h-24" >
                        </div>
                        @error('helpFundUser.amount')
                        <span class="form-error inline-block my-3 rounded-md bg-red-100 py-3 px-5 font-medium text-sm text-red-400">
                        {{ $message }}
                    </span>
                        @enderror
                    </div>
                    <div class="form-submit my-4">
                        <button class="bg-green-400 font-medium text-sm rounded-md px-4 py-2 text-white">
                            Save fund help
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
