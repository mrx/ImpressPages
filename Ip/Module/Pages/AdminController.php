<?php
/**
 * @package ImpressPages
 *
 */

namespace Ip\Module\Pages;





class AdminController extends \Ip\Controller
{

    public function init()
    {
        ipAddJavascript(ipFileUrl('Ip/Module/Pages/assets/js/angular.js'));
        ipAddJavascript(ipFileUrl('Ip/Module/Pages/assets/js/languageList.js'));
    }

    public function index()
    {
        $layout = \Ip\View::create('view/layout.php');
        return $layout->render();
    }




}