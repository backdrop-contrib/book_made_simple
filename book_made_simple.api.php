<?php

/**
 * @file
 * Hooks provided by the entity API.
 */

/**
 * @addtogroup hooks
 * @{
 */

/**
 * Allows other modules to change list of allowed content types.
 * Potential use case is to remove content types from the list, depending on a
 * field in the book.
 *
 * @param string $allowed_types
 *   List of allowed content types that can be books.
 */
function hook_filter_allowed_types_list(&$allowed_types) {
  // Example rempoves thee content type page from list.
  unset($allowed_types['page']);
}

/**
 * @} End of "addtogroup hooks".
 */
