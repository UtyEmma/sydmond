<script>
    function parseRepeaterData() {
        const value = $('.repeater').repeaterVal();
        const objectives = value.{{$name}}
                            .filter(objective => objective['text-input'])
                            .map(objective => objective['text-input'])
        $('#{{$name}}-input').val(JSON.stringify(objectives))
    }

    $(document).ready(function(){
        $('.repeater').repeater({
            show: function () {
                parseRepeaterData()
                $(this).slideDown();
            },
            hide: function(deleteElement){
                $(this).slideUp(deleteElement);
                parseRepeaterData()
            }
        });
    })
</script>

<div class="repeater">
    <div data-repeater-list="{{$name}}">
        @if (isset($value) && $value && count(json_decode($value)) > 0)
            @foreach (json_decode($value) as $item)
                <div data-repeater-item class="d-flex align-items-center my-2">
                    <input type="text" name="text-input" onblur="parseRepeaterData()" value="{{$item}}" class="flex-1 form-control mr-2" placeholder="{{$placeholder ?? ''}}" />
                    <div>
                        <button data-repeater-delete type="button" class="btn btn-danger btn-hover-dark h-auto btn-custom d-flex align-items-center justify-content-center py-2 px-2" >
                            <i class="mdi mdi-delete ml-0 fs-5"></i>
                        </button>
                    </div>
                </div>
            @endforeach
        @else
            <div data-repeater-item class="d-flex align-items-center my-2">
                <input type="text" name="text-input" onblur="parseRepeaterData()" class="flex-1 form-control mr-2" placeholder="{{$placeholder ?? ''}}" />
                <div>
                    <button data-repeater-delete type="button" class="btn btn-danger btn-hover-dark h-auto btn-custom d-flex align-items-center justify-content-center py-2 px-2" >
                        <i class="mdi mdi-delete ml-0 fs-5"></i>
                    </button>
                </div>
            </div>
        @endif
    </div>
    <button data-repeater-create type="button" class="w-auto mt-2 btn btn-primary btn-hover-dark btn-custom">Add</button>
    <input type="text" name="{{$name}}" id="{{$name}}-input" hidden>
</div>

