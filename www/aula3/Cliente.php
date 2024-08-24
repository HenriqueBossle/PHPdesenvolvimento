<?php

class Cliente{
    private string $nome;

    private string $email;

    public function __construct(string $nome, string $email){
        $this->nome = $nome;
        $this->email = $email;

    }
    public function setNome(string $nome): self
    {
        $this->nome = $nome;
        return $this;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setEmail(string $email): self{
        $this->email = $email;
        return $this;
    }

    public function getEmail(){
        return $this->email;
    }
}