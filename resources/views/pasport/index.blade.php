@extends('layouts.app')

@section('content')
@include('parties.flash-msg')
<!---<h3 class="titre"><i class="material-icons">attachment</i> Liste de Pasports :</h3>-->
<div class="container">
  <div class="row">
    <div class="col-md-10">
      <input type="text" name="full-text-search" id="full-text-search" placeholder="Search" class="form-control">
    </div>
    <div class="col-md-2">
      @csrf
  <button type="text" name="search" class="btn btn-success" id="search" href="{{url('/search')}}"> 
        Search   
      </button> 
    </div>
  </div>

<!--table-->
<table class="table table-sm" id="output">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom:</th>
      <th scope="col">Prenom:</th>
      <th scope="col">Num Pasport :</th>
      <th scope="col">Email :</th>
      <th scope="col">Actions :</th>
    </tr>
  </thead>
  <tbody>
    @foreach($ps as $p)
    <tr>
      <th scope="row">{{$p->id}}</th>
      <td>{{$p->nom}}</td>
      <td>{{$p->prenom}}</td>
      <td>{{$p->Num_Pasport}}</td>
       <td>{{$p->email}}</td>
        <td>  
          <form method="POST" action="">
            @csrf
            @method('DELETE')
          <button type="button" class="btn btn-primary ">
            <i class="far fa-eye"></i>
          </button>
          <a type="submit" class="btn btn-success" href="{{url('index/'.$p->id.'/edit')}}">
                <i class="fas fa-edit" ></i>
              </a>
          <button type="submit" class="btn btn-danger" href="{{url('index/'.$p->id.'/destory')}}">
              <i class="far fa-trash-alt"></i>
            </button>
          </form>
          </td>
    </tr>
    @endforeach
  </tbody>
</table>
<a type="submit" class="btn btn-secondary" href="{{url('/email')}}">Envoyer Email</a>
<a type="submit" class="btn btn-secondary" href="{{url('/emailTo')}}">Envoyer Email Pour To</a>
<a type="submit" class="btn btn-secondary float-right" href="{{url('/create')}}">+</a>
  </div>


<!--<script >
  $(document).ready(function(){
    /*$('#search').click(function(){
alert('hhhhhhh');
    });*/
    //load_data('');
    function load_data(full_text_search_query='')
    {
      var _token=$("input[name=_token]").val();
      $.ajax({
        url:"{{route('full-text-search.action')}}",
        method:"POST",
        data:{full_text_search_query:
          full_text_search_query,_token:_token},
          dataType:"json",
          success:function(data)
          {
            var output='';
            if(data.length>0)
            {
               for(var count=0;count<data.length;count++)
               {

                output +='<tr>';
                output +='<td>'+data[count].id+'</td>';
                output +='<td>'+data[count].nom+'</td>';
                output +='<td>'+data[count].prenom+'</td>';
                output +='<td>'+data[count].Num+'</td>';
                output +='<td>'+data[count].email+'</td>';
                 output +='</tr>';
               }
            }
            else
            {
               output +='<tr>';
                output +='<td colspan="6">No Data Found</td>'>;
                output +='</tr>';
            }
            $('tbody').html(output);
          }

      });
    }
    $('#search').click(function(){
      var full_text_search_query=$('#full-text-search').val();
      load_data(full_text_search_query);

    });
     
  });
    
</script>-->

@endsection