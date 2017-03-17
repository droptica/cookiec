<?php

/**
 * @file Drupal\coociec\EventSubscriber\PopupMessageSubscriber
 */
namespace Drupal\cookiec\Controller;

use Drupal\Core\Controller\ControllerBase;


class Cookiec extends ControllerBase {

  function renderPage(){
    $this->config = \Drupal::configFactory()->get('cookiec.settings');
    $language = \Drupal::languageManager()->getCurrentLanguage()->getId();
    return array(
      '#title' => $this->config->get($language."_popup_title"),
      '#markup' => $this->config->get($language."_popup_p_private"),
    );
  }

}