<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTS DETAILS </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .productEntry {
            display: flex;
            flex-direction: column;
            gap: 10px;
            border: 1px solid black;
            padding: 10px;
            margin-bottom: 20px;
        }
        .productEntry label {
            margin-bottom: 5px;
        }
        .productClass {
            display: flex;
            align-items: center;
            gap: 10px;
            border: 1px solid black;
            padding: 10px;
        }
        .certificationEntry {
            display: flex;
            gap: 5px;
            border: 1px solid black;
            padding: 15px;
            margin-bottom: 10px;
        }
        .certificationEntry label {
            margin-bottom: 3px;
            padding: 15px;
        }
        #turnoverInWords,#turnoverInCrores,#noOfEmployees,#yearOfIncorporation {
            width: 70%;  /* Adjust as needed */
            height:50%;
            margin-top:15px;
        }

.form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
           
        }

        .form-group label {
            margin-bottom: 5px;
       }

        .form-group input,
        .form-group select {
            width: 100%;
        }
        .form-group input[type="checkbox"] {
            width: auto;
        }
        .form-groupp {
            margin-bottom: 10px;
        }

        .category {
            cursor: pointer;
            padding: 10px;
            border: 1px solid #ddd;
            margin: 5px 0;
        }
        .category-items {
            display: none;
            margin-left: 12px;
            font-size :15px;
        }

        .myButton {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }

    .myButton:hover {
        background-color: #45a049; /* Darker green */
    }
    .form-container {
        border: 2px solid black;
        padding: 20px;
        margin: 10px;
    }
    @media (max-width: 600px) {
            .container {
                width: 100%;
            }
            h1 {
                font-size: 1.5em;
            }
            p {
                font-size: 1em;
            }
        }


    </style>
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Your!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }
                ?>

<div class="form-container">
<form action="sprdata.php" method="post">
<div class="card-header">
                      <h5> MEMBERS REGISTRATION <h5>
                    </div><br>
<div class="form-group">
        <label for="company_name">Company Name*:</label>
        <input type="text" id="company_name" name="company_name" required>
                </div>
        <br>
        <h4>PRIMARY CONTACT</h4>
<div class="form-group">
    <label for="name_primary">Name*:</label>
    <input type="text" id="name_primary" name="name_primary" required>
</div>
<br>

<div class="form-group">
    <label for="designation_primary">Designation:</label>
    <input type="text" id="designation_primary" name="designation_primary">
</div>
<br>

<div class="form-group">
    <label for="address_primary">Address*:</label>
    <input type="text" id="address_primary" name="address_primary" required>
</div>
<br>

<div class="form-group">
    <label for="town_primary">Town*:</label>
    <input type="text" id="town_primary" name="town_primary" required>
</div>
<br>

<label for="state_primary">State*:</label>
<select class="form-control" name="state_primary" required>
<option value="">Select State</option>
            <option value="Andaman and Nicobar Island">Andaman and Nicobar Island</option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
            <option value="Assam">Assam</option>
            <option value="Bihar">Bihar</option>
            <option value="Chandigarh">Chandigarh</option>
            <option value="Chhattisgarh">Chhattisgarh</option>
            <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
            <option value="Daman and Diu">Daman and Diu</option>
            <option value="Delhi">Delhi</option>
            <option value="Goa">Goa</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Haryana">Haryana</option>
            <option value="Himachal Pradesh">Himachal Pradesh</option>
            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
            <option value="Jharkhand">Jharkhand</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Kerala">Kerala</option>
            <option value="Lakshadweep">Lakshadweep</option>
            <option value="Madhya Pradesh">Madhya Pradesh</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Manipur">Manipur</option>
            <option value="Meghalaya">Meghalaya</option>
            <option value="Mizoram">Mizoram</option>
            <option value="Nagaland">Nagaland</option>
            <option value="Odisha">Odisha</option>
            <option value="Puducherry">Puducherry</option>
            <option value="Punjab">Punjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Sikkim">Sikkim</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Telangana">Telangana</option>
            <option value="Tripura">Tripura</option>
            <option value="Uttarakhand">Uttarakhand</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="West Bengal">West Bengal</option>
</select>
<br>

<div class="form-group">
    <label for="pincode_primary">Pin Code*:</label>
    <input type="text" id="pincode_primary" name="pincode_primary" required>
</div>
<br>

<div class="form-group">
    <label for="email_primary">Email*:</label>
    <input type="email" id="email_primary" name="email_primary" required pattern=".*@gmail\.com$">
</div>
<br>

<div class="form-group">
    <label for="telephone_primary">Telephone Number:</label>
    <input type="tel" id="telephone_primary" name="telephone_primary">
</div>
<br>

<div class="form-group">
    <label for="fax_primary">Fax Number:</label>
    <input type="tel" id="fax_primary" name="fax_primary">
</div>
<br>

<div class="form-group">
    <label for="mobile_primary">Mobile Number*:</label>
    <input type="tel" id="mobile_primary" name="mobile_primary" required>
</div>
<br>

<div class="form-group">
    <label for="website_primary">Website:</label>
    <input type="url" id="website_primary" name="website_primary">
</div>
<br>

<h4>ALTERNATE CONTACT</h4>
<div class="form-group">
    <label for="name_alternate">Name*:</label>
    <input type="text" id="name_alternate" name="name_alternate" required>
</div>
<br>

<div class="form-group">
    <label for="designation_alternate">Designation:</label>
    <input type="text" id="designation_alternate" name="designation_alternate">
</div>
<br>

<div class="form-group">
    <label for="address_alternate">Address*:</label>
    <input type="text" id="address_alternate" name="address_alternate" required>
</div>
<br>

<div class="form-group">
    <label for="town_alternate">Town*:</label>
    <input type="text" id="town_alternate" name="town_alternate" required>
</div>
<br>

<label for="state_alternate">State*:</label>
<select class="form-control" name="state_alternate" required>
<option value="">Select State</option>
<option value="Andaman and Nicobar Island">Andaman and Nicobar Island</option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
            <option value="Assam">Assam</option>
            <option value="Bihar">Bihar</option>
            <option value="Chandigarh">Chandigarh</option>
            <option value="Chhattisgarh">Chhattisgarh</option>
            <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
            <option value="Daman and Diu">Daman and Diu</option>
            <option value="Delhi">Delhi</option>
            <option value="Goa">Goa</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Haryana">Haryana</option>
            <option value="Himachal Pradesh">Himachal Pradesh</option>
            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
            <option value="Jharkhand">Jharkhand</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Kerala">Kerala</option>
            <option value="Lakshadweep">Lakshadweep</option>
            <option value="Madhya Pradesh">Madhya Pradesh</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Manipur">Manipur</option>
            <option value="Meghalaya">Meghalaya</option>
            <option value="Mizoram">Mizoram</option>
            <option value="Nagaland">Nagaland</option>
            <option value="Odisha">Odisha</option>
            <option value="Puducherry">Puducherry</option>
            <option value="Punjab">Punjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Sikkim">Sikkim</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Telangana">Telangana</option>
            <option value="Tripura">Tripura</option>
            <option value="Uttarakhand">Uttarakhand</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="West Bengal">West Bengal</option>
</select>
<br>

<div class="form-group">
    <label for="pincode_alternate">Pin Code*:</label>
    <input type="text" id="pincode_alternate" name="pincode_alternate" required>
</div>
<br>

<div class="form-group">
    <label for="email_alternate">Email*:</label>
    <input type="email" id="email_alternate" name="email_alternate" required pattern=".*@gmail\.com$">
</div>
<br>

<div class="form-group">
    <label for="telephone_alternate">Telephone Number:</label>
    <input type="tel" id="telephone_alternate" name="telephone_alternate">
</div>
<br>

<div class="form-group">
    <label for="fax_alternate">Fax Number:</label>
    <input type="tel" id="fax_alternate" name="fax_alternate">
</div>
<br>

<div class="form-group">
    <label for="mobile_alternate">Mobile Number*:</label>
    <input type="tel" id="mobile_alternate" name="mobile_alternate" required>
</div>
<br>

<div class="form-group">
    <label for="website_alternate">Website:</label>
    <input type="url" id="website_alternate" name="website_alternate">
</div>
<br><br>

        <div class="form-groupp">
            <h3>MEMBERSHIP</h3>
            <h4>ATMED Primary Member</h4>
            <input type="checkbox" name="brands[]" value="Primary Member(Medical Device Manufacturer)"> Primary Member(Medical Device Manufacturer)<br>
        </div>

        <div class="form-groupp">
        <h4>UDATMED Member</h4>
            <input type="checkbox" name="brands[]" value="Designers and Developer"> Designers and Developer <br>
            <input type="checkbox" name="brands[]" value="Academician"> Academician  <br>
            <input type="checkbox" name="brands[]" value="Government Department"> Government Department  <br>
            <input type="checkbox" name="brands[]" value="Association"> Association  <br>
        </div>

        <div class="form-groupp">
        <input type="checkbox" name="brands[]" value="IMDRRG Member"> IMDRRG Member  <br>
        </div>

        <div class="form-groupp">
        <h4>ATMED Associate Member</h4>
            <input type="checkbox" name="brands[]" value=" Material Supplier"> Material Supplier <br> 
            <input type="checkbox" name="brands[]" value="Machine Supplier"> Machine Supplier  <br>
            <input type="checkbox" name="brands[]" value="Technology Supplier"> Technology Supplier <br> 
            <input type="checkbox" name="brands[]" value="Investor"> Investor <br>
            <input type="checkbox" name="brands[]" value="Regulatory Consultant"> Regulatory Consultant  <br>
            <input type="checkbox" name="brands[]" value="General Consultant "> General Consultant  <br> 
            <input type="checkbox" name="brands[]" value="Financial Consultant"> Financial Consultant  <br>
            <input type="checkbox" name="brands[]" value="Certification Assessment Body"> Certification Assessment Body <br>
            <input type="checkbox" name="brands[]" value="Academia"> Academia  <br>
            <input type="checkbox" name="brands[]" value="QMS Consultant"> QMS Consultant  <br>
            <input type="checkbox" name="brands[]" value="Testing labs,Calibration Centres"> Testing labs,Calibration Centres<br>
            <input type="checkbox" name="brands[]" value="Accreditation bodies,Inspection Agencies"> Accreditation bodies,Inspection Agencies  <br>
            <input type="checkbox" name="brands[]" value="Incubation Centres,Start up Hubs"> Incubation Centres,Start up Hubs  <br>
            <input type="checkbox" name="brands[]" value="Training, Learning & Development Organisations, Skill Development Centers"> Training, Learning & Development Organisations, Skill Development Centers  <br>
            <input type="checkbox" name="brands[]" value="Banks, Financial Institutions, PE Firms, Angel Investors "> Banks, Financial Institutions, PE Firms, Angel Investors <br>
            <input type="checkbox" name="brands[]" value="Professional Services Firms – CAs / Lawyers"> Professional Services Firms – CAs / Lawyers  <br>
            <input type="checkbox" name="brands[]" value="Industry, Trade Associations, Chambers of Commerce, Trade Councils, Medical, Healthcare Associations etc"> Industry, Trade Associations, Chambers of Commerce, Trade Councils, Medical, Healthcare Associations etc.  <br>
            <input type="checkbox" name="brands[]" value="Clinical Trials"> Clinical Trials  <br>
            <input type="checkbox" name="brands[]" value="CRO(Contract Research Organization)"> CRO(Contract Research Organization)<br>
            <input type="checkbox" name="brands[]" id="otherOption" value="Other"> Other
            <input type="text" id="otherInput" name="otherType" style="display: none;">
        </div>
        <br>

        <div class="form-groupp">
        <h4>Management Consultants</h4>
        <input type="checkbox" name="brands[]" value="Regulatory Consultant"> Regulatory Consultant <br>
        <input type="checkbox" name="brands[]" value="Management System Consultant (Quality Systems)"> Management System Consultant (Quality Systems) <br>
        <input type="checkbox" name="brands[]" value="Finance Consultants"> Finance Consultants <br>
        <input type="checkbox" name="brands[]" value="Branding and Marketing Consultants"> Branding and Marketing Consultants <br>
        <input type="checkbox" name="brands[]" value="Technology Consultants"> Technology Consultants <br>
        <input type="checkbox" name="brands[]" value="Strategic Advisory Consultants"> Strategic Advisory Consultants <br>
        <input type="checkbox" name="brands[]" value="HR Consultants"> HR Consultants <br>
        <input type="checkbox" name="brands[]" value="Supply Chain Management Consultants"> Supply Chain Management Consultants <br>
        <input type="checkbox" name="brands[]" value="IPR Consultants"> IPR Consultants <br>
        <input type="checkbox" name="brands[]" value="EXIM Consultants"> EXIM Consultants <br>
        </div>
                


    
<h2>Product Entry</h2>

<div id="productContainer">
    <!-- Product entries will be added here -->
</div>

<button class="myButton" type="button" onclick="addProduct()">Add Product</button>
<br><br>
 
<div class="productClass">
    <label>Product Class:</label>
    <input type="radio" id="classA" name="productClass" value="A">
    <label for="classA">A</label>
    <input type="radio" id="classB" name="productClass" value="B">
    <label for="classB">B</label>
    <input type="radio" id="classC" name="productClass" value="C">
    <label for="classC">C</label>
    <input type="radio" id="classD" name="productClass" value="D">
    <label for="classD">D</label>
    <input type="radio" id="classNone" name="productClass" value="None">
    <label for="classNone">None</label>
</div><br>
<div class="certificationEntry">
    <label>ISO 13485 Certification:</label>
    <input type="radio" id="iso13485Yes" name="iso13485" value="Yes" onclick="showIssuer('iso13485')">
    <label for="iso13485Yes">Yes</label>
    <input type="radio" id="iso13485No" name="iso13485" value="No" onclick="hideIssuer('iso13485')">
    <label for="iso13485No">No</label>
    <div id="iso13485IssuerDiv" style="display: none;">
        <label for="iso13485Issuer">Issued by:</label>
        <input type="text" id="iso13485Issuer" name="iso13485Issuer">
    </div>
</div>

<div class="certificationEntry">
    <label>CE MARK:</label>
    <input type="radio" id="ceMarkYes" name="ceMark" value="Yes" onclick="showIssuer('ceMark')">
    <label for="ceMarkYes">Yes</label>
    <input type="radio" id="ceMarkNo" name="ceMark" value="No" onclick="hideIssuer('ceMark')">
    <label for="ceMarkNo">No</label>
    <div id="ceMarkIssuerDiv" style="display: none;">
        <label for="ceMarkIssuer">Issued by:</label>
        <input type="text" id="ceMarkIssuer" name="ceMarkIssuer">
    </div>
</div>

<div class="certificationEntry">
    <label>ICMED Certification:</label>
    <input type="radio" id="icmedYes" name="icmed" value="Yes" onclick="showIssuer('icmed')">
    <label for="icmedYes">Yes</label>
    <input type="radio" id="icmedNo" name="icmed" value="No" onclick="hideIssuer('icmed')">
    <label for="icmedNo">No</label>
    <div id="icmedIssuerDiv" style="display: none;">
        <label for="icmedIssuer">Issued by:</label>
        <input type="text" id="icmedIssuer" name="icmedIssuer">
    </div>
</div>

<div class="certificationEntry">
    <label>Manufacturing License:</label>
    <input type="radio" id="licenseYes" name="license" value="Yes" onclick="showIssuer('license')">
    <label for="licenseYes">Yes</label>
    <input type="radio" id="licenseNo" name="license" value="No" onclick="hideIssuer('license')">
    <label for="licenseNo">No</label>
    <div id="licenseIssuerDiv" style="display: none;">
        <label for="licenseIssuer">Issued by:</label>
        <input type="text" id="licenseIssuer" name="licenseIssuer">
    </div>
</div>
<div class="certificationEntry">
    <label>Free Sale Certificate MOH:</label>
    <div>
        <input type="radio" id="mohYes" name="moh" value="Yes">
        <label for="mohYes">Yes</label>
        <input type="radio" id="mohNo" name="moh" value="No">
        <label for="mohNo">No</label>
   </div>
</div>

<div class="certificationEntry">
    <label>Free Sale Certificate DGFT:</label>
    <div>
        <input type="radio" id="dgftYes" name="dgft" value="Yes">
        <label for="dgftYes">Yes</label>
        <input type="radio" id="dgftNo" name="dgft" value="No">
        <label for="dgftNo">No</label>
    </div>
</div>

<div class="certificationEntry">
    <label>Year of Incorporation:</label>
    <input type="text" id="yearOfIncorporation" name="yearOfIncorporation">
</div>

<div class="certificationEntry">
    <label>No. of Employees:</label>
    <input type="text" id="noOfEmployees" name="noOfEmployees">
</div>

<div class="certificationEntry">
    <label>Turnover (In Crores):</label>
    <input type="text" id="turnoverInCrores" name="turnoverInCrores">
</div>

<div class="certificationEntry">
    <label>Turnover (In Words):</label>
    <input type="text" id="turnoverInWords" name="turnoverInWords" >
</div>




<button type="submit" name="insert_data" class="btn btn-primary">SUBMIT</button>
</form>
</div>
</div>
</div>

            

<script>
let productCount = 0;

function addProduct() {
    productCount++;
    const productContainer = document.getElementById('productContainer');
    const productEntry = document.createElement('div');
    productEntry.className = 'productEntry';
    productEntry.innerHTML = `
        <label for="product${productCount}">Product ${productCount}:</label>
        <input type="text" id="product${productCount}" name="product[]">
        <label for="hsn${productCount}">HSN Code:</label>
        <input type="text" id="hsn${productCount}" name="hsn[]">
        <label for="capacity${productCount}">Current Manufacturing Capacity(pcs per annum):</label>
        <input type="text" id="capacity${productCount}" name="capacity[]">
        <label for="spare${productCount}">Current Spare Capacity:</label>
        <input type="text" id="spare${productCount}" name="spare[]">
        <label for="export${productCount}">Current allocated Export Capacity(%):</label>
        <input type="text" id="export${productCount}" name="export[]">
        <button type="button" onclick="deleteProduct(this)">Delete</button>
    `;
    productContainer.appendChild(productEntry);
}

function deleteProduct(button) {
    const productEntry = button.parentNode;
    productEntry.parentNode.removeChild(productEntry);
}
</script>
<script>
function showIssuer(certification) {
    document.getElementById(certification + 'IssuerDiv').style.display = 'block';
}

function hideIssuer(certification) {
    document.getElementById(certification + 'IssuerDiv').style.display = 'none';
}
</script>
</body>
</html>
