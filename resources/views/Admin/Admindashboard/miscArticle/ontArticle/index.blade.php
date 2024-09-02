@extends('Admin.index')
@section('sectionC')
    <div class="province__main">
            <div class="province__main-top">
                 <form action="{{route('ontactuart.create')}}" method="GET"  class="province__add">
                    <button>Add new Article</button>
                 </form>
            </div>
        <div class="province__main-bottom">
            
              <div class="province__btm-container">
                  <div class="admin-botton_container">
                      @foreach ($data as $item)
                              <div class='admin-article-presentation'>
                                  <div class='admin-article-numerotation'>
                                      <span class='admin-article-number'>1</span>
                                  </div>
                                  <div class='admin-article-description'>
                                      <div class='admin-article-desc-content'>
                                          <div class'admin-article-icon'>
                                              <img  class='admin-article-icon-icon' src='' />
                                          </div>
                                          <div class='admin-article-content-content'>
                                              <div class=''>
                                                    <span>{{$item->title}}</span>
                                              </div>
                                              <div class=''>
                                                    <span>publish date</span>
                                                    <span>author</span>
                                                    <span>content switcher</span>
                                              </div>
                                          </div>
                                      </div>
                                      <div class='admin-article-control'>
                                          <form method='get' action=''>delete</form> 
                                          <form method='get' action=''>Edit</form> 
                                          <form method='get' action="{{route('ont_a_metadata.create')}}">
                                               @csrf
                                               <input type='hidden' name='articleId' value='{{$item->id}}' />
                                             <button>Edit content</button> 
                                          </form>
                                      </div>
                                      
                                  </div>
                                  
                              </div>
                      @endforeach
                      
                  </div>
                  
                  {{ $data->links() }}
              </div>
        </div>
        
        </div>
@endsection