<?php

namespace Drupal\preprocess_form_element_event_dispatcher\Event\Factory;

use Drupal\preprocess_event_dispatcher\Event\AbstractPreprocessEvent;
use Drupal\preprocess_event_dispatcher\Factory\PreprocessEventFactoryInterface;
use Drupal\preprocess_event_dispatcher\Variables\FormEventVariables;
use Drupal\preprocess_form_element_event_dispatcher\Event\FormElementPreprocessEvent;

/**
 * Class FormElementPreprocessEventFactory.
 */
class FormElementPreprocessEventFactory implements PreprocessEventFactoryInterface {

  public function createEvent(array &$variables): AbstractPreprocessEvent
  {
    return new FormElementPreprocessEvent(
      new FormEventVariables($variables)
    );
  }

  public function getEventHook(): string
  {
    return FormElementPreprocessEvent::getHook();
  }

}
