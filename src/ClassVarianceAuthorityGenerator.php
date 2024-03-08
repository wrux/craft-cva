<?php

namespace wrux\cva;

class ClassVarianceAuthorityGenerator
{
  public function __construct(
    private $baseClassnames = [],
    private $variants = [],
    private $defaultVariants = []
  ) {
  }

  public function generate(array $variants = []): string
  {
    $selectedVariants = [];
    foreach (array_keys($this->variants) as $type) {
      $check = $variants[$type] ?? ($this->defaultVariants[$type] ?? null);
      if ($check) {
        $selectedVariants[] = $this->variants[$type][$check];
      }
    }
    return ClassNames::cx($this->baseClassnames, $selectedVariants);
  }
}
