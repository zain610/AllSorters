<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://momentjs.com/downloads/moment.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.js'></script>
<script src="js/eas"></script>
    <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css" />
    <script>
        var arrayFromPHP = '<?php echo json_encode($allBooking) ?>';
        var dataAr = JSON.parse(arrayFromPHP);
        var events2 = [];
        for(i=0;i<'<?php echo sizeOf($allBooking); ?>';i++){

            events2.push( {id:dataAr[i].id,title: dataAr[i].title , start: dataAr[i].start})

        }

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
                defaultDate: moment().format("YYYY-MM-DD"),
                navLinks: true, // can click day/week names to navigate views
                selectable: true,
                selectMirror: true,
                editable : false,




            events:events2,
                timeFormat: 'H(:mm)', // uppercase H for 24-hour clock、
                displayEventTime: false,
                dayClick: function (start, end, jsEvent, view){
                    var title = prompt('Event Title:');
                    if (title) {
                        //console.log(jsEvent.id);

                        j('#calendar').fullCalendar('addEventSource',
                            {events: [{
                                title: title,
                                start: start

                            }]}),

                        j('#calendar').fullCalendar('unselect');

                        //console.log(j('#calendar').fullCalendar('clientEvents')[0]['title']);

                        eventlength=j('#calendar').fullCalendar('clientEvents').length;
                        j('#booking-status input[name=title]').val(j('#calendar').fullCalendar('clientEvents')[eventlength-1]['title']);
                        j('#booking-status input[name=start]').val(j('#calendar').fullCalendar('clientEvents')[eventlength-1]['start']);
                        j('form#booking-status').submit();
                    }

                    },

                eventLimit: true,
                eventClick: function(event, element) {
                    var eventid=event['id'];
                    console.log(eventid);
                    window.location.href = "<?php echo $this->Url->build(['controller' => 'Admin','action' => 'bookingdelete']); ?>/"+eventid;


                }

            });


            j('#calendar').fullCalendar('render');


        });
    </script>
    <style>



        #calendar {
            max-width: 100%;
            margin: 0 auto;
        }

    </style>



<div id='calendar'></div>


<?php echo $this->Form->create(null, ['id' => 'booking-status', 'url' => ['controller' => 'admin', 'action' => 'booking']]); ?>
<?php echo $this->Form->hidden('title',['name'=>'title']); ?>
<?php echo $this->Form->hidden('start',['name'=>'start']); ?>

<?php echo $this->Form->end(); ?>
