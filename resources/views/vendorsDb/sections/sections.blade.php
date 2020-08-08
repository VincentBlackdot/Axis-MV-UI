@include('layouts.header')
<div class="product-status mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Sections</h4>
                    <div class="add-product">
                        <a href="addproducts">Add</a>
                    </div>
                    
                    <table>
                        <br>
                        <tr>
                            <th>ID</th>
                            <br>
                            <th>Name</th>
                            <th>Status</th>
                        </tr> 
                        @foreach($sections as $section)
                        <tr>
                            <td>{{ $section->id }}</td>
                            <td>{{ $section->name }}</td>
                            <td>{{ $section->status }}</td>
                        </tr>
                            
                    @endforeach

                    </table>
                       
                            <td>
                                <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                            </td>
                        </tr>
                       
                       
                  
                     
                    </table>
                    <div class="custom-pagination">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            
              <!--custom chart end-->
              
             
      <!--main content end-->
@section('content')

    
    </section>


@endsection