---
layout: type3
title: форма обратной связи
nav: zakaz
---
<div align="center">
<table border="1" width="365" align="center" cellpadding="20" cellspacing="6">
<tr>
<td>
<form action="http://../send.php" method="post">

<p>Ваше имя:
 <input type="text" name="fio" width="20"></p>
 <p>Ваш e-mail:
 <input type="text" name="email" width="20"></p>
 <p>Текст сообщения:
<textarea name="money" cols="40" rows="5"></textarea></p>
<p>Введите числа с картинки: 
  	<?php 
		$i=1;
		do
		{
		$num[$i] = mt_rand(0,9);
		echo "<img src='img/".$num[$i].".gif' border='0' align='bottom' vspace='5px'>";
		$i++;
		}
		while ($i<5);
		$captcha = $num[1].$num[2].$num[3].$num[4];
		?>
<input name="captcha" type="hidden" value="<?php echo $captcha ;?>">
<input name="pr" style=" margin-bottom:11px" type="text" size="6" maxlength="4"></p>
<p><input type="submit" class="bt1" value="Отправить сообщение"></p>
</form>
<iframe  src="https://docs.google.com/spreadsheet/embeddedform?formkey=dF90VlIyVFRfWjFDUHhpZktLQ2VEbWc6MA" width="760" height="764" frameborder="0" marginheight="0" marginwidth="0" topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0">Loading...</iframe>