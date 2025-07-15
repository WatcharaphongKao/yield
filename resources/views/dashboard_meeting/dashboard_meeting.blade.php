@section('title', 'HVF | DashBoard')
@extends('layouts.master')

@section('content')
    {{-- @include('layouts.header') --}}
    <style>
        #main {
            margin-top: 0px !important;
        }

        .float-end {
            float: right;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('body').toggleClass('toggle-sidebar');
        })
    </script>
    @include('dashboard_main.dashboard_main')



@endsection
