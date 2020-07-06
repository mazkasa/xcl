<?php

$db =& Database::getInstance();

//
// form stage
//
$history_id = (int)@$_GET['history_id'];
[$data_serialized] = $db->fetchRow($db->query('SELECT data FROM ' . $db->prefix($mydirname . '_post_histories') . " WHERE history_id=$history_id"));
$data = @unserialize($data_serialized);
if (empty($data)) {
    exit;
}

$sql = 'INSERT INTO ' . $db->prefix($mydirname . '_posts') . ' SET ' . "\n";
foreach ($data as $key => $val) {
    $sql .= "`$key`=" . $db->quoteString($val) . ",\n";
}
$sql = substr($sql, 0, -2) . ';';

//
// display stage
//

xoops_cp_header();

include __DIR__ . '/mymenu.php';

echo nl2br(htmlspecialchars($sql, ENT_QUOTES));

xoops_cp_footer();
