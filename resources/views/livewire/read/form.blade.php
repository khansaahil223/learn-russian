<div class="container columns-1 flex flex-col justify-center items-center pb-4">
    <div class="m-2 mt-5">Enter your text</div>
    <textarea class="w-11/12 h-28 m-2 mt-5" wire:model="inputText"></textarea>
    <button class="w-28 h-10 bg-slate-700 text-slate-100 rounded-2xl mt-4" wire:click="convert">Convert</button>
    @if ($outputWords)
        <div class="m-2 flex flex-wrap">
            @foreach($outputWords as $word)
                <div
                class="
                    w-28
                    h-10
                    bg-slate-700
                    text-slate-100
                    rounded-2xl m-4
                    text-center
                    cursor-cell
                    ">
                    {{ $word }}
                </div>
            @endforeach
        </div>
    @endif
</div>
