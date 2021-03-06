<?php

namespace Drupal\schema_image_object\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaTypeBase;

/**
 * Provides a plugin for the 'type' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_image_object_type",
 *   label = @Translation("@type"),
 *   description = @Translation("The type of this ImageObject."),
 *   name = "@type",
 *   group = "schema_image_object",
 *   weight = -99,
 *   type = "string",
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class SchemaImageObjectType extends SchemaTypeBase {

  /**
   * {@inheritdoc}
   */
  public static function labels() {
    return [
      'ImageObject',
    ];
  }

}
