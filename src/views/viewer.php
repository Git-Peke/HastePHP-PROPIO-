<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
    <div class="box">
    <div id="riba"><a href='/readme.md'><img src="assets/logo.png" alt=""></a></div>
            <div id="bajo">
              <div>
                <a text="" class='d'onmouseout="ashow()" onmouseover="//show('SAVE','CTRL + S')" ><i class="fas fa-save"></i></a>
                <a text="" href='/' class='ac'onmouseout="ashow()" onmouseover="show('NEW','CTRL + N')" ><i class="fas fa-file"></i></a>
                <a text="" class='ac'onmouseout="ashow()" onmouseover="show('DUPLICATE & EDIT','CTRL + D')" ><i class="fas fa-copy"></i></a>
                <a text="" class='ac'onmouseout="ashow()" href="/raw/<?php echo $loader; ?>" onmouseover="show('VIEW RAW','CTRL + SHIFT + R')" ><i class="fas fa-code"></i></a>
                <a text="" class='ac'onmouseout="ashow()" onclick="copy()" onmouseover="show('COPY URL','CTRL + SHIFT + T')" ><i class="fas fa-link"></i></a>
              </div>
            </div>
            <div id="utility" class="hidden">
                <p>
                    
                </p>
            </div>
    </div>
    <div id="lineNumbers">></div>
    <textarea name="" readonly id="" cols="30" rows="10"><?php echo $d; ?></textarea>
    <input type="text" value="HOLA" style="
    margin-top: -4826px;
    opacity: 1;
    position: absolute;
    /* z-index: 0 !important; */
" id="copy1">
</body>
<script>
  function copy(){

  
var sss = document.getElementById('copy1');
sss.value = window.location.href;
sss.select();

document.execCommand("copy");
alert('COPIADO');
}
</script>
<script src="assets/script.js"></script>

</html>