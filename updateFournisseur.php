<?php
require_once ('Fournisseur.php');

$f = new Fournisseur();

$f->setId_Fournisseur($_GET['idF']);

$f= $f->getOne();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/client.css">
    <link rel="stylesheet" href="../css/ajout.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ajout Client</title>
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
            Ajouter un client
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        
      </div>
    </nav>
        <div class="data-input-side">
           
            <form action=<?php echo"/project/updateF.php/?idF=". $f->Id_Fournisseur?> method="POST">
            <input type="text" class="input-border" name="nomF" id="nomF" placeholder="Nom" value=<?php echo $f->Nom_Fournisseur ?>>
            <input  type="text"class="input-border" name="prenomF" id="prenomF" placeholder="Prenom" rows="10" value=<?php echo $f->Prenom_Fournisseur?>> 
            <input type="text" step="any" class="input-border" name="adresseF" id="adresseF" placeholder="Adresse"  value=<?php echo $f->Adresse_Fournisseur?>>
            <input type="number" step="any" class="input-border" name="telF" id="telF" placeholder="tel" value=<?php echo $f->Tel_Fournisseur?>>
             <input type="email" step="any" class="input-border" name="mailF" id="mailF" placeholder="email" value=<?php echo $f->Mail_Fournisseur?>>
            <input type="submit" name="update-fournisseur" value="Mettre ?? jour">
            </form>
            

        </div>
    </div>
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