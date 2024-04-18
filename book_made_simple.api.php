<?php

/**
 * @file
 * Hooks provided by Book Made Simple.
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
function hook_book_made_simple_allowed_types_list_alter(&$allowedTypes) {
  // Remove the 'page' content type from the list of allowed types.
  unset($allowed_types['page']);
}

/**
 * @} End of "addtogroup hooks".
 */
