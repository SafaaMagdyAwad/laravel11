@extends('layout')
    
    @section('content')
      
    <h1>
        add note
    </h1> 
    <form method="POST" action="{{route('note.store')}}">
        @csrf
        <input name="user_id" value="1" hodden>
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">note</span>
            <textarea type="text" class="form-control" placeholder="note" aria-label="note" aria-describedby="addon-wrapping" name="note"></textarea>
        </div> 
        <button type="submit">add note</button> 
    </form>
    @endsection 
