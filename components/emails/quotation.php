<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
    <style>
        body {
            width: 100%;
            font-family: Arimo, "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 13px;
            line-height: 1.42857143;
            color: #979898;
        }

        h2 {
            line-height: 1.1;
            color: inherit;
            margin-top: 18px;
            margin-bottom: 9px;
            font-size: 27px;
            font-weight: 400;
        }

        table tbody tr td,
        table thead tr th {
            border-right: 1px solid #d4d4d4;
            padding: 5px 10px;
        }

        table tbody tr td:first-child {
            border-left: 1px solid #d4d4d4;
        }

        table tbody tr:last-child td {
            border-bottom: 1px solid #d4d4d4;
        }

        table tbody tr td:last-child {
            text-align: right;
        }

        address {
            padding-left: 20px;
            border-left: 5px solid #f0f0f0;
            font-style: normal;
            line-height: 1.42857143;
        }
    </style>
</head>

<body>
    <?php
    $date = date_create($QUOTATION->date);
    $created_at = date_format($date, "d/m/Y");
    ?>
    <div style="width: 580px;margin: auto;">
        <div style="padding: 10px;border: 1px solid #c9c9c9ab;">
            <div style="width:100%;display: flex;justify-content: space-between">
                <div style="flex:1">
                    <h2>FOOTAGE</h2>
                    <p>true views, true inspiration</p>
                </div>
                <div style="flex:1;display: flex;flex-direction: column;align-items: flex-end;">
                    <h3 style="font-size: 30px;">QUOTATION</h3>
                    <div style="margin-bottom: 1px;">DATE:
                        <span style="background: #c0d7ff6b;padding: 2px 10px;min-width: 90px;display: inline-block;"><?= $created_at ?></span>
                    </div>
                    <div>
                        QUOTATION #<span style="background: #e5e5e56b;padding: 2px 10px;min-width: 90px;display: inline-block;"><?= str_pad($QUOTATION->id, 5, 0, STR_PAD_LEFT) ?></span>
                    </div>
                </div>
            </div>

            <div style="background: gray; width:25%;color: #fff;padding-left: 5px;">BILL TO</div>
            <address style="margin-bottom: 50px;margin-top: 10px;width: 40%;">
                <?= $CUSTOMER->address ?>
            </address>

            <div style="background: gray; width:25%;color: #fff;padding-left: 5px;">NOTE</div>
            <address style="margin-bottom: 50px;margin-top: 10px;width: 40%;">
                <?= $QUOTATION->note ?>
            </address>

            <table style="border-collapse: collapse;width: 100%;">
                <thead style="background: gray;color: #fff">
                    <tr>
                        <th>DESCRIPTION</th>
                        <th style="text-align: center;">DAYS</th>
                        <th style="text-align: right;">RATE (LKR)</th>
                        <th style="text-align: right;">AMOUNT (LKR)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total = 0;
                    ?>
                    <?php foreach ($details as $detail) : ?>
                        <?php
                        $total += $detail['price']
                        ?>
                        <tr>
                            <td><?= $detail['description'] ?></td>
                            <td style="text-align: center;"><?= $detail['days'] ?></td>
                            <td style="text-align: right;"><?= number_format($detail['rate'], 2) ?></td>
                            <td style="text-align: right;"><?= number_format($detail['price'], 2) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr style="color: #fff">
                        <td colspan="2"></td>
                        <td style="background: gray;;padding: 5px 10px;">TOTAL</td>
                        <td style="background: gray;text-align: right;padding: 5px 10px;">Rs<?= number_format($total, 2) ?></td>
                    </tr>
                </tfoot>
            </table>

            <div style="font-weight: bold;margin-top:50px">Make all checks payable to LifePrint</div>


            <center style="margin:50px auto 20px">
                <strong>Thank You For Your Business!</strong>
                <h2>footagelk</h2>
                No 463/Pilapitiya, kelaniya | 071 484 0000 | 0777 387 444 | footagelk@yahoo.com <br>
                Documentary Videos | Corporate Videos | Product Videos | Aerial Photography | Drone footage for sale
            </center>


        </div>
    </div>
</body>

</html>