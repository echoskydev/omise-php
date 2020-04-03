<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        button {
            display: inline-block;
            min-width: 200px;
            background-color: #0588eb;
            color: #fff;
            padding: 10px;
            border: 2px solid #047ad2;
            border-radius: 3px;
            cursor: pointer;
            outline: none;
            transition: all 0.15s ease-in-out 0s;
        }

        button:hover {
            background-color: #047ad2;
        }
    </style>
</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col-6 align-self-center">
                <div class="card text-left">
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title">
                            <h4>Package: CovidTestCNX</h4>
                        </h4>
                        <p class="card-text">
                            <form name="checkoutForm" method="POST" action="checkout.php">
                                <div>
                                    <h5>Price: 3,500 Bath</h5>
                                </div>
                                <hr>


                                <div class="form-group">
                                    <label for="input" class="control-label">Date:</label>
                                    <div class="">
                                        <input type="text" name="date" id="date" class="form-control" value="<?= date('d-m-Y'); ?>" required="required">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Time:</label>
                                    <select class="form-control" name="stottime" id="stottime">
                                        <option>09:00</option>
                                        <option>10:00</option>
                                        <option>11:00</option>
                                    </select>
                                </div>

                                <script type="text/javascript" src="https://cdn.omise.co/omise.js" data-key="pkey_test_5jf906jk2za4o8uumj9" data-image="https://static.wixstatic.com/media/539c47_3321cea715e54c8da034f50bb3a89f1b~mv2.png/v1/fill/w_250,h_127,al_c,q_95/539c47_3321cea715e54c8da034f50bb3a89f1b~mv2.webp" data-amount="350000" data-currency="thb" data-other-payment-methods='internet_banking, alipay' , data-button-label="Pay now" data-frame-label="Covid Test CNX" data-submit-label="Checkout">
                                </script>
                            </form>
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>