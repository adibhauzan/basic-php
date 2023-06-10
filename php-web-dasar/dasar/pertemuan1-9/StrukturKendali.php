<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna-garis{
            background-color: gray;
        }

        .warna-kolom{
            background-color: gray;
        }
    </style>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 5; $i++) { ?>
            <?php if ($i % 2 == 0) { ?>
                <tr class="warna-garis">
            <?php }else{ ?>            
                <tr>
                <?php } ?>
                <?php for ($j = 1; $j <= 5; $j++) { ?>
                    <?php if($j % 3 == 1){ ?>
                       <td class="warna-kolom"> 
                    <?php }else{ ?>
                    <td>
                    <?php } ?>
                        <?php echo "$i , $j"; ?>
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
</body>

</html>