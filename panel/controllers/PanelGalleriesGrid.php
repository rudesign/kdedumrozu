<?php class_exists('Core', false) or die();

class PanelGalleriesGrid extends PanelGrid{
    public function __construct(){
        //$this->showQuery = true;
        $this->allowToChangeOrder = true;

        parent::__construct();
    }

    protected function showForm(){
        echo '
        <form name="edit" class="forms" method="POST" enctype="multipart/form-data">
            <dt class="save-buttons top"><button onClick="save(); return false;" class="buttons green-buttons">Сохранить</button></dt>

            <dl>Дата публикации</dl>
            <dt>'.showDateSelector(Core::$item['pubTime'], '_').'</dt>
            <dl>Название</dl>
            <dt><input name="name" value="'.Core::$item['name'].'" type="text" class="fw" /></dt>
            <dl>Вышележащий раздел</dl>';
            $query = Inner::set();
            $query->condition = 'parent = 0';
            echo '
            <dt>'.getSelector('innerContent', 'id', Core::$item['contentId'], 'contentId', $query).'</dt>
            <dl>Вступление</dl>
            <dt><textarea name="teaser" class="ck">'.Core::$item['teaser'].'</textarea></dt>
            <dl>Текст</dl>
            <dt><textarea name="body" class="ck">'.Core::$item['body'].'</textarea></dt>
            <dl>Галерея</dl>
            <dt><input name="_newPictures[]" id="upload-new-pict" type="file" multiple /></dt>
            <input name="gallery" value="'.Core::$item['gallery'].'" type="hidden">
            <!--
            <dl>Прикреплённые файлы</dl>
            <dt><input name="_newAttachments[]" id="upload-new-attachments" type="file" multiple /></dt>
            <input name="attachments" value="'.Core::$item['attachments'].'" type="hidden">
            -->
            <dl>Title</dl>
            <dt><input name="title" value="'.Core::$item['title'].'" type="text" class="fw" /></dt>
            <dl>Meta Description</dl>
            <dt><input name="metaDescription" value="'.Core::$item['metaDescription'].'" type="text" class="fw" /></dt>
            <dl>Meta Keywords</dl>
            <dt><input name="metaKeywords" value="'.Core::$item['metaKeywords'].'" type="text" class="fw" /></dt>
            <!--
            <dl>URI-эквивалент (относительный адрес, начиная с /)</dl>
            <dt><input name="equivalent" value="'.Core::$item['equivalent'].'" type="text" class="fw" /></dt>
            -->

            <dt class="save-buttons"><button onClick="save(); return false;" class="buttons green-buttons">Сохранить</button></dt>
        </form>
        ';
    }

    public function getAdditionalDataToCreate(){
        return array_merge(array(

        ), parent::getAdditionalData(), parent::getAdditionalDataToCreate());
    }

    public function getAdditionalDataToUpdate(){
        return array_merge(array(

        ), parent::getAdditionalData(), parent::getAdditionalDataToUpdate());
    }
}
?>