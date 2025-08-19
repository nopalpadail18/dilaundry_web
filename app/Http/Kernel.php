
protected $routeMiddleware = [
    // middleware bawaan Laravel...
    'auth.session' => \App\Http\Middleware\CheckLogin::class,
];