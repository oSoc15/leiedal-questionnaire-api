<?php

Route::resource('api/questions', 'QuestionController', ['only' => ['index', 'show']]);
Route::resource('api/sections', 'SectionController', ['only' => ['index', 'show']]);
Route::resource('api/residences', 'ResidenceController');