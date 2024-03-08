<?php

namespace wrux\cva;

use Craft;
use craft\base\Plugin;
use wrux\cva\twig\ClassVarianceAuthorityTwigExtension;

/**
 * Craft Class Variance Authority plugin.
 *
 * @method static ClassVarianceAuthority getInstance()
 * @author Callum Bonnyman <hello@wrux.com>
 * @copyright Callum Bonnyman
 * @license MIT
 */
class ClassVarianceAuthority extends Plugin
{
  public string $schemaVersion = "0.0.1";

  public static function config(): array
  {
    return [
      "components" => [],
    ];
  }

  public function init(): void
  {
    parent::init();

    Craft::$app->view->registerTwigExtension(
      new ClassVarianceAuthorityTwigExtension()
    );
  }
}
