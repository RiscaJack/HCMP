
<script type="text/javascript">
	function showpreview(id)
{
//	for (initial=0;initial<22;initial++){}
//$("#view").click(function (){$("#overlay-preview").show(); });
//alert("Welcome " + name + ", the ");
    $.ajax({
    url:'<?php echo base_url();?>cd4_management/facility_allocate/'+id,
    data:name,
	success: function(result){
		$(".cd4-allocate").html(result);
		}});
}

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
 <div>
 <div>
	<div style="float: left;position: fixed;z-index: 100;background: #fff;">

		 <?php
		 echo'<h2 style="padding-left: 24px;">Facilities in '. $countyname.'</h2>';
	 echo $htm;
	 ?>

		
		
	</div>
	</div>
 
		
	<div class="cd4-allocate" style="width: 80%;float: right; height: 50em; margin-bottom: 5em;">

<?php $this->load->view('cd4/ajax_view/initial_facility_allocate');?>
	</div>

	 
	
</div>