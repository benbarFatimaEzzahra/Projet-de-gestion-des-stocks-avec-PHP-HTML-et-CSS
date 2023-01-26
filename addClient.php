<?php

require_once('client.php');

if(isset($_POST['ajouter']))
{
    $c = new client();

    $c->setAll($_POST['Id_Client'],$_POST['Mail_Client'],$_POST['Nom_Client'],$_POST['Prenom_Client'],$_POST['Tel_Client'],$_POST['Adresse_Client']);
    $c->add();

    $c = $c->search();
}
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8"> 
    <link rel="stylesheet" href="css/client.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-A-plus-plus'></i>
      <span class="logo_name">AUTOPROJECT</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Menu</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-box' ></i>
            <span class="links_name">Produit</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-user' ></i>
            <span class="links_name">Client</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-user' ></i>
            <span class="links_name">Fournisseur</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Contenir</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Commande</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Stock</span>
          </a>
        </li>
        <li class="log_out">
          <a href="#">
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
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">Prem Shahi</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>
<section>
    <div class="home-content">
      <div class="overview-boxes">
        <form>
            <div class="cl">Client</div>
            <ul class="form-style-1">
            <li>
                    <label>Id Client <span class="required">*</span></label>
                    <input type="number" name="Id_Client" id="Id_Client" class="field-long" />
                </li>
                <li><label>Nom et Prenom<span class="required">*</span></label><input type="text" name="Nom_Client" class="field-divided" id="Nom_Client" placeholder="Nom" /> <input type="text" name="Prenom_Client" id="Prenom_Client" class="field-divided" placeholder="Prénom" /></li>
                <li>
                    <label>Email <span class="required">*</span></label>
                    <input type="email" name="Mail_Client" id="Mail_Client" class="field-long" />
                </li>
                <li>
                    <label>Téléphone <span class="required">*</span></label>
                    <input type="tel" name="Tel_Client" id="Tel_Client" class="field-long" />
                </li>
                
                <li>
                    <label>Adresse<span class="required">*</span></label>
                    <textarea name="Adresse_Client" id="Adresse_Client" class="field-long field-textarea"></textarea>
                </li>
               <div class="table-footer">
               <td colspan="2"><label>
        <input name="nouveau" type="reset" id="nouveau" value="Nouveau" />
        <input name="ajouter" type="submit" id="ajouter" value="Ajouter" />
        <input name="modidier" type="submit" id="modidier" value="Modifier" />
        <input name="supprimer" type="submit" id="supprimer" value="Supprimer" />
        <div class="table-footer">
         <button> <a href="listeClient.php">Add</a></button>
          <button><a href="">Show all</a></button>
        </div>
      </label></td>
    </tr>
            </div>
               
            </ul>
            </form>
            

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
