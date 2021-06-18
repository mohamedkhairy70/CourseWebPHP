<?php

require_once "DAL.php";
require_once "Product.php";
class BL_Product
{
    public function GetProduts()
    {
        try {
            global $con;
            $queryString = $con->prepare("select * from product where IsDeleted=?");
            $queryString->execute([1]);
            $data = $queryString->fetchAll(PDO::FETCH_CLASS, 'Product');
            //var_dump($data);
            return $data;
        } catch (Exception $ex) {
            return false;
        }
    }

    public function AddProduct($name, $brand, $expiryDate, $isAvailable)
    {
        try {
            global $con;
            $queryString = $con->prepare("INSERT INTO product ( Name , Brand , ExpiryDate , IsAvailable , IsDeleted )VALUES(?,?,?,?,?)");
            $IsDeleted = 1;
            $queryString->execute([$name, $brand, $expiryDate, $isAvailable, $IsDeleted]);
            return true;
        } catch (Exception $ex) {
            return false;
        }
    }

    public function EditProduct($id, $name, $brand, $expiryDate, $isAvailable)
    {
        try {
            global $con;
            $queryString = $con->prepare("UPDATE product SET Name=?,Brand=?,ExpiryDate=?,IsAvailable=? WHERE Id=?");
            $queryString->execute([$name, $brand, $expiryDate, $isAvailable, $id]);
            return true;
        } catch (Exception $ex) {
            return false;
        }
    }

    public function DeleteSoft($id)
    {
        try {
            global $con;
            $IsDeleted = 0;
            $queryString = $con->prepare("UPDATE product SET IsDeleted=? WHERE Id=?");
            $queryString->execute([$IsDeleted, $id]);
            return true;
        } catch (Exception $ex) {
            return false;
        }
    }
}
