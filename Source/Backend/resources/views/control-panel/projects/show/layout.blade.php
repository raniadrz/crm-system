@extends('layouts.show')

@section('heading')
<H2>Project Details</H2>
  @include('control-panel.projects.show.partials.info', [
      'project' => $project,
  ])
@endsection

@section('subnav')
  @include('control-panel.projects.show.partials.sidenav', [
      'activeProjectNav' => $activeProjectNav,
  ])
@endsection

@section('subcontent')
  @yield('button')
  <div class="card">
    <div class="card-body py-1">
      @yield('table')
    </div>
  </div>
@endsection
