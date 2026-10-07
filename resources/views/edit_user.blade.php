@extends('layouts.template')

@section('content')

<div class="container">

    <div class="page-title">
        <h2>Edit User</h2>
    </div>

    @if (session('error'))
        <div class="alert-error">
            {{ session('error') }}
        </div>
    @endif

    <div class="form-container">

        <form action="{{ route('user.update', $user->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" value="{{ old('nama', $user->nama) }}">
            </div>

            <div class="form-group">
                <label>NPM</label>
                <input type="text" name="nim" value="{{ old('nim', $user->nim) }}">
            </div>

            <div class="form-group">
                <label>Kelas</label>
                <select name="kelas_id">

                    @foreach ($kelas as $k)
                        <option value="{{ $k->id }}"
                            {{ $user->kelas_id == $k->id ? 'selected' : '' }}>
                            {{ $k->nama_kelas }}
                        </option>
                    @endforeach

                </select>
            </div>

            <div class="form-actions">

                <button type="submit" class="btn-save">
                    Simpan Perubahan
                </button>

                <a href="{{ route('user.index') }}" class="btn-cancel">
                    Batal
                </a>

            </div>

        </form>

    </div>

</div>

@endsection