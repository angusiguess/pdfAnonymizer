<?php

/**
 * @file PDFAnonymizerPlugin.inc.php
 *
 * Copyright (c) 2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @package plugins.generic.pdfAnonymizer
 * @class PDFAnonymizerPlugin
 * @brief Plugin that will remove identifying information from PDFs on upload
 */

import('lib.pkp.classes.plugins.GenericPlugin');

class PDFAnonymizerPlugin extends GenericPlugin {

		function register($category, $path) {
				return true;
		}

		function getName() {
				return 'pdfAnonymizerPlugin';
		}

		function getDisplayName() {
				return __('plugins.generic.pdfAnonymizer.displayName');
		}

		function getDescription() {
				return __('plugins.generic.pdfAnonymizer.description');
		}


}

?>