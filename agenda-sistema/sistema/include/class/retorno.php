<?php 

	class Retorno{
		
		public function cadastro(){
			if(isset($_GET["cad"]) == "ok"){
				echo "<div class='alert alert-success alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>"."Cadastro realizado com sucesso!"."</div>";
			}elseif(isset($_GET["erro"]) == "cad"){
				echo "<div class='alert alert-danger alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>"."Erro ao tentar cadastrar!"."</div>";
			}else{}
		}
		
		public function edita(){
			if(isset($_GET["edit"]) == "ok"){
				echo "<div class='alert alert-success alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>"."Edição realizada com sucesso!"."</div>";
			}
		}
		public function editaerro(){
			if(isset($_GET["ops"]) == "r"){
				echo "<div class='alert alert-danger alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>"."Houve um erro ao tentar Edição!"."</div>";
			}
		}
		public function exclui(){
			if(isset($_GET["exclui"]) == "ok"){
				echo "<div class='alert alert-success alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>"."Exclusão realizada com sucesso!"."</div>";
			}
		}
		public function excluir(){
			if(isset($_GET["error"]) == "excluir"){
				echo "<div class='alert alert-danger alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>"."Erro ao tentar excluir</div>";
			}
		}
		public function recupera(){
			if(isset($_GET["rec"]) == "ok"){
				echo "<div class='alert alert-success alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>"."Sua senha foi editada com sucesso!"."</div>";
			}elseif(isset($_GET["recup"]) == "erro"){
				echo "<div class='alert alert-danger alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>"."Sua senha  não foi editada :( "."</div>";
			}
		}
		public function loga(){
			if(isset($_GET["login"]) == "erro"){
				echo "<div class='alert alert-danger alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>"."Acesso negado, digite um login e senha válidos!"."</div>";
			}
		}
		public function verifica(){
			if(isset($_GET["emailerro"]) == "erro"){
				echo "<div class='alert alert-danger alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>"."Email informado não consta na base de dados!"."</div>";
			}
			if(isset($_GET["email"]) == "ok"){
				echo "<div class='alert alert-success alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>"."Um Email foi enviado para você editar sua senha!"."</div>";
				
			}
		}
		public function esc(){
			echo "<div class='alert alert-danger alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>"."Desculpe nome não cadastrado!"."</div>";
		}
		public function status(){
			if(isset($_GET["st"]) == "dif"){
			echo "<div class='alert alert-danger alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>"."Desculpe mas precisa <strong>mudar o status</strong> do serviços <strong>para Cancelado</strong>!"."</div>";
			}
		}
		public function upload(){
			if(isset($_GET["img"]) == "cad"){
			echo "<div class='alert alert-success alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>"."Dados Cadastrados com  <strong>Sucesso</strong>. <strong>A foto foi adicionada na pasta</strong>!"."</div>";
			}elseif(isset($_GET["img"])== "erro"){
			echo "<div class='alert alert-danger alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>"."Dados Cadastrados com  <strong>Sucesso</strong>. <strong>Mas houve um erro ao tentar adicionada a foto na pasta</strong>!"."</div>";
			}
		}
		
	}

?>