<div class="">
    @if(!empty($flash))
        <div class="p-12 bg-blue-100">{{$flash}}</div>
    @endif

    <div class="flex flex-col md:flex-row">
        <div class="w-full md:w-1/2">
            @foreach($tasks as $title => $group)
                <div
                    class="font-semibold mt-4 tracking-wide text-sm uppercase text-gray-600">{{ str_replace('_',' ',$title) }}</div>
                @foreach($group as $key=>$value)
                    @if(is_array($value))
                        <div
                            class="font-semibold mt-4 ml-8 tracking-wide text-sm uppercase text-gray-600">{{ str_replace('_',' ',$key) }}</div>
                        @foreach($value as $childKey=>$childValue)
                            @if(Str::endsWith($childKey,'_note'))
                                <div
                                    class="mt-1 ml-12 pl-3 tracking-wide text-sm text-gray-600">{!! $childValue !!}</div>
                            @else
                                <label class="ml-8 flex items-center mt-2">
                                    <input type="checkbox"
                                           wire:model.lazy="tasks.{{ $title }}.{{ $key }}.{{ $childKey }}"
                                           class="form-checkbox" @selected($tasks[$title][$key][$childKey],1)>
                                    <span class="ml-2">{{ str_replace('_',' ',$childKey) }}</span>
                                </label>
                            @endif
                        @endforeach
                    @else
                        @if(Str::endsWith($key,'_note'))
                            <div
                                class="mt-1 {{ ($key != 'title_note'? 'ml-4 pl-3': '') }} tracking-wide text-sm text-gray-600">{!! $value !!}</div>
                        @else
                            <label class="flex items-center mt-2">
                                <input type="checkbox" wire:model.lazy="tasks.{{ $title }}.{{ $key }}"
                                       class="form-checkbox" @selected($tasks[$title][$key],1)>
                                <span class="ml-2">{{ str_replace('_',' ',$key) }}</span>
                            </label>
                        @endif
                    @endif
                @endforeach
            @endforeach


        </div>
        <div class="w-full md:w-1/2 mt-4">
            <div class="md:fixed md:w-5/12">
                <div class="flex flex-col w-full md:ml-12">
                    <div class="font-semibold tracking-wide text-sm uppercase text-gray-600">Questions / Concerns</div>

                    <label class="block mt-2 w-full mx-auto">
                        <div class="form-label">I'd like to know ... @error('question')<br>{{ $message }}@enderror</div>
                        <textarea wire:model.lazy="question" name="question" id="question" autocomplete=""
                                  autocapitalize="off"
                                  rows="15"
                                  class="form-input block w-full @error('question') error @enderror"
                                  placeholder="how can I help you?">{{ $question }}</textarea>
                    </label>

                    <button wire:click.prevent="askMe" class="btn brand w-full mt-6">Ask Me Stuff!</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="p-12 bg-blue-100">{{$flash}}</div>