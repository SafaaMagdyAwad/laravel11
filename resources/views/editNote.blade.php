@extends('layout')
    
    @section('content')
      
    <h1>
        update note
    </h1> 
    <form method="POST" action="{{route('note.update',$note)}}">
        @csrf
        @method('put')
        <input name="user_id" value="1" hidden>
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">note</span>
            <textarea type="text" class="form-control" placeholder="note" aria-label="note" aria-describedby="addon-wrapping" name="note" >{{$note->note}}</textarea>
        </div> 
        <button type="submit">update note</button> 
    </form>
    @endsection 
