
<script src="{{ asset('assets/js/bootstrap.bundle.min.js' ) }}"></script>
<script src="{{ asset('assets/js/lightbox.min.js' ) }}"></script>
<script src="{{ asset('assets/js/main.js' ) }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="{{ asset('assets/datepicker/js/bootstrap-datepicker.min.js' ) }}"></script>
<script src="{{ asset('assets/datepicker/locales/bootstrap-datepicker.de.min.js' ) }}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const adultsminusButtons = document.querySelectorAll('.adults-minus');
        const adultsplusButtons = document.querySelectorAll('.adults-plus');
        const childrenminusButtons = document.querySelectorAll('.minus');
        const childrenplusButtons = document.querySelectorAll('.plus');

        adultsminusButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                const input = button.nextElementSibling;
                let value = parseInt(input.value);
                if (value > 0) {
                    input.value = value - 1; 
                    $(".adults-adults").val(input.value + ' Adults');  
                }
                
            });
        });
        
        adultsplusButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                const input = button.previousElementSibling;
                let value = parseInt(input.value);
                input.value = value + 1;
                $(".adults-adults").val(input.value + ' Adults');
            });
           
        });

        childrenminusButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                const input = button.nextElementSibling;
                let value = parseInt(input.value);
                if (value > 0) {
                    input.value = value - 1; 
                    $(".children-children").val(input.value + ' Children');   
                }
                
            });
        });
        
        childrenplusButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                const input = button.previousElementSibling;
                let value = parseInt(input.value);
                input.value = value + 1;
                $(".children-children").val(input.value + ' Children');
            });
           
        });
        
    });

    var dates = [];
    $(document).ready(function() {
        $("#cal").daterangepicker();
        $("#cal").daterangepicker({
            minDate: moment()
            });
        $("#cal").on('apply.daterangepicker', function(e, picker) {
            e.preventDefault();
            const obj = {
            "key": dates.length + 1,
            "start": picker.startDate.format('MM/DD/YYYY'),
            "end": picker.endDate.format('MM/DD/YYYY')
            }
            dates.push(obj);
            showDates();
        })
        
        $(".remove").on('click', function() {
            removeDate($(this).attr('key'));
        })
    })

    $("#cal").daterangepicker({
        minDate: moment()
    });

    function showDates() {
        $.each(dates, function() {
            const start = this.start;
            const currentValue = $("#ranges").val(); 
            const appendedValue = this.start; 
            const end   = this.end;
            $("#ranges").val(appendedValue); 
            $("#rangesend").val(end);
        })
    }
    function removeDate(i) {
        dates = dates.filter(function(o) {
            return o.key !== i;
        })
        showDates();
    }

    $('.adults-children').hide();
    $('#sec-menu').click(function() {
        $('.adults-children').toggleClass("active");
    });

    $('[data-fancybox="gallery"]').fancybox({
        buttons: [
            "slideShow",
            "thumbs",
            "zoom",
            "fullScreen",
            "share",
            "close"
        ],
        loop: false,
        protect: true
    });

    $(document).ready(function(){
        $('button.fancybox-button.fancybox-close-small').click(function(){
            console.log("Button clicked");
            window.location.reload();
        });
    });

    $('.calendar').map(function(index) {
        $(this).datepicker({
            defaultViewDate: {
                year: (new Date()).getFullYear(),
                month: (new Date()).getMonth() + index,
                date: 1
            },
            multidate: true,
            updateViewDate: false
        });
    });

    // keep month in sync
    var orderMonth = function(e) {
        var target = e.target;
        var date = e.date;
        var calendars = $('.calendar');
        var positionOfTarget = calendars.index(target);
        calendars.each(function(index) {
            if (this === target) {
                return;
            }
            var newDate = new Date(date);
            newDate.setUTCDate(1);
            newDate.setMonth(
                date.getMonth() + index - positionOfTarget
            );

            $(this).datepicker('_setDate', newDate, 'view');
        });
    };

    $('.calendar').on('changeMonth', orderMonth);

    // keep dates in sync
    $('.calendar').on('changeDate', function(e) {
        var calendars = $('.calendar');
        var target = e.target;
        var newDates = $(target).datepicker('getUTCDates');
        calendars.each(function() {
            if (this === e.target) {
                return;
            }

            // setUTCDates triggers changeDate event
            // could easily run into an infinite loop
            // therefore we check if currentDates equal newDates
            var currentDates = $(this).datepicker('getUTCDates');
            if (
                currentDates &&
                currentDates.length === newDates.length &&
                currentDates.every(function(currentDate) {
                    return newDates.some(function(newDate) {
                        return currentDate.toISOString() === newDate.toISOString();
                    })
                })
            ) {
                return;
            }

            $(this).datepicker('setUTCDates', newDates);
        });
    });

</script>