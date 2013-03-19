<style>
.odd
{ 
	background-color: RGBA(214,214,214,0.4);
	border : 1px solid black;
}
.even
{ 
	background-color: RGBA(214,214,214,0.8);
	border : 2px solid red;

}
.highlight
{ 
	background-color: RGBA(214,214,214,1);
	border : 1px solid black;
	font-size : 1.0em;
	padding:0.5em;

}
.th
{
	
	padding: 0.4em;
}
.td
{
	font-size : 1em;
	padding: 0.4em;
}

</style>
<script type='text/javascript'>
	$("document").ready(function(){
		$("tr:even").addClass("even");
		$("tr:odd").addClass("odd");
		$("th").addClass("th");
		$("td").addClass("td");
		$(".hah").hover(
			function(){
				$(this).toggleClass('highlight');
			},
			function(){
				$(this).toggleClass('highlight');
			}
		);
	});
</script>
<?php echo $header; ?><br />
<table>
	<tr>
		<th>id</th>
		<th>voornaam</th>
		<th>tussenvoegsel</th>
		<th>achternaam</th>
	</tr>
		<?php echo $show_users; ?>
</table>
<p>Klik <a href='../users/add_user'>hier</a> om een nieuw record toe te voegen</p>


