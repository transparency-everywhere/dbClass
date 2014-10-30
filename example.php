<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of class_db
 *
 * @author Transparency Everywhere
 */

require('db_class.php');



//ADD ROW TO TABLE
$db = new db(); //create instance

$addValues['title'] = 'someTitle';
$addValues['someNumber'] = 42;

$insert_id = $bd->insert('tablename', $addValues);


//UPDATE ROW IN TABLE
$updateValues['title'] = 'newTitle';
$db->update('tableName', $updateValues, array('id', $insert_id));


//SELECT FROM TABLE
$allRows = $db->select('tableName');


//SELECT FROM TABLE WHERE ...

$specificRow = $db->select('tableName', array('id', $insert_id));

//DELETE FROM TABLE

$db->delete('tableName', array('id', $insert_id));




