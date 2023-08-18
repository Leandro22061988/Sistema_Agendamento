<?php
	$pag = array(
		2 => 60,
		3 => 90,
		4 => 120,
		5 => 160,
		6 => 190,
		7 => 220,
		8 => 250,
		9 => 280,
		10 => 310,
		11 => 340,
		12 => 365
	);
	
	$soma_p = 0;	
	$sqll = "SELECT * FROM produto_venda WHERE parcelas >= 2";
	$exel = $sql->query($sqll);
	while($exibir = mysqli_fetch_assoc($exel)){
		
			$dias = $exibir["parcelas"];
			$ini_d = $exibir["dia"]."-".$exibir["mes"]."-".$exibir["ano"];		
			$data_f = date('d/m/Y', strtotime('+'.$pag[$dias].'days', strtotime($ini_d)));
			$conv = DateTime::createFromFormat('d/m/Y', $data_f);
			$dconv = $conv->format('d-m-Y');
			$fim_d = strtotime($dconv);
			$atual = strtotime(date('d-m-Y'));
			//$atual = strtotime('6-5-2020');

			$ini_inicial = $exibir["dia"]."-".$exibir["mes"]."-".$exibir["ano"];
			$data_atual = date('d-m-Y');
			
			$data1 = date('d-m-Y', strtotime('+1 month', strtotime($ini_inicial)));
			$data2 = date('d-m-Y', strtotime('+1 month', strtotime($data1)));
			$data3 = date('d-m-Y', strtotime('+1 month', strtotime($data2)));
			$data4 = date('d-m-Y', strtotime('+1 month', strtotime($data3)));
			$data5 = date('d-m-Y', strtotime('+1 month', strtotime($data4)));
			$data6 = date('d-m-Y', strtotime('+1 month', strtotime($data5)));
			$data7 = date('d-m-Y', strtotime('+1 month', strtotime($data6)));
			$data8 = date('d-m-Y', strtotime('+1 month', strtotime($data7)));
			$data9 = date('d-m-Y', strtotime('+1 month', strtotime($data8)));
			$data10 = date('d-m-Y', strtotime('+1 month', strtotime($data9)));
			$data11 = date('d-m-Y', strtotime('+1 month', strtotime($data10)));
			$data12 = date('d-m-Y', strtotime('+1 month', strtotime($data11)));
			$data13 = date('d-m-Y', strtotime('+1 month', strtotime($data12)));
		
			$data_ini = strtotime($ini_inicial);
			$data_at = strtotime($data_atual);
			$data1_conv = strtotime($data1);
			$data2_conv = strtotime($data2);
			$data3_conv = strtotime($data3);
			$data4_conv = strtotime($data4);
			$data5_conv = strtotime($data5);
			$data6_conv = strtotime($data6);
			$data7_conv = strtotime($data7);
			$data8_conv = strtotime($data8);
			$data9_conv = strtotime($data9);
			$data10_conv = strtotime($data10);
			$data11_conv = strtotime($data11);
			$data12_conv = strtotime($data12);
			$data13_conv = strtotime($data13);
			
			if($data_ini ==$data_at){
				$soma_p = $soma_p + $exibir["val_parcelas"];
			}elseif($data1_conv == $atual){
				$soma_p = $soma_p + $exibir["val_parcelas"];
			}elseif($data2_conv == $atual){
				$soma_p = $soma_p + $exibir["val_parcelas"];
			}elseif($data3_conv == $atual){
				$soma_p = $soma_p + $exibir["val_parcelas"];
			}elseif($data4_conv == $atual){
				$soma_p = $soma_p + $exibir["val_parcelas"];
			}elseif($data5_conv == $atual){
				$soma_p = $soma_p + $exibir["val_parcelas"];
			}elseif($data6_conv == $atual){
				$soma_p = $soma_p + $exibir["val_parcelas"];
			}elseif($data7_conv == $atual){
				$soma_p = $soma_p + $exibir["val_parcelas"];
			}elseif($data8_conv == $atual){
				$soma_p = $soma_p + $exibir["val_parcelas"];
			}elseif($data9_conv == $atual){
				$soma_p = $soma_p + $exibir["val_parcelas"];
			}elseif($data10_conv == $atual){
				$soma_p = $soma_p + $exibir["val_parcelas"];
			}elseif($data11_conv == $atual){
				$soma_p = $soma_p + $exibir["val_parcelas"];
			}elseif($data12_conv == $atual){
				$soma_p = $soma_p + $exibir["val_parcelas"];
			}elseif($data13_conv == $atual){
				$soma_p = $soma_p + $exibir["val_parcelas"];
			}else{
				$soma_p = $soma_p;
			}
			
	}
				/*echo "<pre>";
					echo $data_ini."<br/>";
					echo $data_at;
				echo "</pre>";*/
?>