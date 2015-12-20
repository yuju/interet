<h4>Les 5 derniers membres connectés</h4>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Login</th>
			<th>Date</th>
		</tr>
	</thead>
	<tbody>
		<?php 

		$query_cmd = "SELECT * FROM usager ORDER BY date_authentification DESC LIMIT 5";
		$reponse = $bdd->query($query_cmd);
		while ($donnees = $reponse->fetch())
		{
			?>
			<tr>
				<td><?php echo $donnees["login"]; ?> </td>
				<td><?php echo $donnees["date_authentification"]; ?> </td>
			</tr>
			<?php
		}
		?>
	</tbody>
</table>
