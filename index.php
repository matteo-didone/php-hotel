<!-- 
Description:
Let's start with this array of hotels: https://www.codepile.net/pile/OEWY7Q1G
Print all our hotels with all the available data, gradually.
First, print the data on the page without worrying about the style.
Then, add Bootstrap and display the information in a table.
Bonus:
1 - Add a form at the beginning of the page that allows filtering hotels with parking through a GET request.
2 - Add a second field to the form that allows filtering hotels by rating (e.g., enter 3 to get all hotels with a rating of three stars or higher).
NOTE: It should be possible to use both filters simultaneously (e.g., get a list of hotels that have parking and have a rating of three stars or higher).
If no filter is specified, display all the hotels as before.
-->

<!DOCTYPE html>

<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel California</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>

    <?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
    ?>

    <div class="table-container">
        <!-- Bootstrap Table -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">
                        Name
                    </th>
                    <th scope="col">
                        Description
                    </th>
                    <th scope="col">
                        Parking
                    </th>
                    <th scope="col">
                        Vote
                    </th>
                    <th scope="col">
                        Distance to city center
                    </th>
                </tr>
            </thead>

            <tbody>
                <?php $counter = 1; ?>
                <?php foreach ($hotels as $hotel) { ?>
                    <tr>
                        <th scope="row">
                            <?php echo $counter; ?>
                        </th>
                        <td>
                            <?php echo $hotel['name']; ?>
                        </td>
                        <td>
                            <?php echo $hotel['description']; ?>
                        </td>
                        <td>
                            <?php echo $hotel['parking']; ?>
                        </td>
                        <td>
                            <?php echo $hotel['vote']; ?>
                        </td>
                        <td>
                            <?php echo $hotel['distance_to_center']; ?>
                        </td>
                    </tr>
                    <?php $counter++; ?>
                <?php } ?>
            </tbody>

        </table>
    </div>
</body>

</html>