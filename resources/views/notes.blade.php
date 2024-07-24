@extends('layout')
    
    @section('content')
    <h1>
        notes
    </h1> 
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Note</th>
            <th scope="col">View</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          
            @foreach ($notes as $note)
                <tr>
                    <th scope="row">{{$note->id}}</th>
                    <td>{{$note->note}}</td>
                    <td><a href="{{route('note.show',$note)}}">view</a></td>
                    <td><a href="{{route('note.edit',$note)}}">Edit</a></td>
                    <td>
                        <form method="POST" action="{{route('note.destroy',$note)}}" >
                            @csrf
                            @method('delete')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
          {{$notes->links}}
          
        </tbody>
      </table>
@endsection