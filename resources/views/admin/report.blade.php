<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture Report</title>
    <style>
        body{
            background-color: #F6F6F6; 
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }
        .brand-section{
           background-color: #0d1033;
           padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: #fff;
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                    <h1 class="text-white">Lectures Details Report</h1>
                </div>
                <div class="col-6">
                    <div class="company-details">
                        <p class="text-white">Little Flower International School</p>                     
                        <p class="text-white">+94 776895413</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="body-section">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
        <div class="row">
        <div class="col-sm-12">
      <img src="images/icon/hed.png" class="img-responsive" style="width:100%" alt="Image">
        </div>
        </div>
        </div>
    

        <div class="body-section">
            <h3 class="heading">Total Lecture Details</h3>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th class="w-20">Lecture ID</th>
                        <th class="w-10">First Name</th>
                        <th class="w-10">Last Name</th>
                        <th class="w-10">Email</th>
                        <th class="w-10">Gender</th>
                        <th class="w-10">Address 1</th>
                        <th class="w-10">Address 2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>45454</td>
                        <td>rtrt</td>
                        <td>rtrttr</td>
                        <td>tttt@gmail.com</td>
                        <td>Male</td>
                        <td>rtrtrtrt</td>
                        <td>rtrt</td>
                    </tr>
                    <tr>
                    <td>2</td>
                        <td>6767</td>
                        <td>fdff</td>
                        <td>dfdfg</td>
                        <td>cvcvci@gmail.com</td>
                        <td>Male</td>
                        <td>dfvdfdf</td>
                        <td>dfdf</td>
                    </tr>
                    <tr>
                    <td>3</td>
                        <td>3443466</td>
                        <td>yyyy</td>
                        <td>yyy</td>
                        <td>yyy@gmail.com</td>
                        <td>Female</td>
                        <td>dfdfd</td>
                        <td>dfdfdd</td>
                    </tr>
                    <tr>
                    <td>4</td>
                        <td>34434</td>
                        <td>rtrg</td>
                        <td>fgfhgf</td>
                        <td>gfhgfhfhf@gmail.com</td>
                        <td>Female</td>
                        <td>dfdfd</td>
                        <td>dfdfdd</td>
                    </tr>
                    <tr>
                    <td>5</td>
                        <td>34346</td>
                        <td>ssss</td>
                        <td>dfdfd</td>
                        <td>fgfg@dfdfd</td>
                        <td>Female</td>
                        <td>dfdfd</td>
                        <td>dfdfdd</td>
                    </tr>

                    <tr>
                    <td>6</td>
                        <td>1111</td>
                        <td>shonali</td>
                        <td>peiris</td>
                        <td>shonali@gmail.com</td>
                        <td>Female</td>
                        <td>main</td>
                        <td>main</td>
                    </tr>

                </tbody>
            </table>
            <br>
         <!--   <h3 class="heading">Payment Status: Paid</h3>
            <h3 class="heading">Payment Mode: Cash on Delivery</h3>-->
        </div>

        <div class="body-section">
            <p>&copy; Copyright 2023 - Report. All rights reserved. 
                <a href="https://www.littleflower.com/" class="float-right">www.littleflower.com</a>
            </p>
        </div>      
    </div>      

</body>
</html>