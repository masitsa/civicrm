<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2017                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2017
 *
 * Generated from xml/schema/CRM/Member/MembershipBlock.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:3ee510fab11783acf6ee994f090436f6)
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
/**
 * CRM_Member_DAO_MembershipBlock constructor.
 */
class CRM_Member_DAO_MembershipBlock extends CRM_Core_DAO {
  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_membership_block';
  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var boolean
   */
  static $_log = true;
  /**
   * Membership Id
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Name for Membership Status
   *
   * @var string
   */
  public $entity_table;
  /**
   * FK to civicrm_contribution_page.id
   *
   * @var int unsigned
   */
  public $entity_id;
  /**
   * Membership types to be exposed by this block
   *
   * @var string
   */
  public $membership_types;
  /**
   * Optional foreign key to membership_type
   *
   * @var int unsigned
   */
  public $membership_type_default;
  /**
   * Display minimum membership fee
   *
   * @var boolean
   */
  public $display_min_fee;
  /**
   * Should membership transactions be processed separately
   *
   * @var boolean
   */
  public $is_separate_payment;
  /**
   * Title to display at top of block
   *
   * @var string
   */
  public $new_title;
  /**
   * Text to display below title
   *
   * @var text
   */
  public $new_text;
  /**
   * Title for renewal
   *
   * @var string
   */
  public $renewal_title;
  /**
   * Text to display for member renewal
   *
   * @var text
   */
  public $renewal_text;
  /**
   * Is membership sign up optional
   *
   * @var boolean
   */
  public $is_required;
  /**
   * Is this membership_block enabled
   *
   * @var boolean
   */
  public $is_active;
  /**
   * Class constructor.
   */
  function __construct() {
    $this->__table = 'civicrm_membership_block';
    parent::__construct();
  }
  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'entity_id', 'civicrm_contribution_page', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'membership_type_default', 'civicrm_membership_type', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Membership Block ID') ,
          'description' => 'Membership Id',
          'required' => true,
          'table_name' => 'civicrm_membership_block',
          'entity' => 'MembershipBlock',
          'bao' => 'CRM_Member_BAO_MembershipBlock',
          'localizable' => 0,
        ) ,
        'entity_table' => array(
          'name' => 'entity_table',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Membership Block Entity Table') ,
          'description' => 'Name for Membership Status',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_membership_block',
          'entity' => 'MembershipBlock',
          'bao' => 'CRM_Member_BAO_MembershipBlock',
          'localizable' => 0,
        ) ,
        'entity_id' => array(
          'name' => 'entity_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Membership Block Entity ID') ,
          'description' => 'FK to civicrm_contribution_page.id',
          'required' => true,
          'table_name' => 'civicrm_membership_block',
          'entity' => 'MembershipBlock',
          'bao' => 'CRM_Member_BAO_MembershipBlock',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contribute_DAO_ContributionPage',
        ) ,
        'membership_types' => array(
          'name' => 'membership_types',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Membership Block Membership Types') ,
          'description' => 'Membership types to be exposed by this block',
          'maxlength' => 1024,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_membership_block',
          'entity' => 'MembershipBlock',
          'bao' => 'CRM_Member_BAO_MembershipBlock',
          'localizable' => 0,
        ) ,
        'membership_type_default' => array(
          'name' => 'membership_type_default',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Membership Block Default Type') ,
          'description' => 'Optional foreign key to membership_type',
          'table_name' => 'civicrm_membership_block',
          'entity' => 'MembershipBlock',
          'bao' => 'CRM_Member_BAO_MembershipBlock',
          'localizable' => 0,
          'FKClassName' => 'CRM_Member_DAO_MembershipType',
        ) ,
        'display_min_fee' => array(
          'name' => 'display_min_fee',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Membership Block Display Minimum Fee') ,
          'description' => 'Display minimum membership fee',
          'default' => '1',
          'table_name' => 'civicrm_membership_block',
          'entity' => 'MembershipBlock',
          'bao' => 'CRM_Member_BAO_MembershipBlock',
          'localizable' => 0,
        ) ,
        'is_separate_payment' => array(
          'name' => 'is_separate_payment',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Membership Block Is Separate Payment') ,
          'description' => 'Should membership transactions be processed separately',
          'default' => '1',
          'table_name' => 'civicrm_membership_block',
          'entity' => 'MembershipBlock',
          'bao' => 'CRM_Member_BAO_MembershipBlock',
          'localizable' => 0,
        ) ,
        'new_title' => array(
          'name' => 'new_title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Membership Block New Title') ,
          'description' => 'Title to display at top of block',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_membership_block',
          'entity' => 'MembershipBlock',
          'bao' => 'CRM_Member_BAO_MembershipBlock',
          'localizable' => 1,
        ) ,
        'new_text' => array(
          'name' => 'new_text',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Membership Block New Text') ,
          'description' => 'Text to display below title',
          'table_name' => 'civicrm_membership_block',
          'entity' => 'MembershipBlock',
          'bao' => 'CRM_Member_BAO_MembershipBlock',
          'localizable' => 1,
        ) ,
        'renewal_title' => array(
          'name' => 'renewal_title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Membership Block Renewal Title') ,
          'description' => 'Title for renewal',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_membership_block',
          'entity' => 'MembershipBlock',
          'bao' => 'CRM_Member_BAO_MembershipBlock',
          'localizable' => 1,
        ) ,
        'renewal_text' => array(
          'name' => 'renewal_text',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Membership Block Renewal Text') ,
          'description' => 'Text to display for member renewal',
          'table_name' => 'civicrm_membership_block',
          'entity' => 'MembershipBlock',
          'bao' => 'CRM_Member_BAO_MembershipBlock',
          'localizable' => 1,
        ) ,
        'is_required' => array(
          'name' => 'is_required',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Required') ,
          'description' => 'Is membership sign up optional',
          'table_name' => 'civicrm_membership_block',
          'entity' => 'MembershipBlock',
          'bao' => 'CRM_Member_BAO_MembershipBlock',
          'localizable' => 0,
        ) ,
        'is_active' => array(
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Active') ,
          'description' => 'Is this membership_block enabled',
          'default' => '1',
          'table_name' => 'civicrm_membership_block',
          'entity' => 'MembershipBlock',
          'bao' => 'CRM_Member_BAO_MembershipBlock',
          'localizable' => 0,
        ) ,
      );
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }
  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName() {
    return CRM_Core_DAO::getLocaleTableName(self::$_tableName);
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog() {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'membership_block', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'membership_block', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of indices
   */
  public static function indices($localize = TRUE) {
    $indices = array();
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }
}
