<div class="table-container">

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($user as $u)

            <tr>
                <td>{{ $u->id }}</td>
                <td>{{ $u->nama }}</td>
                <td>{{ $u->nim }}</td>
                <td>{{ $u->nama_kelas }}</td>
                <td>
                    <div class="action-buttons">

                        <a href="{{ route('user.edit', $u->id) }}" class="btn-edit">
                            Edit
                        </a>

                        <form action="{{ route('user.destroy', $u->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                class="btn-delete"
                                onclick="return confirm('Yakin ingin menghapus data {{ $u->nama }}?')">
                                Hapus
                            </button>
                        </form>

                    </div>
                </td>
            </tr>

            @endforeach

        </tbody>
    </table>

</div>
