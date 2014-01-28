<?php

namespace Controllers\Configuration;

class HostController extends \Centreon\Core\Controller
{

    /**
     * List commands
     *
     * @method get
     * @route /configuration/host
     */
    public function listAction()
    {
        // Init template
        $di = \Centreon\Core\Di::getDefault();
        $tpl = $di->get('template');

        // Load CssFile
        $tpl->addCss('dataTables.css')
            ->addCss('dataTables.bootstrap.css')
            ->addCss('dataTables-TableTools.css');

        // Load JsFile
        $tpl->addJs('jquery.dataTables.min.js')
            ->addJs('jquery.dataTables.TableTools.min.js')
            ->addJs('bootstrap-dataTables-paging.js');
        
        // Display page
        $tpl->display('configuration/host/list.tpl');
    }

    /**
     * 
     * @method get
     * @route /configuration/command/datatable
     */
    public function datatableAction()
    {
        echo \Centreon\Core\Datatable::getDatas(
            'host',
            $this->getParams('get')
        );

    }
    
    /**
     * Create a new command
     *
     * @method post
     * @route /configuration/command/create
     */
    public function createAction()
    {
        
    }

    /**
     * Update a command
     *
     *
     * @method put
     * @route /configuration/command/update
     */
    public function updateAction()
    {
        
    }
}