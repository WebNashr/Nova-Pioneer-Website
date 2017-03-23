<?php

class ReadMoreFunctions {

	public static function createSelectBox($params, $name, $selectedValue) {

		$selectBox = "<select name='".$name."' class=\"selectpicker\">";
		foreach ($params as $value => $name) {
			$selected = "";
			if($value == $selectedValue) {
				$selected = "selected";
			}
			$selectBox .= "<option value='".$value."' $selected>$name</option>";
		}
		$selectBox .= "</select>";
		return $selectBox;
	}
}