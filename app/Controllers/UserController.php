<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\KelasModel;

class UserController extends BaseController
{
    protected $helpers = ['Form'];
    protected $allowedFields =['nama', 'id_kelas', 'npm', 'foto'];

    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new KelasModel();
    }

    public function index()
    {
        // $users = UserModel->getUser();
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];
        return view('list_user', $data);
    }
    public function profile($nama = "", $kelas = "", $npm = ""){
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
        ];
        return view('profile', $data);
}
    public function create(){
        session();

        $kelas = $this->kelasModel->getKelas();
        $data=[
            'title' => 'Create User',
            'kelas' => $kelas,
        ];
        return view('create_user',$data);
    }

    public function store(){
        $path = 'assets/uploads/img/';

        $foto = $this->request->getFile('foto');
    
        $name = $foto->getRandomName();
    
        if ($foto->move($path, $name)){
            $foto = base_url($path . $name);
        }
        //validasi input
        if(!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tidak Boleh Kosong'
                ]
                ],
            'npm' => [
                'rules' => 'required|is_unique[user.npm]',
                'errors' => [
                    'required' => 'Tidak Boleh Kosong',
                    'is_unique' => 'NPM Sudah Terpakai'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

       $userModel = new UserModel();

       $userModel->saveUser([
        'nama' => $this->request->getVar('nama'),
        'id_kelas' => $this->request->getVar('kelas'),
        'npm' => $this->request->getVar('npm'),
        'foto'     => $foto
       ]);
       return redirect()->to('/user/index');

        $data = [
            'nama' => $this->request->getVar('nama'),
            'kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
        ];
        return view('profile', $data);
    }

	/**
	 * @return mixed
	 */
	public function getHelpers() {
		return $this->helpers;
	}
	
	/**
	 * @param mixed $helpers 
	 * @return self
	 */
	public function setHelpers($helpers): self {
		$this->helpers = $helpers;
		return $this;


    $this->userModel->saveUser([
        'nama' => $this->request->getVar('nama'),
        'id_kelas' => $this->request->getVar('kelas'),
        'npm' => $this->request->getVar('npm'),
        'foto' => $foto
    ]);
    }
    public function show($id){
        $user  = $this->userModel->getUser($id);

        $data = [
            'title' => 'Profile',
            'user' => $user,
        ];
        return view('profile', $data);
    }
}