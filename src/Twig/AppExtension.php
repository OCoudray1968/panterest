<?php

namespace App\Twig;

use Twig\TwigFunction;
use Twig\Extension\AbstractExtension;

class AppExtension extends AbstractExtension
{


      public function getFunctions(): array
    {
        return [
            new TwigFunction('pluralize', [$this, 'pluralize']),
        ];
    }

    public function pluralize(int $count, string $singular, ?string $plural = null): string
    {
        
        // $plural = $plural ?? $singular . 's'; (si le pluriel existe est n'est pas null on l'utilise sinon on utilise le singulier concatener avec s)
        

        $plural ??= $singular . 's';

        $result = $count === 1 ? $singular : $plural;    
        return "$count $result";
    }
}
