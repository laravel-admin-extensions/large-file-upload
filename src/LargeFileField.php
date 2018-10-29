<?php
namespace Encore\LargeFileUpload;

use Encore\Admin\Form\Field;

class LargeFileField extends Field
{

     public $view = __DIR__.'/../resources/views/large_file_upload.blade.php';

    public function render()
    {
        $name = $this->formatName($this->column);

        $this->script = <<<SRC

$('#{$name}-file').bootstrapFileInput();

SRC;
        return parent::render();
    }
}