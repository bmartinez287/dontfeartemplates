<?php

namespace Drupal\dft\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Click to Tweet Display Formatter
 *
 * @FieldFormatter(
 *   id = "click_to_tweet",
 *   label = @Translation("Click to Tweet"),
 *   field_types = {
 *     "text_long", "text"
 *   }
 * )
 */
class ClicktoTweetFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary = [];
    $summary[] = $this->t('Enables Click to Tweet on a Field.');
    return $summary;
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $element = [];

    foreach ($items as $delta => $item) {
      $ctw= '<a target="_blank" href="https://twitter.com/intent/tweet?text=' . urlencode( strip_tags($item->value) ) . '">' . $item->value . '</a>';
      $element[$delta] = ['#markup' => $ctw];
    }
    return $element;
  }
}