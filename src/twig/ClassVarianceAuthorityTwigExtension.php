<?php

namespace wrux\cva\twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use wrux\cva\ClassNames;
use wrux\cva\ClassVarianceAuthorityGenerator;

class ClassVarianceAuthorityTwigExtension extends AbstractExtension
{
  public function getFunctions(): array
  {
    return [
      new TwigFunction("cx", [ClassNames::class, "cx"]),
      new TwigFunction("cva", [$this, "cva"]),
    ];
  }

  public function cva($baseClassnames, $args): ClassVarianceAuthorityGenerator
  {
    $variants = $args["variants"];
    $defaultVariants = $args["defaultVariants"] ?? [];

    return new ClassVarianceAuthorityGenerator(
      $baseClassnames,
      $variants,
      $defaultVariants
    );
  }
}
