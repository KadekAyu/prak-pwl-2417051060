@extends('layouts.template')

@section('content')

<div class="container">

    <div class="page-title">
        <h2>Daftar User</h2>
    </div>

    <x-user-table :user="$user" />

</div>

@endsection