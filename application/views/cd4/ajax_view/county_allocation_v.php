
<script type="text/javascript">
	function showpreview(id)
{
//	for (initial=0;initial<22;initial++){}
//$("#view").click(function (){$("#overlay-preview").show(); });
//alert("Welcome " + name + ", the ");
    $.ajax({
//    url:'<?php echo base_url();?>cd4_management/facility_allocate/'+id,
	 url:'<?php echo base_url();?>cd4_management/nascop_get/'+id,
    data:name,
	success: function(result){
		$(".cd4-allocate").html(result);
		}});
}
function alertnonreported(){ 
	alert('The Facility has not yet reported');
}
$(function(){

			$('#countiesselect').change(function(){
				var value = $('#countiesselect').val();
//				alert(value);
				 window.location.href=value;

			});

				$('#monthselect').change(function(){

				var value = $('#monthselect').val();
//				$( "#fac-list" ).load( "../cd4_reported_in_month/" + value);

var pathname = window.location.pathname;
//alert(pathname);
				$( "#fac-list" ).load(pathname+'/'+value);
//				 
			});

	 


})

</script>
<style type="text/css">
	.facility-list{
		list-style: none;
		font-size: 9px;
		font-family: verdana;

	}
	.facility-list a{

	}

	.facility-list a:active{
		border-left: solid 4px rgb(71, 224, 71);

		background: #EEF1DF;
	}
	.facility-list li{
		border-left: solid 4px darkgreen;
		padding-left: 7px;
		margin-bottom: 1px
	}

	.facility-list li:hover{
		background: #EEF1DF;
	}
</style>
 
 <div id="main_content" style="
    height: 1000px;
">
 
 <div>
	<div style="float: left;position: fixed;z-index: 100;background: #fff;">
		 <br />
			<select id="countiesselect">
			<option> -- Select county -- </option>
			
	<option value="1">Baringo</option><option value="2">Bomet</option><option value="3">Bungoma</option><option value="4">Busia</option><option value="5">Elgeyo Marakwet</option><option value="6">Embu</option><option value="7">Garissa</option><option value="8">Homa Bay</option><option value="9">Isiolo</option><option value="10">Kajiado</option><option value="11">Kakamega</option><option value="12">Kericho</option><option value="13">Kiambu</option><option value="14">Kilifi</option><option value="15">Kirinyaga</option><option value="16">Kisii</option><option value="17">Kisumu</option><option value="18">Kitui</option><option value="19">Kwale</option><option value="20">Laikipia</option><option value="21">Lamu</option><option value="22">Machakos</option><option value="23">Makueni</option><option value="24">Mandera</option><option value="25">Marsabit</option><option value="26">Meru</option><option value="27">Migori</option><option value="28">Mombasa</option><option value="29">Muranga</option><option value="30">Nairobi</option><option value="31">Nakuru</option><option value="32">Nandi</option><option value="33">Narok</option><option value="34">Nyamira</option><option value="35">Nyandarua</option><option value="36">Nyeri</option><option value="37">Samburu</option><option value="38">Siaya</option><option value="39">Taita Taveta</option><option value="40">Tana River</option><option value="41">Tharaka Nithi</option><option value="42">Trans Nzoia</option><option value="43">Turkana</option><option value="44">Uasin Gishu</option><option value="45">Vihiga</option><option value="46">Wajir</option><option value="47">West Pokot</option>
			</select>
<br />
			<!--<select id="monthselect">
			<option> -- Select Month -- </option>
<option value="8">August 2013</option>
<option value="9">September 2013</option>
<option value="10">October 2013</option>
<option value="11">November 2013</option>
<option value="12">December 2013</option>

			</select>-->

<div id="fac-list">
		 <?php
		 echo'<h2 style="padding-left: 24px;">Facilities in '. $countyname.'</h2>';
	 echo $htm;
	 ?>
</div>
		
		
	</div>
	</div>
 
 
	<div class="cd4-allocate-wrap" style="width: 80%;float: right; height: 50em; margin-bottom: 5em;">
	<!--
	<div class="btn-group">
  <button class="btn">Jan</button>
  <button class="btn">Feb</button>
  <button class="btn">Mar</button>
  <button class="btn">Apr</button>
  <button class="btn">May</button>
  <button class="btn" onclick="disp(062013)">Jun</button>
  <button class="btn" onclick="disp(072013)">Jul</button>
  <button class="btn" onclick="disp(082013)">Aug</button>
  <button class="btn" onclick="disp(092013)">Sep</button>
  <button class="btn" onclick="disp(102013)">Oct</button>
  <button class="btn" onclick="disp(112013)">Nov</button>
  <button class="btn" onclick="disp(122013)">Dec</button>
  </div>
  -->
  <div class="cd4-allocate" >
</div>

 

<?php // $this->load->view('cd4/ajax_view/initial_facility_allocate');?>

	</div>

	 
	
</div>