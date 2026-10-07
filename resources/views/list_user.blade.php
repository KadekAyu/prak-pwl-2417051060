@extends('layouts.template')

@section('content')

<div class="container">

    <div class="page-title">
        <h2>Daftar User</h2>
    </div>

    @if (session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert-error">
            {{ session('error') }}
        </div>
    @endif

    <x-user-table :user="$user" />

</div>

@endsection