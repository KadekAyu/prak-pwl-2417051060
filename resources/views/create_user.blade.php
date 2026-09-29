@extends('layouts.template')

@section('content')

<div class="container">

    <div class="form-container">

        <h2>Tambah User</h2>

        <form action="{{ route('user.store') }}" method="POST">

            @csrf

            <div class="form-group">
                <label for="nama">Nama</label>

                <input
                    type="text"
                    id="nama"
                    name="nama"
                    placeholder="Masukkan nama"
                    required>
            </div>

            <div class="form-group">
                <label for="nim">NPM</label>

                <input
                    type="text"
                    id="nim"
                    name="nim"
                    placeholder="Masukkan NPM"
                    required>
            </div>

            <div class="form-group">
                <label for="kelas_id">Kelas</label>

                <select id="kelas_id" name="kelas_id" required>

                    <option value="">Pilih Kelas</option>

                    @foreach ($kelas as $k)

                    <option value="{{ $k->id }}">
                        {{ $k->nama_kelas }}
                    </option>

                    @endforeach

                </select>
            </div>

            <button type="submit" class="btn">
                Simpan User
            </button>

            <a href="/user" class="btn">
                Kembali
            </a>

        </form>

    </div>

</div>

@endsection