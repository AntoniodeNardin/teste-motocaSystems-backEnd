<?php
public function map()
{
    $this->mapApiRoutes();

    // Outras configurações de roteamento...

    $this->mapWebRoutes();
}

protected function mapApiRoutes()
{
    Route::prefix('api')
         ->middleware('api')
         ->namespace($this->namespace)
         ->group(base_path('routes/api.php'));
}
