<?php
namespace Encore\LargeFileUpload;

use Encore\Admin\Form\Field;

class LargeFileField extends Field
{

    public $view = 'large-file-field::large_file_upload';

    public function render()
    {
        $name = $this->formatName($this->column);

        $this->script = <<<SRC

        $('#{$name}-file').bootstrapFileInput();
        $('#{$name}-file').change(function(){
             aetherupload('{$name}', this, 'file').success(getPath).upload('{$name}');
        });

SRC;
        return parent::render();
    }
}