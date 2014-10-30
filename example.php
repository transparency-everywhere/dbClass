<?php
/*
This file is published by transparency-everywhere with the best deeds.
Check transparency-everywhere.com for further information.
Licensed under the CC License, Version 4.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    https://creativecommons.org/licenses/by/4.0/legalcode

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.


@author nicZem for tranpanrency-everywhere.com
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




