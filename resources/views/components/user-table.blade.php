<div class="table-container">

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($user as $u)

            <tr>
                <td>{{ $u->id }}</td>
                <td>{{ $u->nama }}</td>
                <td>{{ $u->nim }}</td>
                <td>{{ $u->nama_kelas }}</td>
            </tr>

            @endforeach

        </tbody>
    </table>

</div>