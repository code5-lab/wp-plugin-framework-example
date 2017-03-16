<?php
use Com\CodeFive\Example\Models\Table;
use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->dropIfExists('tables');

Capsule::schema()->create('tables', function ($table) {
    $table->increments('id');
    $table->string('text');
});


for ($i = 0; $i <= 20; $i++) {
    Table::create([
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium doloribus excepturi iste labore necessitatibus nostrum obcaecati porro quaerat reiciendis similique. Consequuntur, id nisi! Corporis, exercitationem maxime neque nobis sapiente vero.'
    ]);
}