<?php
/**
 * @file
 * Form hooks.
 */

/**
 * Implements hook_form_alter().
 */
function dcco15_form_alter(&$form, &$form_state, $form_id) {

  // Add placeholder text to a form.
  if ($form_id == 'search_block_form') {
    $form['search_block_form']['#attributes']['placeholder'] = "Enter a term";
  }
}
