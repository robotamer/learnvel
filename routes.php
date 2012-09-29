<?php
// to catch controllers
Route::controller(Controller::detect('learnvel'));

Route::get('(:bundle)/hello', function() {
    return 'Hello World!';
});

Route::get('(:bundle)/models', function() {
    $foo = new Learnvel\Foo;
    return $foo->foobar;

    // Use Eloquent models (requires db connection and foos table)
    // return count(Learnvel\Foo::all());
});

Route::get('(:bundle)', function() {
    // ~/code/laravel/bundles/learnvel/views/lobby/index.blade.php
    return View::make('learnvel::lobby');
});
Route::get('(:bundle)/strings', function() {
    return View::make('learnvel::strings');
});
Route::get('(:bundle)/crypter', function() {
    return View::make('learnvel::crypter');
});

Route::get('(:bundle)/stringtolower', function() {
    return Str::lower('Str::lower  => I am a String to Lower.');
});
?>