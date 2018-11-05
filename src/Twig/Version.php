<?php
/**
 *
 * UMC
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 *
 * @copyright Marius Strajeru
 * @license   http://opensource.org/licenses/mit-license.php MIT License
 * @author    Marius Strajeru <ultimate.module.creator@gmail.com>
 *
 */
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class Version extends AbstractExtension
{
    /**
     * @return array|\Twig_Filter[]
     */
    public function getFunctions() : array
    {
        return [
            new TwigFunction(
                'appVersion',
                function () {
                    return \App\Version::getVersion();
                }
            )
        ];
    }
}