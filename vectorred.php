<?php
/**
 * VectorRed skin
 *
 * @file
 * @ingroup Skins
 * @author Sasha Ehrenstein (http://www.sturmkrieg.de/Benutzer:Inquisitor_Ehrenstein)
 */

if( !defined( 'MEDIAWIKI' ) ) die( "This is an extension to the MediaWiki package and cannot be run standalone." );

$wgExtensionCredits['skin'][] = array (
        'path' => __FILE__,
        'name' => 'VectorRed',
        'url' => "http://www.sturmkrieg.de/Benutzer:Inquisitor_Ehrenstein",
        'author' => '[http://www.sturmkrieg.de/Benutzer:Inquisitor_Ehrenstein Inquisitor Ehrenstein]',
        'descriptionmsg' => 'mywiki-desc',
);

$wgValidSkinNames['vectorred'] = 'VectorRed';
$wgAutoloadClasses['SkinVectorRed'] = dirname(__FILE__).'/VectorRed.skin.php';
$wgExtensionMessagesFiles['VectorRed'] = dirname(__FILE__).'/VectorRed.i18n.php';

$wgResourceModules['skins.vectorred'] = array(
        'styles' => array(
                'VectorRed/screen.css' => array( 'media' => 'screen' ),
        ),
        
        'remoteBasePath' => &$GLOBALS['wgStylePath'],
        'localBasePath' => &$GLOBALS['wgStyleDirectory'],
        'dependencies' => 'skin.vector'
);
