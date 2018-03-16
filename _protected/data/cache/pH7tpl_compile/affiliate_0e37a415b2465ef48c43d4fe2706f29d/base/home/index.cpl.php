<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2018-03-13 03:18:53
Compiled file from: C:\Bitnami\wampstack-7.1.15-0\apache2\htdocs\kalyanamdevv12\_protected\app/system/modules/affiliate\views/base\tpl\home\index.tpl
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
?><?php if(!AffiliateCore::auth()) { ?> <div class="right col-md-6"> <h1 class="pink2 italic underline"> <?php echo t('Marriage Broker Platform with %site_name%'); ?> </h1> <?php JoinForm::step1() ;?> </div> <div class="left col-md-6"> <h1 class="pink2 italic underline"> <?php echo t('Make Money with our Marriage Broker Program!'); ?> </h1> <h3><?php echo t('Our Marriage Broker program offers one of the highest payment rates on the market'); ?></h3> <div id="make_money"></div> <?php $this->display('login.inc.tpl'); ?> </div><?php } else { ?> <div class="center"> <h2 class="pink2 italic"> <?php echo t('Welcome to our Marriage Broker Program!'); ?> </h2> </div><?php } ?>