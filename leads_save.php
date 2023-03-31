<?php

include('admin/config.php');
$name = !empty($_POST['name'])?$_POST['name']:NULL;
$email = !empty($_POST['email'])?$_POST['email']:NULL;
$mobile = !empty($_POST['mobile'])?$_POST['mobile']:NULL;
$message = !empty($_POST['message'])?$_POST['message']:NULL;

$utm_source = !empty($_POST['utm_source'])?$_POST['utm_source']:NULL;
$utm_medium = !empty($_POST['utm_medium'])?$_POST['utm_medium']:NULL;
$utm_campaign = !empty($_POST['utm_campaign'])?$_POST['utm_campaign']:NULL;
$utm_term = !empty($_POST['utm_term'])?$_POST['utm_term']:NULL;

 $sql = "INSERT INTO `leads` (`name`, `email`, `mobile`, `message`, `utm_source`, `utm_medium`, `utm_campaign`,`utm_term`, `created_at`) VALUES
('".$name."','".$email."', '".$mobile."', '".$message."', '".$utm_source."', '".$utm_medium."', '".$utm_campaign."', '".$utm_term."', now())";

if (mysqli_query($db, $sql)) 
{ 

  try{

    $accessKey = 'u$r430f8ab51fc04531a1a27170bc8d4d0e';
    $secretKey = 'fd59c22a1e7befe50f516bbac8e8f021224a8b4e';
  
    $requestParams = 
    '{
      "LeadDetails":
      [
          {
              "Attribute":"Phone",
              "Value":"'.$mobile.'"
          },
          {
              "Attribute":"FirstName",
              "Value":"'.$name.'"
          },
          {
              "Attribute":"LastName",
              "Value":""
          },
          {
              "Attribute":"EmailAddress",
              "Value":"'.$email.'"
          },
          {
              "Attribute":"mx_City",
              "Value":"Mumbai"
          },
          {
              "Attribute":"SearchBy",
              "Value":"Phone"
          }
      ],
      "Opportunity":{
          "OpportunityEventCode":12000,
          "Fields":
          [
              {
              "SchemaName":"mx_Custom_1",
              "Value":"'.$name.' - Plots by Wadhwa"
              },
              {
              "SchemaName":"mx_Custom_16",
              "Value":"Plots by Wadhwa"
              },
              {
              "SchemaName":"mx_Custom_17",
              "Value":""
              },
              {
              "SchemaName":"Owner",
              "Value":"ankita.shekhar@xanadu.in"
              },
              {
              "SchemaName":"mx_Custom_73",
              "Value":"Web Leads"
              },
              {
              "SchemaName":"Status",
              "Value":"Open"
              },
              {
              "SchemaName":"mx_Custom_2",
              "Value":"Not Attempted"
              },
              {
              "SchemaName":"mx_Custom_3",
              "Value": "'.$utm_source.'"
              },
              {
              "SchemaName":"mx_Custom_20",
              "Value": "'.$utm_campaign.'"
              },
              {
              "SchemaName":"mx_Custom_21",
              "Value": "'.$utm_medium.'"
              }
          ]
      }
    }';
  
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api-in21.leadsquared.com/v2/OpportunityManagement.svc/Capture?accessKey=$accessKey&secretKey=$secretKey",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => $requestParams,
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
      ),
    ));
    $response = curl_exec($curl);
    $err = curl_error($curl);
  
    curl_close($curl);

    echo 1;

  }catch(Exception $e){
    echo 0;
  }
}
else
{
  echo 0;
}

?>
