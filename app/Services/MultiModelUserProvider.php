<?php

namespace App\Services;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Support\Str;

class MultiModelUserProvider implements UserProvider
{
    protected $providers;

    public function __construct(array $providers)
    {
        $this->providers = $providers;
    }

    public function retrieveById($identifier)
    {
        foreach ($this->providers as $provider) {
            if ($user = $provider->retrieveById($identifier)) {
                return $user;
            }
        }

        return null;
    }

    public function retrieveByToken($identifier, $token)
    {
        foreach ($this->providers as $provider) {
            if ($user = $provider->retrieveByToken($identifier, $token)) {
                return $user;
            }
        }

        return null;
    }

    public function updateRememberToken(Authenticatable $user, $token)
    {
        $provider = $this->getProviderForUser($user);
        
        if ($provider) {
            $provider->updateRememberToken($user, $token);
        }
    }

    public function retrieveByCredentials(array $credentials)
    {
        foreach ($this->providers as $provider) {
            if ($user = $provider->retrieveByCredentials($credentials)) {
                return $user;
            }
        }

        return null;
    }

    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        $provider = $this->getProviderForUser($user);
        
        if ($provider) {
            return $provider->validateCredentials($user, $credentials);
        }

        return false;
    }

    public function rehashPasswordIfRequired(Authenticatable $user, array $credentials, bool $confirmed = true): ?Authenticatable
    {
        $provider = $this->getProviderForUser($user);
        
        if ($provider && method_exists($provider, 'rehashPasswordIfRequired')) {
            return $provider->rehashPasswordIfRequired($user, $credentials, $confirmed);
        }

        return $user;
    }

    protected function getProviderForUser(Authenticatable $user)
    {
        foreach ($this->providers as $provider) {
            $model = $provider->getModel();
            
            if (Str::startsWith(get_class($user), Str::beforeLast($model, '\\'))) {
                return $provider;
            }
        }

        return null;
    }
}