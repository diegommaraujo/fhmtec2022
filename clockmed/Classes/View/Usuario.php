﻿<?php require_once("DALUsuario.php"); ?>
<?php require_once("Usuario.php"); ?>
<?php

	class Usuario
	{
		//INICIALIZA O CONSTRUTOR DO DAO COM A NOVA CONEXAO
		$daoUsuario = $c;
		
		//O OBJETO QUE OS METODOS VAO USAR PARA FAZER AS OPEAÇÕES NO BANCO DE DADOS
		// $usuario = new Usuario();
		$m->setNome('Diego');
		$m->setEmail('diego.medeiros@aluno.ifsp.edu.br');
		$m->setSenha('123456');
		
		INSERIR O USUARIO
		$daoUsuario->inserirUsuario($m);
		$usuario = localizarUsuario(1);
		/*
		//INICIALIZA A CONEXAO NOVAMENTE POES CADA METODO TEM NO FINAL UMA LINHA PRA FECHAR A CONEXAO
		$conexao = new Conexao();
		
		//INICIALIZA O CONSTRUTOR DO DAO COM A NOVA CONEXAO
		$daoUsuario = new DAOUsuario($conexao);
		
		//LOCALIZA O USUARIO UM NO BANCO DE DADOS
		
		//INICIALIZA A CONEXAO NOVAMENTE POES CADA METODO TEM NO FINAL UMA LINHA PRA FECHAR A CONEXAO
		$conexao = new Conexao();
		
		//INICIALIZA O CONSTRUTOR DO DAO COM A NOVA CONEXAO
		$daoUsuario = new DAOUsuario($conexao);
		
		//altera o usuario
		$daoUsuario->alterarUsuario($usuario);
		
		//INICIALIZA A CONEXAO NOVAMENTE POES CADA METODO TEM NO FINAL UMA LINHA PRA FECHAR A CONEXAO
		$conexao = new Conexao();
		
		//INICIALIZA O CONSTRUTOR DO DAO COM A NOVA CONEXAO
		$daoUsuario = new DAOUsuario($conexao);
		
		//EXCLUI O USUARIO 1
		$daoUsuario->excluirUsuario(1);
		*/
		
	}//CLASS

	$v = new Usuario();

?>