<?php 
include "konek.php";

$edit = mysql_query("SELECT * FROM artikel WHERE id_artikel='$_GET[id_artikel]'");
$a = mysql_fetch_array($edit);

echo "
<form method=POST action=update.php>
<input type=hidden name=id_artikel value=$a[id_artikel]>

<table>
<tr>
<td>Judul</td>
<td>&nbsp;:&nbsp;</td>
<td><input type=text name='judul_artikel'></td>
</tr>

<tr>
<td>upload</td>
<td>&nbsp;:&nbsp;</td>
<td><input type=file name='picture'></td>
</tr>

<tr>
<td valign=top>Deskripsi</td>
<td valign=top>&nbsp;:&nbsp;</td>
<td><textarea name='deskripsi_artikel'></textarea></td>
</tr>
</table>
<br>

<input type=submit value=UPDATE> <input type=button value=RESET onClick=self.history.back()>
</form>";

?>