<?php class_exists('Core', false) or die();

if($row = Inner::getById(68)){
    echo decodeHTMLEntities($row['body']);
}
?>