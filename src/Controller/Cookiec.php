<?php

namespace Drupal\cookiec\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class Cookiec
 *
 * @package Drupal\cookiec\Controller
 */
class Cookiec extends ControllerBase {

  /**
   * The language manager.
   *
   * @var \Drupal\Core\Language\LanguageManagerInterface
   */
  protected $languageManager;

  /**
   * WeatherStation constructor.
   */
  public function __construct(LanguageManagerInterface $languageManager) {
    $this->config = $this->config('cookiec.settings');
    $this->languageManager = $languageManager;
  }

  /**
   * Render
   *
   * @return array
   */
  function renderPage(){
    $language = $this->languageManager->getCurrentLanguage()->getId();
    return array(
      '#title' => $this->config->get($language."_popup_title"),
      '#markup' => $this->config->get($language."_popup_p_private"),
    );
  }

}