@extends('admin.index')

@section('nested-content')

{{ dd($users) }}

<div class="row">
  <div class="col">
    <h5>Manage Fresh Start Settings</h5>
  </div>
</div>

@endsection
