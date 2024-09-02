@extends('Admin.index')
@section('sectionC')
    <div class="province_container">
        <div class="province__header">
            <ul class="province__header-lists">
                <li class="province__header-list">
                    {{-- <a class="province__header-link" href="{{route('sousdiv2art.create')}}">add new Article</a> --}}
                    
                     <form action="{{route('sousdiv2art.create')}}" method="get">
                                     @csrf
                                     <input type="hidden" name="province" value="{{$list["province"]->id}}"/>  
                                     <input type="hidden" name="sousDivision" value="{{$list["sousDivision"]->id}}"/>   
                                     
                                     <button>create article</button>
                     </form>
                </li>
            </ul>
        </div>
        <div class="province__main">
             <div class="province__main-top" style='display:flex; column-gap:1.5rem;'>
                <h2>{{ $list['province']->name}} </h2><h2>{{ $list['sousDivision']->name}}</h2><h2>Article</h2>
            </div> 
            <div class="province__main-bottom">
                <div class="province__btm-container">
                    <table class="province__table">
                        <thead class="table-header">
                            <tr class="table-header-container">
                                <th  class="table-header-list">id</th>
                                <th class="table-header-list">Article title</th>
                                  <th  class="table-header-list">Priority</th>
                                  <th  class="table-header-list">Clicks</th>
                                  <th  class="table-header-list">On/Off</th>
                                <th class="table-header-list">action</th>
                                 <th class="table-header-list">Edit article content</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($list))
                            @foreach ($list['article'] as $item)
                            <tr class="table-body-container">
                                <td class="table-body-cell">{{$item->id}}</td>
                               <td class="table-body-cell"><a href="{{route('deuxniveau.show',['deuxniveau'=>$item->id])}}">{{$item->title}}</a></td>
                                <td class="table-body-cell">{{$item->priority}}</td>
                                 <td class="table-body-cell">{{$item->clicks}}</td>
                                  <td class="table-body-cell">{{$item->content_switcher}}</td>
                                <td class="table-body-cell table-body-cell-action">
                                    <form action="{{route('sousdiv2art.edit',['sousdiv2art'=>$item->id])}}" method="get">
                                        @csrf
                                         <button>edit</button>
                                    </form>
                                    <form action="{{ route('sousdiv2art.destroy',['sousdiv2art'=>$item->id]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button>delete</button>
                                   </form>
                                   <form action="{{ route('sousdiv2art.show',['sousdiv2art'=>$item->id]) }}" method="get">
                                    @csrf
                                    <button>show</button>
                               </form>
                                </td>
                                
                                 <td class="table-body-cell">
                                      <form action="" method="get">
                                        @csrf
                                        
                                        <button>Edit content</button>
                                   </form>
                                 </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                        <tfoot></tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>


    
@endsection