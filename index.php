<table class="city_list">
	<?php     
	$numbers = array();
	for($i=0; $i<5; $i++){
		for($j=0; $j<10; $j++){
			$numbers[$i][$j]=rand(0,10);
			}	
		}
	?>	
	
	<?php foreach ($numbers as $items): ?>
	<tr>
		<?php foreach ($items as $row): ?>
		<td><?php echo $row; ?></td>
		<?php endforeach; ?>
	</tr>
	<?php endforeach; ?>
</table>
 
<style>
.city_list {
	width: 100%;
}
.city_list td {
	width: 5%;
	border: 1px solid #ddd;
	padding: 7px 10px;
}
</style>