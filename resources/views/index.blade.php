@extends('layout.main')
@section ('content')


<h2><center>To do list</center></h2>
  <a href="#"><button type="button" class="btn btn-primary right action_create">Create</button></a>
  <table class="table table-hover">
   
    <tbody>
    @foreach($data as $a) 

      <tr>
        <td>{{$a->name}}</td>
        <td>{{$a->ranking}}</td>
        <td class="action_td">
            <a href="#"><button type="button" class="btn btn-info">Edit</button></a>
            <a  href="{{route('index',$a->id)}}" ><button  type="button" class="btn btn-danger">Delete</button></a>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
  
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
@endsection


