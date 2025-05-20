<?php

namespace App\Controllers;

use App\Models\BukuModel;

class Buku extends BaseController
{
    public function index()
    {
        $model = new BukuModel();
        $data['buku'] = $model->findAll();
        return view('buku/index', $data);
    }

    public function create()
    {
        return view('buku/create');
    }

    public function store()
    {
        $validation = \Config\Services::validation();
        $rules = [
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|numeric|greater_than[1901]|less_than[2024]'
        ];

        $messages = [
            'judul' => [
                'required' => 'Judul harus diisi.'
            ],
            'penulis' => [
                'required' => 'Penulis harus diisi.'
            ],
            'penerbit' => [
                'required' => 'Penerbit harus diisi.'
            ],
            'tahun_terbit' => [
                'required' => 'Tahun terbit harus diisi.',
                'numeric' => 'Tahun terbit harus berupa angka.',
                'greater_than' => 'Tahun harus lebih besar dari 1900.',
                'less_than' => 'Tahun harus kurang dari 2024.'
            ]
        ];

        if (!$this->validate($rules, $messages)) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $model = new BukuModel();
        $model->save([
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit')
        ]);

        return redirect()->to('/buku')->with('success', 'Data buku berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $model = new BukuModel();
        $data['buku'] = $model->find($id);
        return view('buku/edit', $data);
    }

    public function update($id)
    {
        $validation = \Config\Services::validation();
        $rules = [
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|numeric|greater_than[1800]|less_than[2024]'
        ];

        $messages = [
            'judul' => [
                'required' => 'Judul harus diisi.'
            ],
            'penulis' => [
                'required' => 'Penulis harus diisi.'
            ],
            'penerbit' => [
                'required' => 'Penerbit harus diisi.'
            ],
            'tahun_terbit' => [
                'required' => 'Tahun terbit harus diisi.',
                'numeric' => 'Tahun terbit harus berupa angka.',
                'greater_than' => 'Tahun harus lebih besar dari 1800.',
                'less_than' => 'Tahun harus kurang dari 2024.'
            ]
        ];

        if (!$this->validate($rules, $messages)) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $model = new BukuModel();
        $model->update($id, [
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit')
        ]);

        return redirect()->to('/buku')->with('success', 'Data buku berhasil diperbarui!');
    }

    public function delete($id)
    {
        $model = new BukuModel();
        $model->delete($id);
        return redirect()->to('/buku')->with('success', 'Data buku berhasil dihapus!');
    }
}
