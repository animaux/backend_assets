<?php

	Class extension_backend_assets extends Extension{

		public function getSubscribedDelegates(){
			return array(
				array(
					'page'     => '/backend/',
					'delegate' => 'InitaliseAdminPageHead',
					'callback' => 'appendAssets'
				),
			);
		}

	/*-------------------------------------------------------------------------
		Delegates:
	-------------------------------------------------------------------------*/

		public function appendAssets() {
			
			// Styles
			$styles = '/workspace/backend-assets/css/backend.css';
			if(file_exists(DOCROOT . $styles)) {
				Administration::instance()->Page->addStylesheetToHead(URL . $styles, 'screen', 1000, false);
			}
			
			// Scripts
			$scripts = '/workspace/backend-assets/js/backend.js';
			if(file_exists(DOCROOT . $scripts)) {
				Administration::instance()->Page->addScriptToHead(URL . $scripts, 1001);
			}
		}

	}
