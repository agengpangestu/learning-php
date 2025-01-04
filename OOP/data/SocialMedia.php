<?php

class SocialMedia {
    public string $name;
}

class Facebook extends SocialMedia { // final class, tidak bisa diturunkan jika sudah memakai 'final'

    // final function
    // tidak dapat di override
    final public function login(string $username, string $password): bool {
        return true;
    }
}

class FakeFacebook extends Facebook {

    public function login(string $username, string $password): bool { // error
        return false;
    }
}