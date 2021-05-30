@section('app-hero-breadcrumbs')
    <div class="app-hero-breadcrumbs">
        <div class="item">Trainees</div>
        <div class="icon">
            <i class="fas fa-angle-right"></i>
        </div>
        <div class="item">
            List
        </div>
    </div>
@endsection
@section('app-hero-title')
    Trainees list
@endsection
<div class="wrapper w-full lg:w-10/12 py-5 mx-auto">
    <livewire:components.trainees.staked-list :users="$users"/>
</div>
