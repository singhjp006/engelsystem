

<form action="<?
include ("./inc/config.php");
echo substr($url, 0, strlen($url)-1). $ENGEL_ROOT
?>nonpublic/index.php" method="post">
<table>
<tr>
 <td align="right"><? echo Get_Text("index_lang_nick");?></td>
 <td><input type="text" name="user" size="23"></td>
</tr>
<tr>
 <td align="right"><? echo Get_Text("index_lang_pass");?></td>
 <td><input type="password" name="password" size="23"></td>
</tr>
</table>
<br>
<input type="submit" value="<? echo Get_Text("index_lang_send");?>">
</form>

