<?php
include "includes/dbConnect.php";


function join_tournament(){
	?>
					<div id="join_tournament" style="display:none;padding-bottom:15px;">
						
						<form id="tourney" name="tourney" action="index.php" method="POST">
							<input type="hidden" name="join" value="hellyeah">
							First teammate<br />
							<input type="text" name="first" class="support_form"><br />
							Second teammate<br />
							<input type="text" name="second" class="support_form"><br />
							<br />
							<textarea  name="explanation" class="support_form" cols=30 rows=5 onclick="this.value='';">Why will you win this tournament?  And how will you celebrate?</textarea><br />
							<input type="submit" name="submit" value="Submit">  
						</form>
					</div>
	<?php
}

function whos_playing(){
	?>
		<h2>Who You'll Be Playing</h2>
	<?php
	
	$query="SELECT * FROM `tournament` order by `tid` DESC";
	$result=mysql_query($query);
	$num2=mysql_numrows($result);
	
	if ($num2 != ''){
		while ($data = mysql_fetch_assoc($result)) {
				echo "<div class='team_listing' id='team".$data['tid']."'>";
				echo "<p class='team_member'>".$data['first']."</p>";
				echo "<p class='team_member'>".$data['second']."</p>";
				echo "<p class='team_why'>\"".html_entity_decode(nl2br(stripslashes($data['why'])))."\"</p>";
				echo "<img src='static/images/bar.png' alt='bocce' class='bar' style='margin-left:75px;'>";
			echo "</div>";
		}
	}
}
?>
