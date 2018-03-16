<?php
/**
 * @author         Pierre-Henry Soria <ph7software@gmail.com>
 * @copyright      (c) 2013-2018, Pierre-Henry Soria. All Rights Reserved.
 * @license        GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package        PH7 / App / System / Core / Class
 */

namespace PH7;

use PH7\Framework\Error\CException\PH7InvalidArgumentException;
use PH7\Framework\File\File;

abstract class WriteCore
{
    const BLOG_NAME = 'blog';
    const NOTE_NAME = 'note';
    const THUMBNAIL_FILENAME = 'thumb.png';
    const DEFAULT_THUMBNAIL_FILENAME = 'default_thumb.jpg';

    /**
     * @param int|string $mId Put the username + the PH7_DS constant + the image file for the Note module or just the post ID for the Blog module.
     * @param string $sMod Module name. Choose between 'blog' and 'note'.
     * @param File $oFile
     *
     * @return bool
     */
    public function deleteThumb($mId, $sMod, File $oFile)
    {
        self::checkMod($sMod);

        if ($sMod === self::BLOG_NAME) {
            $mId .= PH7_DS . static::THUMBNAIL_FILENAME;
        }

        return $oFile->deleteDir(PH7_PATH_PUBLIC_DATA_SYS_MOD . $sMod . PH7_DS . PH7_IMG . $mId);
    }

    /**
     * @param string $sMod Module name. Choose between 'blog' and 'note'.
     *
     * @return void
     *
     * @throws PH7InvalidArgumentException If the module is incorrect.
     */
    public static function checkMod($sMod)
    {
        if ($sMod !== self::BLOG_NAME && $sMod !== self::NOTE_NAME) {
            throw new PH7InvalidArgumentException('Wrong module: ' . $sMod);
        }
    }
}
