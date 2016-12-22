<?php
echo "<h1> Form Register </h1>";
?>
 <a href="<?php echo site_url()?>/Login/logout">Logout</a>
<form action="">
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="" disabled value="<?php echo $username?>"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="" value="<?php foreach ($mhs as $row): echo $row->nama; endforeach
				?>
			"
			disabled></td>
		</tr>
		<tr>
			<td>Pilih UKM 1 </td>
			<td>:</td>
			<td>
			<select name="ukm1" >
					<option>Pilih Orma</option>
					<?php  foreach ($orma as $ukm):  ?>
					<option value="<?php echo $ukm->id_ukm; ?>"><?php echo $ukm->nama; ?></option>
					<?php   endforeach  ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Alasan</td>
			<td>:</td>
			<td><textarea type="text" name="alasan1" ></textarea></td>
		</tr>
		<tr>
			<td>Pilih UKM 2</td>
			<td>:</td>
			<td>
			<select name="ukm2" >
					<option>Pilih Orma</option>
					<?php  foreach ($orma as $ukm):  ?>
					<option value="<?php echo $ukm->id_ukm; ?>"><?php echo $ukm->nama; ?></option>
					<?php   endforeach  ?>
				</select>
				</td>
		</tr>
		<tr>
			<td>Alasan</td>
			<td>:</td>
			<td><textarea type="text" name="alasan2" ></textarea></td>
		</tr>
		<tr>
			<td>Pilih UKM 3</td>
			<td>:</td>
			<td>
			<select name="ukm3" >
					<option>Pilih Orma</option>
					<?php  foreach ($orma as $ukm):  ?>
					<option value="<?php echo $ukm->id_ukm; ?>"><?php echo $ukm->nama; ?></option>
					<?php   endforeach  ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Alasan</td>
			<td>:</td>
			<td><textarea type="text" name="alasan3" ></textarea></td>
		</tr>
	</table>
	<input type="submit" name="kirim" value="kirim">
</form>
<?php

  			

?>
<img src="http://www.amikom.ac.id/public/fotomhs/20<?=substr($username, 0, 2)?>/<?=$username?>.jpg" />