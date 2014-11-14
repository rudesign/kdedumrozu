<?php class_exists('Core', false) or die();

$query = Inner::set();
$query->condition = 'parent = '.Core::$item['id'].(Core::$item['parent'] ? ' OR parent = '.Core::$item['parent'] : '');
$query->order = 'ord ASC';

if($rows = Inner::get($query)){
    echo ' <ul class="submenu section">';
        foreach($rows as $row) {
            $active = Core::$item['alias'] == $row['alias'] ? ' class="active"' : '';
            echo '<li'.$active.'><a href="/'.Router::$request->parsed->origin[0].'/'.$row['alias'].'/">'.$row['name'].'</a></li>';
        }
    echo '</ul> ';
}else {
    $query = Inner::set();
    $query->condition = 'menu = 1';
    $query->order = 'ord ASC';

    if ($rows = Inner::get($query)) {
        echo ' <ul class="submenu section">';
        foreach ($rows as $row) {

            echo '<li><a href="/' . $row['alias'] . '/">' . $row['name'] . '</a></li>';
        }
        echo '</ul> ';
    }
}
?>