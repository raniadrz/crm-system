@extends('layouts.show')

@section('heading')
<h2>Role Details</h2>

  @include('control-panel.roles.show.partials.info', [
      'role' => $role,
  ])
@endsection

@section('subnav')
  @include('control-panel.roles.show.partials.sidenav', [
      'activeRoleNav' => $activeRoleNav,
  ])
@endsection

@section('subcontent')
  @yield('button')

  <div class="card">
    <div class="card-body py-3">
      @yield('table')
    </div>
  </div>
@endsection
