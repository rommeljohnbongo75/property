
<!-- Scripts -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('admin/libs/jquery/dist/jquery.min.js' ) }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('admin/libs/popper.js/dist/umd/popper.min.js' ) }}"></script>
    <script src="{{ asset('admin/libs/bootstrap/dist/js/bootstrap.min.js' ) }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('admin/libs/sparkline/sparkline.js' ) }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('admin/dist/js/waves.js' ) }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('admin/dist/js/sidebarmenu.js' ) }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('admin/dist/js/sweet-alert.js' ) }}"></script>
    <script src="{{ asset('admin/dist/js/ajax-call.js' ) }}"></script>
    <script src="{{ asset('admin/libs/datatable/datatable.js' ) }}"></script>
    <script src="{{ asset('admin/libs/datatable/dataTables.bootstrap.js' ) }}"></script>
    <script src="{{ asset('admin/dist/js/bs-custom-file-input.min.js' ) }}"></script>
    <script src="{{ asset('admin/dist/js/custom.min.js' ) }}"></script>

    <!--This page JavaScript -->
    <!--chartis chart-->
    <!-- <script src="{{ asset('admin/libs/chartist/dist/chartist.min.js' ) }}"></script>
    <script src="{{ asset('admin/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js' ) }}"></script>
     -->
    
    <script src="{{ asset('admin/dist/js/pages/dashboards/dashboard1.js' ) }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script type="text/javascript">
  
  $(document).ready(function () {
      var SITEURL = "{{ url('/') }}";
      $.ajaxSetup({
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      var calendar = $('#calendar').fullCalendar({
                    editable: true,
                    events: SITEURL + "/back/fullcalender",
                    displayEventTime: false,
                    editable: true,
                    eventRender: function (event, element, view) {
                        element.find('.fc-title').text(event.listing.title);
                        var span = $('<span class="fc-id-title">').text(event.listing.id);
                        element.find('.fc-content').append(span);

                        if (event.allDay === 'true') {
                                event.allDay = true;
                        } else {
                                event.allDay = false;
                        }
                    },
                    selectable: true,
                    selectHelper: true,
                });
   
      });
      function displayMessage(message) {
          toastr.success(message, 'Event');
      } 

      setTimeout(function() {
            $(".fc-content .fc-title").click(function(){
                var title = $(this).next('.fc-id-title').text();
                console.log('title', title);
                $("#myModal").modal('show');
            });


            $(".fc-content .fc-title").click(function(){
                var id = $(this).next('.fc-id-title').text(); 
                console.log('id', id);
                $.ajax({
                    url: '/back/fullcalenderAjax',
                    method: 'POST',
                    data: { id: id },
                    success: function (response) {
                        $('#proprty-title').text(response.title); 
                        $('#proprty-price').text(response.price); 
                        $('#proprty-bedroom').text(response.bedroom); 
                        $('#proprty-bathroom').text(response.bathroom); 
                        $('#proprty-city').text(response.city); 
                        $('#proprty-country').text(response.country); 
                        var imagePath = 'http://localhost:8000/' + response.thumbnail_0;
                        $('#proprty-image').attr('src', imagePath);  
                        $("#myModal").modal('show');
                    },
                    error: function (error) {
                        console.error('Error fetching data:', error);
                    }
                });
            });
        },1000);
  </script>