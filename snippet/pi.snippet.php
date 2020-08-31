<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Snippet
 *
 * @package     ExpressionEngine
 * @category    Plugin
 * @author      Matthew Kirkpatrick
 * @copyright   Copyright (c) 2020, Matthew Kirkpatrick
 * @link        https://github.com/javashakes
 */

// config
include(PATH_THIRD.'snippet/config.php');

// EE v2 backward compatibility
// Ignored by EE v3+
$plugin_info = array(
    'pi_name'           => SNIPPET_NAME,
    'pi_version'        => SNIPPET_VERSION,
    'pi_author'         => SNIPPET_AUTHOR,
    'pi_author_url'     => SNIPPET_AUTHOR_URL,
    'pi_description'    => SNIPPET_DESC
);

class Snippet {

    var $return_data = "";

    /**
     * Constructor
     *
     * @access  public
     * @return  string
    */
    public function __construct()
    {

		$total      = ee()->TMPL->fetch_param('total',    500);
		$word       = ee()->TMPL->fetch_param('word',     true);
		$ellipsis   = ee()->TMPL->fetch_param('ellipsis', '...');
		
		if ( ! is_numeric($total)) { $total = 500; }
        
        $str = strip_tags(ee()->TMPL->tagdata);
        
        if(strlen($str) <= $total) {

    		$this->return_data = $str;

        } else {

        	if ($word === true) {

        		$this->return_data = $this->_truncate_str($str, $total) . $ellipsis;

    		} else {

    			$this->return_data = substr($str, 0, $total) . $ellipsis;

    		}

        }

    }

    /**
     * Log the user in
     *
     * @access  private
     * @return  string
    */

   private function _truncate_str($str, $maxlen) { 

	  $newstr = substr($str, 0, $maxlen);
	  $newstr = substr($newstr, 0, strrpos($newstr," "));

	  return $newstr;

	}  

}

/* End of file pi.snippet.php */
/* Location: ./system/expressionengine/third_party/snippet/pi.snippet.php */