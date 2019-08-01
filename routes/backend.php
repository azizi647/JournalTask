<?php
/**
 * Created by PhpStorm.
 * User: Aziz
 * Date: 11.07.2019
 * Time: 15:37
 */

Route::middleware(['auth'])->group(function() {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('journals', 'JournalController');
    Route::get('grades/list', 'GradeController@listGrades');
    Route::get('grades/select', 'GradeController@select');
    Route::resource('grades', 'GradeController');
});
