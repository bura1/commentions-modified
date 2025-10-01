<?php

namespace Kirschbaum\Commentions\Livewire;

use Illuminate\Database\Eloquent\Model;
use Kirschbaum\Commentions\Actions\SaveComment;
use Kirschbaum\Commentions\Config;
use Kirschbaum\Commentions\Livewire\Concerns\HasMentions;
use Kirschbaum\Commentions\Livewire\Concerns\HasPagination;
use Kirschbaum\Commentions\Livewire\Concerns\HasPolling;
use Kirschbaum\Commentions\Livewire\Concerns\HasSidebar;
use Livewire\Attributes\On;
use Livewire\Attributes\Renderless;
use Livewire\Component;

class CommentCreate extends Component
{
    use HasMentions;

    public string $commentBody = '';

    protected $rules = [
        'commentBody' => 'required|string',
    ];

    public function render()
    {
        return view('commentions::comment-create');
    }
}
