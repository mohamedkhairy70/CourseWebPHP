<?php

class Product{
    public $Id;
    public $Name;
    public $Brand;
    public $ExpiryDate;
    public $IsAvailable;
    public $IsExpiry;

    public function __construct()
    {
        $Now =  date_create(date("y-m-d"))->format("d");
        $Expirydt =   date_create($this->ExpiryDate)->format("d");
        $diff = $Expirydt - $Now;
        $this->IsExpiry = $diff;
    }
}