<?php
/**
 * Tests for a user's credentials
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\Credentials;

use Jstewmc\TestCase\TestCase;

/**
 * Tests for a user's credentials
 */
class CredentialsTest extends TestCase
{
    /* !__construct() */
    
    /**
     * __construct() should set the object's properties
     */
    public function testConstruct()
    {
        $id     = 1;
        $secret = 'foo';
        
        $credential = new Credentials($id, $secret);
        
        $this->assertEquals($id, $this->getProperty('id', $credential));
        $this->assertEquals($secret, $this->getProperty('secret', $credential));
        
        return;
    }
    
    
    /* !getId() */
    
    /**
     * getId() should return the credentials' id
     */
    public function testGetId()
    {
        $id = 1;
        
        $credential = new Credentials(1, 'foo');
        
        $this->setProperty('id', $credential, $id);
        
        $this->assertEquals($id, $credential->getId());
        
        return;
    }
    
    
    /* !getSecret() */ 
    
    /**
     * getSecret() should return the credentials' secret
     */
    public function testGetSecret()
    {
        $secret = 'foo';
        
        $credential = new Credentials(1, 'foo');
        
        $this->setProperty('secret', $credential, $secret);
        
        $this->assertEquals($secret, $credential->getSecret());
        
        return;
    }
}
