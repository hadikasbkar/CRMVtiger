<?php
class Warehouses_Relation_Model extends Vtiger_Relation_Model {
    public function addProductToWarehouse($warehouseId, $productId) {
        global $adb;
        $query = "INSERT INTO vtiger_warehouseproductrel (warehouseid, productid) VALUES (?, ?)";
        $adb->pquery($query, array($warehouseId, $productId));
    }

    public function getWarehouseProducts($warehouseId) {
        global $adb;
        $query = "SELECT productid FROM vtiger_warehouseproductrel WHERE warehouseid=?";
        $result = $adb->pquery($query, array($warehouseId));
        return $adb->fetch_array($result);
    }

    public function deleteProductFromWarehouse($warehouseId, $productId) {
        global $adb;
        $query = "DELETE FROM vtiger_warehouseproductrel WHERE warehouseid=? AND productid=?";
        $adb->pquery($query, array($warehouseId, $productId));
    }
}
