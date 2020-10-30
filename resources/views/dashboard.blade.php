@extends('layouts.app')
@section('content')
 <!-- Page Content -->
 <div class="bg-secondary text-white"> 
    <br>
 <div class="container">
    <div class="row">
        <div class=" justify-content-center" style="width: 100%">
            <div class="card-home card bg-dark text-white">
                <h4 class="card-header bg-dark text-white pl-5 ml-5" style="text-align : center">My Products
                    <a class="btn btn-primary profile-button float-right" href="{{route('product.create')}}">
                        <i style="font-size:20px" class=" mr-2 pt-1 fa">&#xf067;</i>Add Product</a>
                </h4>  
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card-body bg-dark text-white">
                    <div class="show-grid text-center row bg-secondary text-white" style="justify-content: center;display: flex;">
                        @if (count($items) > 0)
                            @foreach ($items as $item)
                            @if($item->is_bought == true )
                            <div class="col-lg-4 col-md-6 mb-4 d-flex">
                                    <br>
                                    <div class="card bg-dark text-white m-4">
                                        <div style="padding: 30px"><img class="card-img-top bg-dark text-white" src="/assets/sold.png" alt=""></div>
                                        <div class="card-body" style="flex: 1 1 1 !important;">
                                            <h4 class="card-title">
                                            <a href="#" style="font-weight: 700" class="text-white">{{ $item->name }}</a>
                                            </h4>
                                            <p style="font-style: italic">[{{ $item->category->name }}]</p>
                                            <p style="font-weight: 700">Rp{{ $item->price }}</p>
                                        </div>
                                        <div class="card-footer d-flex bg-dark text-white" style="justify-content: space-between; flex-direction: column">
                                            <div class="m-1">
                                                <a href="{{route('product.show', ['id'=> $item->id])}}"  class="btn btn-secondary text-white" style="width: 100%;">Product Detail</a>
                                            </div>
                                            <div class="m-1">
                                                <a href="{{route('product.update', ['id'=> $item->id])}}"  class="btn btn-warning text-white" style="width: 100%;">Edit Product</a>
                                            </div>
                                            <div class="m-1">
                                                <button data-toggle="modal" data-target="#myModal" class="btn-del btn btn-danger text-white" data-item-id="{{$item->id}}" style="width: 100%;"> Delete Product </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="col-lg-4 col-md-6 mb-4 d-flex">
                                    <br>
                                    <div class="card bg-dark text-white m-4">
                                        <div style="padding: 30px"><img class="card-img-top bg-dark text-white" src="{{asset('assets/'. $item->category->name.'.png')}}" alt=""></div>
                                        <div class="card-body" style="flex: 1 1 1 !important;">
                                            <h4 class="card-title">
                                            <a href="#" style="font-weight: 700" class="text-white">{{ $item->name }}</a>
                                            </h4>
                                            <p style="font-style: italic">[{{ $item->category->name }}]</p>
                                            <p style="font-weight: 700">Rp{{ $item->price }}</p>
                                        </div>
                                        <div class="card-footer d-flex bg-dark text-white" style="justify-content: space-between; flex-direction: column">
                                            <div class="m-1">
                                                <a href="{{route('product.show', ['id'=> $item->id])}}"  class="btn btn-secondary text-white" style="width: 100%;">Product Detail</a>
                                            </div>
                                            <div class="m-1">
                                                <a href="{{route('product.update', ['id'=> $item->id])}}"  class="btn btn-warning text-white" style="width: 100%;">Edit Product</a>
                                            </div>
                                            <div class="m-1">
                                                <button data-toggle="modal" data-target="#myModal" class="btn-del btn btn-danger text-white" data-item-id="{{$item->id}}" style="width: 100%;"> Delete Product </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        @else
                        <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-center" style="width: 100%; height:100%;min-height: 60vh;align-items:center">
                            <h1 style="font-size: 57px;font-style: italic">NO PRODUCT</h1>
                        </div>
                        @endif
                    </div>   
                    <div id="myModal" class="modal fade">
                        <div class="modal-dialog modal-confirm">
                            <div class="modal-content">
                                <div class="modal-header flex-column">
                                    <div class="icon-box">
                                        <i class="fa">&#xf00d;</i>
                                    </div>						
                                    <h4 class="modal-title w-100">Are you sure you?</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <p>Do you really want to delete this product? This process cannot be undone.</p>
                                </div>
                                <div class="modal-footer justify-content-center">
                                    <form action="{{route('product.delete')}}" method="post">
                                        @csrf
                                        {!! method_field('delete') !!}
                                        <input type="hidden" name="id" id="idDel">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($items->hasPages())
                        <div class="custom-pagination d-flex text-white mt-2" style="justify-content: center;">
                            {{ $items->links() }}
                        </div>
                    @endif
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', ()=>{
        const customPagination = document.querySelector('.custom-pagination');
        if (customPagination){
            const customNav = customPagination.querySelector('nav');
            customNav.className ='bg-secondary text-white mt-2';
            const pagination = customPagination.querySelector('.pagination');
            pagination.className += ' justify-content-center bg-dark mb-0';

            const pageItem = customPagination.querySelectorAll('.page-item');
            pageItem.forEach(page => {
                const pageLink = page.querySelector('.page-link');
                if (page.classList.contains('active')){                
                    pageLink.className += ' bg-secondary'
                    pageLink.style.borderColor = '#6c757d';
                }
                else pageLink.style.color = '#343a40';
            })
        }
    });

    const btnDelete  = document.querySelectorAll('.btn-del');
    btnDelete.forEach( btn => {
        btn.addEventListener('click', (e) =>{
            const itemID = e.currentTarget.getAttribute('data-item-id');
            document.querySelector('#idDel').value = itemID;
        })
    });

</script>
@endsection 