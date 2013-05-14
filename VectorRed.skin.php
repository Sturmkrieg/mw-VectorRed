<?php
/**
* Skin file for skin VectorRed.
*
* @file
* @ingroup Skins
*/

require_once( dirname( __FILE__ ) . '/../Vector.php' );

/**
 * SkinTemplate class for Sturmkrieg skin
 * @ingroup Skins
 */
class SkinVectorBlue extends SkinVector {

	var $skinname = 'vectorred', $stylename = 'vectorred';

	/**
	 * @param $out OutputPage object
	 */
	function setupSkinUserCss( OutputPage $out ){
		parent::setupSkinUserCss( $out );
		$out->addModuleStyles( "skins.vectorred" );
	}

}