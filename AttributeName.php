<?php
/**
 * This file is part of the Zimbra API in PHP library.
 *
 * © Nguyen Van Nguyen <nguyennv1981@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zimbra\Soap\Struct;

use Zimbra\Utils\SimpleXML;

/**
 * AttributeName class
 * @package   Zimbra
 * @category  Soap
 * @author    Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright Copyright © 2013 by Nguyen Van Nguyen.
 */
class AttributeName
{
    /**
     * Attribute name
     * @var string
     */
    private $_n;

    /**
     * Constructor method for AttributeName
     * @param string $n
     * @return self
     */
    public function __construct($n)
    {
        $this->_n = trim($n);
    }

    /**
     * Get or set n
     *
     * @param  string $n
     * @return string|self
     */
    public function n($n = null)
    {
        if(null === $n)
        {
            return $this->_n;
        }
        $this->_n = trim($n);
        return $this;
    }

    /**
     * Returns the array representation of this class 
     *
     * @param  string $name
     * @return array
     */
    public function toArray($name = 'a')
    {
        $name = !empty($name) ? $name : 'a';
        $arr =  array(
            'n' => $this->_n,
        );
        return array($name => $arr);
    }

    /**
     * Method returning the xml representation of this class
     *
     * @param  string $name
     * @return SimpleXML
     */
    public function toXml($name = 'a')
    {
        $name = !empty($name) ? $name : 'a';
        $xml = new SimpleXML('<'.$name.' />');
        $xml->addAttribute('n', $this->_n);
        return $xml;
    }

    /**
     * Method returning the xml string representation of this class
     *
     * @return string
     */
    public function __toString()
    {
        return $this->toXml()->asXml();
    }
}
