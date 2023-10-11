<div class="" style="height:400px;overflow:auto;">
	<table class="border" cellspacing="0" cellpadding="0" border="0" id="" style="width:80%;border-collapse:collapse;">
		<thead>   
			<tr class="header" style="background:#ccc;">             
				<th style="text-align:center;">Date</th>    
				<th style="text-align:center;">Product Name</th>    
				<th style="text-align:center;">Damage Quantity</th> 
				<th style="text-align:center;">Unit</th>
				<th style="text-align:center;">Description</th>                                                               
			</tr>
		</thead>
		 
		 <tbody>
		<?php  
		if(isset($records) && $records){
			$total = 0;
			foreach($records as $record){
		?>
			<tr align="center">
				<td><?php echo $record->Damage_Date; ?></td>
				<td><?php echo $record->Product_Name; ?></td>
				<td><?php echo $record->DamageDetails_DamageQuantity; ?></td>
				<td><?php echo $record->Unit_Name; ?></td>
				<td><?php echo $record->Damage_Description; ?></td>
			</tr>
		<?php 
		$total += 	$record->DamageDetails_DamageQuantity;
	} 
				  echo '
					<td></td> 
					<td style="text-align:center">Total Qty  : </td>
					<td style="text-align:center">'.$total.'</td>
					<td></td>
					<td></td>
					';
	        }?>     

		</tbody>
	</table>                    
</div>            