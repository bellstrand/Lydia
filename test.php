<?php
/**
 * A utility class to easy creating and handling of forms
 * 
 * @package LydiaCore
 */


/**
* Properties
*/


/**
* Constructor
*
* @param string name of the element.
* @param array attributes to set to the element. Default is an empty array.
*/

  
/**
* Implementing ArrayAccess for this->attributes
*/


/**
* Get HTML code for a element. 
*
* @returns HTML code for the element.
*/


/**
* Validate the form element value according a ruleset.
*
* @param $rules array of validation rules.
* returns boolean true if all rules pass, else false.
*/


/**
* Use the element name as label if label is not set.
*/


/**
* Use the element name as value if value is not set.
*/


/**
* Constructor
*
* @param string name of the element.
* @param array attributes to set to the element. Default is an empty array.
*/


/**
* Constructor
*
* @param string name of the element.
* @param array attributes to set to the element. Default is an empty array.
*/


/**
* Constructor
*
* @param string name of the element.
* @param array attributes to set to the element. Default is an empty array.
*/

class CFrom implements ArrayAccess{
	/**
	* Properties
	*/
	public $form;
	public $elements;

	/**
	* Constructor
	*/
	public function __construct($form = array(), $elements = array()){
		$this->form = $form;
		$this->elements = $elements;
	}

	/**
	* Implementing ArrayAccess for this->elements
	*/
	public function offsetSet($offset, $value){
		if(is_null($offset)){
			$this->elements[] = $value;
		}
		else{
			$this->elements[$offset] = $value;
		}
	}
	public function offsetExists($offset){
		return isset($this->elements[$offset]);
	}
	public function offsetUnset($offset){
		unset($this->elements[$offset]);
	}
	public function offset($offset){
		return isset($this->elements[$offset]) ? $this->elements[$offset] : null;
	}

	/**
	* Add a form element
	*
	* @param $element CFormElement the formelement to add.
	* @returns $this CForm
	*/
	

	/**
	* Set validation to a form element
	*
	* @param $element string the name of the formelement to add validation rules to.
	* @param $rules array of validation rules.
	* @returns $this CForm
	*/
	

	/**
	* Return HTML for the form or the formdefinition.
	*
	* @param $type string what part of the form to return.
	* @returns string with HTML for the form.
	*/


	/**
	* Return HTML for the elements
	*/


	/**
	* Check if a form was submitted and perform validation and call callbacks.
	*
	* The form is stored in the session if validation fails. The page should then be redirected
	* to the original form page, the form will populate from the session and should then be 
	* rendered again.
	*
	* @returns boolean true if validates, false if not validate, null if not submitted.
	*/

}