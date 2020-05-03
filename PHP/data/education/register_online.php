<title>Register Form</title>
<?php
	function tgl_indo($tanggal)
		{
			$bulan = array (
				1 =>   'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			);
			$pecahkan = explode('-', $tanggal);
			return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
		}

    function cc($str)
	{
		$str = trim ($str);
        $str = htmlspecialchars($str);
		$str = stripslashes ($str);
		$str = html_entity_decode ($str);
		$str = strip_tags ($str);
		$str = str_replace (array('\n', '\t', '\r', '\s'), '', $str);
		$str = str_replace (array('<?php', '<?PHP', '<?', '?>', '<script>', '</script>', '<SCRIPT>', '</SCRIPT>'), array('&lt;?php', '&lt;?PHP', '&lt;?', '?&gt;', '', ''), $str);
		$str = addslashes ($str);
		$str = preg_replace("#<img\s+.?src\s=\s*[\"'](.+?)[\"'].*?\>#", "\\1", $str);
		$str = preg_replace("#<img\s+.?src\s=\s*(.+?).*?\>#", "\\1", $str);
		return $str;
    }

	$date1	= cc($_GET["date1"] != null ? $_GET["date1"] : '');
	$time1	= cc($_GET["time1"] != null ? $_GET["time1"] : '');
	$topic1	= cc($_GET["topic1"] != null ? $_GET["topic1"] : '');
	$venue1	= $_GET["venue1"] != null ? $_GET["venue1"] : '';
	$tema1	= cc["tema1"] != null ? $_GET["tema1"] : '';
	$pic1	= $_GET["pic1"] != null ? $_GET["pic1"] : '';
?>

<link href="<?=$website_url;?>/po-content/mnc/education/css/awesomplete.css" rel="stylesheet" type="text/css" />
<link href="<?=$website_url;?>/po-content/mnc/education/css/bootstrap.min-220.css" rel="stylesheet" type="text/css" />
<link href="<?=$website_url;?>/po-content/mnc/education/css/jquery-ui-2.css" rel="stylesheet" type="text/css" />
<link href="<?=$website_url;?>/po-content/mnc/education/css/datepicker.css" rel="stylesheet" type="text/css" />
<link href="<?=$website_url;?>/po-content/mnc/education/css/validationEngine.jquery.css?3" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/po-content/mnc/education/js/awesomplete.min.js"></script>
<script type="text/javascript" src="/po-content/mnc/education/js/jquery.form.js"></script>
<script type="text/javascript" src="/po-content/mnc/education/js/jquery-1.8.2.js"></script>
<script type="text/javascript" src="/po-content/mnc/education/js/jquery-ui-1.12.1.js"></script>
<script type="text/javascript" src="/po-content/mnc/education/js/jquery.validationEngine.js"></script>
<script type="text/javascript" src="/po-content/mnc/education/js/languages/jquery.validationEngine-en.js"></script>

<script type="text/javascript">
	function emailCheck(){
		var txtEmail = document.forms["myForm"]["txtEmail"].value;
		var txtEmail2 = document.forms["myForm"]["txtEmail2"].value;
		if(txtEmail != txtEmail2){
			document.getElementById("emailMismatch").style.display="inline";
			return false;
		}else{
			document.getElementById("emailMismatch").style.display="none";
		}
	}
</script>

<form id="myForm" method="post" action="register_sent_online" >
	<table width="490" height="500" border="1" cellspacing="0" cellpadding="0" bordercolorlight="#5a86b3" bordercolordark="#FFFFFF" align="center">
		<tbody>
			<tr>
				<td>
					<img src="/po-content/mnc/education/images/header_edukasi.png" width="100%" />
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tbody>
							<tr>
								<td height="30">&nbsp;</td>
								<td height="30">
									<h3>REGISTRATION FORM</h3>
								</td>
								<td height="30">&nbsp;</td>
							</tr>
						</tbody>
					</table>
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tbody>
							<tr>
								<td height="30">&nbsp;</td>
								<td height="30" width="20%" valign="top"><font face="Verdana" size="2">Course Name</font></td>
								<td height="30" valign="top">:&nbsp;</td>
								<td height="30" valign="top">
									<font face="Verdana" size="2" ><?php echo substr($topic1, 0, -1); ?></font>
									<input type="hidden" name="topic1" value='<?php echo $topic1; ?>' />
									<input type="hidden" name="tema1" value='<?php echo $tema1; ?>' />
									<input type="hidden" name="pic1" value='<?php echo $pic1; ?>' />
								</td>
								<td height="30">&nbsp;</td>
							</tr>
							<tr>
								<td height="30">&nbsp;</td>
								<td height="30" valign="top"><font face="Verdana" size="2">Date</font></td>
								<td height="30" valign="top">:</td>
								<td height="30" valign="top">
									<font face="Verdana" size="2"><?php echo tgl_indo($date1); ?></font>
									<input type="hidden" name="date1" value='<?php echo $date1; ?>' />
								</td>
								<td height="30">&nbsp;</td>
							</tr>
							<tr>
								<td height="30">&nbsp;</td>
								<td height="30" valign="top"><font face="Verdana" size="2">Venue</font></td>
								<td height="30" valign="top">:</td>
								<td height="30" valign="top">
									<font face="Verdana" size="2"><?php echo $venue1; ?><br></font><br>
									<input type="hidden" name="venue1" value='<?php echo $venue1; ?>' ;>
								</td>
								<td height="30">&nbsp;</td>
							</tr>
							<!--
							<tr>
								<td height="30">&nbsp;</td>
								<td height="30" valign="top"><font face="Verdana" size="2">Tema</font></td>
								<td height="30" valign="top">:</td>
								<td height="30" valign="top">
									<font face="Verdana" size="2"><?php echo $tema1; ?><br></font><br>
									<input type="hidden" name="tema1" value='<?php echo $tema1; ?>' ;>
								</td>
								<td height="30">&nbsp;</td>
							</tr>
							-->
							<tr>
								<td height="30">&nbsp;</td>
								<td height="30" valign="top"><font face="Verdana" size="2">Time</font></td>
								<td height="30" valign="top">:</td>
								<td height="30" valign="top">
									<font face="Verdana" size="2"><?php echo $_GET["time1"]; ?>
										<input type="hidden" name="time1" value='<?php echo $_GET["time1"]; ?>' >
									</font>
								</td>
								<td height="30">&nbsp;</td>
							</tr>
						</tbody>
					</table>
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tbody>
							<tr>
								<td height="30">&nbsp;</td>
								<td height="30"><font face="Verdana" size="2">Name<font color="#FF0000">*</font>:</font></td>
								<td height="30">&nbsp;</td>
							</tr>
						</tbody>
						<tbody>
							<tr>
								<td height="30">&nbsp;</td>
								<td height="30">
									<input name="txtName" id="txtName" type="text" style="width: 100%" maxlength="50" color="#FFFFFF" value="" onkeypress="unhideiv()" class="validate[required] form-control" autocomplete="off" required >
								</td>
								<td height="30">&nbsp;</td>
							</tr>
						</tbody>
						<tbody>
							<tr>
								<td height="30">&nbsp;</td>
								<td height="30">
									<font face="Verdana" size="2">Email Address<font color="#FF0000">*</font>:</font>
								</td>
								<td height="30">&nbsp;</td>
							</tr>
							<tr>
								<td height="30">&nbsp;</td>
								<td height="30">
									<input name="txtEmail" id="txtEmail" type="email" style="width: 100%" maxlength="50" value="" onkeypress="unhideiv()" class="validate[required, custom[email]] form-control" autocomplete="off" required >
								</td>
								<td height="30">&nbsp;</td>
							</tr>
							<tr>
								<td height="30">&nbsp;</td>
								<td height="30">
									<font face="Verdana" size="2">Confirm Email Address<font color="#FF0000">*</font>:</font>
								</td>
								<td height="30">&nbsp;</td>
							</tr>
							<tr>
								<td height="30">&nbsp;</td>
								<td height="30">
									<input name="txtEmail2" id="txtEmail2" type="email" style="width: 100%" maxlength="50" value="" onblur="emailCheck();" onkeypress="unhideiv()" class="validate[required, custom[email]] form-control" autocomplete="off" required ><span id="emailMismatch" style="display:none;color:#f00;font-weight:bold;">The email addresses provided do not match!</span>
								</td>
								<td height="30">&nbsp;</td>
							</tr>
							<tr>
								<td height="30">&nbsp;</td>
								<td height="30">
									<font face="Verdana" size="2">Contact Number<font color="#FF0000">*</font>:</font>
								</td>
								<td height="30">&nbsp;</td>
							</tr>
							<tr>
								<td height="30">&nbsp;</td>
								<td height="30">
									<input name="txtTel" id="txtTel" type="text" maxlength="15" style="width: 100%" maxlength="50" value="" onkeypress="return Angkasaja(event)" class="validate[required, custom[phone]] form-control"  autocomplete="off" >
								</td>
								<td height="30">&nbsp;</td>
							</tr>
							<tr>
								<td height="30">&nbsp;</td>
								<td height="30">&nbsp;</td>
								<td height="30">&nbsp;</td>
							</tr>
						</tbody>
					</table>
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tbody>
							<tr>
								<td height="30">&nbsp;</td>
								<td height="30" valign="top">
									<div class="wrap-cap">
										<label for="captcha">Input Captcha Ini <span>*</span><a id="captcharefresh" href="#"><img src="/education/images/refresh.png" width="24" height="24"/></a><br>
											<img id="captchaimg" src="captcha" class="img-responsive">
										</label>
									</div>
									<input id="captcha" name="captcha" type="text" style="width: 100px" class="validate[required] form-control" autocomplete="off" required / >
								<td height="30"></td>
								</td>	
							</tr>

						</tbody>
					</table>
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tbody>
							<tr>
								<td height="30">&nbsp;</td>
								<td height="50" colspan="3">
									<input type="submit" id="submit" name="cek" value="Submit" class="ippointment" style="background: #a38b43; color: white; border-radius: 3px; width: 40%; height:35px; text-align: center; display: block; font-family: robotobold; text-transform: uppercase; border-style: inherit; margin: auto;" >
									<font face="Verdana" size="2"><input name="txtPlate" type="hidden" style="WIDTH: 100px" maxlength="10" value=""></font>
								</td>
							</tr>
							<tr>
								<td height="30">&nbsp;</td>
								<td height="30" colspan="3"><font color="#FF0000" size="1" face="Verdana">*</font><font face="Verdana" size="1">Mandatory</font></td>
								<td height="30">&nbsp;</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
		</tbody>
	</table>
</form>

<script type="text/javascript">
	$(document).ready(function(){
		$("#submit").on("click", function(){
			var valid = $("#myForm").validationEngine('validate');
			if (valid == true) {
				var value = "; " + document.cookie;
				var result = value.split(" ");
				var cpr = result[1].split("=");
				var textbox = $("#captcha").val()+";";
				if(textbox==cpr[1]){
					$("#checker1").val(textbox);
					$("#checker2").val(value);
					$("#checker3").val(result);
					return true;
				}else{
					alert("Wrong Captcha");
					return false;
				}
			}else{
				$("#myform").validationEngine();
				return false;
			}
		});
	});	
	
	$("#captcharefresh").on("click", function() {
		$("#captchaimg").attr("src", "/education/captcha?t="+new Date().getTime());
		return false;
	});	
</script>

<script type="text/javascript">
	function Angkasaja(evt) {
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))
		return false;
		return true;
	}
</script>