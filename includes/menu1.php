<?php class_exists('Core', false) or die();

$query = Inner::set();
$query->condition = 'tour > 0';
$query->order = 'name ASC';
$set = Inner::get($query);

$i =0;
foreach($set as $row) {
    echo '<a href="/'.$alias.'/" class="'.(Router::$request->parsed->origin[0] == $row['alias'] ? 'active ' : '').'f'.$i.'"><i></i><span>'.$row['name'].'</span></a>';
    $i++;
}
?>