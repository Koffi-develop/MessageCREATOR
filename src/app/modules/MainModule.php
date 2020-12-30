<?php
namespace app\modules;

use std, gui, framework, app;


class MainModule extends AbstractModule
{

    /**
     * @event create.action 
     */
    function doCreateAction(ScriptEvent $e = null)
    {    
        if ($this->edit->text == ""){
           $this->toast("Заполните все поля!"); 
        } elseif ($this->editAlt->text == ""){
           $this->toast("Заполните все поля!"); 
        } else {
            if ($this->save->execute()){
                if ($this->combobox->value == 'Empty'){
                    $h1 = 'msgbox"' . $this->edit->text;
                    $h2 = $h1 . '",,"';
                    $h3 = $h2 . $this->editAlt->text;
                    $h4 = $h3 . '"';
                    $file = $this->save->file . '.vbs';
                    file_put_contents($file, $h4);
                } elseif ($this->combobox->value == 'Error'){
                    $h1 = 'msgbox"' . $this->edit->text;
                    $h2 = $h1 . '",16,"';
                    $h3 = $h2 . $this->editAlt->text;
                    $h4 = $h3 . '"';
                    $file = $this->save->file . '.vbs';
                    file_put_contents($file, $h4);
                } elseif ($this->combobox->value == 'Warning'){
                    $h1 = 'msgbox"' . $this->edit->text;
                    $h2 = $h1 . '",48,"';
                    $h3 = $h2 . $this->editAlt->text;
                    $h4 = $h3 . '"';
                    $file = $this->save->file . '.vbs';
                    file_put_contents($file, $h4);
                } elseif ($this->combobox->value == 'Question'){
                    $h1 = 'msgbox"' . $this->edit->text;
                    $h2 = $h1 . '",32,"';
                    $h3 = $h2 . $this->editAlt->text;
                    $h4 = $h3 . '"';
                    $file = $this->save->file . '.vbs';
                    file_put_contents($file, $h4);
                } else {
                    $h1 = 'msgbox"' . $this->edit->text;
                    $h2 = $h1 . '",64,"';
                    $h3 = $h2 . $this->editAlt->text;
                    $h4 = $h3 . '"';
                    $file = $this->save->file . '.vbs';
                    file_put_contents($file, $h4);
                }
            }         
        }
    }

}
