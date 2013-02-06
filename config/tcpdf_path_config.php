<?php
  defined('K_PATH_MAIN') or define('K_PATH_MAIN', dirname(dirname(__FILE__)) . '/');

  // Automatic calculation for the following K_PATH_URL constant
  $k_path_url = $k_path_main; // default value for console mode
  if (isset($_SERVER['HTTP_HOST']) AND (!empty($_SERVER['HTTP_HOST']))) {
    if(isset($_SERVER['HTTPS']) AND (!empty($_SERVER['HTTPS'])) AND strtolower($_SERVER['HTTPS'])!='off') {
      $k_path_url = 'https://';
    } else {
      $k_path_url = 'http://';
    }
    $k_path_url .= $_SERVER['HTTP_HOST'];
    $k_path_url .= str_replace( '\\', '/', substr(K_PATH_MAIN, (strlen($_SERVER['DOCUMENT_ROOT']) - 1)));
  }

  /**
   * URL path to tcpdf installation folder (http://localhost/tcpdf/).
   * By default it is automatically calculated but you can also set it as a fixed string to improve performances.
   */
  defined('K_PATH_URL') or define ('K_PATH_URL', $k_path_url);

  /**
   * path for PDF fonts
   * use K_PATH_MAIN.'fonts/old/' for old non-UTF8 fonts
   */
  defined('K_PATH_FONTS') or define ('K_PATH_FONTS', K_PATH_MAIN.'fonts/rcjfont/');

  /**
   * cache directory for temporary files (full path)
   */
  defined('K_PATH_CACHE') or define ('K_PATH_CACHE', K_PATH_MAIN.'cache/');

  /**
   * cache directory for temporary files (url path)
   */
  defined('K_PATH_URL_CACHE') or define ('K_PATH_URL_CACHE', K_PATH_URL.'cache/');

  /**
   *images directory
   */
  defined('K_PATH_IMAGES') or define ('K_PATH_IMAGES', K_PATH_MAIN.'images/');

  /**
   * blank image
   */
  defined('K_BLANK_IMAGE') or define ('K_BLANK_IMAGE', K_PATH_IMAGES.'_blank.png');
?>
