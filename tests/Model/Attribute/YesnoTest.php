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
namespace App\Tests\Attribute;

use App\Model\Attribute;
use App\Model\Attribute\Yesno;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class YesnoTest extends TestCase
{
    /**
     * @covers \App\Model\Attribute\Yesno::getPropertyNames
     */
    public function testGetPropertyNames()
    {
        /** @var \Twig_Environment | MockObject $twig */
        $twig = $this->createMock(\Twig_Environment::class);
        /** @var Attribute | MockObject $attribute */
        $attribute = $this->createMock(Attribute::class);
        $yesNo = new Yesno($twig, $attribute, []);
        $this->assertArrayHasKey('source_model', $yesNo->getPropertiesData());
    }
}