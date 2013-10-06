<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed.');

/**
 * Codeigniter wrapper for Abraham Williams' [TwitterOauth](https://github.com/abraham/twitteroauth) PHP library.
 * It also include the twitteroauth repo as submodule of the project, in order to keep things tidy.
 *
 * @author Ryan Hefner <hi@ryanhefner.com> http://ryanhefner.com
 */

/* Load TwitterOauth lib */
require_once('twitteroauth/twitteroauth.php');

 /**
  * Twitter Codeigniter Library
  */
class TwitterOAuth_Codeigniter extends TwitterOAuth
{
    function __construct($params)
    {
        parent::__construct(
            $params['consumer_key'],
            $params['consumer_secret'],
            isset($params['oauth_token']) ? $params['oauth_token'] : null,
            isset($params['oauth_token_secret']) ? $params['oauth_token_secret'] : null
        );
    }
}

/* End of file twitter.php */
/* Location: ./application/libraries/twitter.php */