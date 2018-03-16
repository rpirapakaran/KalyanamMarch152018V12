<?php 
namespace PH7;
defined('PH7') or exit('Restricted access');
/*
Created on 2018-03-13 03:23:50
Compiled file from: C:\Bitnami\wampstack-7.1.15-0\apache2\htdocs\kalyanamdevv12\_protected\app/system/modules/affiliate\views/base\tpl\account\index.tpl
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
?><div class="center"> <h3 class="underline"><?php echo t('Your Unique Referral Link'); ?></h3> <?php ShareUrlCoreForm::display(Framework\Mvc\Router\Uri::get('affiliate','router','refer', $username), null, false) ;?> <p>&nbsp;</p> <p class="bold"><?php echo t('Your affiliate amount is <em>%1%%0%</em>', $amount, $currency_sign); ?></p> <hr /> <?php if($amount >= $min_withdrawal) { ?> <p><?php echo t('If you want, you can <a href="%0%">contact us</a> to request a payment.', $contact_url); ?></p> <?php } else { ?> <p><?php echo t('Unfortunately, you cannot request a payment at this time. You must have a minimum of %1%%0%.', $min_withdrawal, $currency_sign); ?></p> <?php } ?></div>