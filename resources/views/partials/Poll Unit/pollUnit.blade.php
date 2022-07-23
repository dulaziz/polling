@include('partials/Poll Unit.pollUnitHeader')

{{-- Card Poll --}}
<div class="card border-light rounded-3 shadow-sm mb-3" data-aos="zoom-in">
  <div class="card-body">
    @include('partials/Poll Unit.pollUnitHeaderCard')
    <hr>
    @include('partials/Poll Unit.pollUnitItem')
    <hr class="d-none d-md-block">
    {{-- @include('partials/Poll Unit.pollUnitFooterCard') --}}
  </div>
</div>

