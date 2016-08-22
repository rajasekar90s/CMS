<?php
use App\User;
use Illuminate\Database\Seeder;

class userseeder extends Seeder
{
    /**
     * run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	
        	'email'    => 'me@sarav.co',
        	'password' => bcrypt('admin123')
        ]);
    }
}
