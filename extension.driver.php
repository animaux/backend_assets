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
			$styles = '/workspace/backend-assets/custom.css';
			if(file_exists(DOCROOT . $styles)) {
				Administration::instance()->Page->addStylesheetToHead(URL . $styles . '?v=' . date('YmdHi', filemtime(DOCROOT . $styles)), 'screen', 1000, false);
			}
			
			// Scripts
			$scripts = '/workspace/backend-assets/custom.js';
			if(file_exists(DOCROOT . $scripts)) {
				Administration::instance()->Page->addScriptToHead(URL . $scripts . '?v=' . date('YmdHi', filemtime(DOCROOT . $scripts)), 1001);
			}
		}

	}
