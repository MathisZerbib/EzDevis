<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://mathiszerbib.github.io/Cv/Cv-Mathis/index.html
 * @since      1.0.0
 *
 * @package    Ezdevis
 * @subpackage Ezdevis/admin/partials
 */


?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<!DOCTYPE html>
<html>
<head>
	<title>Administration</title> 

</head>
<body>
<div class="wrap">
  <h1>EzDevis Admin</h1>

    <p>shortcode : <input type="text" name="shortcode" value="[ez_devis_form_shortcode]" style="width: 16%"></p>
</div> 


<div class="wrap">


<form action="#" method="post">
<h1>Entrez les adresses email qui recevrons les demandes de devis</h1>
<p>
	
		    <input type="mail" name="email_Devis" />
    <input type="submit" class="button button-primary" value="Valider" />

	

</p>
</form>


</body>
</html>
<?php
 if (!empty($_POST['email_Devis'])) {
        global $wpdb;
        $table = 'wp_ezdevis_admin';
        $data = array(
            'ez_admin_email' => $_POST['email_Devis'] ,
              'date_time' => current_time('mysql')
            
        );
        $format = array(
            '%s' ,
             '%s'
        );



  

        $success=$wpdb->insert( $table, $data, $format );
        if($success){
            echo 'Les données ont étés sauvées !' ; 
        }
    } else {

      echo "Veuillez renseigner un email";
    }  

function get_last_cli_month(){


$date_time = date("Y-m-d H:i:s");
  global $wpdb;
                    $sql = "SELECT COUNT(*) AS cli_id from wp_ezdevis_client WHERE date_time >= NOW() - INTERVAL 30 DAY  ;";
                    $results = $wpdb->get_results($sql);


     if($results){
 $i=1;
                foreach ($results as $result) {
                    ?>
                    <tr id="row<?php echo $result->cli_id;?>">
                        <td><?php echo $result->cli_id ?></td></tr> <?php }
     }
}


function get_last_cli_week(){


$date_time = date("Y-m-d H:i:s");
  global $wpdb;
                    $sql = "SELECT COUNT(*) AS cli_id from wp_ezdevis_client WHERE date_time >= NOW() - INTERVAL 7 DAY  ;";
                    $results = $wpdb->get_results($sql);


     if($results){
 $i=1;
                foreach ($results as $result) {
                    ?>
                    <tr id="row<?php echo $result->cli_id;?>">
                        <td><?php echo $result->cli_id ?></td></tr> <?php }
     }
}
?> 


<html>
<head>



<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.35/css/uikit.min.css">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/dataTables.uikit.min.css">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


    

    </head>
    <body>
    <div style="margin-top:30px;width:100%">
        <form method="post" action="#">
            <table class="uk-table uk-table-hover uk-table-striped" id="myTable">
                <thead>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Action</th>
                </thead>
                <tbody>
                <?php
             
                global $wpdb;
                    $sql = "SELECT * from wp_ezdevis_admin ORDER BY ez_id ASC";
                    $results = $wpdb->get_results($sql);
                $i=1;
                foreach ($results as $result) {
                    ?>
                    <tr id="row<?php echo $result->ez_id;?>">
                        <td><?php echo $result->ez_id ?></td>
                       
                        <td><?php echo $result->ez_admin_email ?></td>
                        <td><?php echo $result->date_time ?></td>
                    
                        <td style="text-align: center; ">
                            <a href="#"  id="delete_button<?php echo $result->ez_id;?>" onclick="delete_row('<?php echo $result->ez_id;?>');" class="button button-primary" >Supprimer</a>
                        </td>
                    </tr>
                <?php
                    $i++;
                } ?>
                </tbody>
            </table>
        </form>
    </div>
<br/>
<h1>Les nouveaux clients</h1>
</br>
<div><h1>Nouveaux prospects ce mois ci : <?php get_last_cli_month() ?> 
</h1><h1>Nouveaux prospects cette semaine : <?php get_last_cli_week() ?>  </h1></div> 
<a href="<?php echo admin_url(); ?>admin-ajax.php?action=csv_pull" class="button button-primary" >Exportez tout en Excel (.csv)</a>
</br>
</br>
  </html><a href= "<?php echo admin_url(); ?>admin.php?page=ezdevis-admin-display" id="delete_button_cli_all" onclick="delete_all_cli();" class="button button-primary" >Supprimez tout</a>
</br>
</br>

</br>



  <form method="post" action="#">
            <table class="uk-table uk-table-hover uk-table-striped" id="myTable2">
                <thead>
                    <th style="text-align: center; font-weight: bold;">ID</th>
                  <th style="text-align: center; font-weight: bold;">Email</th>
                  <th style="text-align: center; font-weight: bold;">Societé</th>
                  <th style="text-align: center; font-weight: bold;">Num</th>
                  <th style="text-align: center; font-weight: bold;">Nb sites</th>
                  <th style="text-align: center; font-weight: bold;">REF</th>
      <!--               <th style="text-align: center;font-weight: bold;">O Stock</th>
                    <th style="text-align: center;font-weight: bold;">O Pub</th>
                    <th style="text-align: center;font-weight: bold;">O News</th>
                    <th style="text-align: center;font-weight: bold;">O Trend</th> -->
                    <th style="text-align: center; font-weight: bold;">Secteur</th>
                    <th style="text-align: center; font-weight: bold;">Site Web</th>
                     <th style="text-align: center; font-weight: bold;">Nom</th>
                    <th style="text-align: center; font-weight: bold;">Prénom</th>
                   <th style="text-align: center; font-weight: bold;">Poste</th>
                    <th style="text-align: center;font-weight: bold;">Date</th>
                    <th style="text-align: center;font-weight: bold;">Action</th>
                </thead>
                <tbody>
                <?php
             
                global $wpdb;
                    $sql = "SELECT * from wp_ezdevis_client ORDER BY cli_id ASC";
                    $results = $wpdb->get_results($sql);
                $i=1;
                foreach ($results as $result) {
                    ?>
                    <tr id="row<?php echo $result->cli_id;?>">
                        <td><?php echo $result->cli_id ?></td>
                        <td><?php echo $result->cli_email ?></td>
                         <td><?php echo $result->cli_e_name ?></td>
                          <td><?php echo $result->cli_numero_tel ?></td>
                        <td><?php echo $result->cli_nb_magasin ?></td>
                        <td><?php echo $result->cli_nb_url ?></td>
<!--                         <td><?php echo $result->cli_opt_stock ?></td>
                        <td><?php echo $result->cli_opt_campub ?></td>
                        <td><?php echo $result->cli_opt_new ?></td>
                        <td><?php echo $result->cli_opt_trend ?></td> -->
                        <td><?php echo $result->cli_sect_act ?></td>
                        <td><?php echo $result->cli_site_web ?></td>
                        <td><?php echo $result->cli_nom ?></td>
                        <td><?php echo $result->cli_prenom ?></td>
                        <td><?php echo $result->cli_poste ?></td>
                        <td><?php echo $result->date_time ?></td>
                      
                        <td style="text-align: center; ">
                            <a href="#" id="delete_button_cli<?php echo $result->cli_id;?>" onclick="delete_row_cli('<?php echo $result->cli_id;?>');" class="button button-primary" >X</a>
                        </td>
                    </tr>
                <?php
                    $i++;
                } ?>
                </tbody>
            </table>
        </form>
    </div>
</br>
  <p>EzDevis est développé par la société BSWEB </br>
  Il permet d'établir un devis sur mesure, en envoyant un mail aux différents administrateurs</p>




    </body>


                         <!--  Script de suppression des différentes données en AJAX/jQuery To PHP  -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
  
    <script src="//code.jquery.com/jquery-1.9.1.js"></script>

     <script type="text/javascript">
    var jq = jQuery.noConflict(true);

</script>
                            <!-- Script permettant la suppression d'email administrateur AJAX/jQuery/PHP -->
 <script type="text/javascript">
            function delete_row(id) {
            var lnk = "<?php ABSPATH . 'ezdevis/admin/partials/ezdevis-admin-display.php'; ?>";
            if(confirm("Vous êtes sur de vouloir supprimer l'adresse administrateur séléctionnée ?")){
                jQuery.ajax
                ({
                    type:'post',
                    url:lnk,
                    data:{
                        delete_row:'delete_row',
                        row_id:id
                    },
                    success:function(data) {
                            jQuery("#row" + id).remove();
                    }
                });
            }
        }
    </script>
                                <!-- Script permettant la suppression de fiches clients AJAX/PHP -->
    <script type="text/javascript">
            function delete_row_cli(id) {
            var lnk = "<?php ABSPATH . 'ezdevis/admin/partials/ezdevis-admin-display.php'; ?>";
            if(confirm("Vous êtes sur de vouloir supprimer la fiche client séléctionnée ?")){
                jQuery.ajax
                ({
                    type:'post',
                    url:lnk,
                    data:{
                        delete_row_cli:'delete_row_cli',
                        row_id:id
                    },
                    success:function(data) {
                            jQuery("#row" + id).remove();

                    }
                });
            }
        }
    </script>

                                <!-- Script permettant la suppression de TOUTES les fiches clients AJAX/PHP -->

    <script type="text/javascript">
            function delete_all_cli(id) {
            var lnk = "<?php ABSPATH . 'ezdevis/admin/partials/ezdevis-admin-display.php'; ?>";
            if(confirm("Vous êtes sur de vouloir supprimer TOUTES les fiches clients séléctionnée ? Attention vous ne pourrez plus revenir en arrière !")){
                jQuery.ajax
                ({
                    type:'post',
                    url:lnk,
                    data:{
                        delete_all_cli:'delete_all_cli',
                        row_id:id
                    },
                    success:function(data) {
                            jQuery("#row" + id).remove();

                    }
                });
            }
        }
    </script>

                       <!-- Scritp permettant la mise en forme et la traduction des options de la table wp_ezdevis_client -->
    <script type="text/javascript">
        jQuery(document).ready( function () {
    jQuery('#myTable2').DataTable({
    language: {
        processing:     "Traitement en cours...",
        search:         "Rechercher&nbsp;:",
        lengthMenu:    "Afficher _MENU_ &eacute;l&eacute;ments",
        info:           "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
        infoEmpty:      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        infoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        infoPostFix:    "",
        loadingRecords: "Chargement en cours...",
        zeroRecords:    "Aucun &eacute;l&eacute;ment &agrave; afficher",
        emptyTable:     "Aucune donnée disponible dans le tableau",
        paginate: {
            first:      "Premier",
            previous:   "Pr&eacute;c&eacute;dent",
            next:       "Suivant",
            last:       "Dernier"
        },
        aria: {
            sortAscending:  ": activer pour trier la colonne par ordre croissant",
            sortDescending: ": activer pour trier la colonne par ordre décroissant"
        }
    }
}
        );
     
      
} );

</script>



    <?php 



                                   /*Fonctionnalités pour supprimer les différentes données appelés par Jquery/AJAX*/
global $wpdb;
if(isset($_POST['delete_row']))
 {   
     $id = $_POST['row_id'];
    $result = $wpdb->delete('wp_ezdevis_admin', array( 'ez_id' => $id ), array('%d'));

     if($result){
    echo "L'adresse mail administrateur à bien été supprimée";
 
    exit();
     }
}

                                   /*Fonctionnalités pour supprimer la fiche client  PHP */

if(isset($_POST['delete_row_cli']))
 {   
     $id = $_POST['row_id'];
    $result = $wpdb->delete('wp_ezdevis_client', array( 'cli_id' => $id ), array('%d'));

     if($result){
    echo "La fiche client à bien été supprimée";
 
    exit();
     }
}
 
                                 /*Fonctionnalités pour supprimer Toute la table wp_ezdevis_client  PHP */

if(isset($_POST['delete_all_cli']))
 {   
global $wpdb;
$result = $wpdb->query("TRUNCATE TABLE `wp_ezdevis_client`");

     if($result){
    echo "Toute la table wp_ezdevis_client est maintenant vide";
 
    exit();
     }
}


?>