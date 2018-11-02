<?php
/**
 * Created by PhpStorm.
 * User: hoanltm
 * Date: 02/11/2018
 * Time: 14:29
 */

include_once ('LinkList.php');

$linkedList = new LinkList();

$linkedList->insertFirst(11);
$linkedList->insertFirst(22);
$linkedList->insertFirst(33);
$linkedList->insertFirst(44);
$totalNodes = $linkedList->totalNodes();
$linkData = $linkedList->readList();

echo $totalNodes;
echo implode ('-', $linkData);
