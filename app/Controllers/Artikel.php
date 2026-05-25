<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class Artikel extends BaseController
{
    public function index()
    {
        $model = new ArtikelModel();

        $data = [
            'title'   => 'Daftar Artikel',
            'artikel' => $model->findAll()
        ];

        return view('artikel/index', $data);
    }

    public function view($slug)
    {
        $model = new ArtikelModel();

        $artikel = $model->where([
            'slug' => $slug
        ])->first();

        // Menampilkan error apabila data tidak ada
        if (!$artikel) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = [
            'title'   => $artikel['judul'],
            'artikel' => $artikel,
        ];

        return view('artikel/detail', $data);
    }

    public function admin_index()
    {
        $title = 'Daftar Artikel';

        $q = $this->request->getVar('q') ?? '';

        $model = new ArtikelModel();

        $data = [
            'title'   => $title,
            'q'       => $q,
            'artikel' => $model->like('judul', $q)->paginate(10),
            'pager'   => $model->pager,
        ];

        return view('artikel/admin_index', $data);
    }

    public function add()
    {
        $model = new ArtikelModel();

        if ($this->request->getMethod() == 'POST') {

            $data = [
                'judul' => $this->request->getPost('judul'),
                'isi'   => $this->request->getPost('isi'),
                'slug'  => url_title(
                    $this->request->getPost('judul'),
                    '-',
                    true
                ),
                'status'=> 1
            ];

            $model->insert($data);

            return redirect()->to('/admin/artikel');
        }

        return view('artikel/form_add');
    }

    public function edit($id)
    {
        $model = new ArtikelModel();

        if ($this->request->getMethod() == 'POST') {

            $data = [
                'judul' => $this->request->getPost('judul'),
                'isi'   => $this->request->getPost('isi'),
                'slug'  => url_title(
                    $this->request->getPost('judul'),
                    '-',
                    true
                ),
            ];

            $model->update($id, $data);

            return redirect()->to('/admin/artikel');
        }

        $data['artikel'] = $model->where('id', $id)->first();

        return view('artikel/form_edit', $data);
    }

    public function delete($id)
    {
        $model = new ArtikelModel();

        $model->delete($id);

        return redirect()->to('/admin/artikel');
    }
}