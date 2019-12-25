<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Invoice</title>
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    
    <script>
        var place = ["Arunachal Pradesh", "Madhya Pradesh", "Uttar Pradesh"];
        var payment_terms = ["Net 7", "Net 10", "Net 15", "Net 30", "Net 45", "Net 60", "Net 90", "Due On Reciept", "Due on Specified Date"];
        var UoM = ["Boxes", "CFT", "Centimeteres", "CubicMeteres", "Gram", "Hours", "Inches", "Kilogram", "Liters", "Meter", "Piece", "Pieces", "Pound", "Set", "Sets", "Square Meters", "Ton"];
        var tax = ["None", "GST rate 1%", "GST rate 3%", "GST rate 5%", "GST rate 12%", "GST rate 18%", "GST rate 28%"];
        var payment_type = ["Cash", "Cash memo", "Credit Note", "Credit Card", "Cheque", "Check", "Bank Transfer", "Pay Slip"];
    </script>

    <h3 class="bg-dark text-center" style="color:#fff;padding:8px;font-size:32px;">NEW PAYMENT</h3>
    
    <a href="index.php"><button class="btn btn-warning fixed-top" style="margin-top:4%;"><b>GO BACK</b></button></a>

    <legend class="text-center">DOCUMENT DATA</legend>
    <hr/>
    <form action="" method="POST" class="form-action">
        <div class="row" style="margin:1px;">
            <div class="col-sm-4">
                <label for="client">Client :</label>
                <input type="text" id="client" name="client" class="form-control mb-3">
            </div>
            <div class="col-sm-4">
                <label for="payment_type">Payment Type :</label>
                <select name="payment_type" id="payment_type" class="form-control mb-3">
                    <option value="received">Received</option>
                    <option value="made">Made</option>
                </select>
                <label for="number">Number :</label>
                <input type="text" id="number" name="number" class="form-control mb-3">
                <label for="reference">Reference # :</label>
                <input type="text" id="reference" name="reference" class="form-control mb-3">
                <label for="reference">Amount :</label>
                <input type="text" id="amount" name="amount" class="form-control mb-3">
            </div>
            <div class="col-sm-4">
                <label for="payment_type">Payment Type :</label>
                <select name="payment_type" id="payment_type" class="form-control mb-3">
                    <script>
                        for(var x=0;x<payment_type.length;x++){
                            document.write("<option value='"+payment_type[x]+"'>"+payment_type[x]+"</option>");
                        }
                    </script>
                </select>
                <label for="pay_date">Pay Date :</label>
                <input type="date" id="pay_date" name="pay_date" class="form-control mb-3">
                <label for="bank_charges">Bank Charges :</label>
                <input type="date" id="bank_charges" name="bank_charges" class="form-control mb-3">
            </div>
        </div>
        <hr/>

        <!-- a table -->

        <hr/>
            <div class="row">
                <div class="col-sm-6">
                    <label for="note">Notes</label><br/><textarea name="note" id="note" cols="50" rows="5" class="form-control" placeholder="ex: declaration/terms & conditions"></textarea>
                </div>
                <div class="col-sm-6">
                    <label for="note">Private Notes (not shown to client)</label><br/><textarea name="note" id="note" cols="50" rows="5" class="form-control"></textarea>
                </div>
            </div>
        </div>
                <h3 style="margin-left:45%;" class="mt-2">TOTAL : Rs.</h3>
                <button class="btn btn-dark mt-2" name="preview" style="margin-left:45%;">Preview Document</button>
    </form>

    <script src="script/jquery.js"></script>
    <script src="script/bootstrap.min.js"></script>
    <script src="script/script.js"></script>
</body>
</html>