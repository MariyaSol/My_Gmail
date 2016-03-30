<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  	<link rel="stylesheet" href="C:/OpenServer/domains/auth2/css/style.css" media="screen" title="no title" charset="utf-8">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<link rel="stylesheet" href="C:/OpenServer/domains/auth2/css/styleHome.css" media="screen" title="no title" charset="utf-8">

		<script src="C:/OpenServer/domains/auth2/js/ckeditor/ckeditor.js"></script>
		<script src="C:/OpenServer/domains/auth2/js/ckeditor/samples/sample.js"></script>
		<link rel="stylesheet" href="C:/OpenServer/domains/auth2/js/ckeditor/samples/sample.css">
</head>
<body>
<?php home(); ?>
</body>
</html>
<?php

function home (){
echo <<< END


<body>
<div class="all">
  <h1>Home page</h1>
      <div class="write">
          <div class="sidebar">
        <input type="button" name="name" value="НАПИСАТЬ" class="Napis">

        <img src="img/vxod.png" alt="">
        <img src="img/isxod.png" alt="">
        <img src="img/spam.png" alt="">
        <img src="img/trash.png" alt="">

    </div>
      <div class="Message">
          <div class="H2s"><h2>Написать сообщение</h2></div>
          <form class="" action="index.html" method="post">
              <input type="text" placeholder="Тема:">
              <input type="text" placeholder="Кому:">
              <div class="TextEdit">
                <textarea name="name" rows="8" cols="40" placeholder="Напишите сообщение" id="mess"></textarea>
                <script>
CKEDITOR.replace( 'mess', {
uiColor: '#dddddd',
toolbar: [
['Source','-','Save','NewPage','Preview','-','Templates'] ,
['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print'] ,
['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'],
['BidiLtr', 'BidiRtl'],
['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv'],
['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
['Link','Unlink','Anchor'],
['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
['Styles','Format','Font','FontSize'],
['TextColor','BGColor'],
['Maximize', 'ShowBlocks','-','About']


]
} );
</script>
              </div>
  <input type="file" id="File" name="foto">
          </form>
      </div>
    </div>
</div>
</body>
<script type="text/javascript">
$(function(){
$(window).scroll(function() {
    var top = $(document).scrollTop();
    if (top < 50) $(".sidebar").css({top: '0',left:'0',width:'15%', position: 'relative'});
    else $(".sidebar").css({top: '0', position: 'fixed', left:'18.4%',width:'8%'});
});
});
$(function(){
$(window).scroll(function() {
    var top = $(document).scrollTop();
    if (top < 50) $(".Message").css({top: '7.29%',left:'33.39%',width:'40.3%', position: 'fixed'});
    else $(".Message").css({top: '0', position: 'fixed', left:'26.40%',width:'47.35%'});

});
});

$(document).ready(function(){
$('.Message').hide();
$('.Napis').click(function(){

  $('.Message').toggle(800)});
});



</script>
END;
}
?>
