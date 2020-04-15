<form action="<?php echo base_url('calculator/hasil_hitung');?>" method="POST">
	<input type="text" name="var1" value="<?php echo $var1; ?>">
	<input type="text" name="var2" value="<?php echo $var2; ?>">
	<select name="operasi">
		<option value="kurang" <?php echo $operasi == 'kurang'?'selected':''?> >Pengurangan</option>
		<option value="tambah" <?php echo $operasi == 'tambah'?'selected':''?> >Pejumlahan</option>
		<option value="bagi" <?php echo $operasi == 'bagi'?'selected':''?> >Pembagian</option>
		<option value="kali" <?php echo $operasi == 'kali'?'selected':''?> >Perkalian</option>
		<option value="mod" <?php echo $operasi == 'mod'?'selected':''?> >Sisa Hasil Bagi</option>
	</select>
	<button type="submit">Hitung</button>
</form>

<p>Hasil Perhitungan: <?php echo $hasil;?></p>