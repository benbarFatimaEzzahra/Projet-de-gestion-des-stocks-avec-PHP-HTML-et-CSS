<?php  
 require_once('../tcpdf/tcpdf.php');  

$dbHandler = new PDO('mysql:host=localhost;dbname=electro', 'root', '');
$dbStatment = $dbHandler->prepare("select * from commande c join contenir co join produit p join client cli on p.reference_Produit = co.reference_Produit and num = Num_Commande and c.id_Cli= cli.id_Cli where num = " . $_GET['id'] . "");
$dbStatment->execute();
$c = $dbStatment->fetch(PDO::FETCH_OBJ);

    
    $html = '<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>facture</title>
    </head>
    <style>
    *{
        font-family: Arial, Helvetica, sans-serif;
    }
    h2{
            text-align: center;
            text-transform: uppercase;
            color: #8ca9c9;
        }
        h4{
            font-weight:400;
        }
        .container{
            width: 80%;
            margin: 0 auto;
        }
        table{
            border-collapse: collapse;
            width: 100%;
            margin: 0 auto;
        }
        th,td{
            border: 1px solid gray;
            height:20px
            padding: 20px;
            text-align: left;
        }
        th{
            font-weight:900;
        }
        .table{
            text-align: right;
        }
        </style>
        <body>
        <h2>facture</h2>
        <div class="container">
            <h4>Client : ' . $c->Nom_Cli . '</h4>
            <h4>Date de commande : ' . $c->Date_Commande . '</h4>
            <table>
            <thead>
                <tr>
                    <th>produit</th>
                    <th>prix</th>
                    <th>quantite</th>
                    <th>totale</th>
                </tr>
                </thead>
                <tbody>';
    $i = 0;            
    do
    { 
        $html .= '<tr>  
                    <td>'. $c->Libelle .'</td>  
                    <td>'.$c->Prix_vente.'</td>  
                    <td>'.$c->Quantite_Commande.'</td>  
                    <td>'.$c->Prix_Vente*$c->Quantite_Commande.'</td>
                </tr>';
        $i +=$c->Prix_Vente*$c->Quantite_Commande; 
    }
    while($c = $dbStatment->fetch(PDO::FETCH_OBJ)) ;
        
                  

    $html .= '</tbody>
        <tr>
        <th colspan="3" class="table">Totale(DH)</th>
        <th>' . $i . '</th>
        </tr>
        </table>
        </div>
        </body>
        </html>';


      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);   
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();    
      $obj_pdf->writeHTML($html);  
      ob_end_clean();
      $obj_pdf->Output('facture.pdf', 'I');  

 ?>  
 