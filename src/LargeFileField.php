<?php
namespace Encore\LargeFileUpload;

use Encore\Admin\Form\Field;

class LargeFileField extends Field
{

    protected $group = 'file';
    public $view = 'large-file-field::large_file_upload';

    public function group($group)
    {
        $this->group = $group;
        return $this;
    }
    
    public function render()
    {
        $name = str_replace('[', '\\\[', str_replace(']', '\\\]', $this->formatName($this->column)));

        $this->script = <<<SRC

        $('#{$name}-file').bootstrapFileInput();
        $('#{$name}-file').change(function(){
             aetherupload('{$name}', this, '$this->group').success(getPath).upload('{$name}');
        });

SRC;
        return parent::render();
    }
}
