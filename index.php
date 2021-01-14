<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masyvas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="style.css" type
    "text/css" rel="stylesheet">
</head>
<body>

<?php

$data = [
    '5a' => [
        rand(1, 1000) => [
            "John",
            'Walter',
            'kontroliniai darbai' => [
                'matematika' => 8,
                'it' => 7,
                'anglu' => 6,
            ],
            date("Y-m-d")
        ],
        rand(1, 1000) => [
            "Mary",
            'James',
            'kontroliniai darbai' => [
                'matematika' => 4,
                'it' => 6,
                'anglu' => 9,
            ],
            date("Y-m-d")
        ],
        rand(1, 1000) => [
            "Clark",
            'Will',
            'kontroliniai darbai' => [
                'matematika' => 10,
                'it' => 10,
                'anglu' => 8,
            ],
            date("Y-m-d")
        ],
        rand(1, 1000) => [
            "Taylor",
            'Leeds',
            'kontroliniai darbai' => [
                'matematika' => 9,
                'it' => 8,
                'anglu' => 7,
            ],
            date("Y-m-d")
        ],
        rand(1, 1000) => [
            "Lily",
            'Jones',
            'kontroliniai darbai' => [
                'matematika' => 7,
                'it' => 7,
                'anglu' => 8,
            ],
            date("Y-m-d")
        ],

            rand(1, 1000) => [
                "Martin",
                'Perr',
                'kontroliniai darbai' => [
                    'matematika' => 10,
                    'it' => 7,
                    'anglu' => 10,
                ],
                date("Y-m-d")
            ],
            rand(1, 1000) => [
                "Hailey",
                'Thompson',
                'kontroliniai darbai' => [
                    'matematika' => 10,
                    'it' => 6,
                    'anglu' => 10,
                ],
                date("Y-m-d")
            ],
            rand(1, 1000) => [
                "Idaho",
                'Wilson',
                'kontroliniai darbai' => [
                    'matematika' => 7,
                    'it' => 7,
                    'anglu' => 7,
                ],
                date("Y-m-d")
            ],
            rand(1, 1000) => [
                "Andy",
                'Jamsberg',
                'kontroliniai darbai' => [
                    'matematika' => 3,
                    'it' => 9,
                    'anglu' => 10,
                ],
                date("Y-m-d")
            ],
            rand(1, 1000) => [
                "Eden",
                'Kim',
                'kontroliniai darbai' => [
                    'matematika' => 10,
                    'it' => 10,
                    'anglu' => 10,
                ],
                date("Y-m-d")

            ]

        ]
    ];


?>

    <table class="table table-success table-stripe">
        <tr>
            <th scope="col">Klasė</th>
            <th scope="col">Kodas</th>
            <th scope="col">Vardas</th>
            <th scope="col">Pavardė</th>
            <th scope="col">Kontrolinių darbų vidurkis</th>
            <th scope="col">Duomenų formavimo data</th>
        </tr>

        <?php foreach ($data as $key => $category): ?>
            <?php foreach ($category as $id => $value): ?>
                <tr>
                    <td><?= $key; ?></td>
                    <td><?= $id; ?></td>

                    <?php foreach ($value as $marks => $mark): ?>
                        <?php if (is_array($mark)): ?>
                            <td><?= number_format((float)array_sum($mark) / count($mark)) ?></td>
                        <?php else: ?>
                            <td><?= strtoupper($mark); ?></td>

                        <?php endif; ?>
                    <?php endforeach; ?>
            <?php endforeach; ?>
        <?php endforeach; ?>

                </tr>
    </table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
</body>
</html>

