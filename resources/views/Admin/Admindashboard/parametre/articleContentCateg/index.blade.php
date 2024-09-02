@extends('Admin.index')
@section('sectionC')
    <div class="province_container">
        {{-- <div class="province__header">
            <ul class="province__header-lists">
                <li class="province__header-list">
                    <a class="province__header-link" href="#">Articles</a>
                </li>

                <li class="province__header-list">
                    <a class="province__header-link" href="#">Brochures</a>
                </li>

                <li class="province__header-list">
                    <a class="province__header-link" href="#">Newsletter</a>
                </li>
            </ul>
        </div> --}}
        <div class="province__main">
            <div class="province__main-top">
                 <form action="{{route('ont_a_catmeta.create')}}" method="GET"  class="province__add">
                    <button>Add new Category</button>
                 </form>
            </div>
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
                            @foreach ($data as $item)
                            <tr class="table-body-container">
                                <td class="table-body-cell">{{$item->id}}</td>
                               <td class="table-body-cell">{{$item->name}}</td>
                                <td class="table-body-cell table-body-cell-action">
                                    <form action="{{route('ont_a_catmeta.edit',['ont_a_catmetum'=>$item->id])}}" method="get">
                                        @csrf
                                         <button>edit</button>
                                    </form>
                                    <form action="{{ route('ont_a_catmeta.destroy',['ont_a_catmetum'=>$item->id]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button>delete</button>
                                   </form>
                                   <form action="{{ route('ont_a_catmeta.show',['ont_a_catmetum'=>$item->id]) }}" method="get">
                                    @csrf
                                    <button>show</button>
                               </form>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                        <tfoot></tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>


    
@endsection