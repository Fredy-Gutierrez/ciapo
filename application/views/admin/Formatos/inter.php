<div class="table-responsive"><center>
		<table border=1 width="89%" cellspacing=0 cellpadding=1 class="table">

<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
<!-- el rowspan sirve para una columna ocupe los lugares hacia abajo  -->
<!-- el colspan sirve para una columna ocupe los lugares hacia la derecha-->
			<tr border=3>
				<th style="width:20%" style="height:30%" ><img src="application/views/admin/notamedica/salud.jpg" width="160" height="60" /></th>
				<th style="width:50%" style="height:20%" colspan="2"><span lang=ES
					style='font-size:8.5;font-family:"Arial",sans-serif'><center><br/>SECRETARIA DE SALUD <br>
                    HOSPITAL REGIONAL ALTA ESPECIALIDAD "CIUDAD SALUD"  <br>
                    INTERCONSULTA </center></p> <br/> 
                </th>
				<th style="width:5%" style="height:30%"><center><img src="application/views/admin/notamedica/logo.jpg" width="130" height="70"/></center></th>
			</tr>
			<?php 
				$dia=date("j");
				$mes=date("n");
				$anno=date("Y");
		 
				//descomponer fecha de nacimiento
				$dia_nac=substr($paciente->fecha_nac, 8, 2);
				$mes_nac=substr($paciente->fecha_nac, 5, 2);
				$anno_nac=substr($paciente->fecha_nac, 0, 4);
		 
				if($mes_nac>$mes){
					$calc_edad= $anno-$anno_nac-1;
				}else{
					if($mes==$mes_nac AND $dia_nac>$dia){
						$calc_edad= $anno-$anno_nac-1;
					}else{
						$calc_edad= $anno-$anno_nac;
					}
				}
			 ?>
			<tr>
				<td><span lang=ES
					style='font-size:8;font-family:"Arial",sans-serif'><center><b>NOMBRE DEL PACIENTE </b></td>
                <td><center><span lang=ES
					style='font-size:8.0;font-family:"Arial",sans-serif'><?php echo $paciente->ape_pat;?> <br/> <?php echo $paciente->ape_mat." ".$paciente->nombrepx;?></td>
                <td><span lang=ES
					style='font-size:8;font-family:"Arial",sans-serif'><center><b>FECHA DE NACIMIENTO</td>
                <td><center><span lang=ES
					style='font-size:8;font-family:"Arial",sans-serif'><?php echo $paciente->fecha_nac;?></td>
                
			</tr>

			<tr>
				<td><span lang=ES
					style='font-size:8;font-family:"Arial",sans-serif'><center><b>EXPEDIENTE</td>
                <td><center><span lang=ES
					style='font-size:8;font-family:"Arial",sans-serif'><?php echo $no_exp;?></center></td>
                <td><span lang=ES
					style='font-size:8;font-family:"Arial",sans-serif'><center><b>EDAD</td>
                <td><center><span lang=ES
					style='font-size:8;font-family:"Arial",sans-serif'><?php echo $calc_edad;?></center></td>

			</tr>

			<tr>
				<td><span lang=ES
					style='font-size:8;font-family:"Arial",sans-serif'><center><b>SEXO</td>
                <td><center><span lang=ES
					style='font-size:8;font-family:"Arial",sans-serif'><?php echo $paciente->sexo;?></center></td>
                <td><span lang=ES
					style='font-size:8;font-family:"Arial",sans-serif'><center><b>SERVICIO/CAMA</td>
                <td><center><span lang=ES
					style='font-size:8;font-family:"Arial",sans-serif'><?php echo $servicio;?></center></td>

			</tr>
			<?php 

            $fecha1 = $fecha;
            $fechaComoEntero = strtotime($fecha1);
            $mes = date("m", $fechaComoEntero);
            $anio = date("Y", $fechaComoEntero);
            $dia = date("d", $fechaComoEntero);
            
          ?>
			<tr>
				<td><span lang=ES
					style='font-size:8;font-family:"Arial",sans-serif'><center><b>FECHA DE SOLICITUD</td>
                <td><center><span lang=ES
					style='font-size:8;font-family:"Arial",sans-serif'><?php echo $dia."/".$mes."/".$anio;?></center></td>
                <td><span lang=ES
					style='font-size:8;font-family:"Arial",sans-serif'><center><b>DIAGNOSTICO</td>
                <td><center><span lang=ES
					style='font-size:8;font-family:"Arial",sans-serif'><?php echo $paciente->desdiag;?></center></td>
                
			</tr>

			<tr>
				<td colspan="4"><span lang=ES
					style='font-size:8;font-family:"Arial",sans-serif'><left><b>SERVICIO SOLICITADO<br/></left>
					<span lang=ES
					style='font-size:8;font-family:"Arial",sans-serif'><?php echo $servicio;?>
				</td>
                
                
                
			</tr>

			<tr>
				<td colspan="4"><span lang=ES
					style='font-size:8;font-family:"Arial",sans-serif'><b>MOTIVO DE CONSULTA:</b>
					<?php echo " ".$motivo;?>
					<br/>
					
					<span lang=ES
					style='font-size:8;font-family:"Arial",sans-serif'><b>RESUMEN CLINICO:</b> <br/>
					<?php echo $resumen;?>
				</td>

			</tr>

			<tr>
				<td colspan="4"><span lang=ES
					style='font-size:8;font-family:"Arial",sans-serif'><left><b> NOMBRE DEL MEDICO QUE SOLICITA</b><br/> <?php echo $medico->ape_pat." ".$medico->ape_mat." ".$medico->nombre; ?></td>
				
			</tr>

			<tr>
				<td colspan="4"><span lang=ES
					style='font-size:8;font-family:"Arial",sans-serif'><left><b> ESPECIALIDAD</b><br/> <?php echo $medico->nombreesp;?></td>
				
			</tr>

			

		</table>


	</div>



