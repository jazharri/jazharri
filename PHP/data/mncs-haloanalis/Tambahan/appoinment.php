<?php
 if ($mod==""){
	header('location:../../404.php');
}else{
?>
<?php include_once "po-content/$folder/header.php"; ?>
	<link href="<?=$website_url;?>/po-content/<?=$folder;?>/clinic_research/css/datepicker.css" rel="stylesheet">
	<link href="<?=$website_url;?>/po-content/<?=$folder;?>/clinic_research/css/bootstrap.min-220.css" rel="stylesheet">
	
	<!--klinik riset-->
	<link href="<?=$website_url;?>/po-content/<?=$folder;?>/css/datepicker.css" rel="stylesheet">
	<link rel="stylesheet" href="<?=$website_url;?>/po-content/<?=$folder;?>/css/validationEngine.jquery.css">
	<link href="<?=$website_url;?>/po-content/<?=$folder;?>/css/jquery-ui-2.css" rel="stylesheet" type="text/css" /> <!-- wajib untuk tanggal-->
	<!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
	<script type="text/javascript" src="<?=$website_url;?>/po-content/<?=$folder;?>/clinic_research/js/jquery-1.8.2.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!--home banner-->
	<div class="home-banner">
		<div class="tbl-banner">
			<div class="tbl">
				<div class="cell">
					<div class="title-banner">
						
					</div>
				</div>
			</div>
		</div>
		<img src="/po-content/po-upload/Cover-Sekilas-Perusahaan.jpg" width="100%">
	</div>
		<div class="clearfix"></div>
		<div class="about-content">
			<div class="container">
				<div class="row row1">
					<div class="col-sm-3">
						<div class="sub-opt">
							<ul>
								<li ><a href="/pages/disclaimer/<?php echo $language['lang'];?>">Disclaimer</a></li>
								<li class="active"><a href="">Atur Pertemuan</a></li>
								<li ><a href="/pages/contact-us/<?php echo $language['lang'];?>">Hubungi Kami</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-9">
						<div class="row-about">
							<h2>Atur Pertemuan</h2>
							<form id="myform1" method = 'post' action= "/po-content/mnc/formjanji.php">
							<!--<form id="myform1" method = 'post' action= "">-->
								<div class="about-content">
									<div class="col-sm-6 ma-l">
										<label for="exampleInputEmail1">Panggilan<span>*</span></label>
										<select id="panggilan" class="validate[required] form-control" name="panggilan">
										  <option name="panggilan" selected="">Bapak</option>
										  <option name="panggilan">Ibu</option>
t										</select>
									</div>
									<div class="col-sm-6 ma-r">
										<label for="exampleInputEmail1">Nama<span>*</span></label>
    									<input id="nama" type="text" class="validate[required] form-control" name="nama"  >
									</div>
									<div class="col-sm-6 ma-r">
										<label for="exampleInputEmail1">Alamat Email<span>*</span></label>
    									<input id="email" type="email" class="validate[required, custom[email]] form-control" name="email"  >
									</div>
									<div class="col-sm-6 ma-r">
										<label for="exampleInputEmail1">No.Telepon<span>*</span></label>
    									<input id="phone" type="number" class="validate[required, custom[number]] form-control" name="phone"  >
									</div>
									<div class="col-sm-6 ma-l">
										<label for="exampleInputEmail1">Jam untuk Menghubungi Anda<span>*</span></label>
										<select id="waktu" class="validate[required] form-control" name="waktu">
										  <option name="waktu" selected="">09.00-11.00 WIB</option>
										  <option name="waktu">13.00-15.00 WIB</option>
										  <option name="waktu">15.00-17.00 WIB</option>
										</select>
									</div>
									<div class="col-sm-6 ma-r">
										<label for="exampleInputEmail1">Lokasi<span>*</span></label>
    									<input id="lokasi" type="text" class="validate[required] form-control" name="lokasi"  >
									</div>
									<div class="col-sm-6 ma-l">
										<label>Captcha</label>
										<div class="wrap-cap pull-right"><img src="captcha" class="img-responsive"></div>
										<input type="text" class="form-control" name="captcha" id="captcha" />
									</div>
									<div class="col-sm-6 ma-r"></div>
									<input type="hidden" name="checker1" id="checker1"/>
									<input type="hidden" name="checker2" id="checker2"/>
									<div class="clear"></div>
									<div class="col-sm-6 ma-r text-right">
										<div class="mod-btn1">
											<input type="submit" value="Submit" name="cek" id="submit">
										</div>
									</div>
						    		<div class="clearfix"></div>
								</div>
						</div>
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
				
			</div>
		</div><!--about content-->
		<script type="text/javascript" src="<?=$website_url;?>/po-content/<?=$folder;?>/clinic_research/js/jquery.form.js"></script>
	<script type="text/javascript" src="<?=$website_url;?>/po-content/<?=$folder;?>/clinic_research/js/jquery.validationEngine.js"></script>
	<script type="text/javascript" src="<?=$website_url;?>/po-content/<?=$folder;?>/clinic_research/js/languages/jquery.validationEngine-en.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#submit").on("click", function(){
			var valid = $("#myform1").validationEngine('validate');
			if (valid == true) {
				var value = "; " + document.cookie;
				var result = value.split(" ");
				var cpr;
				for(i=0; i < result.length; i++) {
					var temp = result[i].substring(0, 5);
					if (temp=="k0d3h") {
						cpr = result[i].split("=");
					}
				}
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
				$("#myform1").validationEngine();
				return false;
			}
		});
	});	
</script>
<?php include_once "po-content/$folder/footer.php"; ?>
<?php } ?>
