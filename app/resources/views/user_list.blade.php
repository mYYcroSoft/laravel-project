<x-app-layout>
<div class="row">
<div class="col-sm-6 mb-3 mb-sm-0">
@foreach ($users as $user)
<div class="card w-auto bg-white">
  <div class="card-bod  y">
    <h5 class="card-title">{{}}</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Button</a>
  </div>
</div>

    @endforeach
    </div>
</div>
</x-app-layout>
