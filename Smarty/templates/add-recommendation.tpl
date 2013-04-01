<form method="post" action="add-recommendation.php">
	<p><strong>Name:</strong> <input type="text" name="name" /></p>
	<p><strong>E-mail:</strong> <input type="text" name="email" /></p>
	<p><strong>Position:</strong> <select name="position">
									<option value="CO">Commanding Officer</option>
									<option value="XO">Executive Officer</option>
									<option value="CE">Chief Engineer</option>
									<option value="CMO">Chief Medical Officer</option>
									<option value="COS">Chief of Security</option>
									<option value="CSO">Chief Science Officer</option>
								  </select></p>
	<p><strong>Recommender's Name:</strong> <input type="text" name="recommendername" /></p>
	<p><strong>Recommender's E-mail:</strong> <input type="text" name="recommenderemail" /></p>
	<p><strong>Recommender's Position:</strong> <select name="recommenderposition">
													<option value="CO">Commanding Officer</option>
													<option value="XO">Executive Officer</option>
													<option value="GM">Gamemaster</option>
													<option value="FComm">Fleet Commander</option>
												</select></p>
	<p><strong>Recommender's Comments:</strong><br /><br /><textarea name="comments" rows="5" cols="50"></textarea></p>
	<p><input type="submit" value="Add Recommendation" /></p>
</form>