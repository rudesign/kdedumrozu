<?php class_exists('Core', false) or die();

$set = array(
    'ded-moroz-iz-velikogo-ustjuga'=>'Дед Мороз из Великого Устюга',
    'belorusskiy-ded-moroz'=>'Белорусский Дед Мороз',
    'santa-klaus-iz-laplandii'=>'Санта-Клаус из Лапландии',
    'kostromskaya-snegurochka'=>'Костромская Снегурочка',
    'karelskiy-ded-moroz'=>'Карельский Дед Мороз',
);

foreach($set as $alias=>$name) {
    echo '<a href="/'.$alias.'/" class="'.(Core::$item['alias'] == $alias ? 'active ' : '').'f0"><i></i><span>'.$name.'</span></a>';
}
?>