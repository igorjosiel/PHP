<?php

	//modelo
	class Funcionario
	{
		//atributos
		public $nome = null;
		public $telefone = null;
		public $numFilhos = null;
		public $cargo = null;
		public $salario = null;

		//getters setters (overloading / sobrecarga)
		function __set($atributo, $valor)
		{
			$this->$atributo = $valor;
		}

		function __get($atributo)
		{
			return $this->$atributo;
		}

		/*
		function setNome($nome)
		{
			$this->nome = $nome;
		}

		function setTelefone($telefone)
		{
			$this->telefone = $telefone;
		}

		function setNumFilhos($numFilhos)
		{
			$this->numFilhos = $numFilhos;
		}

		function getNome()
		{
			return $this->nome;
		}

		function getTelefone()
		{
			return $this->telefone;
		}

		function getNumFilhos()
		{
			return $this->numFilhos;
		}
		*/

		//métodos
		function resumirCadFunc()
		{
			return $this->__get('nome') . ' possui ' . $this->__get('numFilhos') . ' filho(s). Se número de telefone é ' . $this->__get('telefone') . '. Seu cargo é ' . $this->__get('cargo') . ' com um salário de ' . $this->__get('salario');
		}

		function modificarNumFilhos($numFilhos)
		{
			//afetar um atributo do objeto
			$this->numFilhos = $numFilhos;
		}
	}

	$y = new Funcionario();

	$y->__set('nome', 'José');
	$y->__set('numFilhos', 2);
	$y->__set('telefone', '32 98465-9869');
	$y->__set('cargo', 'secretário');
	$y->__set('salario', 1500);

	echo $y->resumirCadFunc();

	echo '<br>';

	$x = new Funcionario();

	$x->__set('nome', 'Maria');
	$x->__set('numFilhos', 0);
	$x->__set('telefone', '32 98867-2311');
	$x->__set('cargo', 'faxineira');
	$x->__set('salario', 1200);

	echo $x->resumirCadFunc();

?>