<?php 
	define('HOSTNAME','localhost');
	define('USERNAME','root');
	define('PASSWORD', null);
	define('DATABASE', 'rodolace_salao');
	define('CHARSET','utf8');

		$sql = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE) or die(mysqli_error());
		mysqli_set_charset($sql, CHARSET) or die(mysqli_error($sql));
		
		$tab = "CREATE TABLE `agenda` (
				  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				  `nome` varchar(255) DEFAULT NULL,
				  `id_cliente` int(11) NOT NULL,
				  `telefone` varchar(255) DEFAULT NULL,
				  `celular` varchar(255) DEFAULT NULL,
				  `email` varchar(255) DEFAULT NULL,
				  `servico` varchar(255) DEFAULT NULL,
				  `valor` decimal(11,2) DEFAULT NULL,
				  `tempo` int(11) DEFAULT NULL,
				  `pontos` int(11) DEFAULT NULL,
				  `profissional` varchar(255) DEFAULT NULL,
				  `id_prof` int(11) DEFAULT NULL,
				  `horario` time DEFAULT NULL,
				  `dia` int(11) DEFAULT NULL,
				  `mes` int(11) DEFAULT NULL,
				  `ano` int(11) DEFAULT NULL,
				  `status` varchar(100) DEFAULT NULL,
				  `meio_pg` varchar(255) DEFAULT NULL
				)";
		$tab1 = "CREATE TABLE `almoco` (
				  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				  `nome` varchar(255) DEFAULT NULL,
				  `horario` time DEFAULT NULL,
				  `tempo` int(11) DEFAULT NULL,
				  `id_pro` int(11) DEFAULT NULL
				)";
		$tab2 = "CREATE TABLE `checkout` (
				  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				  `dia` int(11) NOT NULL,
				  `mes` int(11) NOT NULL,
				  `ano` int(11) NOT NULL,
				  `hora` varchar(30) NOT NULL,
				  `valor` decimal(11,2) NOT NULL,
				  `data` varchar(60) DEFAULT NULL,
				  `clientes` int(11) DEFAULT NULL,
				  `ganhos` decimal(11,2) DEFAULT NULL,
				  `gastos` decimal(11,2) DEFAULT NULL,
				  `compras` decimal(11,2) DEFAULT NULL,
				  `lucro` decimal(11,2) DEFAULT NULL,
				  `responsavel` varchar(100) NOT NULL,
				  `status` varchar(60) NOT NULL
				)";
		$tab3 = "CREATE TABLE `cliente` (
				  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				  `nome` varchar(255) DEFAULT NULL,
				  `email` varchar(255) DEFAULT NULL,
				  `telefone` varchar(255) DEFAULT NULL,
				  `celular` varchar(255) DEFAULT NULL,
				  `endereco` varchar(255) DEFAULT NULL,
				  `bairro` varchar(255) DEFAULT NULL,
				  `municipio` varchar(255) DEFAULT NULL,
				  `dia` int(11) DEFAULT NULL,
				  `mes` int(11) DEFAULT NULL,
				  `ano` int(11) DEFAULT NULL,
				  `senha` varchar(255) DEFAULT NULL
				)";
		$tab4 = "CREATE TABLE `empresa` (
				  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				  `nome` varchar(255) DEFAULT NULL,
				  `cpf_cnpj` varchar(255) DEFAULT NULL,
				  `endereco` varchar(255) DEFAULT NULL,
				  `bairro` varchar(255) DEFAULT NULL,
				  `municipio` varchar(255) DEFAULT NULL,
				  `estado` varchar(255) DEFAULT NULL,
				  `telefone` varchar(255) DEFAULT NULL
				)";
		$tab5 = "CREATE TABLE `estoque` (
				  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				  `produto` varchar(255) DEFAULT NULL,
				  `quantidade` int(11) DEFAULT NULL,
				  `valor_uni` decimal(11,2) DEFAULT NULL
				  `valor_compra` decimal(11,2) DEFAULT NULL,
				  `fornecedor` varchar(255) DEFAULT NULL,
				  `dia` int(11) DEFAULT NULL,
				  `mes` int(11) DEFAULT NULL,
				  `ano` int(11) DEFAULT NULL
				)";
		$tab6 = "CREATE TABLE `expira_pontos` (
				  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				  `id_cliente` int(11) NOT NULL,
				  `dia` int(11) NOT NULL,
				  `mes` int(11) NOT NULL,
				  `ano` int(11) NOT NULL,
				  `d` int(11) NOT NULL,
				  `m` int(11) NOT NULL,
				  `a` int(11) NOT NULL,
				  `pontos` int(11) NOT NULL,
				  `servico` varchar(255) NOT NULL
				)";
		$tab7 = "CREATE TABLE `fidelidade` (
				  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				  `servico` varchar(255) NOT NULL,
				  `pontos` int(11) NOT NULL
				)";
		$tab8 = "CREATE TABLE `fornecedor` (
				  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				  `nome` varchar(255) DEFAULT NULL,
				  `cpf_cnpj` varchar(255) DEFAULT NULL,
				  `telefone` varchar(255) DEFAULT NULL,
				  `celular` varchar(255) DEFAULT NULL,
				  `email` varchar(255) DEFAULT NULL,
				  `site` varchar(255) DEFAULT NULL,
				  `endereco` varchar(255) DEFAULT NULL,
				  `bairro` varchar(255) DEFAULT NULL,
				  `municipio` varchar(255) DEFAULT NULL,
				  `estado` varchar(255) DEFAULT NULL
				)";
		$tab9 = "CREATE TABLE `funcao` (
				  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				  `funcao` varchar(255) DEFAULT NULL,
				  `salario` decimal(11,2) DEFAULT NULL,
				  `porcentagem` int(11) DEFAULT NULL
				)";
		$tab10 = "CREATE TABLE `funcionario` (
				  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				  `nome` varchar(255) DEFAULT NULL,
				  `email` varchar(255) DEFAULT NULL,
				  `telefone` varchar(255) DEFAULT NULL,
				  `celular` varchar(255) DEFAULT NULL,
				  `endereco` varchar(255) DEFAULT NULL,
				  `bairro` varchar(255) DEFAULT NULL,
				  `municipio` varchar(255) DEFAULT NULL,
				  `dia` int(11) DEFAULT NULL,
				  `mes` int(11) DEFAULT NULL,
				  `ano` int(11) DEFAULT NULL,
				  `funcao` varchar(255) DEFAULT NULL,
				  `salario` decimal(11,2) DEFAULT NULL,
				  `porcentagem` int(11) DEFAULT NULL,
				  `login` varchar(255) DEFAULT NULL,
				  `senha` varchar(255) DEFAULT NULL
				)";
		$tab11 = "CREATE TABLE `gastos` (
				  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				  `descricao` varchar(255) DEFAULT NULL,
				  `valor` decimal(11,2) DEFAULT NULL,
				  `dia` int(11) DEFAULT NULL,
				  `mes` int(11) DEFAULT NULL,
				  `ano` int(11) DEFAULT NULL
				)";
		$tab12 = "CREATE TABLE `historico_expira_pontos` (
				  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				  `id_cliente` int(11) NOT NULL,
				  `pontos` int(11) NOT NULL,
				  `data` varchar(20) NOT NULL
				)";
		$tab13 = "CREATE TABLE `master` (
				  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				  `nome` varchar(255) DEFAULT NULL,
				  `email` varchar(255) DEFAULT NULL,
				  `telefone` varchar(255) DEFAULT NULL,
				  `celular` varchar(255) DEFAULT NULL,
				  `endereco` varchar(255) DEFAULT NULL,
				  `bairro` varchar(255) DEFAULT NULL,
				  `municipio` varchar(255) DEFAULT NULL,
				  `estado` varchar(255) DEFAULT NULL,
				  `login` varchar(255) DEFAULT NULL,
				  `senha` varchar(255) DEFAULT NULL,
				  `nivel` int(11) NOT NULL
				)";
		$tab14 = "CREATE TABLE `mercado_pago` (
				  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				  `cliente_id` varchar(255) NOT NULL,
				  `secreto` varchar(255) NOT NULL
				)";
		$tab15 = "CREATE TABLE `pagseguro` (
				  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				  `email` varchar(255) NOT NULL,
				  `token` varchar(255) NOT NULL,
				  `app_id` varchar(255) NOT NULL,
				  `app_key` varchar(255) NOT NULL
				)";
		$tab16 = "CREATE TABLE `prazo_pontos` (
				  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				  `prazo` int(11) NOT NULL
				)";
		$tab17 = "CREATE TABLE `premio` (
				  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				  `premio` varchar(255) NOT NULL,
				  `pontos` int(11) NOT NULL
				)";
		$tab18 = "CREATE TABLE `resgate` (
				  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				  `nome` varchar(255) NOT NULL,
				  `id_c` int(11) NOT NULL,
				  `dia` int(11) NOT NULL,
				  `mes` int(11) NOT NULL,
				  `ano` int(11) NOT NULL,
				  `premio` varchar(255) NOT NULL,
				  `pontos` int(11) NOT NULL
				)";
		$tab19 = "CREATE TABLE `servico` (
				  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				  `nome` varchar(255) DEFAULT NULL,
				  `valor` decimal(11,2) DEFAULT NULL,
				  `tempo` int(11) DEFAULT NULL,
				  `funcao` varchar(255) DEFAULT NULL,
				  `pontos` int(11) DEFAULT NULL
				)";
		$tab20 = "CREATE TABLE `sobra` (
				  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				  `nome` varchar(255) NOT NULL,
				  `id_cliente` int(11) NOT NULL,
				  `pontos` int(11) NOT NULL,
				  `dia` int(11) NOT NULL,
				  `mes` int(11) NOT NULL,
				  `ano` int(11) NOT NULL
				)";
		$tab21 = "INSERT INTO `master` (`id`, `nome`, `email`, `telefone`, `celular`, `endereco`, `bairro`, `municipio`, `estado`, `login`, `senha`, `nivel`) VALUES
				(1, 'Rodolfo Cassio', 'rodolforc26s@hotmail.com', '21 0000-1111', '21 9 6666-8888', 'Rua Ali a trás 152', 'Tijuca', 'Rio de janeiro', 'RJ', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1)";
		
	if($sql->query($tab)){
		
		if($sql->query($tab1)){
			if($sql->query($tab2)){
				if($sql->query($tab3)){
					if($sql->query($tab4)){
						if($sql->query($tab5)){	
							if($sql->query($tab6)){
								if($sql->query($tab7)){
									if($sql->query($tab8)){
										if($sql->query($tab9)){
											if($sql->query($tab10)){
												if($sql->query($tab11)){
													if($sql->query($tab12)){
														if($sql->query($tab13)){
															if($sql->query($tab14)){
																if($sql->query($tab15)){
																	if($sql->query($tab16)){
																		if($sql->query($tab17)){
																			if($sql->query($tab18)){
																				if($sql->query($tab19)){
																					if($sql->query($tab20)){
																						if($sql->query($tab21)){
																							header("location:index.php?install=ok");
		}			
		}			
		}			
		}			
		}			
		}			
		}			
		}			
		}			
		}			
		}			
		}			
		}			
		}			
		}			
		}			
		}			
		}
		}
		}
		}	
		
	}else{
		
		mysqli_error($sql);
	}


?>