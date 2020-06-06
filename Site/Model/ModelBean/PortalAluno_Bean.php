<?php

namespace Site\Model\ModelBean;


class PortalAluno_Bean
{
    private $con;
    private $senha;
    private $cpf;
    private $id;

    function getid()
    {
        return $this->id;
    }
    function getCon()
    {
        return $this->con;
    }

    function getSenha()
    {
        return $this->senha;
    }

    function getCpf()
    {
        return $this->cpf;
    }

    function setCon($con)
    {
        $this->con = $con;
    }

    function setSenha($senha)
    {
        $this->senha = $senha;
    }

    function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }
    function setid($id)
    {
        $this->id = $id;
    }
}
