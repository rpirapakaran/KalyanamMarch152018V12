<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2018-03-13 03:23:11
Compiled file from: C:\Bitnami\wampstack-7.1.15-0\apache2\htdocs\kalyanamdevv12\_protected\app/system/modules/affiliate\views/base\tpl\signup\step1.tpl
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
?><div class="col-md-8"> <h1 class="pink2 italic underline"><?php echo t('Affiliate Platform with %site_name%'); ?></h1> <?php JoinForm::step1() ;?></div><div class="col-md-4"> <?php $this->display('login.inc.tpl'); ?></div>