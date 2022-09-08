<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Research Prime Number</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <div class="card-title">
                    <h4>Research Your Prime Number</h4>
                </div>
            </div>
            <div class="card-body d-flex flex-column">
                <form id="formSearch">
                    <div class="form-row">
                        <div class="col-md-4">
                            <label for="startNo">Start Number</label>
                            <input type="text" class="form-control form-control-sm" id="startNo" name="startNo"
                                required>
                        </div>
                        <div class="col-md-4">
                            <label for="endNo">End Number</label>
                            <input type="text" class="form-control form-control-sm" id="endNo" name="endNo" required>
                        </div>
                        <div class="col-md-4 mt-auto">
                            <button class="btn btn-sm btn-outline-primary" type="submit" style="">Check</button>
                        </div>
                    </div>
                </form>
                <p class="mt-5">Prime Numbers Are : </p>
                <p class="primeNoShow" style="color:red"></p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script>
    $(document).ready(() => {
        $('#formSearch').on('submit', (e) => {
            e.preventDefault();
            let startNo = $('#startNo').val();
            let endNo = $('#endNo').val();
            let primesNo = [];
            console.log('between prime of ' + startNo + ' to ' + endNo);
            while (startNo <= endNo) {
                let c = 0;
                for (i = 1; i <= startNo; i++) {
                    if (startNo % i == 0) c++;
                }
                if (c == 2) primesNo.push(startNo);
                startNo++;
            }

            outputHtml = '';
            for (i = 0; i < primesNo.length; i++) {
                outputHtml += primesNo[i];
                if (i != primesNo.length - 1) outputHtml += ', ';
            }
            $('.primeNoShow').html(outputHtml);
            $.each(primesNo, (key, value) => {
                console.log(key + ": " + value);
            });
        })
    })
    </script>
</body>

</html>