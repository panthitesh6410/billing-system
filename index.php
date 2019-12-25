<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>billing-system</title>
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <style>
        #options li{
            color: xblue;
        }
    </style>
</head>
<body>
    
    
    <!-- <header>
        <nav class="bg-dark">
            <ul class="navbar navbar-collapse light" id="nav">
                <li class="nav-item">
                    <select>
                        <option value="" selected disabled>New</option>
                        <option value="">Standard invoice</option>
                        <option value="">Bill of Supply</option>
                        <option value="">Proforma Invoice</option>
                        <option value="">Quotation</option>
                        <option value="">Delivery Note/chalan</option>
                        <option value="">Credit Note</option>
                        <option value="">Debit Note</option>
                        <option value="">Payment</option>
                        <option value="">Expense</option>
                    </select>
                </li>
                <li class="nav-item">
                <select>
                        <option value="" selected disabled>Setting</option>
                        <option value="">Company Details</option>
                        <option value="">Taxes</option>
                        <option value="">Email</option>
                        <option value="">Preference</option>
                        <option value="">Logo Setup</option>
                </select>
                </li>
                <li class="nav-item">
                <select>
                        <option value="" selected disabled>Tools</option>
                        <option value="">Backup Data</option>
                        <option value="">Restore Data</option>
                        <option value="">Add New Company</option>
                        <option value="">Switch Test Company</option>
                        <option value="">Logo Setup</option>
                </select>
                </li>
                <li class="nav-item">
                <select>
                        <option value="" selected disabled>Reports</option>
                        <option value="">Invoices</option>
                        <option value="">Quotation</option>
                        <option value="">Clients</option>
                        <option value="">Credit Notes</option>
                        <option value="">Debit Notes</option>
                        <option value="">Inventory & Sales Report</option>
                </select>
                </li>
            </ul>
        </nav>
    </header> -->

                            <h1 class="text-center bg-dark" style="color:#fff;padding:6px;">BILLING SYSTEM</h1>

    <section>
        <div class="container">
            <div class="row mt-5">
                <div class="col-sm-6">
                    <a href="new_invoice.php"><button class="btn btn-primary" style="width:350px;height:100px;font-size:40px;"> + New Invoice</button></a>
                    <div class="row ml-5 mt-5" style="">
                        <div class="col-sm-3">
                        <a href="new_quotation.php"><button class="btn btn-primary mt-2" style="height:60px;">Quotaion</button></a>
                        </div>
                        <div class="col-sm-3">
                        <a href="new_proforma_invoice.php"><button class="btn btn-primary mt-2">Proforma Invoice</button></a>
                        </div>
                    </div>
                    <div class="row ml-5 mt-5" style="">
                        <div class="col-sm-3">
                        <a href="new_supply_bill.php"><button class="btn btn-primary mt-2" style="height:60px;">Bill Of Supply</button></a>
                        </div>
                        <div class="col-sm-3">
                        <a href="new_challan.php"><button class="btn btn-primary mt-2" style="height:60px;width:100px;">Challan</button></a>
                        </div>
                    </div>
                    <div class="row ml-5 mt-5" style="">
                        <div class="col-sm-3">
                        <a href="#"><button class="btn btn-primary mt-2" style="height:60px;">Credit Note</button></a>
                        </div>
                        <div class="col-sm-3">
                        <a href="#"><button class="btn btn-primary mt-2">Debit Note</button></a>
                        </div>
                    </div>
                    <div class="row ml-5 mt-5" style="">
                    <a href="new_payment.php"><button class="btn btn-primary ml-3 mt-2">+ Payment</button></a>
                    </div>
                </div>
                <div class="col-sm-6 mt-3" id="options">
                    <h3>SALES REPORT</h3>
                        <ul>
                            <li><a href="invoices.php">Invoices</a></li>
                            <li><a href="#">Quotation, Proformas & Challans</a></li>
                            <li><a href="#">Credit Notes</a></li>
                            <li><a href="#">Debit Notes</a></li>
                            <li><a href="#">Payment Documents</a></li>
                            <li><a href="#">Clients</a></li>
                            <li><a href="#">Products / Services</a></li>
                        </ul>
                    <h3>TOOLS</h3>
                        <ul>
                            <li><a href="#">Backuo Data</a></li>
                            <li><a href="#">Restore Data</a></li>
                            <li><a href="#">GSTR Reports</a></li>
                            <li><a href="#">Inventory & Sales Report</a></li>
                        </ul>
                    <h3>SETTINGS</h3>
                        <ul>
                            <li><a href="#">Company Details</a></li>
                            <li><a href="#">Taxes</a></li>
                            <li><a href="#">Emails</a></li>
                            <li><a href="#">Preferences</a></li>
                        </ul>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container-fluid bg-dark mt-4 text-center" style="padding:15px;">
            <p class="nav-link"><a href="" style="color:#fff">Help</a></p>
            <p class="nav-link"><a href="" style="color:#fff">Contact</a></p>
            <p class="nav-link"><a href="" style="color:#fff">About</a></p>
        </div>
    </footer>    
    

    <script src="script/jquery.js"></script>
    <script src="script/bootstrap.min.js"></script>
    <script src="script/script.js"></script>
</body>
</html>