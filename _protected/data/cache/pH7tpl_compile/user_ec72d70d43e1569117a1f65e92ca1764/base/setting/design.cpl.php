<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2018-03-13 03:10:31
Compiled file from: C:\Bitnami\wampstack-7.1.15-0\apache2\htdocs\kalyanamdevv12\_protected\app/system/modules/user\views/base\tpl\setting\design.tpl
Template Engine: PH7Tpl version 1.3.0 by Pierre-Henry Soria
*/
/***************************************************************************
 *     pH7CMS Social Dating CMS | Pierre-Henry Soria
 *               --------------------
 * @since      Mon Mar 21 2011
 * @author     SORIA Pierre-Henry
 * @email      hello@ph7cms.com
 * @link       http://ph7cms.com
 * @copyright  (c) 2011-2018, Pierre-Henry Soria. All Rights Reserved.
 * @license    Creative Commons Attribution 3.0 License - http://creativecommons.org/licenses/by/3.0/
 ***************************************************************************/
?><div class="col-md-8"> <p> <a href="<?php echo $path_img_background; ?>" data-popup="image"> <img src="<?php echo $path_img_background; ?>" alt="<?php echo t('Wallpaper'); ?>" title="<?php echo t('Your current wallpaper'); ?>" width="160" height="150" /> </a> </p> <?php if(strpos($path_img_background, UserDesignCore::NONE_IMG_FILENAME) === false) { ?> <?php if($is_admin_auth AND !$is_user_auth) { ?> <?php LinkCoreForm::display(t('Remove wallpaper?'), null, null, null, array('del'=>1)) ;?> <?php } else { ?> <?php LinkCoreForm::display(t('Remove wallpaper?'), 'user', 'setting', 'design', array('del'=>1)) ;?> <?php } ?> <?php } ?> <?php DesignForm::display() ;?></div>