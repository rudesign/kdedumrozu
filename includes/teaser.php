<?php class_exists('Core', false) or die();

$attachments = array();

if(!empty(Core::$item['attachments'])){
    $attachments = getExplodedGroup(Core::$item['attachments']);
}

echo '
<div class="teaser"'.(!empty($attachments[0][0]) && !empty($attachments[1][0]) ?  ' style="background: url(/images/' . $attachments[0][0] . ') no-repeat;"' : '').'>
    <div class="callback-form">'.Templates::parse('{{callbackForm}}', true).'</div>
    <div class="tongue"></div>
    '.(!empty($attachments[0][0]) && !empty($attachments[1][0]) ?  '<div class="title" style="background: url(/images/' . $attachments[1][0] . ') no-repeat;"></div>' : '').'
</div>
';
?>