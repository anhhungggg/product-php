$(document).ready(() => { $('#product_type').change(function() {
    switch (this.value) {
        case '0':
            $('#attribute').html(`
                    <label for="size">Size</label>
                    <input type="number" step="0.01" class="form-control" name="size" required>
                `);
            break;
        case '1':
            $('#attribute').html(`
                    <label for="weight">Weight</label>
                    <input type="number" step="0.01" class="form-control" name="weight" required>
                    `);
            break;

        case '2':
            $('#attribute').html(`
                    <label for="height">Height</label>
                    <input type="number" step="0.01" class="form-control" name="height" required>
                    <label for="width">Width</label>
                    <input type="number" step="0.01" class="form-control" name="width" required>
                    <label for="length">Length</label>
                    <input type="number" step="0.01" class="form-control" name="length" required>
                    `);
            break;
    }
})})
