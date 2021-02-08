<?php

use Illuminate\Support\Facades\Route;
use Psr\Http\Message\ServerRequestInterface;

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
    return view('welcome');
});
Route::get('/main', function () {
    return view('main');
});;
Route::get('/area', function () {
    return view('area-form');
})->name('/area-form');

Route::post('/area', function (ServerRequestInterface $request) {
    $data = $request->getParsedBody(); 
    $type = (double)$data['type'];
    $width = (double)$data['width'];
    $height = (double)$data['height'];
    $area = $type * $width * $height;
    if ($type == 1 ){
        $name = "Rectangle";
    } 
        else {
            $name = "Triangle" ;
        }
    return view('area-result', [ 'type' => $name, 'width'=> $width, 'height' => $height,
                'area' => $area]);
    })->name('area-result');

    Route::get('/mul', function () {
        return view('mul-form');
    })->name('/mul-form');

    Route::post('/mul', function (ServerRequestInterface $request) {
        $data = $request->getParsedBody(); 
        $value = (int)$data['value'];
        return view('mul-result', [ 'value' => $value]);
        })->name('mul-result');


