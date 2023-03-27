<?php 

namespace App\Providers;

use Dotenv\Dotenv;
use Dotenv\Exception\InvalidPathException;

class EnvironmentVariablesServiceProvider extends ServiceProvider{
	/**
	 * @return mixed
	 */
	public function register() {
        try{
            $env = Dotenv::createImmutable(base_path());

            $env->load();
        } catch (InvalidPathException $e){

        }
	}
	
	/**
	 * @return mixed
	 */
	public function boot() {

	}
}