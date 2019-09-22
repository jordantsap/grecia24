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
.price_label {display: inline-block;padding:6px 0;font-size:18px;margin-right:10px; color: #090909; font-weight:bold; }

</style>

<?php
$conf= $this->conf;
echo $this->content->event->onContentBeforeDisplay; 
?>
<script language="javascript" type="text/javascript">
function tableOrdering( order, dir, task ){
	var form = document.adminForm;

	form.filter_order.value = order;
	form.filter_order_Dir.value = dir;
	document.adminForm.submit( task );
}
</script>




<div class="adsmanager_search_box">
	<div class="adsmanager_inner_box_MAD">
		
			<form name="ads_search_Form" id="ads_search_Form" action="<?php echo JRoute::_('index.php?option=com_adsmanager&view=result&catid='.$this->catid.'&Itemid='.$this->Itemid) ?>" method="post">
			<?php $urloptions = "&catid=".$this->catid; ?>
		
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

<!-- upokatigories, den exei efarmogi! -->
<div class="adsmanager_subcats">
<?php foreach($this->subcats as $key => $subcat) {
	$subcat->link = JRoute::_('index.php?option=com_adsmanager&view=list&catid='.$subcat->id."&Itemid=".$this->Itemid);
	if ($key != 0)
		echo ' | ';
	echo '<a href="'.$subcat->link.'">'.$subcat->name.'</a>';
} 
?>
</div>

<!-- Perigrafi, den exei efarmogi! -->
<div class="adsmanager_description">
	<?php echo $this->list_description; ?>
</div>

<script language="JavaScript" type="text/JavaScript">
<!--
	function jumpmenu(target,obj){
	  eval(target+".location='"+obj.options[obj.selectedIndex].value+"'");	
	  obj.options[obj.selectedIndex].innerHTML="<?php echo JText::_('ADSMANAGER_WAIT');?>";			
	}		
//-->
</script>




<div id="ads_details_item" style="max-width:850px;"><?/* fix for IE */?>

<div class="<?php echo $classcontent;?> adsmanager_ads" style="border:none;">

	<?/*<div class="adsmanager_top_ads">	*/?>
	<div class="clearfix">	
		<?/*<h1 class="adsmanager_ads_title">*/?>
		<h1 style="font-size:20px; font-weight:bold; color:#BF1017;float:left;margin-top:6px;">	
		<?php if ($this->content->ad_headline) {$strtitle = $this->content->ad_headline;}else{$strtitle = $this->content->name;} ?>
		<?php echo "<b>". $strtitle."</b>";
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
					

					echo "<div class='pricecss'>".number_format($this->content->ad_price, 0, ',', '.').' €</div>';
					echo "<div class='price_label'>".JText::_('ADSMANAGER_MENU_DETAIL_KODIKOS').': '.$this->content->id.'</div>';
			?>
		</div>
		
		<?php echo $this->content->event->onContentAfterTitle; ?>
		
	</div>
	
	<div class="adsmanager_ads_image_MAD" style="width:auto;">
		<?php
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

	<div class="adsmanager_ads_main">
		<div class="adsmanager_ads_body" style="width:100%;padding:5px;">
		
			<?/*< div class="adsmanager_ads_desc three-col">*/?>

			<div class="adsmanager_ads_desc" style="float:left;width:100%;">
			
				<div class="adsmanager_ads_image_MAD" style="float:left;width:auto !important; font-size:15px;padding:10px"><?php echo JText::_('ADSMANAGER_VIEWS_STOIXEIA_AKINITOY');?></div>
				
				
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
				<style>
				.akinito_attrs ul li:before{
					content:none !important;
					
				}
				
				.akinito_attrs ul li{
					font-size:14px !important;
					list-style-type:none !important;
					font-weight:bold;
				}
				.akinito_attrs ul li span{
					color:#777;
					font-weight:normal;
				}
				
				</style>

				<div class="akinito_attrs" style="width:100%; margin:10px 0 0 0px;font-size:15px;float:left;">
					
                   
					<?php 
					
					$general_sort = array('56', '49', '15', '16', '22', '21', '53', '17', '70', '72', '71');
					$general_array = array();
					
					

					if($_GET["r"] == '1'){
					
						for($i=0;$i<count($general_sort);$i++){
						  foreach($this->fDisplay[3] as $index => $field) {
       							 if($field->fieldid == $general_sort["$i"]){
									 
									 array_push($general_array, $this->fDisplay[3]["$index"]);
								 }
  						 
							
						}
												
						}
				
					}
					
					
					
					
					$t = 0;
					$ads_text = '';
					$ads_xaraktiristika = '';
					if (@$this->positions[2]->title) {$strtitle = JText::_($this->positions[2]->title);}
					
					if (isset($this->fDisplay[3]))
					{	
					$t=0;
						foreach($general_array  as $index=>$field)
						{
							if($t==0){
								echo '<ul style="width:33%;float:left;padding:0px; margin:0px !important;">';
							}
						echo '<li>'.$this->field->showFieldValue_MAD($this->content,$field,true,true).'</li>';
							
							$t++;
							if($t==4){
								echo '</ul>';$t=0;
							}	
							
							
 //echo '<pre>'; print_r($this->field); echo '</pre>';
							//echo '<pre>'; print_r($this->fDisplay[3]); echo '</pre>';
						} 
					} 
					?>
                    </div>
				<div class="adsmanager_ads_image_MAD" style="float:left;width:auto !important; font-size:15px;padding:10px"><?php echo JText::_('Χαρακτηριστικά');?></div>
				<div class="akinito_attrs" style="width:100%; margin:10px 0 0 0px;font-size:15px;float:left;">
					
			
				
			
            <?php
			
						$attrs_sort = array('50', '31', '29', '57', '35');
					$attrs_array = array();
					
					

					if($_GET["r"] == '1'){
					
						for($i=0;$i<count($attrs_sort);$i++){
						  foreach($this->fDisplay[3] as $index => $field) {
       							 if($field->fieldid == $attrs_sort["$i"]){
									 
									 array_push($attrs_array, $this->fDisplay[3]["$index"]);
								 }
  						 
							
						}
												
						}
				
					}
					
					
					
					$t = 0;
					$ads_text = '';
					$ads_xaraktiristika = '';
					if (@$this->positions[2]->title) {$strtitle = JText::_($this->positions[2]->title);}
					
					if (isset($this->fDisplay[3]))
					{	
					$t=0;
						foreach($attrs_array as $index=>$field)
						{
							if($index != '4'){
							if($t==0){
								echo '<ul style="width:33%;float:left;padding:0px; margin:0px !important;">';
							}
							
						echo '<li>'.$this->field->showFieldValue_MAD($this->content,$field,true,true).'</li>';
							
							$t++;
							if($t==4){
								echo '</ul>';$t=0;
							}	
							
						}
						else{
							echo $this->field->showFieldValue_MAD($this->content,$field,true,true);
						}
							
 //echo '<pre>'; print_r($this->field); echo '</pre>';
							//echo '<pre>'; print_r($this->fDisplay[3]); echo '</pre>';
						} 
					} ?>
					
					
				</div>
                	<div class="adsmanager_ads_image_MAD" style="float:left;width:auto !important; font-size:15px;padding:10px"><?php echo JText::_('Περιγραφη ακινητου εσωτερικα');?></div>
				<div class="akinito_attrs" style="width:100%; margin:10px 0 0 0px;font-size:15px;float:left;">
					
			
				
			
            <?php
			
						$attrs_sort = array('74', '73', '75');
					$attrs_array = array();
					
					

					if($_GET["r"] == '1'){
					
						for($i=0;$i<count($attrs_sort);$i++){
						  foreach($this->fDisplay[3] as $index => $field) {
       							 if($field->fieldid == $attrs_sort["$i"]){
									 
									 array_push($attrs_array, $this->fDisplay[3]["$index"]);
								 }
  						 
							
						}
												
						}
				
					}
					
					
					
					$t = 0;
					$ads_text = '';
					$ads_xaraktiristika = '';
					if (@$this->positions[2]->title) {$strtitle = JText::_($this->positions[2]->title);}
					
					if (isset($this->fDisplay[3]))
					{	
					
						foreach($attrs_array as $index=>$field)
						{
							
						
							echo '<div style="float:left;width:33%;">'.$this->field->showFieldValue_MAD($this->content,$field,true,true).'</div>';
						}
							
 //echo '<pre>'; print_r($this->field); echo '</pre>';
							//echo '<pre>'; print_r($this->fDisplay[3]); echo '</pre>';
						
					} ?>
					
					
				</div></div>	
				
					
				
			
			
			<?/*<div class="adsmanager_ads_desc" style="clear:both">
				echo $ads_text .'<br>';
			</div>*/?>
			
			<div class="adsmanager_ads_desc" style="clear:both">
			<?php if (@$this->positions[5]->title) {$strtitle = JText::_($this->positions[5]->title);} echo "<b>".@$strtitle."</b>"; 
			if (isset($this->fDisplay[6])) {	
				foreach($this->fDisplay[6] as $field) {
					echo $this->field->showFieldValue($this->content,$field);
				}
			} ?>
			</div>
			
			<br>
			
			<div>
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
					echo "<a href='$target'><b>".$this->content->user."</b></a>";
				
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
			</div>
			
			<br>
			
			<div class="adsmanager_ads_contact">
			<?php 
			if (@$this->positions[4]->title) {$strtitle = JText::_($this->positions[4]->title);} 
			
			echo "<b>".@$strtitle."</b>"; 
			if (($this->userid != 0)||($conf->show_contact == 0)) {		
				if (isset($this->fDisplay[5]))
				{		
					foreach($this->fDisplay[5] as $field)
					{	
						echo $this->field->showFieldValue($this->content,$field);
					} 
				}
				if (($this->content->userid != 0)&&($conf->allow_contact_by_pms == 1))
				{
					if ($conf->display_fullname == 1)
						$pmsText= sprintf(JText::_('ADSMANAGER_PMS_FORM'),$this->content->fullname);
					else
						$pmsText= sprintf(JText::_('ADSMANAGER_PMS_FORM'),$this->content->user);
					$pmsForm = JRoute::_("index.php?option=com_uddeim&task=new&recip=".$this->content->userid);
					echo '<a href="'.$pmsForm.'">'.$pmsText.'</a><br />';
				}
			}
			else
			{
				echo JText::_('ADSMANAGER_CONTACT_NOT_LOGGED');
			}
			?>
			</div>
			
	    </div>
		
		<br>
		<?php/*<div class='center'><img align='center' src='<?php echo $this->baseurl."components/com_adsmanager/images/social_network_links.gif";?>' /></div>
		<br><br>*/?>
		
		
		<div class="adsmanager_spacer"></div>
	</div>

</div>
</div>

<div>
	<?php echo $this->content->event->onContentAfterDisplay; ?>
</div>

<div class="adsmanager_spacer"></div>

<hr>		
<div class="back_button">
<a href='javascript:history.go(-1)'>
<?php echo JText::_('ADSMANAGER_BACK_TEXT'); ?>
</a>
</div>
