<?php

namespace Kirschbaum\Commentions\Filament\Infolists\Components;

use Filament\Infolists\Components\Entry;
use Kirschbaum\Commentions\Filament\Concerns\HasMentionables;

class CommentEntryOnCreate extends Entry
{
    use HasMentionables;

    protected string $view = 'commentions::filament.infolists.components.comment-on-create';
}
