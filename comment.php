<?php
include(`\xampp\htdocs\xampp\php programming\connectphp.php`);

if(isset($_post[`sign-in`])){
      if(isset($_post[`com`])){
       
?>
<input type="text" class="form-control" name="com" id="com" placeholder="right your comment(yanit yaz)">
<button type="button" id="but" >comment(yanıt)</button>


<?php
 if(isset($_post[`but`])){
       echo  'Dersin adı: ' . htmlspecialchars($_GET["com"]); ;  
    }
}
}
?>