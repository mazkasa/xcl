<?php
// $Id: MyBlocksAdminForXCL21.class.php ,ver 0.0.7.1 2011/01/27 16:10:00 domifara Exp $

require_once dirname(__FILE__).'/MyBlocksAdmin.class.php' ;

class MyBlocksAdminForXCL21 extends MyBlocksAdmin
{


    public function MyBlocksAadminForXCL21()
    {
    }

//HACK by domifara for php5.3+
//function &getInstance()
public static function &getInstance()
{
    static $instance;
    if (!isset($instance)) {
        $instance = new MyBlocksAdminForXCL21();
        $instance->construct() ;
    }
    return $instance;
}


// virtual
// options
public function renderCell4BlockOptions($block_data)
{
    if ($this->target_dirname && '_' !== substr($this->target_dirname, 0, 1)) {
        $langman =& D3LanguageManager::getInstance() ;
        $langman->read('admin.php', $this->target_dirname) ;
    }

    $bid = (int)$block_data['bid'];

//HACK by domifara
//	$block = new XoopsBlock( $bid ) ;
    $handler =& xoops_gethandler('block');
    $block =& $handler->create(false) ;
    $block->load($bid) ;

    $legacy_block =& Legacy_Utils::createBlockProcedure($block) ;
    return $legacy_block->getOptionForm() ;
}

    // public function checkFck()
    // {
    //     return (! altsysUtils::isInstalledXclHtmleditor() && file_exists(XOOPS_ROOT_PATH.'/common/fckeditor/fckeditor.js'));
    // }
}
