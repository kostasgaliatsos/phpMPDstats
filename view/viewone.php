<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHPMPDStats</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src='../script.js'></script>
    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
</head>

<body>
    <div class='container'>
        <div class='row'>
            <div class='col-md-8'>
                <a href='/'>
                    <h1>
                        phpMPDstats: A project made by kostas
                    </h1>
                </a>
            </div>
        </div>
        <div class='row'>
            <div class='col-md-12'>
                <h2 class="text-center">Music listened to</h2>
            </div>
        </div>



        <div class='row'>
            <div class='col-lg-12'>
                <table class='table table-striped table-hover'>
                    <tr>
                        <?php
                        for($i=0;$i<count($columns);$i++) {
                            echo "<th>$columns[$i]</th>";
                        }
                    ?>
                    </tr>
                    <?php 
                        echo "<tr>";
                        for($i=0;$i<count($data);$i++) {
                            
                            if($i==5) {
                                echo "<td>". floor($data[$i]/60) . ":";
                                printf("%02d", $data[$i]%60);
                                echo "</td>";
                            }
                            else {
                                echo "<td>".$data[$i]."</td>";
                            }
                        }
                            echo "</tr>";
                    ?>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
