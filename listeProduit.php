<?php
    require_once('Produit.php');

    $prd = new Produit();
    $lst = $prd->getAll(); //Array
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/ajout.css">
    <link rel="stylesheet" href="css/client.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La liste des produits</title>
</head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='fa fa-car'></i>
      <span class="logo_name">AutoProject</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="home1.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Menu</span>
          </a>
        </li>
        <li>
          <a href="newProduit.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Produit</span>
          </a>
        </li>
        <li>
          <a href="ajoutClient.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Client</span>
          </a>
        </li>
        <li>
          <a href="ajoutFournisseur.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Fournisseur</span>
          </a>
        </li>
        <li>
          <a href="ajoutContenir.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Facture</span>
          </a>
        </li>
        <li>
          <a href="ajoutCommande.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Commande</span>
          </a>
        </li>
        <li>
          <a href="ajoutS.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Stock</span>
          </a>
        </li>
        <li>
          <a href="ajoutAppro.php">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Approvisionnement</span>
          </a>
        </li>
        <li class="log_out">
          <a href="deconnexion.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Menu</span>
      </div>
      <div class="title">
            La liste des produits
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        
      </div>
    </nav>
    <div class="container">
    <table>
        <thead>
            <tr>
                
                <th>Référence_Produit</th>
                <th>Référence_Categorie</th>
                <th>Libellé</th>
                <th>Quantité</th>
                <th>P.achat</th>
                <th>P.vente</th>
                <th>P.unitaire</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <div>client</div> 
        <div>client</div> 
        <div>client</div> 
        <tbody>
            <?php
                foreach ($lst as $p)  {
                    echo "<tr>";
                    
                        echo "<td>" . $p->Reference_Produit . "</td>";
                        echo "<td>" . $p->Reference_Categorie . "</td>";
                        echo "<td>" . $p->Libelle . "</td>";
                        echo "<td>" . $p->Quantite_Stock . "</td>";
                        echo "<td>" . $p->Prix_Achat . "</td>";
                        echo "<td>" . $p->Prix_unitaire. "</td>";
                        echo "<td>" . $p->Prix_Vente . "</td>";
                        echo "<td><a href="."suppressionPro.php/?ref=" . $p->Reference_Produit . "><i class='fas fa-folder-minus'></i></a></td>";
                        echo "<td><a href="."updateProduit.php/?ref=" . $p->Reference_Produit . "><i class='fas fa-edit'></i></a></td>";
                        //echo "<td><a href="."updateForm.php/?email=" . $c->reference . "><i class='fas fa-reply'></i></a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <div class="table-footer">
    <a href="ajoutPro.php">Add</a>
    <a href="listeProduit.php">Show all</a>
    </div>
    
    </div>
    </section>

<script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>
    
</body>
</html>