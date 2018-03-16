<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2018-03-13 03:18:53
Compiled file from: C:\Bitnami\wampstack-7.1.15-0\apache2\htdocs\kalyanamdevv12\_protected\app/system/modules/affiliate\views/base\tpl\login.inc.tpl
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
?><div class="aff_login"> <h2><?php echo t('Sign In'); ?></h2> <?php LoginForm::display(300) ;?> <p class="small"> <?php LostPwdDesignCore::link('affiliate') ;?> <?php if(Framework\Mvc\Model\DbConfig::getSetting('affActivationType') == 2) { ?> | <a rel="nofollow" href="<?php $design->url('affiliate','home','resendactivation') ;?>"><?php echo t('Resend activation email'); ?></a><?php } ?> </p></div>