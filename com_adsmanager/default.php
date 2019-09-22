<?php include(JPATH_SITE."/components/com_adsmanager/load_cities_MAD.php");?>
<?php 
$nomos = $this->content->ad_city;  
$dimos = $this->content->ad_perioxi;
$country = $this->content->ad_country;

if($nomos == ''){$nomos = 'ADSMANAGER_SELECT';$nomos_value = '';}else{$nomos_value  = $nomos;}
if($dimos == ''){$dimos = 'ADSMANAGER_SELECT';$dimos_value = '';}else{$dimos_value  = $dimos;}

if($country == ''){$country ='gr';}
if($country == 'gr'){$country_text = 'ADSM_COUNTRY_GREECE';}
elseif($country == 'cy'){$country_text = 'ADSM_COUNTRY_CYPRUS';}
else{$country_text = 'ADSM_COUNTRY_BULGARIA';}

?>

<style>
#akrivis_per_latin_chars{
	color:#F00;
	font-size:11px;
}
</style>

<script>

(function($){ 
	$(document).ready(function($){
		
		country = $('#ad_country').val();
		
		jQuery('#select_cats option').each(function(index, element){
			if((jQuery(element).attr('value') == '22') || (jQuery(element).attr('value') == '23')){
				jQuery(element).remove();
			}
		})
		
		jQuery('#uniform-ad_city span').text('<?php echo JText::_($nomos );?>');jQuery('#uniform-ad_city select').change(function(){jQuery('#uniform-ad_perioxi span').text('<?php echo JText::_('ADSMANAGER_SELECT');?>');});
		$('#uniform-ad_perioxi span').text('<?php echo JText::_($dimos );?>');
		

			$('#ad_description').focusout(function(){
				
				if($(this).val().length > 10000){alert('Επιτρεπτοί χαρακτήρες μέχρι 10000. Εχετε ' +$(this).val().length  );
				}
			})
			
			$('#ad_country option').each(function(index, element){
				
				if($(element).attr('value') == '<?php echo $country;?>'){	$(element).attr('selected','selected');}
			});
			
			jQuery('#uniform-ad_country span').text('<?php echo JText::_($country_text );?>');
			
			if($('#uniform-ad_country span').html() == '<?php echo JText::_('ADSM_COUNTRY_GREECE');?>'){

					load_Nomous_MAD(<? echo '"gr",document.adminForm.ad_city,document.adminForm.ad_perioxi,"'.$nomos.'","'.$dimos.'"';?>);
					$('#ad_perioxi').append('<option value="<?php echo $dimos;?>"><?php echo JText::_($dimos );?></option>');
					
			}else if($('#uniform-ad_country span').text() == '<?php echo JText::_('ADSM_COUNTRY_CYPRUS');?>'){
				
				$('#select_city span').first().html('<b><?php echo JText::_('ADSMANAGER_FORM_CITY_CY');?> *</b>');
				
				load_Nomous_MAD(<? echo '"cy",document.adminForm.ad_city,document.adminForm.ad_perioxi,"'.$nomos.'","'.$dimos.'"';?>);
				$(' #ad_perioxi').attr('mosReq', '0');
				$(' #select_perioxi').hide();


			}else{

				$('#select_city span').first().html('<b><?php echo JText::_('ADSMANAGER_FORM_CITY_BL');?> *</b>');
				$(' #select_perioxi').hide();
				
				$(' #ad_perioxi').attr('mosReq', '0');
				load_Nomous_MAD(<? echo '"bl",document.adminForm.ad_city,document.adminForm.ad_perioxi,"'.$nomos.'","'.$dimos.'"';?>);
			}	
		
			$('#ad_country').change(function(){
				set_span_title_MAD('country', 'country_span');
				
				$('#ad_city, #ad_perioxi').val('0');
				if($(this).val() == 'gr'){
				load_Dimous_MAD(<? echo "'gr',document.adminForm.ad_city,document.adminForm.ad_perioxi,'','ad_city','ad_perioxi'";?>);
				}
				if($(this).val() == 'cy'){
				load_Dimous_MAD(<? echo "'cy',document.adminForm.ad_city,document.adminForm.ad_perioxi,'','ad_city','ad_perioxi'";?>);
				}
				

				
				$('#uniform-ad_city span, #uniform-ad_perioxi span ').text('<?php echo JText::_('ADSMANAGER_SELECT');?>');
				
				if($(this).val() == 'gr'){
						$(' #ad_perioxi').attr('mosReq', '1');

						load_Nomous_MAD(<? echo '"gr",document.adminForm.ad_city,document.adminForm.ad_perioxi,"'.$nomos.'","'.$dimos.'"';?>);
						$('#select_city span').first().html('<b><?php echo JText::_('ADSMANAGER_FORM_CITY');?> *</b>');
						$(' #select_perioxi').show();

						
				}else if($(this).val() == 'cy'){
				$('#select_city span').first().html('<b><?php echo JText::_('ADSMANAGER_FORM_CITY_CY');?> *</b>');
						$(' #select_perioxi').show();
					$(' #ad_perioxi').attr('mosReq', '1');
					load_Nomous_MAD(<? echo '"cy",document.adminForm.ad_city,document.adminForm.ad_perioxi,"'.$nomos.'","'.$dimos.'"';?>);
					

				}
				else{
				$('#select_city span').first().html('<b><?php echo JText::_('ADSMANAGER_FORM_CITY_BL');?> *</b>');
						$(' #select_perioxi').hide();
					$(' #ad_perioxi').attr('mosReq', '0');
					load_Nomous_MAD(<? echo '"bl",document.adminForm.ad_city,document.adminForm.ad_perioxi,"'.$nomos.'","'.$dimos.'"';?>);
				}
		})

		$('#select_type_rent').parent().parent().find('table').attr('width','80%');
		$('#select_ad_akinitopros').find('input').each(function(index,element){
			
			$(element).addClass('ad_akinitopros');
			
			if(index == 1){
				
				if($(element).parent().attr('class') != 'checked'){
							$('#select_type_rent').hide();
							$('#ad_renttype').val('');
				}
			}
		})
		
		$('.ad_akinitopros').click(function(){
			
			if($(this).attr('value') =='1'){
				
				$('#select_type_rent').show();
				$('#ad_renttype').val('');
			}
			else{
				
				$('#select_type_rent').hide();
				$('#ad_renttype').val('');
				
			}
			
		})
		
				
			$('#ad_city option').each(function(index, element){
				
				if($(element).attr('value') == '<?php echo $nomos;?>'){	$(element).attr('selected','selected');}
			});

		
		
			$('#ad_perioxi option').each(function(index, element){
				
				if($(element).attr('value') == '<?php echo $dimos;?>'){	$(element).attr('selected','selected');}
			});
			


	$('#ad_akrivisperioxi').focusout(function(){
		
		greek_let_array = new Array('α','β','γ','δ','ε','ζ','η','θ','ι','κ','λ','μ','ν','ξ','ο','π','ρ','σ','τ','υ','φ','χ','ψ','ω','Α','Β','Γ','Δ','Ε','Ζ','Η','Θ','Ι','Κ','Λ','Μ','Ν','Ξ','Ο','Π','Ρ','Σ','Τ','Υ','Φ','Χ','Ψ','Ω')
		for(i=0;i<greek_let_array.length;i++){
			if($('#ad_akrivisperioxi').val().indexOf(greek_let_array[i]) != -1){
				akrivis_perioxi_error = 1;
			}
		}
		if(akrivis_perioxi_error == 1){
			alert('<?php echo JText::_('ADSM_AKRIVIS_PERIOXI_LATIN_CHARS');?>');
			$('#ad_akrivisperioxi').attr('value','');
		}
		
	})
		
	});
	
	$('#ad_city').change(function(){
		
		load_Dimous_MAD($('#ad_country').val(),document.adminForm.ad_city,document.adminForm.ad_perioxi,'','ad_city','ad_perioxi');
	})
	
})(jQuery);
</script>

<script type="text/javascript">
function CaracMax(text, max)
{
	if (text.value.length >= max)
	{
		text.value = text.value.substr(0, max - 1) ;
	}
}


function submitbutton(mfrm) {
	
	
	
	var me = mfrm.elements;
	var r = new RegExp("[\<|\>|\"|\'|\%|\;|\(|\)|\&|\+|\-]", "i");
	var r_num = new RegExp("[^0-9\.,]", "i");
	var r_email = new RegExp("^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]{2,}[.][a-zA-Z]{2,3}$" ,"i");

	var errorMSG = '';
	var iserror=0;
	
	<?php 
	if (function_exists("loadEditFormCheck")){
		loadEditFormCheck();
	}
	?>
	
	<?php if ($this->nbcats > 1)
	{
	?>
		var form = document.adminForm;
		var srcList = eval( 'form.selected_cats' );
		var srcLen = srcList.length;
		if (srcLen == 0)
		{
			errorMSG += <?php echo json_encode(JText::_('ADSMANAGER_FORM_CATEGORY')); ?>+" : "+<?php echo json_encode(JText::_('ADSMANAGER_REGWARN_ERROR')); ?>+'\n';
			srcList.style.background = "red";
			iserror=1;
		}
		else
		{
			for (var i=0; i < srcLen; i++) {
				srcList.options[i].selected = true;
			}
		}
	<?php
	}
	?>
	
	/*if (mfrm.username && (r.exec(mfrm.username.value) || mfrm.username.value.length < 3)) {
		errorMSG += mfrm.username.getAttribute('mosLabel').replace('&nbsp;',' ') + ' : '+<?php echo json_encode(sprintf( JText::_('ADSMANAGER_REGWARN_NAME'), JText::_('ADSMANAGER_PROMPT_UNAME'), 4 )); ?>+'\n';
		mfrm.username.style.background = "red";
		iserror=1;
	} 
	if (mfrm.password && r.exec(mfrm.password.value)) {
		errorMSG += mfrm.password.getAttribute('mosLabel').replace('&nbsp;',' ') + ' : '+<?php echo json_encode(sprintf( JText::_('ADSMANAGER_VALID_AZ09'), JText::_('ADSMANAGER_REGISTER_PASS'), 6 )); ?>+'\n';
		mfrm.password.style.background = "red";
		iserror=1;
	}*/
	
	if (mfrm.email && !r_email.exec(mfrm.email.value) && mfrm.email.getAttribute('mosReq')) {
		errorMSG += mfrm.email.getAttribute('mosLabel').replace('&nbsp;',' ') + ' : '+<?php echo json_encode(JText::_('ADSMANAGER_REGWARN_EMAIL')); ?>+'\n';
		mfrm.email.style.background = "red";
		iserror=1;
	}
				
	// loop through all input elements in form
	for (var i=0; i < me.length; i++) {
	
		if ((me[i].getAttribute('test') == 'number' ) && (r_num.exec(me[i].value))) {
			errorMSG += me[i].getAttribute('mosLabel').replace('&nbsp;',' ') + ' : '+<?php echo json_encode(JText::_('ADSMANAGER_REGWARN_NUMBER')); ?>+'\n';
			iserror=1;
		}
		
		// check if element is mandatory; here mosReq="1"
		if ((me[i].getAttribute('mosReq') == 1)&&(me[i].style.visibility != 'hidden')) {
			if (me[i].type == 'radio' || me[i].type == 'checkbox') {
				var rOptions = me[me[i].getAttribute('name')];
				var rChecked = 0;
				if(rOptions.length > 1) {
					for (var r=0; r < rOptions.length; r++) {
						if (rOptions[r].checked) {
							rChecked=1;
						}
					}
				} else {
					if (me[i].checked) {
						rChecked=1;
					}
				}
				if(rChecked==0) {
					// add up all error messages
					errorMSG += me[i].getAttribute('mosLabel').replace('&nbsp;',' ') + ' : '+<?php echo json_encode(JText::_('ADSMANAGER_REGWARN_ERROR')); ?>+'\n';
					// notify user by changing background color, in this case to red
					me[i].style.background = "red";
					
					iserror=1;
				} 
			}
			if (me[i].value == '') {
				// add up all error messages
				errorMSG += me[i].getAttribute('mosLabel').replace('&nbsp;',' ') + ' : '+<?php echo json_encode(JText::_('ADSMANAGER_REGWARN_ERROR')); ?>+'\n';
				// notify user by changing background color, in this case to red
				me[i].style.background = "red";
				iserror=1;
			} 
		}
	}
	
	if(iserror==1) {
		alert(errorMSG);
		return false;
	} else {
		//Little hack to be able to return the selected_cats
		<?php if ($this->nbcats > 1) { ?>
			srcList.name = "selected_cats[]"; 
		<?php } ?>
		return true;
	}
}

function updateFields() {
	var form = document.adminForm;
	var singlecat = 0;
	var length = 0;
	
	if ( typeof(document.adminForm.category ) != "undefined" ) {
		singlecat = 1;
		length = 1;
	}
	else
	{
		length = form.selected_cats.length;
	}
	
	<?php
	foreach($this->fields as $field)
	{ 
		if (strpos($field->catsid, ",-1,") === false)
		{
			$name = $field->name;
			if (($field->type == "multicheckbox")||($field->type == "multiselect"))
				$name .= "[]";
		?>
		var input = document.getElementById('<?php echo $name;?>');
		var trzone = document.getElementById('tr_<?php echo $field->name;?>');
		if (((singlecat == 0)&&(length == 0))||
		    ((singlecat == 1)&&(document.adminForm.category.value == 0)))
		{
			if (input != null)
				input.style.visibility = 'hidden';
			trzone.style.visibility = 'hidden';
			trzone.style.display = 'none';
		}
		else
		{
			for (var i=0; i < length; i++) {
				var field_<?php echo $field->name;?> = '<?php echo $field->catsid;?>';
				var temp;
				if (singlecat == 0)
					temp = form.selected_cats.options[i].value;
				else
					temp = document.adminForm.category.value;
					
				var test = field_<?php echo $field->name;?>.indexOf( ","+temp+",", 0 );
				if (test != -1)
				{
					if (input != null)
						input.style.visibility = 'visible';
					trzone.style.visibility = 'visible';
					trzone.style.display = '';
					break;
				}
				else
				{
					if (input != null)
						input.style.visibility = 'hidden';
					trzone.style.visibility = 'hidden';
					trzone.style.display = 'none';
				}
			}
		}
	<?php
		}
	} 
	?>
}
</script>

<!-- Version 2 -->
<div id="adsmanager_writead_header_v2_searchModule">

<?php
$this_id = JRequest::getVar('id', 0); /*MAD*/ 
$target = JROUTE::_("index.php?option=com_adsmanager&task=save&Itemid=".$this->Itemid.($this_id != 0 ? "&id=".$this_id : "")); 
//$target = JROUTE::_("index.php?option=com_adsmanager&task=save&id=".$this->Itemid); 
if ($this->nbcats == 1)
{
//$this->displaySingleCatChooser(@$this->content->id,$this->conf,"com_adsmanager",$this->cats,$this->catid,$this->Itemid);
?>
<form action="<?php echo $target;?>" method="post" name="adminForm" enctype="multipart/form-data" onsubmit="return submitbutton(this)">
<?php
echo "<input type='hidden' name='category' value='$this->catid' />";
}
else
{
?>
<form action="<?php echo $target;?>" method="post" name="adminForm" id="adminForm"  enctype="multipart/form-data" onsubmit="return submitbutton(this)">
<?php
if (!isset($this->content->catsid))
	$this->content->catsid = 0;
//$this->displayMultipleCatsChooser($this->content->catsid,$this->cats,$this->conf,"com_adsmanager",$this->Itemid);
}
?> 

      <div id="adsmanager_writead_header">
	
      </div>
      <div id="adsmanager_v2_contener_top_searchModule">&nbsp;
      </div>

      <div id="adsmanager_v2_contener_searchModule">
          <div id="adsmanager_v2_kataxorisi_top_searchModule">&nbsp;</div>
              <div id="adsmanager_v2_kataxorisi_searchModule">
                  <div class="texts" style="display:inline-block; width:100%;">
                      <div id="writead_header1"><?php echo JText::_('ADSMANAGER_HEADER1');?><br />
                      </div>
                      <span class="blue"><b><?php echo JText::_('ADSMANAGER_VIEWS_AD_CHARACTERISTICS');?></b>
                      </span>                         
     	              <!--<div id="writead_header2"><?php //echo JText::_('ADSMANAGER_HEADER2');?></div>-->                       
                      <br /><br />
                      <div id="select_ad_akinitopros">
                      <span><b>
			  
				
                     
			    <?php //Ακινήτο Προς
				foreach($this->fields as $field) {  
					echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_akinitopros","show_title",true);
					}
				?> : </b></span>&nbsp;
                           <?php
				/* Display Fields */
				foreach($this->fields as $field) {
					$temp = $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_akinitopros");
					$temp = str_replace("<table><tr><td>","",$temp);
					$temp = str_replace("</td></tr><tr><td>","",$temp);
					$temp = str_replace("</td></tr></table>","",$temp);
					$temp = str_replace('>','style="vertical-align: top;">',$temp);
					echo $temp;
					} 
				?>
                      </div>   
                      <br />
                      <div style="width:95%;">
					<div style="float:right;" id="select_type_rent">
                    
                     <span><b>
				<?php //select_type_rent
			         	foreach($this->fields as $field) {  
						if( $field->name == "ad_renttype" ) $type_rent_title = $field->title;
						echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_renttype","show_title",true);
					}
				?>
				</b></span>
                          <br /> 
                                     				
			 <?php foreach($this->fields as $field) {
						echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_renttype");
						
			 }?>
                          
						</div>
                        <span id="akin_cats">
                      <span><b>
                            <?php echo JText::_('ADSMANAGER_VIEWS_PROPERTY_CATEGORY');                                 
                                ?> *
                                <br />
								<span style="color:#F00;">Παρακαλώ διλέξτε την κατηγορία ακινήτου και έπειτα πατήστε το βέλος >> </span></b>
                                </span>
                                
                            <?php if ($this->nbcats == 1)
			             {
				      $this->displaySingleCatChooser_veXnet(@$this->content->id,$this->conf,"com_adsmanager",$this->cats,$this->catid,$this-> Itemid);
			              }
			          else
			             { 
			 	      $this->displayMultipleCatsChooser_veXnet($this->content->catsid,$this->cats,$this->conf,"com_adsmanager",$this->Itemid);
			              }
			        ?> 
                    
                    </span>
                      </div>
                      <br />
<!--Stoixeia Perioxis--><br />
<br />

                      <div style="width:90%; float:left; display:inline-block">
                      <span class="blue"><b><?php echo JText::_('ADSMANAGER_VIEWS_PROPERTY_LOCATION_DETAILS');?></b></span>
                      <br />
                         <div style="width:25%; float:left;">
                          <span><b>
				<?php //xora
			         	foreach($this->fields as $field) {  
						if( $field->name == "ad_country" ) $country_title = $field->title;
						echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_country","show_title",true);
					}
				?>
				*</b></span>
                          <br /> 
                                     				
			  <select class="adsmanager_required" mosReq='1' mosLabel='<?php echo $country_title;?>' name="ad_country" id="ad_country" style="min-width: 150px;">
            <option value="gr" ><?php echo JText::_('ADSM_COUNTRY_GREECE'); ?></option>
							<option value="cy"><?php echo JText::_('ADSM_COUNTRY_CYPRUS');?></option>
							<option value="bu"><?php echo JText::_('ADSM_COUNTRY_BULGARIA');?></option>
				</select>
                          </div>
                          
                          <div id="select_city" style="width:25%; float:left;">
                          <span><b>
				<?php //Πόλη
			         	foreach($this->fields as $field) {  
						if( $field->name == "ad_city" ) $city_title = $field->title;
						echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_city","show_title",true);
					}
				?>
				*</b></span>
                          <br /> 
                 <select class="adsmanager_required" mosReq='1' mosLabel='<?php echo $city_title;?>' name="ad_city" id="ad_city" style="min-width: 150px;">
				</select>
                             

                          </div>

                          <div id="select_perioxi"  style="width:25%; float:left;">
                          <span><b>
				<?php //Περιοχή
					foreach($this->fields as $field) {  
						if( $field->name == "ad_perioxi" ) $perioxi_title = $field->title;
						echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_perioxi","show_title",true);
					}
				?>
				*</b></span>
                          <br />              					
			  <select class="adsmanager_required" mosReq='1' mosLabel='<?php echo $perioxi_title;?>' name="ad_perioxi" id="ad_perioxi" style="min-width: 150px;">
					<option></option>
			  </select>
                          </div>


<div   style="width:25%; float:left;margin-top:-67px;">
<div id="akrivis_per_latin_chars">
<?php echo JText::_('ADSM_AKRIVIS_PERIOXI_LATIN_CHARS');?></div>
                          <span><b>
				<?php //Περιοχή
					foreach($this->fields as $field) {  
						echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_akrivisperioxi","show_title",true);
					}
				?>
				</b></span>
                          <br />  
                          <?php            					
				        foreach($this->fields as $field) {
						echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_akrivisperioxi");
					} ?>
                          </div>

<br />

                          <div style="width:100%; float:left;">
                          <span><b>				
				<?php //Ταχυδρομικός Κώδικας
					foreach($this->fields as $field) {  
						echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_zip","show_title",true);
					}
				?>
			  </b></span>
                          <br /><div style="width:20%;">
               	              <?php
							  
			        	/* Display Fields */
				        foreach($this->fields as $field) {
						echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_zip");
					} 
				?></div>
                          </div>
                     </div>
<!--Telos Stoixeia Perioxis-->     
 
                     <div style="width:100%; float:left; display:inline-block">
                     <br /> 
                     </div>

<!--Stoixia Idiokthth-Mesiti -->
                     <div style="width:90%; float:left; display:inline-block">
                         <span class="blue"><b><?php echo JText::_('ADSMANAGER_VIEWS_PROPERTY_OWNER_DETAILS'); ?></b></span> 
                         <br />
                         <div style="width:40%;float:left;margin:0px 5px;">
                             <span><b>
				<?php //Επώνυμο, Όνομα
					foreach($this->fields as $field) {  
						echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"name","show_title",true);
					}
				?>
				</b></span>
               	                <?php
					/* Display Fields */
					foreach($this->fields as $field) {
							echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"name");
					} 
				?>
                         </div>
                         <div style="width:25%;float:left;margin:0px 20px;">
                             <span><b>
				<?php //Τηλέφωνο
					foreach($this->fields as $field) {  
						echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_phone","show_title",true);
					}
				?>
				</b></span>
               	                <?php
					/* Display Fields */
					
				
						$db =JFactory::getDBO();
					$result_member_extras = $db->setQuery("SELECT  plugins FROM #__k2_users WHERE userID = '". $this->user->id."'");
					$result_member_extras = $db->loadObjectList();

					$extras = $result_member_extras[0]->plugins;
					
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
					if((trim($stathero) == '')) {
					$phone_value	= $kinito;
					}
					else{
						$phone_value = $stathero;
					}
					
					echo "<input class='adsmanager' id='$name' type='text' name='$name' mosLabel='$strtitle' size='$field->size' maxlength='$field->maxlength' $read_only value='$phone_value' onkeypress=\"if(this.value.match(/\D/)) this.value=this.value.replace(/\D/g,'')\"; onkeyup=\"if(this.value.match(/\D/)) this.value=this.value.replace(/\D/g,'')\"; />\n";
				
				?>
                         </div>
                         <div style="width:25%;float:left;">
                             <span><b>
				<?php //E-mail
					foreach($this->fields as $field) {  
						echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"email","show_title",true);
					}
				?>
				*</b></span>
               	               <?php
					/* Display Fields */
					foreach($this->fields as $field) {
						$temp = $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"email");
						//$temp = str_replace("class='adsmanager'","class='adsmanager_required' mosReq='1'",$temp);
						echo $temp;
					} 
				?>
                
              
                         </div>
                          <div style="float:left;margin:20px 0px;">
                         <span  style="float:left;display:inline-block;margin-right:6px;"><b>
				   <?php //kodikos mesith
					foreach($this->fields as $field) {  
						echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_mesitis","show_title",true);
					}
				   ?>
			  *</b> </span><span style="float:left;width:200px !important; display:block;">
                    <?php
					/* Display Fields */
					foreach($this->fields as $field) {
						$temp = $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_mesitis");
						//$temp = str_replace("class='adsmanager'","class='adsmanager_required' mosReq='1'",$temp);
						echo $temp;
					} 
					
				?>
               
                  </span>
                     </div>     
<!--Telos Stoixeia Idiokthth-Mesiti -->
                     <div style="width:90%; float:left; display:inline-block">
                         <br /> 
                     </div>
<!--Stoixeia Akinhtou -->
                 <div style="width:90%; float:left; display:inline-block">
                         <span class="blue"><b><?php echo  JText::_("ADSMANAGER_VIEWS_PROPERTY_PROPERTY_DETAILS"); ?></b></span>
                         <br />
                         
                          <div style=" float:left; display:inline-block;">
<!--Eidos Akinhtou -->  
                  </div>
                         <div style="width:90%; float:left; display:inline-block"> 
                          
                             <span><b>
				   <?php //Είδος Ακινήτου
					//echo JText::_(ADSMANAGER_CONTENT);
					foreach($this->fields as $field) {  
						echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_eidosakinitou","show_title",true);
					}
				   ?>
			    </b></span>
                
                            <br />
                            <?php
				/* Display Fields */
				foreach($this->fields as $field)
					{
                                         echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_eidosakinitou");
					} 
				?>
                         </div>
<!--Telos Eidos Akinhtou-->
                         <div style="width:90%; float:left; display:inline-block;">
                             <br /> 
                         </div>
<!--Typos Akinhtou-->
                         <div style="width:90%; float:left; display:inline-block;">
         			<span><b>
         				<?php //Τύπος Ακινήτου
						foreach($this->fields as $field) {  
							echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_akinito","show_title",true);
							}
	         				?>
				</b></span>
				<br />
					<?php
						/* Display Fields */
						foreach($this->fields as $field) {
							echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_akinito");
							} 
		         			?>
                         </div>
<!--Telos Typos Akinhtou-->
                         <div style="width:90%; float:left; display:inline-block">
                             <br /> 
                         </div>
                         <div style="width:90%; float:left; display:inline-block">
<!--Ypnodomatia-->
                         <div style="width:25%;margin:0px 10px;float:left;">
                             <span><b>
				   <?php //Υπνοδωμάτια
					foreach($this->fields as $field) {  
						echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_upnodomatia","show_title",true);
					}
				   ?>
			    </b></span>
                        <br />
                                 <?php
				        /* Display Fields */
					foreach($this->fields as $field) {
						echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_upnodomatia");
					} 
				 ?>
                         </div>
<!--Telos Ypnodomatia-->
<!--Mpania-->
                         <div style="width:20%;margin:0px 10px;float:left;">
                             <span><b>
				   <?php //Μπάνια
					foreach($this->fields as $field) {  
						echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_bani","show_title",true);
					}
				   ?>
			     </b></span>
                             <br />
                                  <?php
					/* Display Fields */
					foreach($this->fields as $field) {
							echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_bani");
					} 
				  ?>
                         </div>
<!--Telos Mpania-->
<!--WC-->
                         <div style="width:20%;margin:0px 10px;float:left;">
                             <span><b>
				   <?php //WC
					foreach($this->fields as $field) {  
						echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_wc","show_title",true);
					}
				  ?>
		             </b></span>
                             <br />
                                  <?php
					/* Display Fields */
					foreach($this->fields as $field) {
							echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_wc");
					}  
				 ?>
                         </div>
<!--Telos WC-->
<!--Thesi Aytokinitou-->
                         <div style="width:20%;margin:0px 10px;float:left;">
                             <span><b>
                                   <?php //Θέση αυτοκινήτου
                			foreach($this->fields as $field) {  
		                          	echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_thesiautokinitou","show_title",true);
					}
				    ?>
		             </b></span>
			     <br />
				   <?php
					/* Display Fields */
					foreach($this->fields as $field) {
						echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_thesiautokinitou");
					}  
				    ?>
                         </div>
<!--Telos Thesi Autokinitou-->
                     </div>

                     <div style="width:90%; float:left; display:inline-block">
                         <br /> 
                     </div>
<!--Timi-->
                     <div style="width:90%; float:left; display:inline-block">
                         <div style="width:40%; display:inline-block; margin:0px 10px;">
                             <span><b>
		                  <?php //Τιμή (&euro;)
			               foreach($this->fields as $field) {  
				               echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_price","show_title",true);
				       }
			           ?>
			     </b></span>
                            
                                  <?php
			                /* Display Fields */
			               foreach($this->fields as $field) {
				               echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_price");
				       } 
			           ?>
                         </div>

<!--Timi Sizitisimi-->
                         <div style="width:30%;  display:inline-block">
                             <span><b>
		                 <?php //Συζητήσιμη
                                      foreach($this->fields as $field) {  
			                      echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_timisuzitisimi","show_title",true);
			              }
		                  ?>
			     </b></span>
               	                 <?php
					/* Display Fields */
		                     foreach($this->fields as $field) {
				             echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_timisuzitisimi");
				     } 
			          ?>
                         </div>
<!--Telos Timi Sizitisimi-->
                     </div>
<!--Telos Timi-->

                     <div style="width:90%; float:left; display:inline-block">
                         <br />
                     </div>
<!--Orofos-Etos Kataskevis - Anakenisis-->
                     <div style="width:100%; float:left; display:inline-block;">
<!--Orofos-->
                         <div style="float:left; display:inline-block;margin:0px 10px;">
                         
                          <span><b> 
                                 <?php
				        /* Display Fields */
                                      foreach($this->fields as $field) {
				              echo  $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_orofosnumber","show_title");
				      } 
				
				 ?> 
               
                
                         </div>
<!--Telos Orofos-->
<!--Etos Kataskevis-->
                         <div style=" float:left; display:inline-block;margin:0px 10px;">
                             <span><b>
                                 <?php //Έτος Κατασκευής
			              foreach($this->fields as $field) {  
			                      echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_etoskataskeuis","show_title",true);
			              }
		                  ?>
                            </b></span>
                            <br />
                           <div >
                                 <?php
				/* Display Fields */
                     		      foreach($this->fields as $field) {
			                      echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_etoskataskeuis");
			              } 
		                  ?>
                          </div>
                         
                         </div>
                         
<!--Telos Etos Kataskevis-->
<!--Etos Anakenisis-->
                         <div style=" float:left; display:inline-block;margin:0px 10px;">
                             <span><b>
		                  <?php //Έτος Ανακαίνισης
			               foreach($this->fields as $field) {  
			                       echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_etosanakainisis","show_title",true);
			               }
		                   ?>
		            </b></span>
                            <br />
                              <div >
                                  <?php
			               /* Display Fields */
			               foreach($this->fields as $field) {
			                       echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_etosanakainisis");
			               } 
		                   ?>
                           </div>
                         </div>
                          <div style=" float:left; display:inline-block">
                             <span ><b>
	                           <?php //τ.μ. από Θάλασσα
		                        foreach($this->fields as $field) {  
			                        echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_apostasitm","show_title",true);
			                }
	                            ?>
	                     </b></span>
                         <div>
	                           <?php
		                        /* Display Fields */
		                        foreach($this->fields as $field){
			                        echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_apostasitm");
			                }  
	                            ?>
                                </div>
                         </div>
<!--Telos Etos Anakenisis-->
  <div style="width:100%; float:left; display:inline-block;margin:10px 0px;">
                             
                            
                                 <?php
					/* Display Fields */
                  		      foreach($this->fields as $field) {
			   	            $temp =    $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_adorofos");
							$temp = str_replace("<table><tr><td>","",$temp);
					$temp = str_replace("</td></tr><tr><td>","",$temp);
					$temp = str_replace("</td></tr></table>","",$temp);
					$temp = str_replace('>','style="vertical-align: top;">',$temp);
					echo $temp;
				      } 
				  ?>
                         </div> 
                     </div>

<!--Telos Orofos-Etos Kataskevis - Anakenisis-->
                     <div style="width:90%; float:left; display:inline-block">
                         <br />
                     </div>
                     
    <!--Απόσταση από αεροδρόμιο -->
                 
                     <div style="width:120%; float:left; display:inline-block">
                         <div style=" float:left; display:inline-block;margin:0px 10px;">
                             <span><b>
                                  <?php //Απόσταση από αεροδρόμιο (km)
		                       foreach($this->fields as $field) {  
			                       echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_aerodromioapostasi","show_title",true);
			               }
		                   ?>
		            </b></span>
                            <br />
                                 <?php
				      /* Display Fields */
	                              foreach($this->fields as $field) {
			                      echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_aerodromioapostasi");
			              } 
	                          ?>
                         </div>

                         <div style="float:left; display:inline-block;margin:0px 10px;">
                             <span><b>
                                  <?php //ad_kontinoteripoliapostasi
                   		       foreach($this->fields as $field) {  
			                       echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_kontinoteripoliapostasi","show_title",true);
			               }
		                   ?>
			     </b></span>
                             <br />
                                  <?php
					/* Display Fields */
		                       foreach($this->fields as $field) {
			                       echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_kontinoteripoliapostasi");
			               } 
				   ?>
                         </div>
                         <div style=" float:left; display:inline-block;margin:0px 10px;">                     
                            <span><b>
                                  <?php //ad_limaniapostasi
	                               foreach($this->fields as $field) {  
	                                       echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_limaniapostasi", "show_title",true);
	                               }
                                   ?>
	                    </b></span>
	                    <br />
                                  <?php
				       /* Display Fields */
	                               foreach($this->fields as $field) {
	                                       echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_limaniapostasi");
                                       }  
                                   ?>
                         </div>
                     </div>
                    <div style="width:90%; float:left; display:inline-block">
                         <br />
                     </div>

 <!--Telos Απόσταση από αεροδρόμιο->
                    
                     
                     
                     
<!--Emvadon Adeia-->
                     <div style="width:120%; float:left; display:inline-block">
<!--Emvadon Oikopedou-->
                         <div style=" float:left; display:inline-block;margin:0px 10px;">
                             <span><b>
                                  <?php //Εμβαδόν Οικοπέδου
		                       foreach($this->fields as $field) {  
			                       echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_emvadonoikop","show_title",true);
			               }
		                   ?>
		            </b></span>
                            <br />
                                 <?php
				      /* Display Fields */
	                              foreach($this->fields as $field) {
			                      echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_emvadonoikop");
			              } 
	                          ?>
                         </div>
<!--Telos Emvadon Oikopedou-->
<!--Emvadon Ktismatos-->
                         <div style="float:left; display:inline-block;margin:0px 10px;">
                             <span><b>
                                  <?php //Εμβαδόν Κτίσματος
                   		       foreach($this->fields as $field) {  
			                       echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_ktisma","show_title",true);
			               }
		                   ?>
			     </b></span>
                             <br />
                                  <?php
					/* Display Fields */
		                       foreach($this->fields as $field) {
			                       echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_ktisma");
			               } 
				   ?>
                         </div>
<!--Telos Emvadon Ktismatos-->
<!--Oikodomisimo me adeia-->
                         <div style=" float:left; display:inline-block;margin:0px 10px;">                     
                            <span><b>
                                  <?php //Οικοδομήσιμο με άδεια ανέγερσης κατοικίας (τ.μ)
	                               foreach($this->fields as $field) {  
	                                       echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_artiokaioikodomisimomeadeiaanegersiskatoikias", "show_title",true);
	                               }
                                   ?>
	                    </b></span>
	                    <br />
                                  <?php
				       /* Display Fields */
	                               foreach($this->fields as $field) {
	                                       echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_artiokaioikodomisimomeadeiaanegersiskatoikias");
                                       }  
                                   ?>
                         </div>
<!--Telos Oikodomisimo me adeia-->
                     </div>
<!--Telos Emvadon Adeia-->

                     <div style="width:90%; float:left; display:inline-block">
                         <br />
                     </div>
                 </div>
<!--Telos Stoixeia Akinhtou -->

<!--Extra Xaraktiristika-->    
                 <div style="width:90%; float:left; display:inline-block">
<!--Xaraktiristika-->
                         <div style="width:90%; float:left; display:inline-block">
                             <span class="blue"><b>
	                         <?php //Έξτρα Χαρακτηριστικά
	                              foreach($this->fields as $field) {  
		                              echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_xaraktiristika","show_title",true);
		                      }
	                          ?>
                             </b></span>
                             <br />
	                         <?php
		                      /* Display Fields */
                                     foreach($this->fields as $field) {
		                             echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_xaraktiristika");
		                     }  
	                          ?>
                         </div>
<!--Telos Xaraktiristika-->
                         <div style="width:90%; float:left; display:inline-block">
                             <br />
                         </div>
<!--Thea-->
                         <div style="width:30%; float:left; display:inline-block">
                             <span><b>
                                  <?php //Θέα
        	                       foreach($this->fields as $field) {  
	        	                       echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_thea","show_title",true);
			               }
	                           ?>
                              </b></span>
	                      <br />
	                         <?php
        	                      /* Display Fields */
		                      foreach($this->fields as $field) {
			                      echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_thea");
			              }  
	                          ?>
                         </div>
<!--Telos Thea--> 
<!--Typos Thermansis-->
                         <div style="width:40%; float:left; display:inline-block">
                             <span><b>
	                          <?php //Τύπος Θέρμανσης
		                       foreach($this->fields as $field) {  
			                       echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_tuposthermansis","show_title",true);
			               }
	                           ?>
                             </b></span>
                             <br />
	                          <?php
		                       /* Display Fields */
		                       foreach($this->fields as $field) {
			                       echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_tuposthermansis");
           		               }  
	                           ?>
                         </div>
<!--Telos Typos Thermansis-->
<!--Prosanatolismos-->
                         <div style="width:20%; float:left; display:inline-block">
                             <span><b>
	                          <?php //Προσανατολισμός
		                       foreach($this->fields as $field) {  
			                       echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_prosanatolismos","show_title",true);
			               }
	                           ?>
                             </b></span>
                             <br />
	                          <?php
		                       /* Display Fields */
		                       foreach($this->fields as $field) {
			                       echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_prosanatolismos");
			               }  
	                           ?>
                         </div>
<!--Telos Prosanatolismos-->
                         <div style="width:90%; float:left; display:inline-block">
                             <br />
                         </div>
<!--Apostasi apo ti thalassa-->
                     <div style="width:90%; float:left; display:inline-block">  
<!--Apostasi apo ti thalassa spiti-->
                         <div style="width:30%; float:left; display:inline-block">
                             <span><b>
	                          <?php //Απόσταση από Θάλασσα
        	                       foreach($this->fields as $field) {  
			                       echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_apostasithalassa","show_title",true);
			               }
	                           ?>
                             </b></span>
	                     <br />
	                          <?php
 	                               /* Display Fields */
		                       foreach($this->fields as $field) {
			                       echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_apostasithalassa");
			               }  
	                           ?>
                         </div>
                     </div>
.                 </div>         
<!--Telos Extra Xaraktiristika--> 
      
                 <div style="width:90%; float:left; display:inline-block">
                     <br />
                 </div>
<!--Perigrafi akinitou eswterika-->
                 <div style="width:90%; float:left; display:inline-block">
                     <span class="blue"><b>
                         <?php //Περιγραφή ακινήτου εσωτερικά
                              foreach($this->fields as $field) {  
			              echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_perigrafhakinhtoueswterika","show_title",true);
			      }
                          ?>
                     </b></span>
	             <br />
	                 <?php
	                      /* Display Fields */
		              foreach($this->fields as $field) {
			              echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_perigrafhakinhtoueswterika");
			      }  
	                  ?>
                 </div>
<!--Telos Perigrafi akinitou eswterika-->  
    
                 <div style="width:90%; float:left; display:inline-block">
                     <br />
                 </div>
<!--Kouzina-Saloni-Ypnodomatio-->
                 <div style="width:90%; float:left; display:inline-block">
<!--Kouzina-->
                     <div style="width:35%; float:left; display:inline-block">
                         <span><b>
                              <?php //Κουζίνα
	                           foreach($this->fields as $field) {  
		                           echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_kouzina","show_title",true);
		                   }
                               ?>
                         </b></span>
                         <br />
                              <?php
	                           /* Display Fields */
	                           foreach($this->fields as $field) {
		                           echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_kouzina");
		                   }  
                               ?>
                     </div>
<!--Telos Kouzina-->
<!--Saloni-->
                     <div style="width:25%; float:left; display:inline-block">
                         <span><b>
                              <?php //Σαλόνι
	                           foreach($this->fields as $field) {  
		                           echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_saloni","show_title",true);
		                   }
                               ?>
                         </b></span>
                         <br />
                              <?php
	                           /* Display Fields */
	                           foreach($this->fields as $field) {
		                           echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_saloni");
		                   }  
                               ?> 
                     </div>
<!--Telos Saloni-->
<!--Ypnodomatio-->
                     <div style="width:35%; float:left; display:inline-block">
                         <span><b>
                              <?php //Υπνοδωμάτια
                            	   foreach($this->fields as $field) {  
		                           echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_ypnodwmatia","show_title",true);
		                   }
                               ?>
                         </b></span>
	                 <br />
                              <?php
	                           /* Display Fields */
	                           foreach($this->fields as $field) {
		                           echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_ypnodwmatia");
		                   }  
                               ?>
                     </div> 
<!--Telos Ypnodomatio-->
                 </div>
<!--Telos Kouzina-Saloni-Ypnodomatio-->

                 <div style="width:90%; float:left; display:inline-block">
                     <br />
                 </div>
<!--Mpanio-Dapeda-Eswteriki Skala-->
                 <div style="width:90%; float:left; display:inline-block">
<!--Mpanio-->
                     <div style="width:35%; float:left; display:inline-block">
                         <span><b>
                              <?php //Μπάνιο
                          	   foreach($this->fields as $field) {  
		                           echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_mpanio","show_title",true);
		                   }
                               ?>
                         </b></span>
                         <br />
                              <?php
	                           /* Display Fields */
                      	           foreach($this->fields as $field) {
		                           echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_mpanio");
		                   }  
                               ?>
                     </div>
<!--Telos Mpanio-->
<!--Dapeda-->
                     <div style="width:25%; float:left; display:inline-block">
                         <span><b>
                              <?php //Δάπεδα
                           	   foreach($this->fields as $field) {  
		                           echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_dapeda","show_title",true);
		                   }
                               ?>
                        </b></span>
                        <br />
                              <?php
	                           /* Display Fields */
	                           foreach($this->fields as $field) {
		                           echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_dapeda");
		                   }  
                               ?> 
                     </div>
<!--Telos Dapeda-->
<!--Eswteriki Skala-->
                     <div style="width:35%; float:left; display:inline-block">
                     <span><b>
                          <?php //Εσωτερική σκάλα
                               foreach($this->fields as $field) {  
		                       echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_eswterikiskala","show_title",true);
		               }
                           ?>
                     </b></span>
	             <br />
                          <?php
	                       /* Display Fields */
	                       foreach($this->fields as $field) {
		                       echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_eswterikiskala");
		               }  
                           ?>
                     </div> 
<!--Telos Eswteriki Skala-->
                 </div>
<!--Telos Mpanio-Dapeda-Eswteriki skala-->
                 <div style="width:90%; float:left; display:inline-block">
                     <br />
                 </div>
<!--Tabania-Tzamia-Patari-->
                 <div style="width:90%; float:left; display:inline-block">
<!--Tavania-->
                     <div style="width:35%; float:left; display:inline-block">
                         <span><b>
                               <?php //Ταβάνια
	                            foreach($this->fields as $field) {  
		                            echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_tavania","show_title",true);
		                    }
                                ?>
                         </b></span>
                         <br />
                               <?php
	                            /* Display Fields */
	                            foreach($this->fields as $field) {
		                            echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_tavania");
		                    }  
                                ?>
                     </div>
<!--Telos Tavania-->
<!--Tzamia-->
                     <div style="width:25%; float:left; display:inline-block">
                         <span><b>
                              <?php //Τζάμια
	                           foreach($this->fields as $field) {  
	                     	           echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_adtzamia","show_title",true);
		                   }
                               ?>
                         </b></span>
                         <br />
                              <?php
	                           /* Display Fields */
	                           foreach($this->fields as $field) {
		                           echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_adtzamia");
		                   }  
                               ?> 
                     </div>
<!--Telos Tzamia-->
<!--Patari-->
                     <div style="width:25%; float:left; display:inline-block">
                         <span><b>
                              <?php //Πατάρι
	                           foreach($this->fields as $field) {  
		                           echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_patari","show_title",true);
		                   }
                               ?>
                         </b></span>
	                 <br />
                              <?php
	                           /* Display Fields */
	                           foreach($this->fields as $field) {
		                           echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_patari");
		                   }  
                               ?>
                     </div> 
<!--Telos Patari-->
                 </div>
<!--Telos Tabania-Tzamia-Patari-->

                 <div style="width:90%; float:left; display:inline-block"><br /></div>
<!--Perigrafi akinitou ekswterika-->
                     <div style="width:100%;  display:inline-block">
                         <span class="blue"><b>
                               <?php //Περιγραφή ακινήτου εξωτερικά
		                    foreach($this->fields as $field) {  
			                    echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_perigrafhakinhtouekswterika","show_title",true);
			            }
                                ?>
                        </b></span>
	                <br />
	                       <?php
	                            /* Display Fields */
		                    foreach($this->fields as $field) {
			                    echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_perigrafhakinhtouekswterika");
		                    }  
	                        ?>
                     </div>
<!--Telos Perigrafi akinitou ekswterika-->  

                 <div style="width:90%; float:left; display:inline-block">
                     <br />
                 </div>
<!--Veranta-Pisina-Roof Garden-->
                 <div style="width:90%; float:left; display:inline-block">
<!--Veranta-->
                     <div style="width:30%; float:left; display:inline-block">
                         <span><b>
                              <?php //Βεράντα
                                   foreach($this->fields as $field) {  
		                           echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_veranta","show_title",true);
		                   }
                               ?>
                         </b></span>
                         <br />
                              <?php
                          	   /* Display Fields */
                                   foreach($this->fields as $field) {
                      		           echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_veranta");
                        	   }  
                               ?>
                     </div>
<!--Telos Veranta-->

<!--Pisina-->
                     <div style="width:30%; float:left; display:inline-block">
                         <span><b>
                              <?php //Πισίνα
                              	   foreach($this->fields as $field) {  
                      		           echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_picina","show_title",true);
 		                   }
                               ?>
                         </b></span>
                         <br />
                              <?php
	                           /* Display Fields */
	                           foreach($this->fields as $field) {
		                           echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_picina");
                      		   }  
                               ?>
                     </div>
<!--Telos Pisina-->

<!--Roof Garden-->
                     <div style="width:30%; float:left; display:inline-block">
                         <span><b>
                              <?php //Roof garden
                              	   foreach($this->fields as $field) {  
                        		   echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_roofgarden","show_title",true);
                     		   }
                               ?>
                         </b></span>
                         <br />
                              <?php
                                   /* Display Fields */
                      	           foreach($this->fields as $field) {
                     		           echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_roofgarden");
		                   }   
                               ?>
                     </div>
<!--Telos Roof Garden-->
                 </div>
<!--Telos Veranta-Pisina-Roof Garden-->
                 <div style="width:90%; float:left; display:inline-block">
                     <br />
                 </div>
                 
                  <div style="width:90%; float:left; display:inline-block">
                     <br />
                 </div>
<!--Veranta-Pisina-Roof Garden-->
                 <div style="width:757px; float:left; display:inline-block">
<!--Veranta--><style>

				#ad_description{
					background:url(images/ad_description_bg.png) no-repeat;
					width:747px;
					height:188px;
					resize:none;
					
					border:none !important;
					padding:4px 5px 4px 5px  !important;
					box-shadow:none !important;
					
					
				}
				</style>
                     <div style="width:100%; float:left; display:inline-block">
                         <span  class="blue"><b>
                              <?php //Βεράντα
                                   foreach($this->fields as $field) {  
		                           echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_description","show_title",true);
		                   }
                               ?>
                        <br />
						<span style="color:#000;"><?php echo JText::_('ADSMANAGER_PERIGRAFI_INFO');?>	</span>	 </b>		</span>
                         <br />
                              <?php
                          	   /* Display Fields */
                                   foreach($this->fields as $field) {
                      		           echo $this->field->showFieldForm_vExnet($field,$this->content,$this->default,"ad_description");
                        	   }  
                               ?>
                     </div>
                     </div>
<!--Fotografies-->
                 <div style="width:90%; float:left; display:inline-block">
                     <span class="blue"><b><?php echo JText::_('ADSMANAGER_VIEWS_PHOTOS');?></b></span>
                     <br />
                         <?php	
                              if ($this->conf->nb_images > 0){
                                  echo "<br /> <span>".JText::_('ADSMANAGER_FORM_AD_IMAGE_TEXT')."</span>"; 
                                  echo "<br />";
                              }
        
                              for($i = 1; $i < $this->conf->nb_images + 1; $i++){
                              $ext_name = chr(ord('a')+$i-1);
                          ?>
                    <br />
                     <span ><b><?php echo JText::_('ADSMANAGER_FORM_AD_PICTURE')." ".$i; ?></b></span>
                     <span><input id="ad_picture<?php echo $i;?>" type="file" name="ad_picture<?php echo $i;?>" /></span>
                          <?php
                               if ($this->isUpdateMode) {
                                $pic = JPATH_BASE."/images/com_adsmanager/ads/".$this->content->id.$ext_name."_t.jpg";
                                if ( file_exists( $pic)) {
                                    echo "<img src='".$this->baseurl."images/com_adsmanager/ads/".$this->content->id.$ext_name."_t.jpg?time=".time()."' align='top' border='0' alt='image".$this->content->id."' />";
                                   echo "<input type='checkbox' name='cb_image$i' value='delete' />".JText::_('ADSMANAGER_CONTENT_DELETE_IMAGE');
                                }
                               }
                   // echo "</td></tr>";
                              }
							  
								  
             	           ?>
                     <br />
					 <?php echo $this->content->id?>
			  <?php   
			       if (function_exists("editPaidAd")){
			    	   editPaidAd($this->content,$this->isUpdateMode,$this->conf); /*MAD*/
			       }
			   ?>                     
                     <br />
                     <div style="width:100%; float:left; display:block;">
			 <input type="submit" value="<?php echo JText::_('ADSMANAGER_FORM_SUBMIT_TEXT'); ?>" />
		     </div>
                 </div>

<!--Telos fotografies-->
             
     
    


  <?php echo JHTML::_( 'form.token' ); ?>
  </form>
            </div>
        </div>
    </div>
</div>
<!-- END Versikon 3 by MAD -->

  <!-- form -->

<script type="text/javascript">
updateFields();
</script>

<script>



	$(document).ready(function(){	
		$('#akin_cats').find('input').first().parent().parent().css({'cssText':'border:1px solid #F00;'});
})
</script>