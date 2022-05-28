<small class="text-danger" id="{{$name}}-error"></small>
@error("$name")
    <small class="text-danger {{$name}}-error" >{{$message}}</small>
@enderror
