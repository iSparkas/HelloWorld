<?php

namespace HelloWorld\Providers;

use Plenty\Plugin\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider {
    
    /**
     * Register new service provider.
    */
    
    public function register(){
     
     $this->getApllication()->register(HelloWorldRouteServiceProvider::class);
        
    }
    
}
