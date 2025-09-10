<?php

use App\Http\Controllers\citoyenController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\generalController;
use Illuminate\Support\Facades\Route;


Route::get('/',[generalController::class,'homePage'])
                                   ->name('homePage');
Route::get('/services',[generalController::class,'services'])
                                    ->name('services');
Route::get('/informations',[generalController::class,'informations'])
                                    ->name('informations');
Route::get('/problems',[generalController::class,'problems'])
                                    ->name('problems');
Route::get('/contact',[generalController::class,'contact'])
                                    ->name('contact');

                                    


Route::prefix('citoyen')->group(function(){
    Route::get('Login',[citoyenController::class,'Login'])
                                        ->name('citoyen.Login');
    Route::post('Login',[citoyenController::class,'LoginHandle'])
                                        ->name('citoyen.LoginHandle');   
    Route::get('register',[citoyenController::class,'Regester'])
                                        ->name('citoyen.Regester');                                
     Route::post('register',[citoyenController::class,'RegesterHandle'])
                                        ->name('ciotyen.RegesterHandle');
    Route::get('dashboard',[citoyenController::class,'Dashboard'])
                                        ->name('citoyen.Dashboard');
    Route::get('palques',[citoyenController::class,'palques'])
                                        ->name('citoyen.Palques');
   Route::get('store',[citoyenController::class,'Store'])
                                        ->name('citoyen.Store');
    Route::post('store',[citoyenController::class,'StoreHandle'])
                                        ->name('citoyen.StoreHandle');
    Route::delete('Delete/{plainte}',[citoyenController::class,'plainteDelete'])
                                         ->name('plainteDelete');
});                               
Route::prefix('admin')->group(function(){
    Route::get('Login',[adminController::class,'Login'])
                                          ->name('admin.Login');
    Route::post('Login',[adminController::class,'LoginHandle'])
                                           ->name('admin.LoginHandle');
    Route::get('Update',[adminController::class,'Update'])
                                          ->name('admin.Update');
    Route::post('Update',[adminController::class,'UpdateHandle'])
                                           ->name('admin.UpdateHandle');
    Route::get('dashboard',[adminController::class,'Dashboard'])
                                            ->name('admin.Dashboard');
    Route::get('plaques',[adminController::class,'Palques_All'])
                                            ->name('admin.Palques_All');
    Route::get('search',[adminController::class,'Palques_Search'])
                                            ->name('admin.Palques_Search');
    Route::post('search',[adminController::class,'Palques_Search_Handle'])
                                            ->name('admin.Palques_Search_Handle'); 
});
