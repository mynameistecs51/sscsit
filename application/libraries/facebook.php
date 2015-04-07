<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



// Autoload the required files
require_once( APPPATH . 'libraries/Facebook/autoload.php' );

use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\FacebookPermission;


class Facebook {
  var $ci;
  var $helper;
  var $session;
  var $permissions;

  public function __construct() {
    /**
     * session start
     */
    if ( session_status() === PHP_SESSION_NONE ) {
      session_start();
    }

    $this->ci =& get_instance();
    $this->permissions = $this->ci->config->item('permissions', 'facebook');

    // Initialize the SDK
    FacebookSession::setDefaultApplication( $this->ci->config->item('api_id', 'facebook'), $this->ci->config->item('app_secret', 'facebook') );

    // Create the login helper and replace REDIRECT_URI with your URL
    // Use the same domain you set for the apps 'App Domains'
    // e.g. $helper = new FacebookRedirectLoginHelper( 'http://mydomain.com/redirect' );
    $this->helper = new FacebookRedirectLoginHelper( $this->ci->config->item('redirect_url', 'facebook') );

    if ( $this->ci->session->userdata('fb_token') ) {
      $this->session = new FacebookSession( $this->ci->session->userdata('fb_token') );

      // Validate the access_token to make sure it's still valid
      try {
        if ( ! $this->session->validate() ) {
          $this->session = null;
        }
      } catch ( Exception $e ) {
        // Catch any exceptions
        $this->session = null;
      }
    } else {
      // No session exists
      try {
        $this->session = $this->helper->getSessionFromRedirect();
      } catch( FacebookRequestException $ex ) {
        // When Facebook returns an error
      } catch( Exception $ex ) {
        // When validation fails or other local issues
      }
    }

    if ( $this->session ) {
      $this->ci->session->set_userdata( 'fb_token', $this->session->getToken() );

      $this->session = new FacebookSession( $this->session->getToken() );
    }
    $this->ci->session->set_userdata('fb_data',$this->get_user());    //ประกาศ session fb_data  เก็บข้อมูล fb
  }

  /**
   * Returns the login URL.
   */
  public function login_url() {
    return $this->helper->getLoginUrl( $this->permissions );
  }

  public function logout_url(){

    return  $this->helper->getLogoutUrl( $this->session, base_url('main/logout')  );
    //redirect('main','refresh');
  }


  /**
   * Returns the current user's info as an array.
   */
  public function get_user() {
    if ( $this->session ) {
      /**
       * Retrieve User’s Profile Information
       */
      // Graph API to request user data
      $a = new FacebookRequest( $this->session, 'GET', '/me' );
      $request =  $a->execute();
      //$request->execute();
      //$request->execute();
      // Get response as an array
      $user = $request->getGraphObject()->asArray();

      return $user;
    }
    return false;
  }
}
?>