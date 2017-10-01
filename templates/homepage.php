<div class="container pt-5 mt-5">
	<div class="col-lg-8 m-auto">
		<div class="card mb-5">
			<div class="card-block">
				<code>SELECT * FROM ingredients</code>
				<hr>
				<div id="output"></div>
			</div>
		</div>
		<div class="card">
			<div class="card-block">
				<h4>Užklausa</h4>
				<input class="form-control mb-2" id="query_string" value="SELECT * FROM Recipes">
				<hr />
				<div class="text-right">
					<a  href="javascript:;" class="btn btn-primary" onclick="handleClick(event)">Siųsti užklausą</a>
				</div>
				<h4>Atsakymas</h4>
				<div id="response"></div>
			</div>
		</div>
	</div>
</div>
