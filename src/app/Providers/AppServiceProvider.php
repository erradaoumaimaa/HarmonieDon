<?php

namespace App\Providers;

use App\Models\User;
use App\Repositories\Implementations\CommentRepository;
use App\Repositories\Interfaces\CommentRepositoryInterface;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CommentRepositoryInterface::class, CommentRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {

        Gate::define('admin', fn(User $user) => $user->role == 'admin');
        Gate::define('donor', fn(User $user) => $user->role == 'donor');
        Gate::define('user', fn(User $user) => $user->role == 'user');
        Gate::define('association', fn(User $user) => $user->role == 'association');


    }
}
