<?php

class ControllersAndViews_IndexController extends Omeka_Controller_AbstractActionController
{
    
    public function init()
    {
        //in real life, this would be the model for the plugin
        $this->_helper->db->setDefaultModelName('Item');
    }
    
    public function browseAction()
    {
        $this->view->data = array('Fake data 1', 'Fake data 2', 'Fake data 3');
        $records = $this->_helper->db->getTable()->findBy(array('public'=>true));
        $this->view->items = $records;
    }
}