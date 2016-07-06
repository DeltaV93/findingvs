<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(valerie\User::class, 50)->creat()each(function ($u) {
	$u->posts()->save(factory(valeire\User::class)->make());
});
