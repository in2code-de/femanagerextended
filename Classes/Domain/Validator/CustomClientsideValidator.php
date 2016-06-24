<?php
namespace In2\Femanagerextended\Domain\Validator;

class CustomClientsideValidator extends \In2\Femanager\Domain\Validator\ClientsideValidator {

	/**
	 * Custom Validator
	 * 		Activate via TypoScript - e.g. plugin.tx_femanager.settings.new.validation.username.custom = validationSetting
	 *
	 * @param \string $value Given value from input field
	 * @param \string $validationSetting TypoScript Setting for this field
	 * @return bool
	 */
	protected function validateCustom($value, $validationSetting) {

		// check if string has string inside
		if (stristr($value, $validationSetting)) {
			return TRUE;
		}
		return FALSE;
	}

}

?>