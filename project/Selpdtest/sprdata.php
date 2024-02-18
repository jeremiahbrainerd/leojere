<?php
session_start();
$con = mysqli_connect("localhost","root","","phptutorials");

if(isset($_POST['insert_data']))
{
    if(isset($_POST['product']))
    {
        $productCount = count($_POST['product']);
        for($i = 0; $i < $productCount; $i++)
        {
            $company_name = mysqli_real_escape_string($con, $_POST['company_name']);
            // Primary contact details
            $name_primary = mysqli_real_escape_string($con, $_POST['name_primary']);
            $designation_primary = mysqli_real_escape_string($con, $_POST['designation_primary']);
            $address_primary = mysqli_real_escape_string($con, $_POST['address_primary']);
            $town_primary = mysqli_real_escape_string($con, $_POST['town_primary']);
            $state_primary = mysqli_real_escape_string($con, $_POST['state_primary']);
            $pincode_primary = mysqli_real_escape_string($con, $_POST['pincode_primary']);
            $email_primary = mysqli_real_escape_string($con, $_POST['email_primary']);
            $telephone_primary = mysqli_real_escape_string($con, $_POST['telephone_primary']);
            $fax_primary = mysqli_real_escape_string($con, $_POST['fax_primary']);
            $mobile_primary = mysqli_real_escape_string($con, $_POST['mobile_primary']);
            $website_primary = mysqli_real_escape_string($con, $_POST['website_primary']);

            // Alternate contact details
            $name_alternate = mysqli_real_escape_string($con, $_POST['name_alternate']);
            $designation_alternate = mysqli_real_escape_string($con, $_POST['designation_alternate']);
            $address_alternate = mysqli_real_escape_string($con, $_POST['address_alternate']);
            $town_alternate = mysqli_real_escape_string($con, $_POST['town_alternate']);
            $state_alternate = mysqli_real_escape_string($con, $_POST['state_alternate']);
            $pincode_alternate = mysqli_real_escape_string($con, $_POST['pincode_alternate']);
            $email_alternate = mysqli_real_escape_string($con, $_POST['email_alternate']);
            $telephone_alternate = mysqli_real_escape_string($con, $_POST['telephone_alternate']);
            $fax_alternate = mysqli_real_escape_string($con, $_POST['fax_alternate']);
            $mobile_alternate = mysqli_real_escape_string($con, $_POST['mobile_alternate']);
            $website_alternate = mysqli_real_escape_string($con, $_POST['website_alternate']);

            $product = mysqli_real_escape_string($con, $_POST['product'][$i]);
            $hsn = mysqli_real_escape_string($con, $_POST['hsn'][$i]);
            $capacity = mysqli_real_escape_string($con, $_POST['capacity'][$i]);
            $spare = mysqli_real_escape_string($con, $_POST['spare'][$i]);
            $export = mysqli_real_escape_string($con, $_POST['export'][$i]);
            $productClass = mysqli_real_escape_string($con, $_POST['productClass'][$i]);
            $iso13485 = mysqli_real_escape_string($con, $_POST['iso13485']);
            $iso13485Issuer = isset($_POST['iso13485Issuer']) ? mysqli_real_escape_string($con, $_POST['iso13485Issuer']) : '';
            $ceMark = mysqli_real_escape_string($con, $_POST['ceMark']);
            $ceMarkIssuer = isset($_POST['ceMarkIssuer']) ? mysqli_real_escape_string($con, $_POST['ceMarkIssuer']) : '';
            $icmed = mysqli_real_escape_string($con, $_POST['icmed']);
            $icmedIssuer = isset($_POST['icmedIssuer']) ? mysqli_real_escape_string($con, $_POST['icmedIssuer']) : '';
            $license = mysqli_real_escape_string($con, $_POST['license']);
            $licenseIssuer = isset($_POST['licenseIssuer']) ? mysqli_real_escape_string($con, $_POST['licenseIssuer']) : '';
            $moh = mysqli_real_escape_string($con, $_POST['moh']);
            $dgft = mysqli_real_escape_string($con, $_POST['dgft']);
            $yearOfIncorporation = mysqli_real_escape_string($con, $_POST['yearOfIncorporation']);
            $noOfEmployees = mysqli_real_escape_string($con, $_POST['noOfEmployees']);
            $turnoverInCrores = mysqli_real_escape_string($con, $_POST['turnoverInCrores']);
            $turnoverInWords = mysqli_real_escape_string($con, $_POST['turnoverInWords']);
            // Checkboxes - Retrieve and serialize the selected values as a single string
            $brands = isset($_POST['brands']) ? serialize($_POST['brands']) : "";




            $query = "INSERT INTO prjr (company_name,name_primary, designation_primary, address_primary, town_primary,state_primary,pincode_primary, email_primary, telephone_primary, fax_primary, mobile_primary, website_primary, name_alternate, designation_alternate, address_alternate, town_alternate,state_alternate,pincode_alternate, email_alternate, telephone_alternate, fax_alternate, mobile_alternate, website_alternate,product,hsn,capacity,spare,export,productClass,iso13485, iso13485Issuer, ceMark, ceMarkIssuer, icmed, icmedIssuer, license, licenseIssuer, moh,dgft, yearOfIncorporation, noOfEmployees, turnoverInCrores, turnoverInWords,brands) 
            VALUES ('$company_name','$name_primary', '$designation_primary', '$address_primary', '$town_primary','$state_primary','$pincode_primary', '$email_primary', '$telephone_primary', '$fax_primary', '$mobile_primary', '$website_primary','$name_alternate', '$designation_alternate', '$address_alternate', '$town_alternate','$state_alternate','$pincode_alternate', '$email_alternate', '$telephone_alternate', '$fax_alternate', '$mobile_alternate', '$website_alternate', '$product','$hsn','$capacity','$spare','$export','$productClass','$iso13485', '$iso13485Issuer', '$ceMark', '$ceMarkIssuer', '$icmed', '$icmedIssuer', '$license', '$licenseIssuer', '$moh','$dgft', '$yearOfIncorporation', '$noOfEmployees', '$turnoverInCrores', '$turnoverInWords','$brands') ";
            $query_run = mysqli_query($con, $query);

            if($query_run)
            {
                $_SESSION['status'] = "Data Inserted Successfully,Thank You";
            }
            else
            {
                $_SESSION['status'] = "Data Not Inserted";
                break;
            }
        }
    }
    else
    {
        $_SESSION['status'] = "Product data has to entered in the form";
    }
    header("Location: selecprodtest.php");
}
?>
