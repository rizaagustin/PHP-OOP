<?php

class SocialMedia
{
    public string $name;
}

final class Facebook extends SocialMedia
{

}

// error karena class facebook final
class FakeFacebook extends SocialMedia
{

}