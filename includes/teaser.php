<?php class_exists('Core', false) or die();

$root = Core::$item['parent'] ? Inner::getById(Router::$request->parsed->origin[0], 'alias') : Core::$item;

$attachments = array();

if(!empty($root['attachments'])){
    $attachments = getExplodedGroup($root['attachments']);
}

echo '
<div class="teaser"'.(!empty($attachments[0][0]) ?  ' style="background: url(/images/' . $attachments[0][0] . ') no-repeat;"' : '').'>
    <div class="callback-form">'.Templates::parse('{{callbackForm}}', true).'</div>
    <div class="tongue">
        <div>
            <a href="/" class="i0"></a><a href="/kontakty/" class="i1"></a><a onClick="bookmarkAdd();" href="javascript:void(0);" class="i2"></a>
        </div>
    </div>
    '.(!empty($attachments[0][0]) && !empty($attachments[1][0]) ?  '<div class="title" style="background: url(/images/' . $attachments[1][0] . ') no-repeat;"></div>' : '').'
</div>
';
?>