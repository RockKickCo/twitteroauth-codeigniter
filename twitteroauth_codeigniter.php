<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed.');

/**
 * Codeigniter wrapper for Abraham Williams' [TwitterOauth](https://github.com/abraham/twitteroauth) PHP library.
 *
 * Super simple wrapper so that it works with Codeigniter's library loader, and means you can
 * include twitteroauth in Codeigniter projects as a submodule, without having to update the
 * library for use in your project.
 *
 * @author Ryan Hefner <hi@ryanhefner.com> http://ryanhefner.com
 */

/* Load TwitterOauth lib */
require_once(__DIR__ . '/../twitteroauth/twitteroauth/twitteroauth.php');

 /**
  * TwitterOAuth Codeigniter Library
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