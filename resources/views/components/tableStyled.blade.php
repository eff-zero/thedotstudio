    <div class="card text-center {{ $classTable }}">
        <div class="card-header">
            {{ $inputSearch ?? '' }}
        </div>
        <div class="card-body px-0">
            <table class="table">
                {{ $thead }}
                {{ $tbody }}
            </table>
            {{-- {{ $tpaginate }} --}}
        </div>
    </div>
