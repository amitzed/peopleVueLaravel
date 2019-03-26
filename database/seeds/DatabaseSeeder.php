<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      \App\Post::updateOrCreate([
        'first_name' => 'cody',
        'last_name' => 'duder',
        'age' => 38,
        'email' => 'codyduder@causelabs.com',
        'secret' => 'VXNlIHRoaXMgc2VjcmV0IHBocmFzZSBzb21ld2hlcmUgaW4geW91ciBjb2RlJ3MgY29tbWVudHM='
      ]);

      \App\Post::updateOrCreate([
        'first_name' => 'ladee',
        'last_name' => 'linter',
        'age' => 99,
        'email' => 'lindaladee@causelabs.com',
        'secret' => 'cmVzb3VyY2UgdmlvbGF0aW9u'
      ]);
    }
}
