<script>
    function parseRepeaterData() {
        const value = $('.repeater').repeaterVal();
        const objectives = value['{{$name}}']
        // console.log(objectives[0]['text-input'])
                                // .filter(objective => objective['text-input'])
                                // .map(objective => objective['text-input'])

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
        <div data-repeater-item class="d-flex align-items-center my-2">
            <textarea type="text" name="{{$name}}" onkeyup="parseRepeaterData()" class="flex-1 form-control mr-2" placeholder="{{$placeholder ?? ''}}"></textarea>
            <div>
                <button data-repeater-delete type="button" class="btn btn-danger btn-hover-dark h-auto btn-custom d-flex align-items-center justify-content-center py-2 px-2" >
                    <i class="mdi mdi-delete ml-0 fs-5"></i>
                </button>
            </div>
        </div>
    </div>
    <button data-repeater-create type="button" class="w-auto mt-2 btn btn-primary btn-hover-dark btn-custom">Add</button>
    <input type="text" name="{{$name}}" id="{{$name}}-input" hidden>
</div>

