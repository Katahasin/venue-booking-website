<!DOCTYPE html>
<html lang="en">
<head>
	<title>Venue LT1 Calendar</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

<!--===============================================================================================-->	

<!--===============================================================================================-->
	
<!--===============================================================================================-->

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 
    <title>Let's Book</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
<!--===============================================================================================-->
</head>
<body>

    
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				
                    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

                    <h1>Venue LT1 Calendar</h1>
                    <h3>Three sessions are the max of each day</h3>
                    <a href="reg_C5" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Back to booking page</a>

                    <div id='calendar'></div>
                    
                    <link type="text/css" rel="stylesheet" href="style.css"/> 
                    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
                    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
                    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
                    
                    <script>
                        $(document).ready(function() {
                            // page is now ready, initialize the calendar...
                            $('#calendar').fullCalendar({
                                editable: true,
                                events: "fetch-event.php",
                                displayEventTime: true,
                                // put your options and callbacks here
                                events : [
                                    @foreach($Calendar5 as $task)
                                    {
                                        title :'{{$task->first_name}} Time:{{$task->session }} ',
                                       
                                        start : '{{ $task->hour_start }}',

                                       
                                        
                                      
                                    },
                                    @endforeach
                                ]
                            })
                        });
                    </script>
				

			
					
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	
<!--===============================================================================================-->
	
<!--===============================================================================================-->


<!--===============================================================================================-->
    <script src="js/main.js"></script>
    

</body>
</html>