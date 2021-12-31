<?php

namespace Drupal\fasika_sport_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block with a simple text.
 *
 * @Block(
 *   id = "copy_right_info",
 *   admin_label = @Translation("Copyright Info block"),
 * )
 */
class CopyrightInfoBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#type' => 'markup',
      '#markup' => '&#169; ' . date("Y") . ' ' . $this->t('Fasika Sport'),
    ];
  }

}
