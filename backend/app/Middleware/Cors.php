// app/Http/Middleware/Cors.php

public function handle($request, Closure $next)
{
    return $next($request)
        ->header('Access-Control-Allow-Origin', 'http://localhost:3000') // Substitua pelo endereço do seu frontend em produção
        ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
}
