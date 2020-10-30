@extends('layouts.app')
@section('content')
 <!-- Page Content -->
 <div class="bg-secondary text-white"> 
    <br>
 <div class="container">
    <div class="row">
        <div class=" justify-content-center" style="width: 100%">
            <div class="card-home card bg-dark text-white">
                    <h4 class="card-header bg-dark text-white pl-5 ml-5" style="text-align : center">All Products
                    </h4>  
                <div class="card-body bg-dark text-white">
                    <div class="show-grid text-center row bg-secondary text-white" style="justify-content: center;display: flex;">
                        @foreach ($items as $item)
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
                                            <a href="{{route('products.show', ['id'=> $item->id])}}"  class="btn btn-secondary text-white" style="width: 100%;">Product Detail</a>
                                        </div>
                                        <div class="m-1">
                                            <a href="{{route('products.other_user', ['id'=> $item->user->id])}}"  class="btn btn-primary text-white" style="width: 100%;">Seller Other Products</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
</script>
@endsection 