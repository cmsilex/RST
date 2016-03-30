<?php

namespace Gregwar\RST\Directives;

use Gregwar\RST\Directive;


/**
 * Tell that this is a document, in the case of LaTeX for instance,
 * this will mark the current document as one of the master document that
 * should be compiled
 */
class Warning extends Directive
{
    public function getName()
    {
        return 'warning';
    }
}
