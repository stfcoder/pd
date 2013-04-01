<form method="post" action="{$action}">
	<input type="hidden" name="oldshipname" value="{$Update.shipname}" />
	<p><strong>Ship Name:</strong> <input type="text" name="shipname" value= "{$Update.shipname}" /></p>
	<p><strong>Fleet:</strong> <input type="text" name="fleet" value="{$Update.fleet}" size="1" /> <em>(1, 2, 3, etc.)</em></p>
	<p><strong>CO Name:</strong> <input type="text" name="co" value="{$Update.co}" /></p>
	<p><strong>CO Email:</strong> <input type="text" name="email" value="{$Update.email}" /></p>
	<p><strong>Posting Speed:</strong> <input type="text" name="postingspeed" value="{$Update.postingspeed}" /> <em>Frequent, Average, Slow</em></p>
	<p><strong>Accepts New Members?</strong> <select name="newmembers">
												{if $Update.newmembers == "Yes"}
													<option value="Yes" selected="selected">Yes</option>
													<option value="No">No</option>
												{else}
													<option value="No" selected="selected">No</option>
													<option value="Yes">Yes</option>
												{/if}
											</select></p>
	<p><strong>Vacancies:</strong></p>
	<table width="50%">
		<tr>
			<td width="10%">
				{if $Update.vacancyxo == 1}
					<input type="checkbox" name="vacancyxo" checked="checked" />
				{else}
					<input type="checkbox" name="vacancyxo" />
				{/if}
			</td>
			<td width="40%">Executive Officer</td>
			<td width="10%"></td>
			<td width="40%"></td>
		</tr>
		<tr>
			<td>
				{if $Update.vacancyce == 1}
					<input type="checkbox" name="vacancyce" checked="checked" />
				{else}
					<input type="checkbox" name="vacancyce" />
				{/if}
			</td>
			<td>Chief Engineer</td>
			<td>				
				{if $Update.vacancyeng == 1}
					<input type="checkbox" name="vacancyeng" checked="checked" />
				{else}
					<input type="checkbox" name="vacancyeng" />
				{/if}
			</td>
			<td>Engineers</td>
		</tr>
		<tr>
			<td>
				{if $Update.vacancycmo == 1}
					<input type="checkbox" name="vacancycmo" checked="checked" />
				{else}
					<input type="checkbox" name="vacancycmo" />
				{/if}			
			</td>
			<td>Chief Medical Officer</td>
			<td>
				{if $Update.vacancymed == 1}
					<input type="checkbox" name="vacancymed" checked="checked" />
				{else}
					<input type="checkbox" name="vacancymed" />
				{/if}			
			</td>
			<td>Doctors</td>
		</tr>
		<tr>
			<td>
				{if $Update.vacancycos == 1}
					<input type="checkbox" name="vacancycos" checked="checked" />
				{else}
					<input type="checkbox" name="vacancycos" />
				{/if}			
			</td>
			<td>Chief of Security</td>
			<td>
				{if $Update.vacancysec == 1}
					<input type="checkbox" name="vacancysec" checked="checked" />
				{else}
					<input type="checkbox" name="vacancysec" />
				{/if}			
			</td>
			<td>Security Officers</td>
		</tr>
		<tr>
			<td>
				{if $Update.vacancycso == 1}
					<input type="checkbox" name="vacancycso" checked="checked" />
				{else}
					<input type="checkbox" name="vacancycso" />
				{/if}			
			</td>
			<td>Chief Science Officer</td>
			<td>
				{if $Update.vacancysci == 1}
					<input type="checkbox" name="vacancysci" checked="checked" />
				{else}
					<input type="checkbox" name="vacancysci" />
				{/if}			
			</td>
			<td>Scientists</td>
		</tr>
	</table>
	<p><strong>Other Vacancies:</strong> <input type="text" name="vacancyother" value="{$Update.vacancyother}" /></p>
	<p><strong>Ship Description:</strong><br /><textarea name="description" rows="5" cols="50" style="font-family: 'Times New Roman', Times, serif;">{$Update.description}</textarea></p>
	<p><input type="submit" name="{$value}" value="{$value}" />
</form>