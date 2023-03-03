<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Jurusan;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Collection;

final class FormController extends Controller {
    private function getlevelUser() :Collection{
        return collect(DB::table('level_user')->get());
    }

    public function index(): View {
        $levelUser = $this->getlevelUser();
        return view(('dashboard.form_akun.form'), compact('levelUser'));
    }

    public function store(Request $request) {
        $levelUser = DB::table('akun')->insert([
            'username' =>$request->input('username'),
            'kode_level' =>$request->input('level_user'),
            'email' =>$request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);
        return to_route('jurusan.kelas.index')
        ->with('sukses', 'Akun berhasil dibuat');
    }

    public function show($id): JsonResponse {
        $data = collect(DB::select('SELECT * FROM level_user WHERE kode_level = :kode_level', [
            'kode_level' => $id
        ]))->first();

        return response()->json($data);
    }

    public function update(Request $request, $id): RedirectResponse {
        $request->validate([
            'kode_level' => ['required'],
            'nama_level' => ['required'],
            'keterangan' => ['required'],
        ]);

        $validatedData = $request->only(['kode_level', 'nama_level', 'keterangan']);
        $validatedData['kode_level'] = $validatedData['kode_level'];
        $validatedData['keterangan'] = $validatedData['keterangan'];
        Form::firstWhere('kode_level', $validatedData['ikode_level'])
            ->update($validatedData);

        return $this->redirectToMainRoute()
            ->with('sukses', 'berhasil menambah akun');
    }
}