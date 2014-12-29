<?php if(isset($table['query']))print_r($table['query']); ?>
<table class="table table-bordered">
	<thead>
		<tr>
        	<th>Date</th>
        	<th>Product Sku</th>
            <th>Product Category</th>
            <th>Product Family</th>
            <th>Product Brand</th>
            <th>Product Brick</th>
            <th>Product name</th>
			<th>Quantity</th>
			<th>Gross Sales</th>
			<th>Discount</th>
            <th>Net Sales With Tax</th>
            <th>Tax Amount</th>
			<th>Net Sales Without Tax</th>
            <th>Toatl COGS</th>
			<th>Gross Margin</th>
            <th>Margin %</th>
         </tr>
	</thead>
	<tbody>
		<?php
		if(isset($table)){ 
		foreach($table as $row) { ?>
		<tr>
        	<td><?php echo $row->date;?></td>
        	<td><?php echo $row->productsku;?></td>
            <td><?php echo $row->categoryname;?></td>
            <td><?php echo $row->familyname;?></td>
            <td><?php echo $row->brandname;?></td>
            <td><?php echo $row->brickname;?></td>
            <td><?php echo $row->productname;?></td>
			<td><?php echo $row->quantity;?></td>
			<td><?php echo $row->grosssales;?></td>
			<td><?php echo $row->discount;?></td>
            <td><?php 
						$netsaleswithtax=($row->grosssales-$row->discount);
						echo $netsaleswithtax;
						?></td>
			<td><?php echo $row->taxamount;?></td>
            <td><?php
            			$netsaleswithouttax=$netsaleswithtax-$row->taxamount;
						echo $netsaleswithouttax;
						?></td>
            <td><?php echo $row->totalcogs;?></td>
            <td><?php 
						$margin=$netsaleswithouttax-$row->totalcogs;
						echo $margin;?></td>
            <td><?php 
						$marginpercent=($margin/$netsaleswithouttax)*100;
						echo round($marginpercent,3);?></td>
		
		</tr>
		<?php }} ?>
	</tbody>
</table>
