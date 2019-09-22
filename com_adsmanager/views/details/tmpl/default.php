<style>
.pricecss {background: linear-gradient(to bottom, #FFFFFF 0%, #E9E9E9 100%) repeat scroll 0 0 transparent;
    box-shadow:  2px 2px 1px #ccc;
   -moz-box-shadow:  2px 2px 1px #ccc;
    -webkit-box-shadow:  2px 2px 1px #ccc;
    color: #090909;
    display: inline-block;
    float: right;
    font-size: 18px;
    font-weight: bold;
    padding: 4px;}
.price_label {display: inline-block;padding:6px 0;font-size:18px;margin-right:34px; color: #090909; }



</style>

<?php
$conf= $this->conf;


include('dimoi.php');


echo $this->content->event->onContentBeforeDisplay; 


?>
<script language="javascript" type="text/javascript">
function tableOrdering( order, dir, task ){
	var form = document.adminForm;

	form.filter_order.value = order;
	form.filter_order_Dir.value = dir;
	document.adminForm.submit( task );
}


$(document).ready(function(){

check_estate_code = $('.adsmanager_category_links_header2').last().html();
check_estate_code_st = parseInt(check_estate_code.indexOf('</span>')) + 7;

check_estate_code = check_estate_code.substr(check_estate_code_st);

if(check_estate_code != 'ru'){
	
	$('.adsmanager_category_links_header2').last().show();
}




	$('#adminForm input, #adminForm textarea').focus(function(){
		$(this).css("cssText", "color: #000 !important;");
		$('#captcha').css("cssText", "color: #000 !important;float:left;width:40px;height:27px;margin-left:6px;");

	
	})
	$('#adminForm input,  #adminForm textarea').focusout(function(){
		if(($(this).val() != '')){
			$(this).css("cssText", "color: #000 !important;");
	$('#captcha').css("cssText", "color: #000 !important;float:left;width:40px;height:27px;margin-left:6px;");

		}
		else{
			$(this).css("cssText", "color: #ccc !important;");
		}
			$('#captcha').css("cssText", "color: #ccc !important;float:left;width:40px;height:27px;margin-left:6px;");

	})
	
			$('#captcha').css("cssText", "color: #ccc !important;float:left;width:40px;height:27px;margin-left:6px;");

	

	
})

</script>




<div class="adsmanager_search_box">
	<div class="adsmanager_inner_box_MAD">
		
			<form name="ads_search_Form" id="ads_search_Form" action="<?php echo JRoute::_('index.php?option=com_adsmanager&view=result&catid='.$this->catid.'&Itemid='.$this->Itemid) ?>" method="post">
			<?php $urloptions = "&catid=".$this->catid;
 ?>
<?php include(JPATH_SITE."/components/com_adsmanager/search_bar_MAD.php");?>
		</form> 
		
	</div>
</div>


<div class="clearfix">
	<div>
	<?php
		//epilegmeno koumpi me tin katigoria
		/* MAD */
		echo '<a href="JavaScript:void(0);" class="adsmanager_category_links_header" style="width:250px;border: 1px solid #e7e7e7;">';

		if ($this->catid != 0)
			echo '<img class="imgheading" style="vertical-align:middle;" src="'.str_replace("_t", "", $this->list_img).'" alt="'.$this->list_name.'" />';
		else
			echo '<img class="imgheading" style="vertical-align:middle;" src="'.$this->baseurl.'components/com_adsmanager/images/all_ads.jpg" alt="'.$this->list_name.'" />';
		echo JText::_($this->list_name);
		echo '</a>';
		/* end MAD */
		
	?>
	</div>
	<!-- ta koumpia Καταχώρηση νέας αγγελίας, Ολες οι αγγελίες, To Προφίλ μου, Οι Αγγελίες μου -->
	<div>
		<?php $this->general->showGeneralLink() ?>
	</div>
</div>


<!-- Perigrafi, den exei efarmogi! -->

<script language="JavaScript" type="text/JavaScript">
<!--
	function jumpmenu(target,obj){
	  eval(target+".location='"+obj.options[obj.selectedIndex].value+"'");	
	  obj.options[obj.selectedIndex].innerHTML="<?php echo JText::_('ADSMANAGER_WAIT');?>";			
	}		
//-->
</script>




<div id="ads_details_item" style="max-width:850px;"><?/* fix for IE */?>

<div class="adsmanager_ads" style="border:none;">

	<?/*<div class="adsmanager_top_ads">	*/?>
	<div class="clearfix">	
		<?/*<h1 class="adsmanager_ads_title">*/?>
        <div style="width:100%;float:left;">
		<h1 style="font-size:20px; font-weight:bold; color:#BF1017;float:left;margin-top:6px;">	
		<?php
					
					if($this->content->ad_city != ''){
			
						if($this->content->ad_country != 'gr') {
							
							echo JText::_($this->content->ad_city).' - ';
							
						}
						else{
							
							$nomoi_key = '';
							for($i=0;$i<count($nomoi);$i++){
									if(JText::_($nomoi_gr["$i"]) == $this->content->ad_city){
										$nomoi_key = $i;
									}
							}
							if($nomoi_key != ''){
							echo JText::_($nomoi["$nomoi_key"]).' - ';
							}
							else{
								echo JText::_($this->content->ad_city).' - ';
							}
						}	
					}
						if(($this->content->ad_perioxi != '') && ($this->content->ad_country != 'bl')){
							
							if($this->content->ad_country == 'cy'){
							
								$dimoi_key='';
									for($i=0;$i<count($dimoi_cy);$i++){
										if(JText::_($dimoi_cy["$i"]) == $this->content->ad_perioxi){
											$dimoi_key = $i;
										}
								}
								
								if($dimoi_key != ''){
									echo JText::_($dimoi_cy["$dimoi_key"]).' - ';
								}
								else{
									echo JText::_($this->content->ad_perioxi).' - ';
								}
								
							}else{
								
								$dimoi_key='';
									for($i=0;$i<count($dimoi);$i++){
										if(JText::_($dimoi_gr["$i"]) == $this->content->ad_perioxi){
											$dimoi_key = $i;
										}
								}
								
								if($dimoi_key != ''){
									echo JText::_($dimoi["$dimoi_key"]).' - ';
								}
								else{
									echo JText::_($this->content->ad_perioxi).' - ';
								}
								
								
							}
								
						
						}
				 $fieldmodel2=$this->getModel( "field" );
                      $field_values = $fieldmodel2->getFieldValues();
					 $bColumn = JArrayHelper::getValue($this->fields, 'ad_eidosakinitou');
                                        $field_eidos=$field_values[$bColumn->fieldid];
                                        $tmpeidos1=ltrim($this->content->ad_eidosakinitou,',');
                                        $tmpeidos2=rtrim($tmpeidos1,','); 
                                        $tmpeidos=explode(',',$tmpeidos2);
                                        $eidosakin=array();
                                        foreach($tmpeidos as $eidosakinitou){
                                                $eidosakin[]=$field_eidos[$eidosakinitou]->fieldtitle;
                                                }
                                        echo $eidosakin["0"];
					
					
		if(isset($strtitle)){		
		 echo "<b>". $strtitle."</b>";
		}
		if (isset($this->fDisplay[1]))
		{
			$ads_title_mad = array();
			foreach($this->fDisplay[1] as $field)
			{
				echo $this->field->showFieldValue($this->content,$field); 
			}
		}
		?>
		</h1>

        		
		<div style="float:right; margin-bottom:12px;">
			<? 
					
					$price = str_replace(',','',$this->content->ad_price);
					$price = str_replace('.','',$price);
					echo "<div class='pricecss'>".number_format($price, 0, ',', '.').' €</div>';
					
			?>
		</div>
		</div>
        <div style="float:left; margin-top:-10px;margin-bottom:10px;">
                

	<?php
	 	echo "<div class='adsmanager_category_links_header2' style='width:auto;padding:6px; font-weight:bold;font-size:14px;margin-right:6px;'>".JText::_('ADSMANAGER_MENU_DETAIL_KODIKOS').': '.$this->content->id.'</div>';
    
    $general_sort = array('77');
					$general_array = array();
					
						for($i=0;$i<count($general_sort);$i++){
						  foreach($this->fDisplay[3] as $index => $field) {
       							 if($field->fieldid == $general_sort["$i"]){
									 
									 array_push($general_array, $this->fDisplay[3]["$index"]);
								 }
							
						}
						}
				
					
					if (isset($this->fDisplay[3]))
					{	
					
						foreach($general_array  as $index=>$field)
						{
						 if ((trim($this->field->showFieldValue_MAD($this->content,$field,false,true)) != '') AND 
								(trim($this->field->showFieldValue_MAD($this->content,$field,false,true)) != '<br />')) 
							{

								echo '<div class="adsmanager_category_links_header2" style="width:auto;padding:6px; font-weight:bold;font-size:14px;display:none;">'.$this->field->showFieldValue_MAD($this->content,$field,true,true).'</div>';
								
									
								} 
							}
					} 
					?>
    </div>
		<?php echo $this->content->event->onContentAfterTitle; ?>
		
	</div>
	
	<div class="adsmanager_ads_image_MAD" style="width:auto;">
		<?php
		if($this->content->id==4717){
			
			for($j=1;$j<=150;$j++)
		echo "<a id='thumb".$this->content->id."' class='highslide' onclick='return hs.expand (this)' href='".'http://grecia24.ru/images/4717/'.$j.".jpg''><img src='http://grecia24.ru/images/4717/".$j.".jpg' alt='".htmlspecialchars($this->content->ad_headline)."' /></a>"; 	
		}
		$this->loadScriptImage($this->conf->image_display);
		$image_found =0;
		$nbimages = $this->conf->nb_images;
		if (function_exists("getMaxPaidSystemImages"))
		{
			$nbimages += getMaxPaidSystemImages();
		}
		for($i=1;$i < $nbimages + 1;$i++)
		{
		
			$ext_name = chr(ord('a')+$i-1);
			$pic = JPATH_BASE."/images/com_adsmanager/ads/".$this->content->id.$ext_name."_t.jpg";
			$piclink 	= $this->baseurl."images/com_adsmanager/ads/".$this->content->id.$ext_name.".jpg";
			if (file_exists($pic)) 
			{
				switch($this->conf->image_display)
				{
					case 'popup':
						echo "<a href=\"javascript:popup('$piclink');\"><img src='".$this->baseurl."images/com_adsmanager/ads/".$this->content->id.$ext_name."_t.jpg' alt='".htmlspecialchars($this->content->ad_headline)."' /></a>";
						break;
					case 'lightbox':
					case 'lytebox':
						echo "<a href='".$piclink."' rel='lytebox[roadtrip".$this->content->id."]'><img src='".$this->baseurl."images/com_adsmanager/ads/".$this->content->id.$ext_name."_t.jpg' alt='".htmlspecialchars($this->content->ad_headline)."' /></a>"; 
						break;
					case 'highslide':
						echo "<a id='thumb".$this->content->id."' class='highslide' onclick='return hs.expand (this)' href='".$piclink."'><img src='".$this->baseurl."images/com_adsmanager/ads/".$this->content->id.$ext_name."_t.jpg' alt='".htmlspecialchars($this->content->ad_headline)."' /></a>";
						break;
					case 'default':	
					default:
						echo "<a href='".$piclink."' target='_blank'><img src='".$this->baseurl."images/com_adsmanager/ads/".$this->content->id.$ext_name."_t.jpg' alt='".htmlspecialchars($this->content->ad_headline)."' /></a>";
						break;
				}
				$image_found = 1;
			}   
		}
		if (($image_found == 0)&&($conf->nb_images >  0))
		{
			if ((JText::_('ADSMANAGER_NOPIC') != "")&&(file_exists(JPATH_BASE."/components/com_adsmanager/images/".JText::_('ADSMANAGER_NOPIC'))))
				echo '<img align="center" src="'.$this->baseurl.'components/com_adsmanager/images/'.JText::_('ADSMANAGER_NOPIC').'" alt="nopic" /></a>'; 
			else
				echo '<img align="center" src="'.$this->baseurl.'components/com_adsmanager/images/nopic.gif" alt="nopic" />'; 
		}
		?>
	</div>


<?/*MAD  //CSS3 colums //den doulevoun katholou ston IE9 kai kato
<style>
.three-col {
       column-count: 3;
       column-gap: 20px;
       -moz-column-count: 3;
       -moz-column-gap: 20px;
       -webkit-column-count: 3;
       -webkit-column-gap: 20px;
}
</style>
*/?>
<div style="float:right;">
	<?php echo $this->content->event->onContentAfterDisplay; ?>
</div>
                <script>
				
				jQuery(document).ready(function(){
					
					jQuery('.akinito_attrs').each(function(index, element){
						count_li=0;
						
						jQuery(element).children('#attrs_eksot').each(function(index2,element2){
							
							if(jQuery(element2).children('span').length != 0){
								
								count_li++;
							}
						})
						
						jQuery(element).children('ul').each(function(index2,element2){
							
							if(jQuery(element2).length != 0){
								
								count_li++;
							}
						})
					
						if(count_li == 0){
							
							jQuery(element).parent().children('.adsmanager_ads_image_MAD').remove();
							jQuery(element).children('.span_title').remove();
							jQuery(element).remove();
						}
						})
						
						
						
						
						
					jQuery('.akinito_attrs').each(function(index, element){
						
							
						jQuery(element).children('ul').each(function(index2, element2){
							if(index2 == 2){
								jQuery(element2).css('border','none');
							}
						})
						
					})
					
					jQuery('.ul_attrs').each(function(index, element){
						
							
						if(index == 2){
								jQuery(element).children('ul').css('border','none');
							}
						})
						
				
				var default_name = jQuery('#name').val();jQuery('.adsmanager_ads_contact').append('<span style="display:none;" id="default_name">' + default_name + '</span>');
				var default_email = jQuery('#email').val();jQuery('.adsmanager_ads_contact').append('<span style="display:none;" id="default_email">' + default_email + '</span>');
				var default_message = jQuery('#body').val();jQuery('.adsmanager_ads_contact').append('<span style="display:none;" id="default_body">' + default_message + '</span>');
				var default_phone = jQuery('#phone').val();jQuery('.adsmanager_ads_contact').append('<span style="display:none;" id="default_phone">' + default_phone + '</span>');
				
						
						
				jQuery('input, textarea').focus(function(){
					if(jQuery(this).val() == jQuery('#default_' + jQuery(this).attr('id')).html()){
						jQuery(this).val('');
					}
				})
					
				jQuery('input, textarea').blur(function(){
						if(jQuery(this).val() == ''){
							jQuery(this).val(jQuery('#default_' +jQuery(this).attr('id')).html());
					}
				})	
				
				
			
				
					
				})
				</script>
					
					
					
				<style>
				.akinito_attrs ul li:before{
					content:none !important;
					
				}
				.akinito_attrs ul, .ul_attrs ul{
					border-right:1px dotted #ccc;
					padding-right:1%; !important;
					padding-left:1%; !important;
					margin:0px !important;
					
				}
				
				.ul_attrs{
						padding-right:1%; !important;
					padding-left:1%; !important;
				}
					.ul_attrs span{	
					margin-bottom:6px;
					}
					
				.akinito_attrs ul li, .ul_attrs ul li{
					font-size:14px !important;
					list-style-type:none !important;
					font-weight:bold;
					padding:0px;
					margin:0px;
					border-bottom:1px dotted #ccc;
					width:90%;
					
					
				}
				.one_col ul{
					border:none;
				}
					
				.akinito_attrs ul li span{
					color:#777;
					font-weight:normal;
				}
				.adsmanager_ads_image_MAD{
					color:#257fac !important;
				}
			
				#attrs_eksot span{
					border-bottom:1px dotted #ccc;
					font-weight:normal;
					float:left;
					margin-right:10px;
					
				}
				#attrs_eksot{
					
					
					
				}
				
				#attrs_esot li{
				
					font-weight:normal;
					
					
				}	
				
				#attr_perigrafi{
				
				
				}
				
				#attr_perigrafi ul li{
						border:none;
							font-weight:normal  !important;	
				
				}			
				</style>

<div style="float:left;padding-left:4px;">

<?php echo JText::_('ADSMANAGER_VIEWS_HITS').'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$this->content->views;?></div>

	<div class="adsmanager_ads_main">
		<div class="adsmanager_ads_body" style="width:100%;padding:5px;">
		
			<?/*< div class="adsmanager_ads_desc three-col">*/?>

			<div class="adsmanager_ads_desc" id="adsmanager_ads_desc" style="float:left;width:100%;">
			<div>
				<div class="adsmanager_ads_image_MAD" style="float:left;width:240px !important; font-size:15px;padding:10px"><?php echo JText::_('ADSMANAGER_VIEWS_STOIXEIA_AKINITOY');?></div>
				
				
				<div class="adsmanager_ads_kindof">
				<?php if (@$this->positions[1]->title) {$strtitle = JText::_($this->positions[1]->title);} ?>
				<?php echo "<b>".@$strtitle."</b>"; 
				if (isset($this->fDisplay[2])) {
					foreach($this->fDisplay[2] as $field) {
						echo $this->field->showFieldValue($this->content,$field);

					}
				}
				?>
				</div>

				<div class="akinito_attrs" style="width:100%; margin:10px 0 10px 0px; font-size:15px;float:left;">
					
                   
					<?php 
					
					$general_sort = array('84','42','83','56', '49', '15', '16', '22', '21', '53', '17', '70', '72', '71');
					$general_array = array();
					
					

					
					
						for($i=0;$i<count($general_sort);$i++){
						  foreach($this->fDisplay[3] as $index => $field) {
       							 if($field->fieldid == $general_sort["$i"]){
									 
									 array_push($general_array, $this->fDisplay[3]["$index"]);
								 }
  						 
							
						}
												
						}
				
					$t = 0;
					if (isset($this->fDisplay[3]))
					{	
					$t=0;
						foreach($general_array  as $index=>$field)
						{
						 if ((trim($this->field->showFieldValue_MAD($this->content,$field,false,true)) != '') AND 
								(trim($this->field->showFieldValue_MAD($this->content,$field,false,true)) != '<br />')) 
							{
								if($t==0){
									echo '<ul style="width:31%;float:left;">';
								}
								echo '<li>'.$this->field->showFieldValue_MAD($this->content,$field,true,true).'</li>';
									
								$t++;
								if($t==5){
									echo '</ul>';$t=0;
								}	
									
								} 
							}
					} 
					
				?>
                  
                    </div> 
                     <br />
                    </div>
                    
                     <div>
				<div class="adsmanager_ads_image_MAD" style="float:left;width:240px !important; font-size:15px;padding:10px"><?php echo ucfirst(strtolower(JText::_('ADSMANAGER_VIEWS_CHARACTERISTICS')));?></div>
				<div class="akinito_attrs" style="width:100%; margin:10px 0 10px 0px;font-size:15px;float:left;">
					
			
				
			
            <?php
			
						$attrs_sort = array('50', '29', '57','33', '35');
					$attrs_array = array();
					
					

					
						for($i=0;$i<count($attrs_sort);$i++){
						  foreach($this->fDisplay[3] as $index => $field) {
       							 if($field->fieldid == $attrs_sort["$i"]){
									 
									 array_push($attrs_array, $this->fDisplay[3]["$index"]);
								 }
  						 
							
						}
												
						}
				
					
					$t = 0;
					
					if (isset($this->fDisplay[3]))
					{	
					$t=0;
						foreach($attrs_array as $index=>$field)
						{
							 if ((trim($this->field->showFieldValue_MAD($this->content,$field,false,true)) != '') AND 
								(trim($this->field->showFieldValue_MAD($this->content,$field,false,true)) != '<br />')) 
							{
							if($index != '4'){
								if($t==0){
									echo '<ul style="width:31%;float:left;">';
								}
							
								echo '<li>'.$this->field->showFieldValue_MAD($this->content,$field,true,true).'</li>';
							
								$t++;
								
									
								
								
							}
							else{
								echo '</ul>';$t=0;
								echo $this->field->showFieldValue_MAD($this->content,$field,true,true);
							}
							
						} 
						}
					} ?>
					
					
				</div>
                </div>
                <div>
                	<div class="adsmanager_ads_image_MAD" style="float:left;width:240px !important; font-size:15px;padding:10px"><?php echo JText::_('ADSMANAGER_VIEWS_PERIGRAFI_ESOTERIKA');?></div>
				<div class="akinito_attrs" style="width:100%; margin:6px 0 10px 0px;font-size:15px;float:left;">
					
			
				
			
            <?php
			
						$attrs_sort = array('74', '73', '75');
					$attrs_array = array();
					

					
						for($i=0;$i<count($attrs_sort);$i++){
						  foreach($this->fDisplay[3] as $index => $field) {
       							 if($field->fieldid == $attrs_sort["$i"]){
									 
									 array_push($attrs_array, $this->fDisplay[3]["$index"]);
								 }
  						 
							
						}
												
						}
				
					
					$t = 0;
					
					if (isset($this->fDisplay[3]))
					{	
					
						foreach($attrs_array as $index=>$field)
						{
							 if ((trim($this->field->showFieldValue_MAD($this->content,$field,false,true)) != '') AND 
								(trim($this->field->showFieldValue_MAD($this->content,$field,false,true)) != '<br />')) 
							{
						
							echo '<div id="attrs_esot"  class="ul_attrs" style="float:left;width:31%;">'.$this->field->showFieldValue_MAD($this->content,$field,true,true).'</div>';
						}
						}
							
					} ?>
					
                       <br />
			
            	</div>
                </div>
                <div>
            <div class="akinito_attrs one_col" style="width:100%;margin:10px 0 10px 0px;font-size:15px;float:left;">
				<span class="span_title"  style="float:left;width:100%;font-weight:bold;font-size:16px;"><?php echo JText::_('ADSMANAGER_VIEWS_GENIKA');?></span>
			
            <?php
			
						$attrs_sort = array('60', '64', '61', '59', '63');
					$attrs_array = array();
					
					

					
						for($i=0;$i<count($attrs_sort);$i++){
						  foreach($this->fDisplay[3] as $index => $field) {
       							 if($field->fieldid == $attrs_sort["$i"]){
									 
									 array_push($attrs_array, $this->fDisplay[3]["$index"]);
								 }
  						 
							
						}
												
						}
				
					
					
					
					$t = 0;
					
					if (isset($this->fDisplay[3]))
					{	
					
							$t=0;
						foreach($attrs_array  as $index=>$field)
						{
							 if ((trim($this->field->showFieldValue_MAD($this->content,$field,false,true)) != '') AND 
								(trim($this->field->showFieldValue_MAD($this->content,$field,false,true)) != '<br />')) 
							{
							if($t==0){
								echo '<ul style="width:48%;float:left;">';
							}
						echo '<li style="float:left;">'.$this->field->showFieldValue_MAD($this->content,$field,true,true).'</li>';
							
							$t++;
							if($t==4){
								echo '</ul>';$t=0;
							}	
							}
							
						} 
					} ?>
				
					
				</div>
                 <br/><br /></div>
               
					<div>
                	<div class="adsmanager_ads_image_MAD" style="float:left;width:240px !important; font-size:15px;padding:10px"><?php echo JText::_('ADSMANAGER_VIEWS_PERIGRAFI_EKSOTERIKA');?></div>
				<div class="akinito_attrs" style="width:100%; margin:6px 0 10px 0px;font-size:15px;float:left;">
					 
			
				
			
            <?php
			
						$attrs_sort = array('65');
					$attrs_array = array();
					
					

					
						for($i=0;$i<count($attrs_sort);$i++){
						  foreach($this->fDisplay[3] as $index => $field) {
       							 if($field->fieldid == $attrs_sort["$i"]){
									 
									 array_push($attrs_array, $this->fDisplay[3]["$index"]);
								 }
  						 
							
						}
												
						}
				
					
					
					
					$t = 0;
					
					if (isset($this->fDisplay[3]))
					{	
					echo '<div id="attrs_eksot">';
						foreach($attrs_array as $index=>$field)
						{
							 if ((trim($this->field->showFieldValue_MAD($this->content,$field,false,true)) != '') AND 
								(trim($this->field->showFieldValue_MAD($this->content,$field,false,true)) != '<br />')) 
							{
							echo $this->field->showFieldValue_MAD($this->content,$field,true,true);
							}
						}
						
					echo  '</div>';		
					} ?>
					<br />
               	</div>
            </div>
            <div class="akinito_attrs" style="width:100%; margin:10px 0 10px 0px;font-size:15px;float:left;">
            	<span class="span_title" style="float:left;width:100%;font-weight:bold;font-size:16px;"><?php echo JText::_('ADSMANAGER_VIEWS_EPIPLEON');?></span>
					   <br />
			
				
			
            <?php 
			
						$attrs_sort = array('66','67','68');
					$attrs_array = array();
					
					

					
						for($i=0;$i<count($attrs_sort);$i++){
						  foreach($this->fDisplay[3] as $index => $field) {
       							 if($field->fieldid == $attrs_sort["$i"]){
									 
									 array_push($attrs_array, $this->fDisplay[3]["$index"]);
								 }
  						 
							
						}
												
						}
				
					
					
					
					if (isset($this->fDisplay[3]))
					{	
					
							$t=0;
						foreach($attrs_array  as $index=>$field)
						{
							 if ((trim($this->field->showFieldValue_MAD($this->content,$field,false,true)) != '') AND 
								(trim($this->field->showFieldValue_MAD($this->content,$field,false,true)) != '<br />')) 
							{
							if($t==0){
								echo '<ul style="width:48%;float:left;">';
							}
						echo '<li style="float:left;">'.$this->field->showFieldValue_MAD($this->content,$field,true,true).'</li>';
							
							$t++;
							if($t==4){
								echo '</ul>';$t=0;
							}	
							}
							
						} 
					} ?>
				
             <br />  	</div>
          
            <div>
				<div class="adsmanager_ads_image_MAD" style="float:left;width:240px !important; font-size:15px;padding:10px"><?php echo ucfirst(strtolower(JText::_('ADSMANAGER_VIEWS_PERIGRAFI')));?></div>
				<div id="attr_perigrafi" class="akinito_attrs" style="width:100%; margin:10px 0 10px 0px;font-size:15px;float:left;">
					
			
				
			
            <?php
			
						$attrs_sort = array('78');
					$attrs_array = array();
					
					

					
						for($i=0;$i<count($attrs_sort);$i++){
						  foreach($this->fDisplay[3] as $index => $field) {
       							 if($field->fieldid == $attrs_sort["$i"]){
									 
									 array_push($attrs_array, $this->fDisplay[3]["$index"]);
								 }
  						 
							
						}
												
						}
				
					
				
					
					if (isset($this->fDisplay[3]))
					{	
					
						foreach($attrs_array as $index=>$field)
						{
							 if ((trim($this->field->showFieldValue_MAD($this->content,$field,false,true)) != '') AND 
								(trim($this->field->showFieldValue_MAD($this->content,$field,false,true)) != '<br />')) 
							{
							
									echo '<ul style="width:100%;float:left;">';
															
								echo '<li>'.$this->field->showFieldValue_MAD($this->content,$field,false,true).'</li>';
								
							}
						
						}
					} ?>
					
					
				</div>
                </div>
            <div>
              </div>
<div class="adsmanager_ads_image_MAD" style="float:left;width:240px !important; font-size:15px;padding:10px"><?php echo JText::_('ADSMANAGER_STOIXEIA_EPIKOINONIAS');?></div>
            <div class="akinito_attrs one_col" style="width:100%; margin:10px 0 10px 0px;font-size:15px;float:left;">
                
			
            <?php
			
					
			
						$attrs_sort = array('1','7','76');
						$attrs_array = array();
					
					

					
						for($i=0;$i<count($attrs_sort);$i++){
						  foreach($this->fDisplay[3] as $index => $field) {
       							 if($field->fieldid == $attrs_sort["$i"]){
									 
									 array_push($attrs_array, $this->fDisplay[3]["$index"]);
								 }
  						 
							
						}
												
						}
				
					
					$user_info_trans_array = array();
					
					if (isset($this->fDisplay[3]))
					{	
					
							
						foreach($attrs_array  as $index=>$field)
						{
							
							
						array_push($user_info_trans_array,$this->field->showFieldValue_MAD($this->content,$field,true,false));
						
							
						} 
					} 
			
					

					$db =JFactory::getDBO();
					$result_user_extras = $db->setQuery("SELECT userName, plugins FROM #__k2_users WHERE userID = '".$this->content->userid."'");
					$result_user_extras = $db->loadObjectList();
						$name = $result_user_extras[0]->userName;
					$extras = $result_user_extras[0]->plugins;
					
					
					
					$eponimia_end = strpos($extras, 'userExtendedFieldsafm');
					$eponimia = substr($extras,0, $eponimia_end);
					
					$eponimia = substr($eponimia, 27);
					
					if($eponimia !=''){
						 $eponimia = ' - '.$eponimia;
					}
					
					$kinito_start = strpos($extras, 'userExtendedFieldsmobile');
					$kinito_end = strpos($extras, 'userExtendedFieldsaddress');
					$kinito = substr($extras,0, $kinito_end);
					$kinito = substr($kinito, $kinito_start);
					
					$kinito = substr($kinito, 25);
					
					
						$stathero_start = strpos($extras, 'userExtendedFieldstelephone');
					$stathero_end = strpos($extras, 'userExtendedFieldsmobile');
					$stathero = substr($extras,0, $stathero_end);
					$stathero = substr($stathero, $stathero_start);
					
					$stathero = substr($stathero, 28);
					
					
					echo '<ul style="width:100%;float:left;">';
					
					if(($conf->show_contact == '0') || ($this->userid !=0)){
						echo '<li style="float:left;">'.$user_info_trans_array["0"].$name.$eponimia.'</li>';
					}
				
					
					echo '<li style="float:left;">'.$user_info_trans_array["2"].$kinito.'</li>';
					echo '<li style="float:left;">'.$user_info_trans_array["1"].$stathero.'</li>';
					if($this->content->id==4717){
						echo '<li style="float:left;">Email:  '.'<a href="mailto:ap.greek23@gmail.com">ap.greek23@gmail.com</a></li>';
					}
		?>
	
              
                
			
			<li>
			<?php //show all ads from this user
			if ($this->content->userid != 0)
			{
				echo JText::_('ADSMANAGER_SHOW_OTHERS'); 
				if ($conf->comprofiler == 2)
				{
					$target = JRoute::_("index.php?option=com_comprofiler&task=userProfile&tab=AdsManagerTab&user=".$this->content->userid."&Itemid=".$this->Itemid);
				}
				else
				{
					$target = JRoute::_("index.php?option=com_adsmanager&view=list&user=".$this->content->userid."&Itemid=".$this->Itemid);
				}
				
				if ($conf->display_fullname == 1)
					echo "<a href='$target'><b>".$this->content->fullname."</b></a>";
				else
					echo "<a href='$target'><b>".$this->content->fullname."</b></a>";
				
				if ($this->userid == $this->content->userid)	{
				?>
				<div>
				<?php
					$target = JRoute::_("index.php?option=com_adsmanager&Itemid=".$this->Itemid."&task=write&catid=".$this->content->category."&id=".$this->content->id."&Itemid=".$this->Itemid);
					echo "<a href='".$target."'>".JText::_('ADSMANAGER_CONTENT_EDIT')."</a>";
					echo "&nbsp;";
					$target = JRoute::_("index.php?option=com_adsmanager&Itemid=$this->Itemid&task=delete&catid=".$this->content->category."&id=".$this->content->id."&Itemid=".$this->Itemid);
					echo "<a href='".$target."'>".JText::_('ADSMANAGER_CONTENT_DELETE')."</a>";
				?>
				</div>
				<?php
				}
			}
			?>
		
			</li>
            </ul><br>
            </div>
			
			</div>	

			<div class="adsmanager_ads_contact" id="adsmanager_ads_cont" style="width:100%;float:left;">
			<script>
			
			captcha_array = new Array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
			captcha_symbols_array = new Array('0','1');
			
			num1 = captcha_array[Math.floor(Math.random() * captcha_array.length)];
			num2 =  captcha_array[Math.floor(Math.random() * captcha_array.length)];
			symbol = captcha_symbols_array[Math.floor(Math.random() * captcha_array.captcha_symbols_array)];
			
			if(symbol == '0'){
				if(num1 >= num2){
					captcha = num1 - num2;
					captcha_text = num1.toString() + ' - ' + num2.toString();
				}
				else{
					captcha = num2 - num1;
					captcha_text = num2.toString() + ' - ' + num1.toString();
				}
			}else{
				captcha = num1 + num2;
				captcha_text = num2.toString() + ' + ' + num1.toString();

			}
			$(function(){
				$('#captcha_math').text(captcha_text);	
			})
		
			
function submitbutton() {
	
	var form = document.forms["adminForm"];
	var r = new RegExp("[^0-9\.,]", "i");
	
	if(form.captcha.value != captcha){
		alert('<?php echo JText::_('ADSMANAGER_WRONG_CAPTCHA');?>');
		return false;
	}
	else{

		// do field validation
		if ((form.email.value == "") || (form.email.value == "<?php echo JText::_('ADSMANAGER_FORM_EMAIL');?>")){
			alert( "<?php echo JText::_('ADSMANAGER_REGWARN_EMAIL');?>" );
		} else {
			form.submit();
		}
	}
}
</script>
<style>
#adminForm input,#adminForm textarea {
	margin-bottom:5px;
	padding:2% 1% 2% 1%;
	font-size:14px;
	color:#ccc;
	background-color:#fff !important;
	box-shadow:none;
	-moz-box-shadow:none;
	-webkit-box-shadow:none;
	border-radius:0px;
	-moz-border-radius:0px;
	-webkit-border-radius:0px;
	background:none !important;
	font-weight:normal;
	border:1px solid #ccc !important;
	width:98%;

}


#title{
	font-weight:bold !important;
	color:#000 !important;
}

#body, #email, #phone, #name{
	color:#ccc !important;
}
#adminForm textarea{
	margin-top:0px;
	width:96%;
}

fieldset{
	padding:0px;
	box-shadow:2px 2px 5px #ccc;
	-webkit-box-shadow:2px 2px 5px #ccc;
	-moz-box-shadow:2px 2px 5px #ccc;
}


#submit_button{
	float:right;
	padding:4px;
	margin-top:5px;
	background-color:#fff !important;
	color:#000 !important;
	background-color:#fff !important;
	box-shadow:none;
	-moz-box-shadow:none;
	-webkit-box-shadow:none;
	border-radius:0px;
	-moz-border-radius:0px;
	-webkit-border-radius:0px;
	background:none !important;
	border:1px solid #ccc !important;
	width:auto !important;
	text-align:center;
	cursor:pointer;


	
}

</style>
<fieldset id="adsmanager_fieldset">
	<div class="adsmanager_ads_image_MAD" style="width:240px !important;margin-top:10px;margin-left:8px;font-weight:bold; font-size:15px;padding:10px;color:#000 !important;"><?php echo  JText::_('ADSMANAGER_ENDIAFERON_AKINITO'); ?></div><br />

<?php $target = JRoute::_("index.php?option=com_adsmanager&task=sendmessage&Itemid=".$this->Itemid);?>

<form action="<?php echo $target;?>" method="post" name="adminForm" id="adminForm" enctype="multipart/form-data">
<div style="float:left; width:48%;padding:1%;">
			<?php 
			
			echo "<input class='adsmanager_required' id='title' type='text' name='title' maxlength='50' value=\"".htmlspecialchars(@$this->content->name)." - ".JText::_('ADSMANAGER_KODIKOS_AGGELIAS')." [".@$this->content->id."]";
			 if($this->content->ad_mesitis){
			  echo " Broker's /Owner's code: ru".htmlspecialchars(@$this->content->ad_mesitis);
			 }
			
			 echo '" />'; 
			 
			 ?>
            
            <?php if($this->userid !=0){
            		
					$result_member_email = $db->setQuery("SELECT email FROM #__users WHERE id = '".$this->userid."'");
					$result_member_email = $db->loadObjectList();
					$member_email = $result_member_email [0]->email;
					
					$result_member_extras = $db->setQuery("SELECT userName, plugins FROM #__k2_users WHERE userID = '".$this->userid."'");
					$result_member_extras = $db->loadObjectList();
						$name = $result_member_extras[0]->userName;
					$extras = $result_member_extras[0]->plugins;
					
					$kinito_start = strpos($extras, 'userExtendedFieldsmobile');
					$kinito_end = strpos($extras, 'userExtendedFieldsaddress');
					$kinito = substr($extras,0, $kinito_end);
					$kinito = substr($kinito, $kinito_start);
					
					$kinito = substr($kinito, 25);
					if((trim($kinito) == '')) {
					$phone_value	= 'value="'. JText::_('ADSMANAGER_FORM_PHONE1').'"';
					}
					else{
						$phone_value =  'value="'.$kinito.'" disabled="disabled" style="color:#000 !important;"';
					}
					
					$name_value = 'value="'.$name.'" disabled="disabled" style="color:#000 !important;"';
					$email_value =  'value="'.$member_email.'" disabled="disabled" style="color:#000 !important;"';
					
					
					
			}
			else{
				$name_value =  'value="'.JText::_('ADSMANAGER_FORM_NAME').'"';
					$email_value =  'value="'.JText::_('ADSMANAGER_FORM_EMAIL').'"';
					$phone_value = 'value="'. JText::_('ADSMANAGER_FORM_PHONE1').'"';
			}?>
					
            
			<?php echo "<input class='adsmanager_required' id='name' type='text' name='name' maxlength='50' ".$name_value." />"; ?>
			<?php echo "<input class='adsmanager_required' id='email' type='text' name='email' maxlength='50' ".$email_value." />"; ?>
			<?php echo "<input class='adsmanager_required' id='phone' type='text' name='phone' maxlength='50' ".$phone_value." />"; ?>

</div><div style="float:left; width:48%;padding:1%;">

			<?php  echo "<textarea class='adsmanager_required' id='body' name='body' cols='40' rows='8'>".JText::_('ADSMANAGER_FORM_MESSAGE_BODY')."</textarea>"; ?>
		<!-- body -->
		
		<?php if ($this->conf->allow_attachement == 1) { ?>
		<!-- Attach -->
			<label for="body"><?php echo JText::_('ADSMANAGER_ATTACH_FILE'); ?></label>
			<input id="attach_file" type="file" name="attach_file" />
		</div>
		<?php } ?>
		<!-- buttons -->
			<label for="adid"></label>
			<input type="hidden" name="gflag" value="1">
			<?php
			echo "<input type='hidden' name='contentid' value='".@$this->content->id."' />";
			?>
                        <?php
          require_once('recaptchalib.php');
          $pubkey = "t748yf5g6i9j9=0=i][k55y4tfgiuhjuioi[[ijtk9p"; // you got this from the signup page
          echo "recaptchalib";//recaptcha_get_html($pubkey);
        ?>
           
			<input id="submit_button" type="submit" value="<?php echo JText::_('ADSMANAGER_SEND_EMAIL_BUTTON'); ?>" />
		<!-- buttons -->
	  <?php echo JHTML::_( 'form.token' ); ?>
	  </form>
	  <!-- form -->
	  <script src='https://www.google.com/recaptcha/api.js' async defer></script>
</fieldset>
			</div>
			
	    </div>
		
		<div class="adsmanager_spacer"></div>
	</div>

</div>
</div>


<div class="adsmanager_spacer"></div>

<hr>		
<div class="back_button">
<a href='javascript:history.go(-1)'>
<?php echo JText::_('ADSMANAGER_BACK_TEXT'); ?>
</a>
</div>



