<form id="locationSearchForm">

	<label class="control-label" for="locationSearchForm">Find me a place nearby!</label>

	<input type="hidden" id="latitude" name="latitude" />
	<input type="hidden" id="longitude" name="longitude" />

	<div class="form-group">
		<label for="cuisineType" class="control-label">What are you in the mood for?</label>
		<div>
			<input id="cuisineType" name="cuisineType" type="text" class="form-control" placeholder="New Mexican" maxlength="100">
		</div>
	</div>
	<div class="form-group">
		<label for="radius" class="control-label">How far do you want to go?</label>

		<div>
			<select class="form-control" id="radius" name="radius">
				<option value="1">1 mile</option>
				<option value="5">5 miles</option>
				<option value="10">10 miles</option>
				<option value="20">20 miles</option>
				<option value="50">50 miles</option>
			</select>
		</div>

	</div>

	<div class="form-group">
		<div>
			<button id="geolocate" type="submit" class="btn btn-default">Search</button>
		</div>
	</div>

</form>