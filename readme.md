PHP dbClass
===================


The dbClass for PHP isn't an eyecatcher, but it´s working solid and save. It can be used for simple mysql queries and manipulation.

----------


Getting Started
-------------

To get started you only need to change the database settings inside config.php


Initialize the class

    $db = new db(); //create instance

    $addValues['title'] = 'someTitle';
    $addValues['someNumber'] = 42;

    $insert_id = $bd->insert('tablename', $addValues);


UPDATE ROW IN TABLE

    $updateValues['title'] = 'newTitle';
    $db->update('tableName', $updateValues, array('id', $insert_id));


SELECT FROM TABLE

    $allRows = $db->select('tableName');


SELECT FROM TABLE WHERE ...

    $specificRow = $db->select('tableName', array('id', $insert_id));

DELETE FROM TABLE

    $db->delete('tableName', array('id', $insert_id));

