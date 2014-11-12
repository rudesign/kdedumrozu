<?php class_exists('Core', false) or die();

$query = Inner::set();
$query->condition = 'tour > 0';
$query->order = 'ord ASC';
$set = Inner::get($query);

foreach($set as $row) {
    echo '<a href="/'.$row['alias'].'/" class="'.(Router::$request->parsed->origin[0] == $row['alias'] ? 'active ' : '').'f'.$row['id'].'"><i></i><span>'.$row['name'].'</span></a>';
}
?>