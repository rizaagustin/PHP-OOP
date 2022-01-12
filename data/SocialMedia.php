<?php

class SocialMedia
{
    public string $name;
}

final class Facebook extends SocialMedia
{
    final public function login(string $username, string $password): bool
    {
        return true;
    }
}

// error karena class facebook final
class FakeFacebook extends SocialMedia
{
    // error tidak bisa di override kerena diatas sudah final
    public function login(string $username, string $password): bool
    {
        return false;
    }
}