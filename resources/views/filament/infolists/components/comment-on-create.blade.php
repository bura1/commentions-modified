<x-dynamic-component :component="$getEntryWrapperView()" :entry="$entry">
    <livewire:commentions::comment-create
        :mentionables="$getMentionables()"
    />
</x-dynamic-component>
