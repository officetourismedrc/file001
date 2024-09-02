@extends('Admin.index')
@section('sectionC')
    <div class="province_container">
        <div class="province__header">
            <h1 class="province__header-lists">
                Province sous division article
            </h1>
        </div>
        <div class="province__header">
            <ul class="province__header-lists">
                <li class="province__header-list">
                    <a class="province__header-link" href="{{route('sousdiv2art.create')}}">add new Article</a>
                </li>
            </ul>
        </div>
        <div class="province__main">
            {{-- <div class="province__main-top">
                 <form action="{{route('province.create')}}" method="GET"  class="province__add">
                    <button>Premier niveau decoupage</button>
                 </form>
            </div> --}}
            <div class="province__main-bottom">
                <div class="province__btm-container">
                    <table class="province__table">
                        <thead class="table-header">
                            <tr class="table-header-container">
                                <th  class="table-header-list">id</th>
                                <th class="table-header-list">name</th>
                                <th class="table-header-list">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($list))
                            @foreach ($list as $item)
                            <tr class="table-body-container">
                                <td class="table-body-cell">{{$item->id}}</td>
                               <td class="table-body-cell"><a href="{{route('deuxniveau.show',['deuxniveau'=>$item->id])}}">{{$item->name}}</a></td>
                                <td class="table-body-cell table-body-cell-action">
                                    <form action="{{route('deuxniveau.edit',['deuxniveau'=>$item->id])}}" method="get">
                                        @csrf
                                         <button>edit</button>
                                    </form>
                                    <form action="{{ route('deuxniveau.destroy',['deuxniveau'=>$item->id]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button>delete</button>
                                   </form>
                                   <form action="{{ route('deuxniveau.show',['deuxniveau'=>$item->id]) }}" method="get">
                                    @csrf
                                    <button>show</button>
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