<?php

/*
 * This file is part of Laravel Ownership.
 *
 * (c) Anton Komarev <anton@komarev.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Cog\Tests\Laravel\Ownership\Stubs\Models\EntityWithOwner;
use Faker\Generator;

/* @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(EntityWithOwner::class, function (Generator $faker) {
    return [
        'name' => $faker->word,
        'owned_by_id' => null,
    ];
});
