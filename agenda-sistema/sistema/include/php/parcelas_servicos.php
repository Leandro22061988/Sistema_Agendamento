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
	
	$meio = "Promissória";
	$soma_s = 0;	
	$sqll = "SELECT * FROM promissoria";
	$exel = $sql->query($sqll);
	while($exibir = mysqli_fetch_assoc($exel)){
		
			$dias = $exibir["parcela"];
			$dat = $exibir["pagamento"];
			$separa = explode("/", $dat) ;
			$d = $separa[0];
			$m = $separa[1];
			$a = $separa[2];
			
			$atual = strtotime(date('d-m-Y')); 
			//$atual = strtotime('6-5-2020');

			$ini_inicial = $d."-".$m."-".$a;
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
			
			if($data_ini == $data_at){
				$soma_s = $soma_s + $exibir["valor"];
			}elseif($data1_conv == $atual){
				$soma_s = $soma_s + $exibir["valor"];
			}elseif($data2_conv == $atual){
				$soma_s = $soma_s + $exibir["valor"];
			}elseif($data3_conv == $atual){
				$soma_s = $soma_s + $exibir["valor"];
			}elseif($data4_conv == $atual){
				$soma_s = $soma_s + $exibir["valor"];
			}elseif($data5_conv == $atual){
				$soma_s = $soma_s + $exibir["valor"];
			}elseif($data6_conv == $atual){
				$soma_s = $soma_s + $exibir["valor"];
			}elseif($data7_conv == $atual){
				$soma_s = $soma_s + $exibir["valor"];
			}elseif($data8_conv == $atual){
				$soma_s = $soma_s + $exibir["valor"];
			}elseif($data9_conv == $atual){
				$soma_s = $soma_s + $exibir["valor"];
			}elseif($data10_conv == $atual){
				$soma_s = $soma_s + $exibir["valor"];
			}elseif($data11_conv == $atual){
				$soma_s = $soma_s + $exibir["valor"];
			}elseif($data12_conv == $atual){
				$soma_s = $soma_s + $exibir["valor"];
			}elseif($data13_conv == $atual){
				$soma_s = $soma_s + $exibir["valor"];
			}else{
				$soma_s = $soma_s;
			}
			
	}
				/*echo "<pre>";
					echo $data_ini."<br/>";
					echo $data_at;
				echo "</pre>";*/
?>