<?
$to = "pochta@bratetslis.ru";
mail($to,"$sub",$mes);
echo "Ваше сообщение с темой  $sub и текстом: $mes <br> отправлено<BR><center><a href="../contacts/">Мои Контакты>Отправить еще</a>";
?>
