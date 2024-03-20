
<!-- <script src="{{ asset('assets/js/jquery-3.3.1.min.js' ) }}"></script> -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js' ) }}"></script>
<script src="{{ asset('assets/js/lightbox.min.js' ) }}"></script>
<script src="{{ asset('assets/js/main.js' ) }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const minusButtons = document.querySelectorAll('.minus');
        const plusButtons = document.querySelectorAll('.plus');

        minusButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                const input = button.nextElementSibling;
                let value = parseInt(input.value);
                if (value > 0) {
                    input.value = value - 1;
                }
            });
        });

        plusButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                const input = button.previousElementSibling;
                let value = parseInt(input.value);
                input.value = value + 1;
            });
        });
    });

    var dates = [];
    $(document).ready(function() {
        $("#cal").daterangepicker();
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
</script>