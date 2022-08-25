<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Customer By City</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
         <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="container mt-5">
            @foreach($customersByCity as $customer)
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col" width="15%">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col" width="10%">Gender</th>
                    <th scope="col" width="10%">City</th>
                </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->age }}</td>
                            <td>{{ $customer->gender }}</td>
                            <td>{{ $customer->city }}</td>
                        </tr>
                </tbody>
            </table>
            @endforeach
        </div>
    </body>
</html>