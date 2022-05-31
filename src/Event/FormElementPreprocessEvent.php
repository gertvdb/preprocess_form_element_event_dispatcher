<?php

namespace Drupal\preprocess_form_element_event_dispatcher\Event;

use Drupal\preprocess_event_dispatcher\Event\AbstractPreprocessEvent;

/**
 * Class FormElementPreprocessEvent.
 */
final class FormElementPreprocessEvent extends AbstractPreprocessEvent {

  public static function getHook(): string
  {
    return 'form_element';
  }

}
