<h1>5Times5</h1>

<p>A/504, JEEVAN ASHA,M.G.ROAD NO-4,KANDIVALI(W),MUMBAI-400067</p>
<style>
table
{
border-collapse:collapse;
}
table, td, th
{
border:1px solid black;
}
</style>
<table class="table table-bordered">
	<thead>
		<tr>
        	<th>Product Name</th>
            <th>Amount</th>
            <th>Quantity</th>
			<th>Total</th>
			<th>Tax</th>
            
		</tr>
	</thead>
	<tbody>
		<?php 
		$finaltotal=0;
		$total=0;
		$tax=0;
		foreach($table as $row) { 
		$total+=round($row->finaltotal,2);
		$tax+=round($row->tax,2);
		$finaltotal+=round($row->finaltotal,2)+round($row->tax,2);
		?>
		<tr>
			<td><?php echo $row->name;?></td>
			<td><?php echo $row->amount;?></td>
			<td><?php echo $row->quantity;?></td>
            <td><?php echo round($row->finaltotal,2);?></td>
			<td><?php echo round($row->tax,2);?></td>
       </tr>
        <?php } ?>
		
	</tbody>
</table>

<div class="pull-right span3">
      <table class="table table-bordered">
        <tr>
          <td class="bold">Total:</td>
          <td class="finaltotal">Rs.<?php echo $total;  ?></td>
        </tr>
        <tr>
          <td class="bold" >Total Tax:</td>
          <td class="finaltax">Rs.<?php echo $tax ?></td>
        </tr>
         <tr>
          <td class="bold" >Final Total:</td>
          <td class="finaltotalwithtax">Rs.<?php  echo $finaltotal ?></td>
        </tr>
      </table>
</div>
