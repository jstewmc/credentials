<?php
/**
 * The file for a user's credentials
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\Credentials;

/**
 * A user's credentials
 *
 * @since  0.1.0
 */
class Credentials
{
    /* !Private properties */
    
    /**
     * @var    int  the user's id
     * @since  0.1.0
     */ 
    private $id;
    
    /**
     * @var    string  the user's secret
     * @since  0.1.0
     */
    private $secret;
    
    
    /* !Magic methods */
    
    /**
     * Called when the object is constructed
     *
     * @param  int     $id      the user's id
     * @param  string  $secret  the user's secret
     * @since  0.1.0
     */
    public function __construct(int $id, string $secret)
    {
        $this->id     = $id;
        $this->secret = $secret;
    }
    
    
    /* !Get methods */
    
    /**
     * Returns the user's id
     *
     * @return  int
     * @since   0.1.0
     */
    public function getId(): int
    {
        return $this->id;
    }
    
    /**
     * Returns the user's secret
     *
     * @return  string
     * @since   0.1.0
     */
    public function getSecret(): string
    {
        return $this->secret;
    }
}
