<?php class_exists('Core', false) or die();

if(!empty(Core::$item)){

    if(Core::$item['template'] && !$noRecurcy){
        echo Templates::parse(Core::$item['template']);
    }else{
        echo Templates::parse('innerText');
    }
}
?>