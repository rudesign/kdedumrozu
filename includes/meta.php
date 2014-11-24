<?php class_exists('Core', false) or die();

replaceMeta(Core::$params);

replaceMeta(Chapters::$current);

if(!empty(Chapters::$text)){
    replaceMeta(Chapters::$text);
}

if(Core::$item){
   replaceMeta(Core::$item);

    switch(Chapters::$current['alias']){
        case 'content':
            if(!empty(Router::$request->parsed->origin)) Chapters::$current['rootContent'] = Inner::getById(reset(Router::$request->parsed->origin), 'alias');
        break;
    }

    if(Router::$originId && Core::$item['class']){

        if(class_exists(Core::$item['class'])){

            Chapters::$current['item'] = call_user_func(array(Core::$item['class'], 'getById'), Router::$originId, 'alias');

            if(Chapters::$current['item']) replaceMeta(Chapters::$current['item']);

        } else error('class '.Core::$item['class'].' does not exist');

    }else{
        if(!Core::$item['title']){
            switch(reset(Router::$request->parsed->origin)){

            }
        }
    }

}

if(!empty($_GET['page'])) Core::$params['title'] .= '. Стр. '.(intval($_GET['page'])+1);

if($_SERVER['REQUEST_URI'] != '/') Core::$params['title'] .= ' – '.Core::$params['name'];

function replaceMeta($item = array()){
    Core::$params['title'] = !empty($item['title']) ? $item['title'] : $item['name'];
    Core::$params['metaKeywords'] = !empty($item['metaKeywords']) ? $item['metaKeywords'] : Core::$params['metaKeywords'];
    Core::$params['metaDescription'] = !empty($item['metaDescription']) ? $item['metaDescription'] : Core::$params['metaDescription'];
}
?>
