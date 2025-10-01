@use('\Kirschbaum\Commentions\Config')

<div class="comm:flex comm:gap-4 comm:h-full">
    <div class="comm:flex-1 comm:space-y-2">
        @if (Config::resolveAuthenticatedUser()?->can('create', Config::getCommentModel()))
            <div wire:submit.prevent="save" x-cloak>
                {{-- tiptap editor --}}
                <div class="comm:relative tip-tap-container comm:mb-2" wire:ignore>
                    <div
                        x-data="editor(@js($commentBody), @js($this->mentions), 'comments')"
                    >
                        <div x-ref="element"></div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
