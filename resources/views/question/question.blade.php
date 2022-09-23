<!DOCTYPE html>
<html lang="en">

<head>

    
</head>

<body>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card px-5 py-5" >
                    <div class="form-data" >
                        <form action="{{route('answer.submit')}}" method="POST">
                            @csrf
                            @foreach ($questions as $key=> $question)
                                <input type="hidden" value="{{$question->id}}" name="questions[]">
                                <p>{{$question->question}}</p>
                                @if ($question->is_multiple == 0)
                                    @foreach ($question->option as $item)
                                        <input type="radio" id="{{$item->id}}" name="options[]" value="{{$item->id}}">
                                        <label for="{{$item->id}}">{{$item->option_name}}</label>
                                        <br>
                                    @endforeach
                                @else
                                    @foreach ($question->option as $item)
                                        <div class="form-check">
                                            <input name="options[]" class="form-check-input" type="checkbox" value="{{$item->id}}" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                {{$item->option_name}}
                                            </label>
                                        </div>
                                    @endforeach
                                @endif
                            @endforeach
                            <button type="submit"> submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
