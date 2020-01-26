<?php
// Databaseverbinding pas deze zonodig aan met de juiste DB- / DBUsergegevens
$user = 'root';
$pass = '';
$db_conn = new PDO('mysql:host=localhost;dbname=rn20', $user, $pass);


?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Top verkochte auto's 1ste kwartaal 2019</title>
</head>

<body>
    <main style="width: 80%; margin: 20px auto;">
        <?php

        //Opdracht 2 maak een query die alle auto's met alle kolommen uit de database haalt. Geordend op 'verkopen'
        $sql = 'SELECT * FROM auto ORDER BY verkocht DESC';

        $statement = $db_conn->prepare($sql);
        $statement->execute();
        $autos = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <h3>Overzicht auto's</h3>
        <table class="table table-striped">
            <tr>
                <th>Rank</th>
                <th>Merk</th>
                <th>Type</th>
                <th>Aantal verkocht</th>
                <th>&nbsp;</th>
            </tr>
            <?php
            // teller wordt gebruikt voor het weergeven van de rank in de eerste kolom
            $teller = 1;
            foreach ($autos as $auto) { ?>

                <tr>
                    <td>
                        # <?php echo $teller++;?>
                    </td>
                    <td>
                        <?php echo $auto["merk"];
                        ?>
                    </td>
                    <td>
                        <?php echo $auto["type"];
                        ?>
                    </td>
                    <td>
                        <?php echo $auto["verkocht"];
                        ?>
                    </td>

                    <td><a href="/jan20/verwijder.php?id=<?php echo $auto["id"] ?>" class="btn btn-danger">verwijder</a></td>
                </tr>

            <?php

                } // einde foreach
            ?>
        </table>
        <br><br>
        <a href="/jan20/nieuw.php" class="btn btn-success">Nieuw auto</a>
    </main>

</body>

</html>