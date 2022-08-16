<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Hospital Admin</title>

		<!-- Styles  -->
			@include('layouts.inc.styles')
</head>

<body>
		<!-- Nav Bar  -->
			@include('layouts.inc.admin_nav')
			
		<!-- partial -->
			@include('layouts.inc.content')

		<!-- Doctor's List  -->
			@include('layouts.inc.doctorslist')
			
		<!-- Appointment List  -->
			@include('layouts.inc.list')

		<!-- first row starts here -->
			@include('layouts.inc.reports')
		
		<!-- appointment -->
			@include('layouts.inc.appointment')
		
		<!-- latestreport -->
			@include('layouts.inc.latestreport')
						
		<!-- chat with a doctor -->
			@include('layouts.inc.chat')

		<!-- footer  -->
			@include('layouts.inc.footer')
		
		<!-- Scripts -->
			@include('layouts.inc.scripts')
</body>
</html>