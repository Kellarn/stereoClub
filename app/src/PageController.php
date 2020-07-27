<?php

use SilverStripe\CMS\Controllers\ContentController;

use SilverStripe\View\Requirements;

class PageController extends ContentController
{
    /**
     * An array of actions that can be accessed via a request. Each array element should be an action name, and the
     * permissions or conditions required to allow the user to access it.
     *
     * <code>
     * array (
     *     'action', // anyone can access this action
     *     'action' => true, // same as above
     *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
     *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
     * );
     * </code>
     *
     * @var array
     */
    private static $allowed_actions = array(

    );

    protected function init()
    {
        parent::init();
        Requirements::themedCSS("common/bootstrap.min");
        Requirements::themedCSS("common/bootstrap-grid.min");
        Requirements::themedCSS("common/bootstrap-reboot.min");
        Requirements::themedCSS("common/font-awesome.min");
        Requirements::themedJavascript("common/jquery-3.5.1.min");
        Requirements::themedJavascript("common/bootstrap.min");
        Requirements::themedJavascript("script");
        Requirements::css('css/style.scss');
        Requirements::css('css/font-awesome.scss');
    }
}