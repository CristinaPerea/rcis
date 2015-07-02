<style type="text/css">
	tbody 	{
		display: block;
	}
	tbody{
		height: 200px;
		overflow-y: scroll;
	}
	tr>th{
		display: initial;
	}
</style>
<div class="">
	<?php 
		include_once("lectorCSV.php");
		$miarray = loadDataFromCSVEncoding("https://docs.google.com/uc?authuser=0&id=0B777mNcRbpXNSGlhdGlYbGpYZTg&export?format=download");
		$mensaje = '<table id="qs_table" border="1" class=""><thead class="miTabla"><tr><th width="30%">Autor</th><th width="30%">Título</th><th width="5%">Año</th><th width="30%">Publicación/Procedencia</th><th width="5%">PDF</th></tr></thead><tbody class="miTabla">';
		for($i=1; $i<sizeof($miarray); $i++){
			$id = $miarray[$i][2];

			$autor=$miarray[$i][3];
			$titulo=$miarray[$i][4];
			$año = $miarray[$i][10];
			$publicación =$miarray[$i][14].$miarray[$i][5].$miarray[$i][6].$miarray[$i][7].$miarray[$i][9];
			$url=$miarray[$i][13];
			$mensaje .= '<tr id="'.$id;
			$mensaje .= ' class="entry"><td>'.$autor.'</td>';
			$mensaje .= '<td>'.$titulo.'</td>';
			$mensaje .= '<td>'.$año.'</td>';
			$mensaje .= '<td>'.$publicación.'</td>';
			if($url != "")
				$mensaje .= '<td><a href="'.$url.'"><center><img src="img/icon-pdf.png"></img></center></a></td>';
			else 
				$mensaje .= '<td><a href="#"></a></td>';
			$mensaje .= '</tr>';
		}
		$mensaje .= '</tbody></table>';
		echo $mensaje;
	?>
	<!--
		<td>Andrieux, A., Czajkowski, K., Dan, A., Keahey, K., Ludwig, H., Nakata, T., Pruyne, J., Rofrano, J., Tuecke, S. and Xu, M.</td>
		<td>Web services agreement specification (WS-Agreement) <p class="infolinks">[<a href="javascript:toggleInfo('wsag','bibtex')">BibTeX</a>]</p></td>
		<td>2007</td>
		<td><br/>Vol. 128Open Grid Forum&nbsp;</td>
		<td>inproceedings</td>
		<td>&nbsp;</td>
	</tr>
	<tr id="bib_wsag" class="bibtex noshow">
	<td colspan="6"><b>BibTeX</b>:
	<pre>
	@inproceedings{wsag,
	  author = {Andrieux, Alain and Czajkowski, Karl and Dan, Asit and Keahey, Kate and Ludwig, Heiko and Nakata, Toshiyuki and Pruyne, Jim and Rofrano, John and Tuecke, Steve and Xu, Ming},
	  title = {Web services agreement specification (WS-Agreement)},
	  booktitle = {Open Grid Forum},
	  year = {2007},
	  volume = {128}
	}
	</pre></td>
	</tr>

	</tbody>
	</table>-->
</div>