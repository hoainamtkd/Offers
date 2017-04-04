<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// $this->call('ProductTableSeeder');
    	// $this->call('CateNewsTableSeeder');
    	$this->call('MembersTableSeeder');
    	// $this->call(UsersTableSeeder::class);
    }
}
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    }
}

class CateNewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
    }
}

class NewsTableSeeder extends Seeder
{
	
	public function run()
	{
		
	}
}
class ImagesTableSeeder extends Seeder
{
    
    public function run()
    {

    }
}
class MembersTableSeeder extends Seeder
{
    
    public function run()
    {
        
    }
}