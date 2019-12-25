<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Invoice</title>
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <style>
        
    </style>
</head>
<body>
    
    <script>
        var place = ["Arunachal Pradesh", "Madhya Pradesh", "Uttar Pradesh"];
        var payment_terms = ["Net 7", "Net 10", "Net 15", "Net 30", "Net 45", "Net 60", "Net 90", "Due On Reciept", "Due on Specified Date"];
        var UoM = ["Boxes", "CFT", "Centimeteres", "CubicMeteres", "Gram", "Hours", "Inches", "Kilogram", "Liters", "Meter", "Piece", "Pieces", "Pound", "Set", "Sets", "Square Meters", "Ton"];
        var tax = ["None", "GST rate 1%", "GST rate 3%", "GST rate 5%", "GST rate 12%", "GST rate 18%", "GST rate 28%"];
    </script>

    <h3 class="bg-dark text-center" style="color:#fff;padding:8px;font-size:32px;">NEW INVOICE</h3>
    
    <a href="index.php"><button class="btn btn-warning fixed-top" style="margin-top:4%;"><b>GO BACK</b></button></a>

    <legend class="text-center">DOCUMENT DATA</legend>
    <hr/>
    <form action="" method="POST" class="form-action">
        <div class="row" style="margin:1px;">
            <div class="col-sm-4">
                <label for="client">Client :</label>
                <input type="text" id="client" name="client" class="form-control mb-3">
                <label for="ship_to">Ship to :</label>
                <input type="text" id="ship_to" name="ship_to" class="form-control mb-3">
                <label for="place_of_supply">Place Of Supply :</label><br>
                <select name="place_of_supply" id="place_of_supply" class="form-control mb-3">
                    <script>
                        for(var i=0;i<place.length;i++){
                            document.write("<option value='"+place[i]+"' class='form-control'>"+place[i]+"</option>");
                        }
                    </script>
                </select>
            </div>
            <div class="col-sm-4">
                <label for="document_number">Document Number :</label>
                <input type="text" id="document_number" name="document_number" class="form-control mb-3">
                <label for="po_number">P.O.Number :</label>
                <input type="text" id="po_number" name="po_number" class="form-control mb-3">
                <label for="po_date">P.O.Date :</label>
                <input type="date" id="po_date" name="po_date" class="form-control mb-3">
            </div>
            <div class="col-sm-4">
                <label for="issue_date">Issue Date :</label>
                <input type="date" id="issue_date" name="issue_date" class="form-control mb-3">
                <label for="payment_terms">Payment Terms :</label>
                <select name="payment_terms" id="payment_terms" class="form-control mb-3">
                    <script>
                        for(var j=0;j<payment_terms.length;j++)
                        {
                            document.write("<option value='"+payment_terms[j]+"'>"+payment_terms[j]+"</option>");
                        }
                    </script> 
                </select>
                <label for="place_of_supply">Due Date :</label>
                <input type="date" id="place_of_supply" name="place_of_supply" class="form-control mb-3">
            </div>
        </div>
        <hr/>
        <div class="container-fluid row" style="margin:1px;">
            <table border=0>
                        <tr>
                            <th>Product</th>
                            <th>Description</th>
                            <th>UoM</th>
                            <th>Qty</th>
                            <th>Unit Price</th>
                            <th>Discount(%)</th>
                            <th>Tax</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="" class="form-control"/></td>
                            <td><input type="text" name="" class="form-control"/></td>
                            <td>
                                <select class="form-control">
                                    <script>
                                        for(var k=0;k<UoM.length;k++){
                                            document.write("<option value='"+UoM[k]+"' class='form-control'>"+UoM[k]+"</option>");
                                        }
                                    </script>
                                </select>
                            </td>
                            <td><input type="text" name="" class="form-control"/></td>
                            <td><input type="text" name="" class="form-control"/></td>
                            <td><input type="text" name="" class="form-control"/></td>
                            <td>
                                <select class="form-control">
                                    <script>
                                        for(var l=0;l<tax.length;l++){
                                            document.write("<option value='"+tax[l]+"' class='form-control'>"+tax[l]+"</option>");
                                        }
                                    </script>
                                </select>
                            </td>
                            <td><button class="btn btn-primary ml-2">+ADD</button></td>
                        </tr>
            </table>
        </div>
        <div id="invoice_result" class="container-fluid">
            <!-- ajax php display in table format-->
            <table class="mt-4" border=1>
                <tr>
                    <th>No.</th>
                    <th>Product</th>
                    <th>HSN/SAC</th>
                    <th>Description</th>
                    <th>UoM</th>
                    <th>Qty</th>
                    <th>Unit Price</th>
                    <th>Value</th>
                    <th>Discount</th>
                    <th>CGST</th>
                    <th>SGCT</th>
                    <th>IGST</th>
                    <th>Action</th>
                </tr>
                <tr></tr>
            </table>
            <div class="form-group mt-3" style="padding:10px;">
                <input type="checkbox" id="discount" name="discount" value="discount"><label for="discount">Discount on all</label><br>
                <input type="checkbox" id="shipping_cost" name="shipping_cost" value="shipping_cost"><label for="shipping_cost">Add Shipping/Packaging Cost</label>
                <input type="text" name="cost" id="cost" placeholder="0.0Rs"><br>
                <label for="shipping_tax" style="margin-left:12%;">Shipping Tax</label>
                    <select>
                        <script>
                            for(var l=0;l<tax.length;l++){
                                document.write("<option value='"+tax[l]+"' class='form-control'>"+tax[l]+"</option>");
                            }
                        </script>
                    </select>
                    <br>
                    <input type="checkbox" id="CESS" name="CESS" value="CESS"><label for="CESS">Show CESS</label><br>
                    <input type="checkbox" id="reverse_charges" name="reverse_charges" value="reverse_charges"><label for="reverse_charges">Submject to Reverse Charges</label><br>
                    <button class="btn btn-primary">+ Shipping Bill Info</button><br>
                    <button class="btn btn-primary mt-2">+ More Options</button><br>
            </div>
            <hr/>
            <input type="checkbox" id="add_payment" name="add_payment" value="add_payment"><label for="add_payment">Add Payment</label><br>
            <input type="checkbox" id="paid_online" name="paid_online" value="paid_online"><label for="paid_online">Get Paid Online(PayPal)</label><br>
            <br/>
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