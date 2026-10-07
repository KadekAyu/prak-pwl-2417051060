<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index()
    {
        $user = $this->userModel->getUser();

        $data = [
            'title' => 'Daftar User',
            'user' => $user,
        ];

        return view('list_user', $data);
    }

    public function create()
    {
        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => 'Tambah User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'kelas_id' => 'required',
        ], [
            'nama.required' => 'Nama wajib diisi.',
            'nim.required' => 'NPM wajib diisi.',
            'kelas_id.required' => 'Kelas wajib dipilih.',
        ]);

        $this->userModel->create([
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect('/user')
            ->with('success', 'Data user berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $user = $this->userModel->findOrFail($id);
        $kelas = $this->kelasModel->getKelas();

        return view('edit_user', [
            'title' => 'Edit User',
            'user' => $user,
            'kelas' => $kelas,
        ]);
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'nama' => 'required',
                'nim' => 'required|unique:user,nim,' . $id . ',id',
                'kelas_id' => 'required',
            ]);

            $user = $this->userModel->findOrFail($id);

            $user->update([
                'nama' => $request->input('nama'),
                'nim' => $request->input('nim'),
                'kelas_id' => $request->input('kelas_id'),
            ]);

            return redirect('/user')
                ->with('success', 'Data user berhasil disimpan!');

        } catch (ValidationException $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Data gagal disimpan! NPM sudah digunakan.');
        }
    }

    public function destroy($id)
    {
        try {
            $user = $this->userModel->findOrFail($id);
            $user->delete();

            return redirect('/user')
                ->with('success', 'Data user berhasil dihapus!');

        } catch (\Exception $e) {
            return redirect('/user')
                ->with('error', 'Data user gagal dihapus!');
        }
    }
}