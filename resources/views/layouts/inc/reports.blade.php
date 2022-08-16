<div class="row">
	<div class="col-xl-8 stretch-card grid-margin">
		<div class="card">
			<div class="card-body">
				<div class="d-flex justify-content-between flex-wrap">
					<div>
						<div class="card-title mb-0">Patient total</div>
						<p class="mt-3">Here are your important tasks, updates and alerts.</p>
					</div>
					<div>
						<ul class="horizontal-legend">
							<li><span class="bg-success"></span>New Patients</li>
							<li><span class="bg-primary"></span>Old Patients</li>
						</ul>
					</div>
				</div>
				<div class="flot-chart-wrapper">
					<div id="patientTotal" class="flot-chart">
						<canvas class="flot-base"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-4 stretch-card grid-margin">
		<div class="card">
			<div class="card-body">
				<div class="card-title">Diseases Report</div>
				<p class="mt-2 mt-sm-0">a specialist will contact you shortly</p>
				<div class="doughnut-wrapper m-auto">
					<canvas id="deseaseReport" height="200"></canvas>
					<div id="deseaseReport-legend3" class="pl-lg-0 rounded-legend w-100">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>