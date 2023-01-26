<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="css/test.css">
    <!-- Boxicons CDN Link -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <span class="dashboard">menu</span>
      </div>
      <div class="search-box">
        
      </div>
      
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic"><a href="listeClient.php"><img src="img/comm1.jpg" alt="" class="logo"></a></div>
            
            <div class="number"></div>
            <div class="indicator">La liste des clients
            </div>
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic"><a href="listeFournisseur.php"><img src="img/fou.jpg" alt="" class="logo"></a></div>
            <div class="number"></div>
            <div class="indicator">La liste des fournisseurs
              
              <span class="text"></span>
            </div>
          </div>
         
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic"><a href="listeProduit.php"><img src="img/voitu1.jpg" alt="" class="logo"></a></div>
            <div class="number"></div>
            <div class="indicator">La liste des produits
              
              <span class="text"></span>
            </div>
       </div>
          
        </div>
        
        <div class="box">
          <div class="right-side">
            <div class="box-topic"><a href="listeCommande.php"><img src="img/comm3.jpg" alt="" class="logo"></a></div>
            <div class="number"></div>
            <div class="indicator">La liste des commandes
              <span class="text"></span>
            </div>
          </div>
          </div>
      
      
  
   
   
    
      <div class="box">
        <div class="right-side">
          <div class="box-topic"><a href="listeAppro.php"><img src="img/appro.jpg" alt="" class="logo"></a></div>
          
          <div class="number"></div>
          <div class="indicator">La liste des approvisionnements
          <span class="text"></span>
          </div>
        </div>
        
      </div>
      <div class="box">
        <div class="right-side">
          <div class="box-topic"><a href="listeCat.php"><img src="img/stock.jpg" alt="" class="logo"></a></div>
          <div class="number"></div>
          <div class="indicator">La liste catégorie
            
            <span class="text"></span>
          </div>
        </div>
       
      </div>


          
         
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

