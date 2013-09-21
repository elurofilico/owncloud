<?php

/**
 * ownCloud - roundcube mail plugin
 *
 * @author Martin Reinhardt
 * @copyright 2013 Martin Reinhardt contact@martinreinhardt-online.de
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU AFFERO GENERAL PUBLIC LICENSE for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

class OC_RoundCube_App_Return {

	public static $ERROC_CODE_NETWORK = '2';

	public static $ERROC_CODE_LOGIN = '1';

	private $errorOccurred;

	private $errorCode;

	private $errorDetails;

	private $htmlOutput;

	public function __construct() {
		$errorOccurred = false;
		$errorDetails = '';
		$htmlOutput = '';
	}

	/**
	 * append to the html output
	 * @param the html to append $html
	 */
	public function appendHtmlOutput($html) {
		$htmlOutput = $htmlOutput . $html;
	}

	/**
	 * return html output
	 */
	public function getHtmlOutput() {
		return $htmlOutput;
	}

	/**
	 * set the html output
	 * @param the html out put to set $html
	 */
	public function setHtmlOutput($html) {
		$htmlOutput = $html;
	}

	/**
	 * return the error code
	 */
	public function getErrorCode() {
		return $errorCode;
	}

	/**
	 * @param error code to set $errorCode
	 */
	public function setErrorCode($errorCode) {
		$errorCode = $errorCode;
	}

	/**
	 * return the error details
	 */
	public function getErrorDetails() {
		return $errorDetails;
	}

	/**
	 * @param error details to set $errorDtls
	 */
	public function setErrorDetails($errorDtls) {
		$errorDetails = $errorDtls;
	}

	/**
	 * return true if an error occurred, otherwise false
	 */
	public function isErrorOccurred() {
		return $errorOccurred;
	}

	/**
	 * @param error code to set $error
	 */
	public function setErrorOccurred($error) {
		$errorOccurred = $error;
	}

}
?>