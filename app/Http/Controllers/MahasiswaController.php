<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            [
                'nama' => 'Fransiscus Chandra',
                'nim' => '2440017605',
                'major' => 'Computer Science',
                'gender' => 'Male',
                'portofolio' => 'https://github.com/greyblood/GSLC-WebProg2.git'
            ],
            [
                'nama' => 'Ashley',
                'nim' => '2440016482',
                'major' => 'Computer Science',
                'gender' => 'Female',
                'portofolio' => 'https://github.com/'
            ],
            [
                'nama' => 'Will',
                'nim' => '2401200202',
                'major' => 'Computer Science',
                'gender' => 'Male',
                'portofolio' => ''
            ],
            [
                'nama' => 'Anne',
                'nim' => '2423012020',
                'major' => 'Computer Science',
                'gender' => 'Female',
                'portofolio' => 'https://github.com/'
            ],
            [
                'nama' => 'John',
                'nim' => '2401200204',
                'major' => 'Computer Science',
                'gender' => 'Male',
                'portofolio' => ''
            ]
            
        ];
        return view('home', compact('mahasiswa'));
    }
    
}
