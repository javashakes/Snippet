<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Snippet
 *
 * @package		ExpressionEngine
 * @category	Plugin
 * @author		Matthew Kirkpatrick
 * @copyright   Copyright (c) 2020, Matthew Kirkpatrick
 * @link		https://github.com/javashakes
 */

// config
include(PATH_THIRD.'snippet/config.php');

return array(
    'name'              => SNIPPET_NAME,
    'version'           => SNIPPET_VERSION,
    'author'            => SNIPPET_AUTHOR,
    'author_url'        => SNIPPET_AUTHOR_URL,
    'docs_url'          => SNIPPET_DOCS,
    'description'       => SNIPPET_DESC,
    'namespace'         => SNIPPET_NAMESPACE,
    'settings_exist'    => FALSE
);

/* End of file addon.setup.php */
/* Location: /system/expressionengine/third_party/snippet/addon.setup.php */