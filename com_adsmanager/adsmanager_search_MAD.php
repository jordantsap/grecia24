<?php





$lang = JFactory::getLanguage();

$lang->load("com_adsmanager");


/****************************************************/

$catid = intval( JRequest::getInt('catid', -1 )); //6 polisi //7 enoikiasi

//$text_search = JRequest::getVar('tsearch','');

$app = &JFactory::getApplication();

$get_search = $app->getUserStateFromRequest('com_adsmanager.front_content.tsearch','tsearch',"");

//********** By Ambitos ****************//
$get_eidos_akinitou = $app->getUserStateFromRequest('com_adsmanager.front_content.eidos_akinitou','eidos_akinitou',"");		
//********** END By Ambitos ****************//

//MAD
//MAD



$fields[] = $params->get( 'field1', "") ;

$fields[] = $params->get( 'field2', "") ;

$fields[] = $params->get( 'field3', "") ;

$fields[] = $params->get( 'field4', "") ;

$fields[] = $params->get( 'field5', "") ;

$type = $params->get( 'type', "table") ;

$listfields="";



foreach($fields as $field)

{

	if (($listfields == "")&&($field != ""))

		$listfields .= "'$field'";

	if ($field != "")

		$listfields .= ",'$field'";

}



$fieldmodel  = new AdsmanagerModelField();

$field_values = array();

if ($listfields != "")

{

	$searchfields = $fieldmodel->getFieldsByName($listfields);

	$field_values = $fieldmodel->getFieldValues();


	foreach($searchfields as $field)

	{

		if ($field->cbfieldvalues != "-1")

		{

			/*get CB value fields */

			$cbfieldvalues = $fieldmodel->getCBFieldValues($field->cbfieldvalues);

			$field_values[$field->fieldid] = $cbfieldvalues;
			
			//echo "AMPA:".$field_values[$field->fieldid];
		}

	}

}


$categorymodel = new AdsmanagerModelCategory();

$cats = $categorymodel->getCatTree();


$baseurl = JURI::base();



$field = new JHTMLAdsmanagerField($conf,$field_values,"1",$fieldmodel->getPlugins(),$itemid,$baseurl);



//MAD
function adsmanagerModuleSelectField_MAD($searchfields, $field_values, $field_name) {
	$aa = '';
	foreach($searchfields as $fsearch) {
		$k = 0;
		if ($fsearch->name == $field_name) {
			for ($i=0 ; $i < $fsearch->rows;$i++) {
				for ($j=0 ; $j < $fsearch->cols;$j++) {
					$aa[] = array( $field_values[$fsearch->fieldid][$k]->fieldtitle,$field_values[$fsearch->fieldid][$k]->fieldvalue);
//echo "<div style='display:none'><pre>";print_r($field_values[$fsearch->fieldid][$k]);echo"</pre></div>";
					$k++;
				}
			}
		}
				
	}
	return $aa;
}
//$eidosakinitou_arr = adsmanagerModuleSelectField_MAD($searchfields, $field_values, 'ad_domatia');
//echo "<div style='display:none'><pre>";print_r($searchfields);echo"</pre></div>";
//echo "<div style='display:none'><pre>";print_r($eidosakinitou_arr);echo"</pre></div>";

//MAD





