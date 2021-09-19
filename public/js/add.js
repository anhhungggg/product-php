$(document).ready(() => { $('#productType').change(function() {
    switch (this.value) {
        case '0':
            $('#dform').html(`
                     <label for="size">Please provide Size (MB)</label><br>
                     <input type="number" class="form-control" name="size" id="size" required/>
                    `);
            break;
        case '1':
            $('#dform').html(`
                    <label for="weight">Please provide Weight (KG)</label><br>
                    <input type="number" class="form-control" name="weight" id="weight" required>
                    `);
            break;

        case '2':
            $('#dform').html(`
                    <label for="height">Please provide Height (Cm)</label><br>
                    <input type="number" class="form-control" name="height" id="height" required><br>
                    <label for="width">Please provide Width (Cm)</label><br>
                    <input type="number" class="form-control" name="width" id="width" required><br>
                    <label for="length">Please provide Length (Cm)</label><br>
                    <input type="number" class="form-control" name="length" id="length" required><br>
                    `);
            break;
    }
})})

    // $('form').submit(function(e)
    // {
    //     e.preventDefault();
    //
    //     let inputs = {};
    //     $(this).find(':input').each(function() {
    //         inputs[$(this).attr("name")] = $(this).val();
    //     });
    //
    //     $.post('/products/add', inputs, function(data, status) {
    //         $('#message').show().removeClass('alert-success alert-danger').addClass(`alert-${data.status}`).html(data.message);
    //     });
    // });

