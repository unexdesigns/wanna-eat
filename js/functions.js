const query = (query_string, debug) => new Promise((resolve, reject) => {
	if(!query_string){
		throw new Error("Klaida. Nepaduota SQL užklausa.")
	}

	
	$.ajax({
		url: "/php/json/query.php",
		type: "POST",
		data: {
			query: query_string
		},
		success: function(response){
			if (debug === true) {
				console.log('Debug:', php);
			}
			resolve(php);
		},
		error: function(php){
			reject(php);
		}
	});
});

function debug(query_string){
	query(query_string).then(php => {
		var fragment = document.createDocumentFragment();

		var debugWindow = document.createElement('pre');
		
		debugWindow.innerHTML = `<div class="card-block">${JSON.stringify(php.data, null, 4)}</div>`;
		fragment.appendChild(debugWindow);

		document.body.insertBefore(fragment);
		console.log("Debug:", php);
	});
}

function handleClick(event){
	var input = document.getElementById("query_string").value;
	query(input, true).then((response) => {
		var html;
		if(response.success === true){
			html = `
				<section class="recipes">
			`;

			response.data.forEach(function(el) {
				html += `
				<article class="recipe">
					<div class="row">
						<div class="col-md-4">
							<img src="${el.PhotoUrl}" alt="${el.Name}" class="img-fluid">
						</div>
						<div class="col-md-8">
							<div class="row">
								<div class="col">
									<h5> ${el.Name}</h5>
								</div>
								<div class="col col-md-auto">
									<div class="recipe-secondary">
										<span title="Trukmė"> <i class="material-icons">access_time</i> ${el.Duration} min. </span>
									</div>
								</div>
							</div>
							<p class="description"> ${el.Description} </p>
						</div>
					</div>
				</article>
				`;
			}, this);
			html += `
				</section>`;
		} else {
			html = "<span class=\"text-muted\">"+response.data+"</span>";
		}
		$("#response").html(html);
	}).catch(error => {
		console.error("SQL Klaida.", error);
	});
}
