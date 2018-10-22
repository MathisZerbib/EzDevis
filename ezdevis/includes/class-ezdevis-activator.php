<?php

/**
 * Fired during plugin activation
 *
 * @link       https://mathiszerbib.github.io/Cv/Cv-Mathis/index.html
 * @since      1.0.0
 *
 * @package    Ezdevis
 * @subpackage Ezdevis/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Ezdevis
 * @subpackage Ezdevis/includes
 * @author     Zerbib Mathis <mathis.zerbib@gmail.com>
 */
class Ezdevis_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {


		/**
 * Si inexistante, on créée la table SQL "ezdevis_clients" après l'activation du thème
 */
global $wpdb;
$charset_collate = $wpdb->get_charset_collate();
$commissions_table_name = $wpdb->prefix . 'ezdevis_client';
$commissions_sql = "CREATE TABLE wp_ezdevis_client(
        cli_id         Int  Auto_increment  NOT NULL ,
        cli_email      Varchar (50) NOT NULL ,
        cli_e_name     Varchar (50) NOT NULL ,
        cli_numero_tel Varchar (50) NOT NULL ,
        cli_nb_magasin Int NOT NULL ,
        cli_nb_url     Int NOT NULL ,
        cli_opt_stock  Int  ,
        cli_opt_campub Int  ,
        cli_opt_new    Int  ,
        cli_opt_trend  Int  ,
        cli_sect_act   Varchar (50) NOT NULL,
        cli_site_web   Varchar (50) NOT NULL,
        cli_nom        Varchar (50) NOT NULL,
        cli_prenom     Varchar (50) NOT NULL,
        cli_poste      Varchar (50) NOT NULL,
        date_time      TimeStamp NOT NULL 
	,CONSTRAINT ezdevis_client_PK PRIMARY KEY (cli_id)	
) $charset_collate;";
require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
dbDelta($commissions_sql);

/* on créée la table SQL "ezdevis_admin"*/

global $wpdb;
$charset_collate = $wpdb->get_charset_collate();
$commissions_table_name = $wpdb->prefix . 'ezdevis_admin';
$commissions_sql = "CREATE TABLE wp_ezdevis_admin(
        ez_id              Int  Auto_increment  NOT NULL ,
        ez_admin_email     Varchar (50) NOT NULL ,
        ez_client_email    Varchar (50) NOT NULL ,
        ez_accus_reception Varchar (50) NOT NULL ,
        date_time      TimeStamp NOT NULL 
	,CONSTRAINT ezdevis_admin_PK PRIMARY KEY (ez_id)
) $charset_collate;";
require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
dbDelta($commissions_sql);


 }

}
