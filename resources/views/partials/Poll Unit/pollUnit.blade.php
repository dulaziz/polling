@include('partials/Poll Unit.pollUnitHeader')

{{-- Card Poll --}}
<div class="card border-light rounded-3 shadow-sm mb-3">
  <div class="card-body">
    @include('partials/Poll Unit.pollUnitHeaderCard')
    <hr>
    @include('partials/Poll Unit.pollUnitItem')
    <hr>
  </div>
</div>