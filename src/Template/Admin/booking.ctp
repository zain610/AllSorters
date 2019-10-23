<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://momentjs.com/downloads/moment.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.js'></script>
<script src="js/eas"></script>
    <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css" />
    <script>
        var j =jQuery.noConflict();
        j(document).ready(function() {

            // page is now ready, initialize the calendar...

            j('#calendar').fullCalendar({
                // put your options and callbacks here
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                defaultDate: '2019-08-12',
                navLinks: true, // can click day/week names to navigate views
                selectable: true,
                selectMirror: true,
                dayClick: function (start, end, jsEvent, view){
                    var title = prompt('Event Title:');
                    if (title) {
                        console.log(end);
                        j('#calendar').fullCalendar('addEventSource',
                            {events: [{
                                title: title,
                                start: start,


                            }]})
                    }
                    j('#calendar').fullCalendar('unselect');
                },
                editable: true,
                eventLimit: true,

            });
            j('#calendar').fullCalendar('render');
        });
    </script>
    <style>



        #calendar {
            max-width: 900px;
            margin: 0 auto;
        }

    </style>



<div id='calendar'></div>

