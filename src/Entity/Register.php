<?php

namespace Drupal\commerce_pos\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the Register entity.
 *
 * @ConfigEntityType(
 *   id = "commerce_pos_register",
 *   label = @Translation("Register"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\commerce_pos\RegisterListBuilder",
 *     "form" = {
 *       "add" = "Drupal\commerce_pos\Form\RegisterForm",
 *       "edit" = "Drupal\commerce_pos\Form\RegisterForm",
 *       "delete" = "Drupal\commerce_pos\Form\RegisterDeleteForm"
 *     },
 *     "route_provider" = {
 *       "default" = "Drupal\Core\Entity\Routing\AdminHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "commerce_pos_register",
 *   admin_permission = "access commerce pos administration pages",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/commerce/config/pos/register/{commerce_pos_register}",
 *     "add-form" = "/admin/commerce/config/pos/register/add",
 *     "edit-form" = "/admin/commerce/config/pos/register/{commerce_pos_register}/edit",
 *     "delete-form" = "/admin/commerce/config/pos/register/{commerce_pos_register}/delete",
 *     "collection" = "/admin/commerce/config/pos/register"
 *   }
 * )
 */
class Register extends ConfigEntityBase implements RegisterInterface {

  /**
   * The Register ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Register label.
   *
   * @var string
   */
  protected $label;

}
