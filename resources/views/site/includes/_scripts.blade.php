
<!-- <script src="{{ asset('assets/js/jquery-3.3.1.min.js' ) }}"></script> -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js' ) }}"></script>
<script src="{{ asset('assets/js/lightbox.min.js' ) }}"></script>
<script src="{{ asset('assets/js/main.js' ) }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
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
            minDate: moment() // Set minDate to today's date
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
</script>