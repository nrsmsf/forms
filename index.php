<pre>
    <?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

    Class Form{


        public function input($arr){

            $res = array_map(function($k, $v) { return "{$k} = \"{$v}\" "; }, array_keys($arr), $arr);
            $resImp = implode($res);
            return ("<input {$resImp}>");


        }

        public function password($arr){

            $res = array_map(function($k, $v) { return "{$k} = \"{$v}\" "; }, array_keys($arr), $arr);
            $resImp = implode($res);
            return ("<input type = 'password' {$resImp}> ");


        }

        public function submit($arr){

            $res = array_map(function($k, $v) { return "{$k} = \"{$v}\" "; }, array_keys($arr), $arr);
            $resImp = implode($res);
            return ("<input type='submit' {$resImp} >");


        }

        public function textarea($arr){

            $res = array_map(function($k, $v) { return "{$k} = \"{$v}\" "; }, array_keys($arr), $arr);
            $resImp = implode($res);
            return ("<textarea {$resImp[0]}>{$resImp[1]}</textarea>");


        }

        public function open($arr){

            $res = array_map(function($k, $v) { return "{$k} = \"{$v}\" "; }, array_keys($arr), $arr);
            $resImp = implode($res);
            return ("<form {$resImp} >");


        }

        public function close(){
            return ("</form>");


        }


    }
    $form = new Form;

    echo $form->open(['action'=>'index.php', 'method'=>'POST']);
    echo $form->input(['type'=>'text', 'placeholder'=>'Ваше имя', 'name'=>'name']);
    echo $form->password(['placeholder'=>'Ваш пароль', 'name'=>'pass']);
    echo $form->submit(['value'=>'Отправить']);
    echo $form->close();
    ?>


</pre>