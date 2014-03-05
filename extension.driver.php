<?php

	Class extension_admin_css_override extends Extension{

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
			$styles = URL . '/workspace/assets-backend/css/backend.css';
			if(file_exists($styles)) {
				Administration::instance()->Page->addStylesheetToHead($styles, 'screen', 1000, false);
			}
			
			// Scripts
			$scripts = URL . '/workspace/assets-backend/js/backend.js';
			if(file_exists($styles)) {
				Administration::instance()->Page->addScriptToHead($scripts', 1001);
			}
		}

	}
