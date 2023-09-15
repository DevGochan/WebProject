<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>환율 계산 결과</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #f2f2f2;
        }

        .container {
            margin-top: 100px;
            max-width: 1000px;
            height: 450px;
            background-color: #fff;
            border-radius: 5px;
            padding: 30px;
            box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            font-weight: bold;
            margin-bottom: 40px;
        }

        p {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            margin-top: 30px;
        }

        .btn {
            display: block;
            padding: 50px;
            margin-top: 70px;
        }

        .navbar-brand {
            padding: 0px;
        }

        .btn {
            font-weight: bold;
        }

    </style>
</head>

<body>
    <div class="container">
        <header>
            <nav class="navbar navbar-light bg-light static-top">
                <a class="navbar-brand" href="index.php">Start Bootstrap</a>
            </nav>
        </header>
        <h1>환율 계산 결과</h1>
        <?php
            $amount = $_POST["amount"];
            $currency = $_POST["currency"];

            switch ($currency) {
                case "USD":
                    $symbol = "$";
                    break;
                case "EUR":
                    $symbol = "€";
                    break;
                case "GBP":
                    $symbol = "£";
                    break;
                case "CHF":
                    $symbol = "CHF";
                    break;
                case "NOK":
                    $symbol = "kr";
                    break;
                default:
                    echo "잘못된 환율입니다.";
                    exit;
            }

            $api_url = "https://api.exchangerate-api.com/v4/latest/KRW"; // API endpoint for real-time exchange rates
            $response = file_get_contents($api_url);
            $exchange_rates = json_decode($response, true);
    
            // Check if currency exists in the response
            if (isset($exchange_rates['rates'][$currency])) {
                $exchange_rate = $exchange_rates['rates'][$currency];
            } else {
                echo "잘못된 환율입니다.";
                exit;
            }
    
            $result = $amount * $exchange_rate;
    
            echo "<p>" . $amount . "원은 " . number_format($result, 5) . $symbol . "입니다.</p>";
        ?>
        <a href="Currency.html" class="btn btn-default">다시 계산</a>
    </div>
</body>

</html>
