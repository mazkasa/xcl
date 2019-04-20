<?php
/**
 * HTTP_OAuth
 *
 * Implementation of the OAuth specification
 *
 * PHP version 5.2.0+
 *
 * LICENSE: This source file is subject to the New BSD license that is
 * available through the world-wide-web at the following URI:
 * https://www.opensource.org/licenses/bsd-license.php. If you did not receive  
 * a copy of the New BSD License and are unable to obtain it through the web, 
 * please send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category  HTTP
 * @package   HTTP_OAuth
 * @author    Jeff Hodsdon <jeffhodsdon@gmail.com> 
 * @copyright 2009 Jeff Hodsdon <jeffhodsdon@gmail.com> 
 * @license   https://www.opensource.org/licenses/bsd-license.php New BSD License
 * @link      https://pear.php.net/package/HTTP_OAuth
 * @link      https://github.com/jeffhodsdon/HTTP_OAuth
 */

require_once 'HTTP/OAuth/Exception.php';

/**
 * HTTP_OAuth_Exception_NotImplemented
 * 
 * Exception class thrown when method are not yet implemented.
 *
 * @category  HTTP
 * @package   HTTP_OAuth
 * @author    Jeff Hodsdon <jeffhodsdon@gmail.com> 
 * @copyright 2009 Jeff Hodsdon <jeffhodsdon@gmail.com> 
 * @license   https://www.opensource.org/licenses/bsd-license.php New BSD License
 * @link      https://pear.php.net/package/HTTP_OAuth
 * @link      https://github.com/jeffhodsdon/HTTP_OAuth
 */
class HTTP_OAuth_Exception_NotImplemented extends HTTP_OAuth_Exception
{

}

?>