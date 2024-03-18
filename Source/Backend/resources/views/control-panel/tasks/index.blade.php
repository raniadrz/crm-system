@extends('layouts.index')

@section('heading')
    <h2>Tasks</h2>
    <x-tasks.table-actions />
@endsection

@section('table')
    <x-tasks.table :tasks="$tasks" />
@endsection
