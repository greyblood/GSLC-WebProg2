<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
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
});
