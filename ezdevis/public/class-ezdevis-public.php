<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://mathiszerbib.github.io/Cv/Cv-Mathis/index.html
 * @since      1.0.0
 *
 * @package    Ezdevis
 * @subpackage Ezdevis/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Ezdevis
 * @subpackage Ezdevis/public
 * @author     Zerbib Mathis <mathis.zerbib@gmail.com>
 */
class Ezdevis_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Ezdevis_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Ezdevis_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/ezdevis-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Ezdevis_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Ezdevis_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/ezdevis-public.js', array( 'jquery' ), $this->version, false );

	}

	public function form_creation(){
		?>


        <!DOCTYPE html>
        <html>
        <head>
        
<link rel="stylesheet" type="text/css" href="<?php echo plugin_dir_url( __FILE__ ) . 'css/ezdevis-public.css'; ?>"  >

<style type="text/css">
  
.submit_button:hover{
color: #404040 !important;
font-weight: 700 !important;
letter-spacing: 3px;
cursor: pointer;
background: none;
-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
transition: all 0.3s ease 0s;
}
  
</style>
        </head>
        <body> 
        
          <div id="content" class="site-content">
        <div class="wrap">
<form action="#" method="post" id="formDevis">
    <fieldset class="ez_fieldset">
       <br/><br/>
     <center>   <h1 class="title">Formulaire de Devis Online</h1></center>
<center><div class="wraper_haut">
<div class="div_gauche">

         <label for="form_e_name">Votre Société</label><br />
          <input required name="form_e_name" type="text" /> <br /> <br />


       <label for="form_secteur_activ">Votre secteur d'actvité </label></br>
<input required name="form_secteur_activ" type="text" id="secteur_activ">


</div>

 

<div class="div_droite">
  <label for="form_site_web">Votre site web  </label></br>
<input name="form_site_web" type="url" placeholder="https://example.com" value="https://" id="site_web">
</br> </br>
      <label for="form_post">Poste/fonction</label><br />
         <input required name="form_post" type="text" placeholder="Gérant, Cadre, étudiant.." /> </div>

<div class="wrapper_mid">
</br>
<div class="div_mid_droite">

          <label for="form_nb_magasin">Nombres de sites à surveiller</label>
         </br> 

  <input type="number" value="1" min="1" max="1000000" name="form_nb_magasin">
  </div>
       
<div class="div_mid_gauche">
             <label for="form_nb_url">Nombre de références d'articles à surveiller </label><br />
  <input type="number" value="1" min="1" max="100000" name="form_nb_url" />
</div>
</div>

</div>


 </center>
<br/>
<center> <h1 class="title">Vos informations</h1></center>
 <br/>





<!-- 
option n°1  -->


<center class="center"> <div class="wraper_haut">
<div class="div_gauche">
<label for="form_name">Nom</label><br />
         <input required name="form_name" type="text"/> <br /> <br />

<label for="form_prenom">Prénom</label><br />
         <input required name="form_prenom" type="text"/> <br /> <br />

   

</div>
<div class="div_droite">

        <label for="form_email">Email</label><br />
         <input required name="form_email" type="email"/> <br /> <br />


       <label for="form_num_tel"> Numéro de téléphone</label>  <br /> <input required name="form_num_tel" type="text" /> <br /> <br />

       </div>
  
    </div>

 <br/> <br/>
 <br/> <br/>
</center>
 <br/> <br/>
<div>
 <center><label for="options" class="choose">En savoir plus sur nos différentes options</label> </center>

 <br/>
<center><p>(Cochez les différentes images pour plus de renseignements)</p></center>
 <br/>
</div>

<div class="big_div">

               <!-- IMAGE 1 -->
               <p>
  <label class="tooltip">Veille tarifaire et de stock
    <span class="tooltiptext">Nous gardons un oeil quotidiennement sur les tarifs pratiqués par vos concurrents et sur leur stock disponible</span>  <img class="img" src="https://pricecomparator.pro/wp-content/uploads/2018/09/mokup-marketplaces.png"></label>


       <input type="checkbox" name="form_opt_stock" value="1"></p>

                      <!-- IMAGE 2 -->

<p>
  <label class="tooltip">Veille de Performances des ventes<span class="tooltiptext">
Bénéficiez d’un tableau de bord visuel pour suivre vos performances ainsi que celles de vos concurrents</span> <img class="img" src="https://pricecomparator.pro/wp-content/uploads/2018/09/PERF-ECOMMERCE.png"></label>

 
<input type="checkbox" name="form_opt_trend" value="1"></p>


                      <!-- IMAGE 3 -->
<p>
  <label class="tooltip">Veille des Newsletters concurrentes
      <span class="tooltiptext">Recevez les dernières actualités et offres de vos concurrents</span><img class="img" src="https://pricecomparator.pro/wp-content/uploads/2018/09/mokup-adboix.png"></label>
  
       <input type="checkbox" name="form_opt_new" value="1"></p>


       <!-- IMAGE 4 -->


       <p><label class="tooltip">Veille des sliders publicitaires
      <span class="tooltiptext">Consultez rapidement les dernières nouveautés et offres promotionnelles de vos concurrents</br>
      </span><img class="img" src="https://pricecomparator.pro/wp-content/uploads/2018/10/ipad-gold2.jpg"></label>

 
 <input type="checkbox" name="form_opt_campub" value="1"></p>


</div>
 <br/> <br/>
        <button type="submit" value="Submit" class="submit_button"style="width: 100%;
border: none;
background: #404040;
color: #ffffff !important;
font-weight: 100;
padding: 20px;
text-transform: uppercase;
border-radius: 6px;
display: inline-block;

">Envoyez</button></center>
 <br/> <br/>
    </fieldset>
        </form>
    </div>
</div>
        </body>
        </html>
       
        <?php 


  if (!empty($_POST)) {
          global $wpdb;
          $table = wp_ezdevis_client;
          $data = array(
              'cli_email' => $_POST['form_email'],
               'cli_e_name' => $_POST['form_e_name'],
                   'cli_numero_tel' => $_POST['form_num_tel'],
                     'cli_nb_magasin' => $_POST['form_nb_magasin'],
                       'cli_nb_url' => $_POST['form_nb_url'],
                        'cli_opt_stock' => $_POST['form_opt_stock'],
                        'cli_opt_campub' => $_POST['form_opt_campub'],
                         'cli_opt_new' => $_POST['form_opt_new'],
                          'cli_opt_trend' => $_POST['form_opt_trend'],
                           'cli_sect_act' => $_POST['form_secteur_activ'],
                             'cli_site_web' => $_POST['form_site_web'],
                               'cli_nom' => $_POST['form_name'],
                                 'cli_prenom' => $_POST['form_prenom'],
                                   'cli_poste' => $_POST['form_post'],
                                     'date_time' => current_time('mysql')
                         
          );

          $format = array(
              '%s',
              '%s',
              '%s',
              '%d',
              '%d',
              '%d',
              '%d',
              '%d',
              '%d',
              '%s',
              '%s',
              '%s',
              '%s',
              '%s',
              '%s'

             
          );
          $success=$wpdb->insert( $table, $data, $format );

   if($success){
$sql = "SELECT GROUP_CONCAT(ez_admin_email SEPARATOR ', ') as ez_admin_email FROM wp_ezdevis_admin ";
$res = $wpdb->get_results($sql);



foreach ($res as $result){
$to = $result->ez_admin_email;
};

$subject = 'Nouveau Prospect !';
$message = "<html>".
  "<body>".
"<div style=\" padding: 1em; \">".

"<h1 style=\" text-align: center; background-color:#006E6A;  padding: 1.2em; \">"."<img style=\" display: block; margin-left: auto; margin-right: auto; \" src=\"https://pricecomparator.pro/wp-content/uploads/2018/09/LogoBlanc.png\" alt=\"Logo PriceComparator\" width=\"130\" height=\"178\" />"."</h1>"."<hr />".


"<h1 style=\"text-align: center; font-size: 1.8em; padding: 1em; \">Devis PriceComparator </h1>".
"<hr />".
"<h2 style=\"text-align: center; font-size: 1.6em; padding: 1em; \">Informations client </h2>".
"<p style=\"text-align: left;  font-size: 1.4em;\">Entreprise : &nbsp;".$_POST['form_e_name']."</p>".
"<p style=\"text-align: left;  font-size: 1.4em;\">Num&eacute;ro :&nbsp;".$_POST['form_num_tel']."</p>". 
"<p style=\"text-align: left; font-size: 1.4em;\">Email :&nbsp;".$_POST['form_email']."</p>". 
"<p style=\"text-align: left; font-size: 1.4em;\">Nom :&nbsp;".$_POST['form_name']."</p>".
"<p style=\"text-align: left; font-size: 1.4em;\">Prénom :&nbsp;".$_POST['form_prenom']."</p>".
"<p style=\"text-align: left; font-size: 1.4em;\">Poste :&nbsp;".$_POST['form_post']."</p>".
"<hr />".
"<h2 style=\"text-align: center; font-size: 1.6em; padding: 1em; \">Configuration souhaitée </h2>".
"<p style=\"text-align: left; font-size: 1.2em;\">Secteur d'activit&eacute; :&nbsp;".$_POST['form_secteur_activ']."</p>".
"<p style=\"text-align: left; font-size: 1.4em;\">Site web :&nbsp;".$_POST['form_site_web']."</p>".
"<p style=\"text-align: left; font-size: 1.2em;\">Nombre d'url :&nbsp;".$_POST['form_nb_url']."</p>".
"<p style=\"text-align: left; font-size: 1.2em;\">Nombre de Magasin:&nbsp;".$_POST['form_nb_magasin']."</p>".
"<hr />".
"<h2 style=\"text-align: center;font-size: 1.6em; padding: 1em; \">Les diff&eacute;rentes options à découvrir &nbsp;</h2>".
"<p style=\"text-align: left;font-size: 1.2em;\">Stock :&nbsp;".$_POST['form_opt_stock']."</p>".
"<p style=\"text-align: left;font-size: 1.2em;\">Adbox :&nbsp;".$_POST['form_opt_campub']."</p>".
"<p style=\"text-align: left;font-size: 1.2em;\">Tendances :&nbsp;".$_POST['form_opt_trend']."</p>".
"<p style=\"text-align: left;font-size: 1.2em;\">Newsletter :&nbsp;".$_POST['form_opt_new']."</p>".
"</div>".

 " </body>".
"</html>";




$headers = array('Content-Type: text/html; charset=UTF-8');
$headers[] = 'From: PriceComparator <contact@pricecomparator.pro>';
wp_mail( $to, $subject, $message, $headers );

              echo '<script> alert("Merci pour votre demande nos équipes reprendront contact avec vous dans les plus brefs délais")</script> ' ; 

          }
      } else {

        echo "<center>Veuillez renseigner toutes les informations nécessaires à la création de votre devis</center>";
      }  
  


  require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

  dbDelta();
?>


<?php
	}

}
