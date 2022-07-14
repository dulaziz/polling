<link rel="stylesheet" href="css/global.css">

    @include('partials/Poll Form.pollFormHead')
    <hr>

{{-- Polling item --}}
<div class="card border-light rounded-3 shadow-sm">
    <div class="card-body">

        @include('partials/Poll Form.pollFormCardHead')
        <hr>
    
        @include('partials/Poll Form.pollFormAddItem')

        @include('partials/Poll Form.pollFormItem')
        <hr>

        @include('partials/Poll Form.pollFormCardFoot')

    </div>
</div>  

