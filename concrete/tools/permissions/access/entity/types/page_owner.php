<?php

defined('C5_EXECUTE') or die("Access Denied.");
use \Concrete\Core\Permission\Access\Entity\PageOwnerEntity as PageOwnerPermissionAccessEntity;

if (Loader::helper('validation/token')->validate('process')) {
    $js = Loader::helper('json');
    $obj = new stdClass();
    $pae = PageOwnerPermissionAccessEntity::getOrCreate();
    $obj->peID = $pae->getAccessEntityID();
    $obj->label = $pae->getAccessEntityLabel();
    echo $js->encode($obj);
}
