<?php

namespace Drupal\schema_image_object\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'schema_image_object_name' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_image_object_name",
 *   label = @Translation("name"),
 *   description = @Translation("The title of the image."),
 *   name = "name",
 *   group = "schema_image_object",
 *   weight = -40,
 *   type = "string",
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class SchemaImageObjectName extends SchemaNameBase {
  // Nothing here yet. Just a placeholder class for a plugin.
}
