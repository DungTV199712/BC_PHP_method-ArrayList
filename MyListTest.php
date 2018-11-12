<?php
/**
 * Created by PhpStorm.
 * User: dung
 * Date: 12/11/2018
 * Time: 14:23
 */
include 'MyList.php';
$listInteger = new MyList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);
echo $listInteger->get(3);