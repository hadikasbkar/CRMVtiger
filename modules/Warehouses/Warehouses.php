<?php
class Warehouses extends CRMEntity {
    public $table_name = 'vtiger_warehouses';
    public $table_index= 'warehouseid';

    public $customFieldTable = array('vtiger_warehousescf', 'warehouseid');
    public $tab_name = array('vtiger_crmentity', 'vtiger_warehouses', 'vtiger_warehousescf');
    public $tab_name_index = array(
        'vtiger_crmentity' => 'crmid',
        'vtiger_warehouses' => 'warehouseid',
        'vtiger_warehousescf' => 'warehouseid'
    );

    public $list_fields = array(
        'Warehouse Name'=> array('warehouses'=> 'warehousename'),
        'Assigned To' => array('crmentity'=>'smownerid')
    );

    public $list_fields_name = array(
        'Warehouse Name'=> 'warehousename',
        'Assigned To' => 'assigned_user_id'
    );

    public $list_link_field = 'warehousename';

    public $search_fields = array(
        'Warehouse Name'=> array('warehouses'=> 'warehousename')
    );

    public $search_fields_name = array(
        'Warehouse Name'=> 'warehousename'
    );

    public $popup_fields = array('warehousename');
    public $def_basicsearch_col = 'warehousename';
    public $def_detailview_recname = 'warehousename';
    public $mandatory_fields = array('warehousename', 'assigned_user_id');
    public $default_order_by = 'warehousename';
    public $default_sort_order='ASC';
}
