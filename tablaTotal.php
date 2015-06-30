<style type="text/css">
table { 
  width: 100%; 
  border-collapse: collapse; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  /*background: #	; */
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 
}
tr.bibtex pre { width: 100%; overflow: auto; white-space: pre-wrap;}
p.infolinks { margin: 0.3em 0em 0em 0em; padding: 0px; }
tr.abstract td, tr.review td, tr.bibtex td { background-color: #EFEFEF; text-align: justify; border-bottom: 2px #2E2E2E solid; }

@media print {
	p.infolinks, #qs_settings, #quicksearch, t.bibtex { display: none !important; }
	tr { page-break-inside: avoid; }
}

tr.noshow { display: none;}
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}
	
	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
	}
	
	/*
	Label the data
	*/
	td:nth-of-type(1):before { content: "Autor"; }
	td:nth-of-type(2):before { content: "Título"; }
	td:nth-of-type(3):before { content: "Year"; }
	td:nth-of-type(4):before { content: "Publicación"; }
	td:nth-of-type(6):before { content: "PDF"; }
}
</style>
<div class="">
	<?php 
		include_once("lectorCSV.php");
		$miarray = loadDataFromCSVEncoding("https://docs.google.com/uc?authuser=0&id=0B777mNcRbpXNSGlhdGlYbGpYZTg&export?format=download");
		$mensaje = '<table id="qs_table" border="1" class=""><thead><tr><th width="20%">Autor</th><th width="30%">Título</th><th width="5%">Año</th><th width="30%">Publicación/Procedencia</th><th width="5%">PDF</th></tr></thead><tbody>';
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