@extends('Admin.index')
@section('sectionC')

    <div class="province_container">
         <div class="province__header">
            <ul class="province__header-lists">
                <li class="province__header-list">
                    <a class="province__header-link" href="{{route('store.page.qr-code')}}">create site qr code</a>
                </li>

                <li class="province__header-list">
                    <a class="province__header-link" href="{{route('create.page.qr-code')}}">create random qr code</a>
                </li>

                <li class="province__header-list">
                    <a class="province__header-link" href="#">empty link</a>
                </li>
            </ul>
        </div> 
        <div class="province__main">
           {{-- <div class="province__main-top">
                 <form action="{{route('province.create')}}" method="GET"  class="province__add">
                    <button>Add new Province</button>
                 </form>
            </div>--}}
            <div class="province__main-bottom">
                <div class="province__btm-container">
                    
                    <div class="container_section">
    
    <div class="item_link-container">
        <div class="item-link__icon">
           <a href="{{route('index.page.qr-code-download')}}">telecharger</a>
        </div>
        <div class="item_link__desc">
           <img style='width:350px' src='{{$itemPath}}'  alt='site qr-code' />
        </div>
        <spam>officetourisme-rdc.com</spam>
    </div>
    </div>
    </div>
            </div>
            
            
            
            
            <div class="province__main-bottom">
                <div class="province__btm-container">
                    
                    <div class="container_section">
    @foreach($qrcodes as $item)
    <div class="item_link-container">
        <div class="item-link__icon">
           <a href="{{route('index.page.misc-qr-code-download',['id'=>$item->id])}}">telecharger!</a>
        </div>
        <div class="item_link__desc">
           <img style='width:350px' src='{{$item->path}}'  alt='site qr-code' />
        </div>
        <spam>{{$item->description}}</spam>
        <div>
           <form action="{{route('siteqrcodes.destroy',['siteqrcode'=>$item->id])}}" method='post' >
                @method('delete')
                @csrf
               <input type='hidden' value='{{$item->id}}' name='siteqr'/>
               <button>delete!</button>

           </form>
        </div>
    </div>
    @endforeach
    
    </div>
    </div>
            </div>
            
            
        </div>
    </div>



@endsection
