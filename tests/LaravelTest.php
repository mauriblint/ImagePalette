<?php
/**
 * This file is part of the ImagePalette package.
 *
 * (c) Joe Hoyle <joe@hmn.md>
 * (c) Brian Foxwell <brian@foxwell.io>
 * (c) Marc Pacheco <Marckk1997@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use bfoxwell\ImagePalette\Client;

/**
 * Class LaravelTest
 */
class LaravelTest extends PHPUnit_Framework_Testcase {

    /**
     * Test Client
     * @return mixed
     */
    public function testDoesClientReturnArray()
    {
        $load = new Client;
        $colors = $load->getColors('https://www.google.com/images/srpr/logo11w.png', 5);
        return $this->assertTrue(is_array($colors));
    }
} 