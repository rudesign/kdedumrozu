<?php class_exists('Core', false) or die();

if(!empty(Core::$item['gallery'])){
    $gallery = getExplodedGroup(Core::$item['gallery']);

    echo '
    <div class="photo-gallery-teaser extra-section">
        <ul>';
            foreach($gallery as $item){
                echo '
                <li>
                    <a href="/images/big/'.$item[0].'" title="'.$item[1].'" class="fancybox" rel="gallery"><img src="/images/small/'.$item[0].'" /></a>
                </li>';
            }
        echo '</ul>
    </div>';
}
?>