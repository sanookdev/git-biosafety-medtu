<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST</title>
</head>

<body>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js"></script>
    <script>
    $(document).ready(() => {
        // axios.post('./admin/api/informations.php',{
        //     topic : 'listProjectAll'
        // })
        async function taskOne() {
            setTimeout(function() {
                console.log("this is task 1");
            }, 500);
        }

        async function taskTwo() {
            console.log("this is task 2");
        }

        async function taskThree() {
            setTimeout(function() {
                console.log("this is task 3");
            }, 1000)
        }

        await taskOne();
        await taskTwo();
        await taskThree();
    })
    </script>
</body>

</html>