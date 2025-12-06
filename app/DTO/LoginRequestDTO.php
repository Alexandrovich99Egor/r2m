<?php

namespace App\DTO;

class LoginRequestDTO
{


    public function __construct(public string $email, public string $password)
    {

        $this->email = $email;
        $this->password = $password;
    }


    public static function fromRequest(object $request): self
    {
        return new self($request->email, $request->password);
    }

    public function toArray(): array
    {
        return [
            'email' => $this->email,
            'password' => $this->password,
        ];
    }
}
