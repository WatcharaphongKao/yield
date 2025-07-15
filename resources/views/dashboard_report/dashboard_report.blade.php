@section('title', 'HVF | DashBoard')
@extends('layouts.master')

@section('content')
    @include('layouts.header')
    @include('layouts.sidebar')
    @include('dashboard_main.dashboard_main')

@endsection
