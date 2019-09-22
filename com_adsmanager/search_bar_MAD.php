<?php include(JPATH_SITE."/components/com_adsmanager/load_cities_MAD.php");?>
<script language="javascript" type="text/javascript">
(function($){ 
	$(document).ready(function(){
		load_Nomous_MAD(<? echo '"gr", document.ads_search_Form.city,document.ads_search_Form.perioxi,"'.$nomos.'","'.$dimos.'","city","perioxi","'.JText::_('ADSMANAGER_MENU_SEARCH_CITY').'","'.JText::_('ADSMANAGER_MENU_SEARCH_PERIOXI').'"';?>);
		set_span_title_MAD('eidos_akinitou', 'eidos_akinitou_span');
		set_span_title_MAD('city', 'city_span');
		set_span_title_MAD('perioxi', 'perioxi_span');
		load_all_Dimous(<?php echo 'document.ads_search_Form.country.value,document.ads_search_Form.perioxi,  "perioxi"';?>);

		$('#city').change(function(){
			$('#uniform-perioxi span').text('');
		});
		
		$('#country').change(function(){
				city_change = false;
				set_span_title_MAD('country', 'country_span');
				
				$('#city, #perioxi').val('0');
        	      set_span_title_MAD('city', 'city_span');
				
				$('#uniform-city span').text('<?php echo JText::_('ADSMANAGER_FORM_CITY');?>');
				$('#uniform-perioxi span').text('<?php echo JText::_('ADSMANAGER_MENU_SEARCH_PERIOXI');?>');
				
				if($(this).val() == 'gr'){
					$('#uniform-perioxi').show();
					$('#uniform-city span').text('<?php echo JText::_('ADSMANAGER_FORM_CITY');?>');
				$('#uniform-perioxi span').text('<?php echo JText::_('ADSMANAGER_MENU_SEARCH_PERIOXI');?>');

				load_Dimous_MAD(<?php echo "document.ads_search_Form.country.value,document.ads_search_Form.city,document.ads_search_Form.perioxi,'','city','perioxi','".JText::_('ADSMANAGER_MENU_SEARCH_PERIOXI')."'";?>); 
				load_all_Dimous(<?php echo 'document.ads_search_Form.country.value,document.ads_search_Form.perioxi,  "perioxi"';?>);

				load_Nomous_MAD(<? echo '"gr", document.ads_search_Form.city,document.ads_search_Form.perioxi,"'.$nomos.'","'.$dimos.'","city","perioxi","'.JText::_('ADSMANAGER_MENU_SEARCH_CITY').'","'.JText::_('ADSMANAGER_MENU_SEARCH_PERIOXI').'"';?>);
				$('#city option').first().text('<?php echo JText::_('ADSMANAGER_FORM_CITY');?>');
				}else if($(this).val() == 'cy'){

					$('#uniform-city span').text('<?php echo JText::_('ADSMANAGER_FORM_CITY_CY');?>');
					$('#uniform-perioxi').show();
				load_Dimous_MAD(<?php echo "document.ads_search_Form.country.value,document.ads_search_Form.city,document.ads_search_Form.perioxi,'','city','perioxi','".JText::_('ADSMANAGER_MENU_SEARCH_PERIOXI')."'";?>); 
				load_all_Dimous(<?php echo 'document.ads_search_Form.country.value,document.ads_search_Form.perioxi,  "perioxi"';?>);
		load_Nomous_MAD(<? echo '"cy", document.ads_search_Form.city,document.ads_search_Form.perioxi,"'.$nomos.'","'.$dimos.'","city","perioxi","'.JText::_('ADSMANAGER_MENU_SEARCH_CITY').'","'.JText::_('ADSMANAGER_MENU_SEARCH_PERIOXI').'"';?>);
					$('#city option').first().text('<?php echo JText::_('ADSMANAGER_FORM_CITY_CY');?>');
				$('#uniform-perioxi span').text('<?php echo JText::_('ADSMANAGER_MENU_SEARCH_PERIOXI_CY');?>');
				}
				else{

					$('#uniform-city span').text('<?php echo JText::_('ADSMANAGER_FORM_CITY_BL');?>');

					$('#uniform-perioxi').hide();
		load_Nomous_MAD(<? echo '"bl", document.ads_search_Form.city,document.ads_search_Form.perioxi,"'.$nomos.'","'.$dimos.'","city","perioxi","'.JText::_('ADSMANAGER_MENU_SEARCH_CITY').'","'.JText::_('ADSMANAGER_MENU_SEARCH_PERIOXI').'"';?>);
					$('#city option').first().text('<?php echo JText::_('ADSMANAGER_FORM_CITY_BL');?>');
				}
		})
		city_change = false;
		$('#city').change(function(){
			
			city_change = true;
		})
		
		
		$('#perioxi').change(function(){
			
			if(city_change == false){

			
				var selected_city = $('#perioxi').val().replace(/\d/g,'');
				selected_city = selected_city.substr(0,(selected_city.length-1));

				$('#city').val(selected_city);
				$('#city option').each(function(index,element){
					
					if($(element).attr('value') == selected_city){
						$('#uniform-city span').text($(element).text());
						
					}
				})
				
			}
				
		})


	});
	
})(jQuery);
</script>
<?php
function adsmanager_Select_Field_MAD($searchfields, $field_values, $field_name) {
	$aa = '';
	foreach($searchfields as $fsearch) {
		
		$k = 0;
		if ($fsearch->name == $field_name) {
			for ($i=0 ; $i < $fsearch->rows;$i++) {
				for ($j=0 ; $j < $fsearch->cols;$j++) {
					$aa[] = array( $field_values[$fsearch->fieldid][$k]->fieldtitle,$field_values[$fsearch->fieldid][$k]->fieldvalue);
					//echo "<pre>";print_r($field_values[$fsearch->fieldid][$k]);echo"</pre>";
					$k++;
				}
			}
		}
				
	}
	return $aa;
}
//echo '<div style="display:none"><pre>';print_r($filters);echo'</pre><pre>';print_r($searchfields);echo'</pre></div>';
?>		
	
	
	
 <div class="adsmanager_search_MAD">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" >
		<tr>
			<td style="width:auto;">
				<div style="position:relative;">
               
					<select name="eidos_akinitou" id="eidos_akinitou" >
					<option  value="-1"><?php echo JText::_('ADSMANAGER_MENU_EIDOS_AKINITOU'); ?></option>
					<?php 
					
					if(($_GET["option"] == 'com_adsmanager') && (($_GET["view"] == 'list') || ($_GET["view"] == 'details') || ($_GET["view"] == 'result'))){

						$db =JFactory::getDBO();
						
						
						$ad_eidos_akin_id = '56';
						
						$result_ad_eidos_akin = $db->setQuery("SELECT * FROM #__adsmanager_field_values WHERE fieldid = '".$ad_eidos_akin_id."' ORDER BY ordering");
						$result_ad_eidos_akin = $db->loadObjectList();
						
						foreach($result_ad_eidos_akin as $row){
							
							$ad_eidos_akin_id = $row->fieldvalueid;
							$ad_eidos_akin_title = $row->fieldtitle;
							$ad_eidos_akin_value = $row->fieldvalue;
						
								echo '<option value="'.$ad_eidos_akin_value .'">'.$ad_eidos_akin_title.'</option>';
						}
						
					}else{
					
						//$this->adsmanagerModuleSelectCategories(0,"",$this->cats,$this->get_eidos_akinitou);
						$eidosakinitou_arr = adsmanager_Select_Field_MAD($searchfields, $field_values, 'ad_eidosakinitou');
						foreach($eidosakinitou_arr as $eidos) { 
						$final_eidos_value = $eidos[1]+1;
						if($eidos[0] !=''){
							echo '<option value="'.$final_eidos_value .'" '.(($ad_eidosakinitou==$eidos[1])?'selected="selected"':'').'>'.$eidos[0].'</option>';
						}
						}
					}
					?>
					</select></span>
				</div>
			</td>
             <td style="width:1%;"></td>
            <td style="width:auto;">
				<div style="position:relative;">
					<select name="country" id="country">
					<option value="gr" ><?php echo JText::_('ADSM_COUNTRY_GREECE'); ?></option>
							<option value="cy"><?php echo JText::_('ADSM_COUNTRY_CYPRUS');?></option>
							<option value="bl"><?php echo JText::_('ADSM_COUNTRY_BULGARIA');?></option>
					</select></span>
				</div>
			</td>

            <td style="width:1%;"></td>
            <td style="width:auto;">
				<div style="position:relative;">
					<select name="city" id="city" onChange="load_Dimous_MAD(<?php echo "document.ads_search_Form.country.value,document.ads_search_Form.city,document.ads_search_Form.perioxi,'','city','perioxi','".JText::_('ADSMANAGER_MENU_SEARCH_PERIOXI')."'";?>);set_span_title_MAD('city', 'city_span');">
						<option value="0"><?php echo JText::_('ADSMANAGER_FORM_CITY'); ?></option>
					</select></span>
				</div>
			</td>
			<td style="width:1%;"></td>
			<td style="width:auto;">
				<div style="position:relative;">
					<select name="perioxi" id="perioxi" onChange="load_all_Dimous(<?php echo 'document.ads_search_Form.country.value,document.ads_search_Form.perioxi, "perioxi"';?>);set_span_title_MAD('perioxi', 'perioxi_span');">
						<option value="0"><?php echo JText::_('ADSMANAGER_MENU_SEARCH_PERIOXI'); ?></option>
					</select></span>
				</div>
			</td>
			
			<td style="width:1%;"></td>
			<td style="width:auto;white-space:nowrap;"><?php echo JText::_('ADSMANAGER_MENU_SEARCH_TIMI'); ?></td>
			<td style="width:1%;"></td>
			<td style="width:auto;">
				<input type="text" name="price_from" id="price_from" size="5" value="<?php if( !empty($price_from) ){ echo $price_from; }else{ echo JText::_('ADSMANAGER_MENU_SEARCH_TIMI_APO');}?>" onfocus="if(this.value=='<?php echo JText::_('ADSMANAGER_MENU_SEARCH_TIMI_APO'); ?>') this.value = '';" onblur="if( this.value=='') this.value='<?php echo JText::_('ADSMANAGER_MENU_SEARCH_TIMI_APO');?>';" />
			</td>
			<td style="width:1%;"></td>
			<td style="width:auto;">
				<input type="text" name="price_to" id="price_to" size="5" value="<?php if( !empty($price_to) ){ echo $price_to; }else{ echo JText::_('ADSMANAGER_MENU_SEARCH_TIMI_EOS'); }?>" onfocus="if(this.value=='<?php echo JText::_('ADSMANAGER_MENU_SEARCH_TIMI_EOS'); ?>') this.value = '';" onblur="if( this.value=='') this.value='<?php echo JText::_('ADSMANAGER_MENU_SEARCH_TIMI_EOS');?>';" />
			</td>
			<td style="width:1%;"></td>
			
			<td style="width:auto;white-space:nowrap;"><?php echo JText::_('ADSMANAGER_MENU_SEARCH_EMBADON_NEW'); ?></td>
			<td style="width:1%;"></td>
			<td style="width:auto;">
				<input type="text" name="embadom_from" id="embadom_from" size="5" value="<?php if( !empty($embadom_from) ){ echo $embadom_from; }else{ echo JText::_('ADSMANAGER_MENU_SEARCH_TIMI_APO');}?>" onfocus="if(this.value=='<?php echo JText::_('ADSMANAGER_MENU_SEARCH_TIMI_APO'); ?>') this.value = '';" onblur="if( this.value=='') this.value='<?php echo JText::_('ADSMANAGER_MENU_SEARCH_TIMI_APO');?>';" />
			</td>
			<td style="width:1%;"></td>
			<td style="width:auto;">
				<input type="text" name="embadom_to" id="embadom_to" size="5" value="<?php if( !empty($embadom_to) ){ echo $embadom_to; }else{ echo JText::_('ADSMANAGER_MENU_SEARCH_TIMI_EOS');}?>" onfocus="if(this.value=='<?php echo JText::_('ADSMANAGER_MENU_SEARCH_TIMI_EOS');?>') this.value = '';" onblur="if( this.value=='') this.value='<?php echo JText::_('ADSMANAGER_MENU_SEARCH_TIMI_EOS');?>';" />
			</td>
			<td style="width:1%;"></td>
			
			
			<td style="width:1%;"></td>
			
			<td align="right" style="width:auto;">
					<a href="JavaScript:void(0);" class="search_submit_MAD" onclick="
						if( document.getElementById('price_from').value == '<?php echo JText::_('ADSMANAGER_MENU_SEARCH_TIMI_APO');
						?>' ) document.getElementById('price_from').value = '';	if( document.getElementById('price_to').value == '<?php echo JText::_('ADSMANAGER_MENU_SEARCH_TIMI_EOS'); 
						?>' ) document.getElementById('price_to').value = ''; if( document.getElementById('embadom_from').value == '<?php echo JText::_('ADSMANAGER_MENU_SEARCH_TIMI_APO'); 
						?>' ) document.getElementById('embadom_from').value = '';
						if( document.getElementById('embadom_to').value == '<?php echo JText::_('ADSMANAGER_MENU_SEARCH_TIMI_EOS'); 
						?>' ) document.getElementById('embadom_to').value = ''; document.getElementById('ads_search_Form').submit()" /><?php echo JText::_('ADSMANAGER_MENU_SEARCH_BUTTON_2'); ?></a>
			</td>
		</tr>
	</table>
</div>
<input type="hidden" value="1" name="new_search" />
