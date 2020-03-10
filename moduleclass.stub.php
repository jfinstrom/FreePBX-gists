<?php
namespace FreePBX\modules;
use BMO;
use FreePBX;
/*
 * Class stub for BMO Module class
 * In _Construct you may remove the database line if you don't use it
 * In getActionbar change "modulename" to the display value for the page
 * In getActionbar change extdisplay to align with whatever variable you use to decide if the page is in edit mode.
 *
 */

class Classname implements BMO
{
    public function __construct(FreePBX $freepbx)
    {
        $this->FreePBX = $freepbx;
        $this->db      = $freepbx->Database;
    }
    
    public function install()
    {
    }
    
    public function uninstall()
    {
    }
    
    public function doConfigPageInit($page)
    {
    }
    
    public function getActionBar($request)
    {
        $buttons = [];
        switch ($_GET['display']) {
            case 'modulename':
                $buttons = [
                    'delete' => [
                        'name' => 'delete',
                        'id' => 'delete',
                        'value' => _('Delete')
                    ],
                    'reset' => [
                        'name' => 'reset',
                        'id' => 'reset',
                        'value' => _('Reset')
                    ],
                    'submit' => [
                        'name' => 'submit',
                        'id' => 'submit',
                        'value' => _('Submit')
                    ],
                ];
                if (empty($_GET['extdisplay'])) {
                    unset($buttons['delete']);
                }
                break;
        }
        return $buttons;
    }

    public function ajaxRequest($req, &$setting)
    {
        switch ($req) {
            case 'getJSON':
                return true;
            default:
                return false;
        }
    }

    public function ajaxHandler()
    {
        switch ($_REQUEST['command']) {
            case 'getJSON':
                switch ($_GET['jdata']) {
                    case 'grid':
                        $ret = [];
                        /*code here to generate array*/
                        return $ret;
                    default:
                        return false;
                }
            default:
                return false;
        }
    }

    public function getRightNav($request)
    {
        //You should probably load_view() here
        $html = 'your custom html';
        return $html;
    }
}
