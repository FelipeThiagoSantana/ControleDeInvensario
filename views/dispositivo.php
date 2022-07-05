<table class="table">
	<tr>
		<th>
			Aparelhos
		</th>
		<th>
			IMEI01
		</th>
		<th>
			IMEI02
		</th>
		<th>
			Numero
		</th>
	</tr>

	<?php
		while ($linha = mysqli_fetch_array($consulta)){
			echo '<tr><td>'.$linha['aparelho'].'</td>';
			echo '<td>'.$linha['imei01'].'</td>';
			echo '<td>'.$linha['imei02'].'</td>';
			echo '<td>'.$linha['numero'].'</td></tr>';
		}
		?>
</table>
