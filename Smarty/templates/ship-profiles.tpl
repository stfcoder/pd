<h2>{$Profile.shipname}</h2>
<p><strong>CO:</strong> <a href="mailto:{$Profile.email}">{$Profile.co}</a></p>
<p><strong>Posting Speed:</strong> {$Profile.postingspeed}</p>
<p><strong>Accepts New Members?</strong> {$Profile.newmembers}</p>
<p><strong>Vacancies:</strong></p>
<ul>
	{if $Profile.vacancyxo == '0' && $Profile.vacancyce == '0' && $Profile.vacancycmo == '0' && $Profile.vacancycos == '0' && $Profile.vacancycso == '0' && $Profile.vacancyeng == '0' && $Profile.vacancymed == '0' && $Profile.vacancysci == '0' && $Profile.vacancysec == '0' && $Profile.vacancyother|count_characters == 0}
		<li>No Vacancies!</li>
	{/if}
	{if $Profile.vacancyxo == 1}
		<li>Executive Officer</li>
	{/if} 
	{if $Profile.vacancyce == '1'}
		<li>Chief Engineer</li>
	{/if} 
	{if $Profile.vacancycmo == '1'}
		<li>Chief Medical Officer</li>
	{/if} 
	{if $Profile.vacancycos == '1'}
		<li>Chief of Security</li>
	{/if} 
	{if $Profile.vacancycso == '1'}
		<li>Chief Science Officer</li>
	{/if} 
	{if $Profile.vacancyeng == '1'}
		<li>Engineers</li>
	{/if} 
	{if $Profile.vacancymed == '1'}
		<li>Doctors</li>
	{/if} 
	{if $Profile.vacancysci == '1'}
		<li>Scientists</li>
	{/if} 
	{if $Profile.vacancysec == '1'}
		<li>Security Officers</li>
	{/if} 
	{if $Profile.vacancyother|count_characters > 0}
		<li>{$Profile.vacancyother}</li>
	{/if}
</ul>
<p><strong>Description:</strong> {$Profile.description}</p>