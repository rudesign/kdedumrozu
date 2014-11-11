<?php class_exists('Core', false) or die();

$query = Inner::set();
$query->condition = 'menu = 1';
$query->order = 'ord ASC';

if($rows = Inner::get($query)){
    echo ' <ul class="submenu section">';
        foreach($rows as $row) {
            echo '<li><a href="/'.$row['alias'].'/">'.$row['name'].'</a></li>';
        }
    echo '</ul> ';
}else echo $query->string;
?>