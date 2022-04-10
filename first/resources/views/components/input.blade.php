<div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
    <label for="{{$name}}">{{$lable}}:</label><br>
	<input type="{{$type}}" id="{{$name}}" name="{{$name}}" value="{{$edit ? $edit :  old($name)}}">
	<br>
	<span style="color:red;"> @error($name) {{$message}} @enderror </span>
</div>