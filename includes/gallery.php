<?php class_exists('Core', false) or die();

if(!empty(Core::$item['gallery'])){
    $gallery = getExplodedGroup(Core::$item['gallery']);

    echo '
    <div class="photo-gallery-teaser extra-section">
        <div class="jcarousel-wrapper">
            <div class="small jcarousel">
                <ul>';
                foreach($gallery as $item){
                    echo '
                    <li>
                        <a href="/images/big/'.$item[0].'" title="'.$item[1].'" class="fancybox" rel="gallery"><img src="/images/small/'.$item[0].'" /></a>
                    </li>';
                }
                echo '
                </ul>
            </div>';
            if(count($gallery) > 3) {
                echo '
            <a href="#" class="jcarousel-controls prev"></a>
            <a href="#" class="jcarousel-controls next"></a>';
            }
        echo '
        </div>
    </div>';
}
?>