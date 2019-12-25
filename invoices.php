<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoices Report</title>
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <style>
        form{
            border:1px solid #ddd;
            padding:15px;
            border-radius: 4px;
        }
    </style>
</head>
<body>

    <script>
        var city = ["Arunachal Pradesh", "Madhya Pradesh", "Uttar Pradesh"];
        var status = ["All", "Paid", "Unaid", "Partial", "Overdue"];
        var type = ["All", "GST Taxt", "Bill of Supply", "Standard", "Tax"];
    </script>

    
    <h3 class="bg-dark text-center" style="color:#fff;padding:8px;font-size:32px;">SEARCH INVOICES</h3>
    
    <a href="index.php"><button class="btn btn-warning fixed-top" style="margin-top:4%;"><b>GO BACK</b></button></a>

    <div class="container">
        <form action="" method="POST" class="form">
            <div class="row">
                <div class="col-sm-4">
                    <label for="client_name">Client Name :</label><input class="form-control mb-3" type="text" id="client_name" name="client_name">
                    <label for="invoice_number">Invoice Number :</label><input class="form-control mb-3" type="text" id="invoice_number" name="invoice_number">
                    <label for="city">City :</label>
                    <select name="city" id="city" class="form-control mb-3">
                        <script>
                            for(var i=0;i<city.length;i++)
                            {
                                document.write("<option value='"+city[i]+"'>"+city[i]+"</option>")
                            }
                        </script>
                    </select>
                </div>
                <div class="col-sm-4">
                    <label for="status">Status :</label>
                    <select name="status" id="status" class="form-control mb-3">
                            <script>
                                for(var j=0;j<status.length;j++)
                                {
                                    document.write("<option value='"+status[j]+"'>"+status[j]+"</option>")
                                }
                            </script>
                    </select>
                    <label for="type">Type :</label>
                    <select name="type" id="type" class="form-control mb-3">
                        <script>
                            for(var k=0;k<type.length;k++)
                            {
                                document.write("<option value='"+type[k]+"'>"+type[k]+"</option>")
                            }
                        </script>
                    </select>
                </div>
                <div class="col-sm-4">
                    <div class="form-group mb-3"><label for="issue_date">Issued Between :</label><input type="date" id="issue_date" name="issue_from" class="form-control"> and <input type="date" id="issue_date" name="issue_to" class="form-control"></div>
                    <hr>
                    <div class="form-group mb-3"><label for="due_date">Due Between :</label><input type="date" id="due_date" name="due_from" class="form-control"> and <input type="date" id="due_date" name="due_to" class="form-control"></div>
                    <label for="quick_search">Quick Search :</label><input type="search" id="quick_search" name="quick_search" class="form-control mb-3 alert alert-dark" placeholder="search">
                </div>
            </div>
            <div class="form-group" style="margin-left: 35%;">
                <input type="submit" name="submit" value="SEARCH" class="btn btn-primary mt-1">
                <input type="reset" name="reset" value="RESET" class="btn btn-dark mt-1" style="width:90px;">
            </div>
        </form>
    </div>

    <div class="container-fluid mt-3">
        <table class="table" border=1>
            <legend>Results :</legend>
            <button class="btn btn-primary mb-2" style="margin-left:76%;">New Invoice</button>
            <fieldset>
                <tr>
                    <th>No.</th>
                    <th>Client Name</th>
                    <th>Invoice No.</th>
                    <th>Issue Date</th>
                    <th>Due Date</th>
                    <th>Amount</th>
                    <th>Tax</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Private Notes</th>
                    <th>Emailed</th>
                    <th>Amont Paid</th>
                    <th>Balance</th>
                    <th>Dr./Cr.</th>
                    <th>Payment Date</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </fieldset>
        </table>
    </div>

    <script src="script/jquery.js"></script>
    <script src="script/bootstrap.min.js"></script>
    <script src="script/script.js"></script>
</body>
</html>