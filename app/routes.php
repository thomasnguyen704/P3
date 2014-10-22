<?php


# Homepage
Route::get("/", function() {
	return View::make("index");
});



# Lorem-Ipsum Generator - https://packagist.org/packages/badcow/lorem-ipsum
Route::get("/lorem", function() {
	return View::make("lorem");
});

Route::post("/lorem", function() {
	return View::make("loremlogic");
});



# Random User Generator - https://packagist.org/packages/fzaninotto/faker
Route::get("/users", function() {
	return View::make("users");
});

Route::post("/users", function() {
	return View::make("userslogic");
});