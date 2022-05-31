<?php

namespace Drupal\preprocess_form_element_event_dispatcher\Event\Variables;

use Drupal\preprocess_event_dispatcher\Variables\AbstractEventVariables;
use Drupal\user\UserInterface;

/**
 * Class FormElementEventVariables.
 */
class FormElementEventVariables extends AbstractEventVariables {

  /**
   * Get the user.
   *
   * @return UserInterface
   *   The user.
   */
  public function getUser(): UserInterface {
    return $this->variables['user'];
  }

}
