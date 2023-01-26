<?php
    require_once('Commande.php');
    
    $com = new Commande();
    $lst = $com->jointure(); //Array
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
    <title>La liste des commandes</title>
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
            La liste des commandes
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        
      </div>
    </nav>

    
    <div class="container">
    <table>
        <thead>
            <tr>
                <th>NumCommande</th>
                <th>IdClient</th>
                <th>DateCommande</th>
                <th>Ref_Produit</th>
                <th>Quantite Commandee</th>
                
            </tr>
        </thead>
        <div>client</div> 
        <div>client</div> 
        <div>client</div> 
        <tbody>
            <?php
                foreach ($lst as $comm)  {
                    echo "<tr>";
                        echo "<td>" . $comm->Num_Commande . "</td>";
                        echo "<td>" . $comm->Id_Client . "</td>";
                        echo "<td>" . $comm->Date_Commande . "</td>"; 
                        echo "<td>" . $comm->Reference_Produit. "</td>"; 
                        echo "<td>" . $comm->Quantite_Commande . "</td>"; 
                        
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <div class="table-footer">
    <a href="ajoutCommande.php">Add</a>
    <a href="listeCommande.php">Show all</a>
    <a href="pdf.php">Enregistrer facture</a>
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