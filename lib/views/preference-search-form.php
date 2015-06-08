<section id="preferenceSearchSection">
	<form id="prefForm">
		<label for="prefForm">Select Dining Preferences</label>
		<div class="form-group">
			<div class="checkbox">
				<label class="checkbox">
					<input id="chkPrefVegetarian" name="chkPreferences[]" class="checkOption" type="checkbox" value="vegetarian"/>
					Vegetarian
				</label>
				<label class="checkbox">
					<input id="chkPrefPaleo" name="chkPreferences[]" class="checkOption" type="checkbox" value="paleo"/>
					Paleo
				</label>
				<label class="checkbox">
					<input id="chkPrefChocolatarian" name="chkPreferences[]" class="checkOption" type="checkbox" value="chocolatarian"/>
					Chocolatarian
				</label>
			</div>
		</div>
		<p id="preference-message-area"></p>
		<div class="form-group">
			<!-- Submit button -->
			<button type="submit" id="submit" class="btn btn-default">Submit</button>
		</div>
	</form>

	<!--empty div to be used by ajax script and populated with search results-->
	<div id="preference-search-results"></div>
</section>